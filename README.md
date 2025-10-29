# EIS Ultra Theme

> Lightweight modular WordPress theme development workspace. Built with PHP + HTML + CSS for high-speed SEO-optimized web pages.

[![PHP Version](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![WordPress](https://img.shields.io/badge/WordPress-5.0+-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)
[![License](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)

## 🚀 Features

- **⚡ Ultra Lightweight** - Minimal CSS/JS footprint for blazing fast load times
- **📊 Core Web Vitals Optimized** - Built for perfect Google Lighthouse scores
- **🎯 SEO Ready** - Schema.org markup, Open Graph tags, semantic HTML5
- **📱 Mobile First** - Responsive design that works beautifully on all devices
- **♿ Accessible** - WCAG 2.1 Level AA compliant with ARIA labels
- **🔧 Modular** - Clean template parts system for easy customization
- **🎨 No Dependencies** - Pure PHP/HTML/CSS, no frameworks needed

## 📋 Quick Start

### Development Preview

This Replit workspace includes a built-in PHP development server:

1. Click **Run** to start the server
2. View the theme preview at the webview URL
3. Visit `/test-performance.php` for performance testing tools

### WordPress Installation

1. Copy the `wp-content/themes/eis-ultra-theme/` folder to your WordPress installation
2. Go to **Appearance → Themes** in WordPress admin
3. Activate **EIS Ultra Theme**
4. Customize via **Appearance → Customize**

## 📁 Project Structure

```
.
├── wp-content/themes/eis-ultra-theme/  # Main theme folder
│   ├── style.css                       # Theme stylesheet + metadata
│   ├── functions.php                   # Theme functions
│   ├── index.php                       # Main template
│   ├── header.php                      # Header template
│   ├── footer.php                      # Footer template
│   ├── sidebar.php                     # Sidebar template
│   ├── single.php                      # Single post template
│   ├── page.php                        # Page template
│   ├── archive.php                     # Archive template
│   ├── search.php                      # Search template
│   ├── 404.php                         # 404 error template
│   ├── comments.php                    # Comments template
│   ├── searchform.php                  # Search form
│   ├── js/
│   │   └── navigation.js               # Mobile menu toggle
│   └── template-parts/                 # Modular components
│       ├── content.php
│       ├── content-single.php
│       ├── content-page.php
│       ├── content-search.php
│       └── content-none.php
├── index.php                           # Demo preview page
├── test-performance.php                # Performance testing dashboard
└── replit.md                           # Complete documentation
```

## 🎨 Customization

### Change Colors

Edit CSS variables in `wp-content/themes/eis-ultra-theme/style.css`:

```css
:root {
  --color-primary: #2563eb;
  --color-secondary: #1e293b;
  --color-text: #334155;
  --color-background: #ffffff;
}
```

### Add Custom Templates

Create new template files following WordPress naming conventions:
- `single-{post-type}.php` - Custom post type template
- `page-{slug}.php` - Specific page template
- `category-{slug}.php` - Category archive template

### Modify Functions

Edit `functions.php` to customize theme behavior, add features, or register custom post types.

## 📊 Performance Testing

### Built-in Testing Dashboard

Visit `/test-performance.php` in your browser for:
- Core Web Vitals documentation
- Testing tool links
- Performance API examples
- Optimization checklist

### Recommended Tools

- **Google PageSpeed Insights** - [pagespeed.web.dev](https://pagespeed.web.dev/)
- **Lighthouse** (Chrome DevTools) - Press F12 → Lighthouse tab
- **WebPageTest** - [webpagetest.org](https://www.webpagetest.org/)
- **GTmetrix** - [gtmetrix.com](https://gtmetrix.com/)

### Performance Targets

| Metric | Target | Theme Optimization |
|--------|--------|-------------------|
| **LCP** | < 2.5s | Minimal CSS, optimized images |
| **FID** | < 100ms | Minimal JS, deferred loading |
| **CLS** | < 0.1 | Fixed dimensions, no layout shifts |
| **Performance Score** | 95+ | Lightweight, no dependencies |
| **SEO Score** | 100 | Semantic HTML, meta tags, schema |

## 🛠️ Technical Details

### Requirements

- **PHP:** 7.4 or higher (8.2+ recommended)
- **WordPress:** 5.0 or higher
- **Modern Browser:** Chrome, Firefox, Safari, Edge

### Theme Features

- ✅ Automatic feed links
- ✅ Title tag support
- ✅ Post thumbnails
- ✅ Custom image sizes
- ✅ Navigation menus (primary + footer)
- ✅ HTML5 markup
- ✅ Custom logo
- ✅ Custom background
- ✅ Responsive embeds
- ✅ Editor styles
- ✅ Widget areas (sidebar + footer)

### SEO Features

- ✅ Schema.org structured data (Article, WebSite)
- ✅ Open Graph meta tags
- ✅ Twitter Card support
- ✅ Semantic HTML5 elements
- ✅ Automatic meta descriptions
- ✅ Clean, crawlable markup
- ✅ Sitemap friendly

### Accessibility Features

- ✅ ARIA labels and roles
- ✅ Keyboard navigation support
- ✅ Screen reader text
- ✅ Focus indicators
- ✅ Skip to content link
- ✅ Reduced motion support
- ✅ Proper heading hierarchy

## 📚 Documentation

Complete documentation is available in `replit.md`, including:

- Detailed architecture overview
- File-by-file descriptions
- Customization guide
- WordPress integration instructions
- Performance optimization tips
- Troubleshooting guide

## 🔧 Development

### File Watching

The theme uses pure CSS and vanilla JS - no build process required. Simply edit files and refresh your browser.

### Testing Changes

1. Edit theme files in `wp-content/themes/eis-ultra-theme/`
2. Refresh browser to see changes
3. Use browser DevTools for debugging
4. Run Lighthouse audit for performance testing

### Adding New Features

The theme follows WordPress best practices:
- Use hooks and filters in `functions.php`
- Create template parts for reusable components
- Follow WordPress Coding Standards
- Test with WordPress Theme Check plugin

## 📝 License

This theme is licensed under the [GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).

## 🤝 Contributing

This is a starter theme designed for customization. Feel free to:
- Modify the code for your projects
- Add your own features
- Adapt the design to your needs
- Use it as a learning resource

## 📧 Support

For WordPress theme development help:
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [WordPress Support Forums](https://wordpress.org/support/forums/)
- [WordPress Stack Exchange](https://wordpress.stackexchange.com/)

## 🎯 Roadmap

Future enhancements you might consider:
- WooCommerce compatibility
- Gutenberg block patterns
- Custom Customizer options
- Additional page templates
- Widget-specific styling
- Dark mode support

---

**Version:** 1.0.0  
**Last Updated:** October 29, 2025  
**Author:** Your Name

Built with ❤️ for performance and simplicity.
