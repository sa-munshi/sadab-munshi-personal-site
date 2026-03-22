<?php
/**
 * HELPER FUNCTIONS
 * AI: Don't modify unless adding new features
 */

// Load config
$config = require __DIR__ . '/config.php';

/**
 * Get config value
 * Usage: config('site_name') or config('social.twitter')
 */
function config($key, $default = null) {
    global $config;
    $keys = explode('.', $key);
    $value = $config;
    
    foreach ($keys as $k) {
        if (!isset($value[$k])) return $default;
        $value = $value[$k];
    }
    
    return $value;
}

/**
 * Get current page URL path
 */
function current_path() {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

/**
 * Check if current page matches URL
 * Usage: is_active('/about/') 
 */
function is_active($url) {
    $current = current_path();
    // Handle trailing slashes
    $current = rtrim($current, '/');
    $url = rtrim($url, '/');
    
    if ($url === '') $url = '/';
    if ($current === '') $current = '/';
    
    return $current === $url || strpos($current, $url) === 0 && $url !== '/';
}

/**
 * Generate page title
 */
function page_title($page_title = '') {
    if (empty($page_title)) {
        return config('site_name') . ' — ' . config('site_tagline');
    }
    return $page_title . ' — ' . config('site_name');
}

/**
 * Get full URL
 */
function url($path = '') {
    $base = rtrim(config('site_url'), '/');
    $path = ltrim($path, '/');
    return $base . '/' . $path;
}

/**
 * Get asset URL
 */
function asset($path) {
    return url('assets/' . ltrim($path, '/'));
}

/**
 * Format date nicely
 */
function format_date($date, $format = 'M j, Y') {
    return date($format, strtotime($date));
}

/**
 * Calculate reading time
 */
function reading_time($content) {
    $words = str_word_count(strip_tags($content));
    $minutes = ceil($words / 200);
    return $minutes . ' min read';
}

/**
 * Escape HTML output (security)
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Include partial template
 */
function partial($name, $data = []) {
    extract($data);
    $file = __DIR__ . '/includes/' . $name . '.php';
    if (file_exists($file)) {
        include $file;
    }
}

/**
 * Render a page
 * @param string $page_name Name of the page file (without .php)
 * @param array $data Data to pass to the page
 * @param bool $is_404 Whether this is a 404 error page
 */
function render_page($page_name, $data = [], $is_404 = false) {
    extract($data);
    $page_file = __DIR__ . '/pages/' . $page_name . '.php';
    
    if (!file_exists($page_file)) {
        // 404 page
        $is_404 = true;
        $page_file = __DIR__ . '/pages/404.php';
    }
    
    // Set 404 status if needed
    if ($is_404) {
        http_response_code(404);
    }
    
    // Start output buffering for content
    ob_start();
    include $page_file;
    $content = ob_get_clean();
    
    // Now render with layout
    include __DIR__ . '/layout.php';
}
