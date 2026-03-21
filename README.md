# Sadab Munshi - Personal Website

A clean, minimal, fast personal portfolio and blog website built with PHP. No database required.

---

## 📁 File Structure

```
newup1/                          # Root directory (rename to your domain)
│
├── index.php                    # Main router - handles all URL routing
├── layout.php                   # Main layout template - wraps all pages
├── functions.php                # Helper functions used across site
├── config.php                   # Site configuration constants
│
├── .htaccess                    # Apache rewrite rules (enables clean URLs)
├── robots.txt                   # SEO: tells search engines what to crawl
├── sitemap.xml                  # SEO: site structure for search engines
├── humans.txt                   # Credits and site info for humans
├── manifest.json                # PWA manifest (for installable web app)
├── BingSiteAuth.xml             # Bing search verification
│
├── pages/                       # All page content goes here
│   ├── home.php                 # Homepage / landing page
│   ├── about.php                # About me page
│   ├── projects.php             # Projects showcase
│   ├── contact.php              # Contact form
│   ├── blog.php                 # Blog listing page
│   ├── now.php                  # Now page (what I'm doing currently)
│   ├── watching.php             # Movies/shows I'm watching
│   ├── colophon.php             # Site credits & tech stack
│   ├── 404.php                  # 404 error page
│   └── blog/                    # Individual blog posts
│       ├── why-i-started-building-things.php
│       ├── the-tools-i-use-daily.php
│       ├── notes-on-simplicity.php
│       ├── debugging-my-brain.php
│       ├── the-art-of-finishing.php
│       ├── learning-in-public.php
│       ├── slow-growth.php
│       └── what-i-think-about-ai.php
│
├── includes/                    # Reusable partial templates
│   ├── header.php               # Site header (nav, logo)
│   └── footer.php               # Site footer (links, copyright)
│
├── assets/                      # Static assets
│   ├── css/
│   │   ├── style.css            # Main stylesheet
│   │   └── variables.css        # CSS variables (colors, fonts)
│   ├── js/
│   │   └── main.js              # JavaScript functionality
│   ├── images/                  # All images
│   └── audio/                   # Audio files (if any)
│
└── resume/                      # Resume/CV folder
```

---

## 🚀 How It Works

### URL Routing (index.php)

All requests go through `index.php` thanks to `.htaccess` rewrite rules.

```php
// Example URL routing:
/           → pages/home.php
/about/     → pages/about.php
/blog/      → pages/blog.php
/blog/post/ → pages/blog/post.php
```

### Page Rendering Flow

1. **Request comes in** → `.htaccess` forwards to `index.php`
2. **Router parses URL** → determines which page to load
3. **Page executes** → sets variables like `$page_title`, `$page_description`
4. **Layout wraps content** → `layout.php` adds header, footer, meta tags
5. **HTML output** → complete page sent to browser

### Key Functions (functions.php)

| Function | Purpose |
|----------|---------|
| `render_page($name)` | Loads a page and wraps it in layout |
| `e($string)` | Escapes output for security (XSS prevention) |
| `current_path()` | Returns current URL path |
| `partial($name)` | Includes reusable template parts |

---

## 📝 Adding New Pages

### 1. Create the Page File

Create a new file in `pages/` folder:

```php
<?php
// pages/newpage.php
$page_title = 'Page Title — Sadab Munshi';
$page_description = 'Description for SEO';
?>
<div class="container page-content">
    <h1>Page Title</h1>
    <p>Your content here...</p>
</div>
```

### 2. Add Route (if needed)

If the page name matches the URL (e.g., `/newpage/` → `pages/newpage.php`), no route needed!

For custom URLs, add to `index.php`:

```php
case 'custom-url':
    render_page('newpage');
    break;
```

---

## 📝 Adding Blog Posts

1. Create file: `pages/blog/your-post-slug.php`
2. Use this template:

```php
<?php
$page_title = 'Post Title — Sadab Munshi';
$page_description = 'Brief description of post';
?>
<div class="container page-content">
    <article class="content">
        <h1>Post Title</h1>
        <p>Your content here...</p>
    </article>
</div>
```

3. Add to `pages/blog.php` posts array (optional, for listing)

---

## 🎨 Customization

### Colors & Fonts

Edit `assets/css/variables.css`:

```css
:root {
    --color-bg: #F7F5F2;        /* Background color */
    --color-text: #1C1C1C;      /* Text color */
    --color-accent: #9A8873;     /* Accent color (links, buttons) */
    --font-heading: 'Fraunces', Georgia, serif;
    --font-body: 'Inter', sans-serif;
}
```

### Site Info

Edit `config.php`:

```php
<?php
// Your site details
define('SITE_URL', 'https://www.sadabmunshi.online');
define('SITE_NAME', 'Sadab Munshi');
define('SITE_DESCRIPTION', 'I learn by building things...');
```

---

## 🌐 Deployment (InfinityFree)

### Step 1: Upload Files

1. Zip all files
2. Upload to `public_html/` via FTP or File Manager
3. Extract zip

### Step 2: Test

Visit your domain:
- `https://www.yourdomain.com/` (should show homepage)
- `https://www.yourdomain.com/about/` (should show about)

### Troubleshooting

| Issue | Solution |
|-------|----------|
| 404 errors | Check `.htaccess` is uploaded |
| CSS not loading | Check `assets/css/` folder exists |
| PHP errors | Check PHP version (need 7.4+) |

---

## 🔒 Security Notes

1. **XSS Protection**: Always use `e()` function when outputting user content
2. **No Database**: No SQL injection risk (no database used)
3. **File Uploads**: Not enabled by default (safe)
4. **PHP Info**: Don't expose `phpinfo()` on production

---

## 📱 SEO Features

- ✅ Semantic HTML5 structure
- ✅ Meta tags (Open Graph, Twitter Cards)
- ✅ Canonical URLs
- ✅ Sitemap.xml
- ✅ Robots.txt
- ✅ Structured data (JSON-LD)

---

## 🛠️ Tech Stack

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, Vanilla JS
- **No Framework**: Pure PHP for speed
- **No Database**: Flat file system
- **Hosting**: Any PHP-enabled hosting (tested on InfinityFree)

---

## 📄 License

Personal use only. Code is customized for Sadab Munshi's personal website.

---

## 🆘 Support

If something breaks:
1. Check file permissions (644 for PHP, 755 for folders)
2. Check `.htaccess` is present
3. Check error logs in hosting control panel
4. Verify PHP version (7.4 or higher)

---

**Last Updated**: February 2025  
**Author**: Sadab Munshi
