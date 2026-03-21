<?php
/**
 * MAIN ROUTER
 * Handles all page requests
 */

require __DIR__ . '/functions.php';

// Get path
$path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$path = trim($path, '/');

// Route
switch ($path) {
    case '':
    case 'index':
    case 'home':
        render_page('home');
        break;
    case 'about':
        render_page('about');
        break;
    case 'projects':
        render_page('projects');
        break;
    case 'contact':
        render_page('contact');
        break;
    case 'blog':
        render_page('blog');
        break;
    case 'now':
        render_page('now');
        break;
    case 'watching':
        render_page('watching');
        break;
    case 'colophon':
        render_page('colophon');
        break;
    default:
        if (strpos($path, 'blog/') === 0) {
            $slug = substr($path, 5);
            $file = __DIR__ . '/pages/blog/' . $slug . '.php';
            if (file_exists($file)) {
                render_page('blog/' . $slug);
            } else {
                render_page('404', [], true);
            }
        } else {
            render_page('404', [], true);
        }
}
