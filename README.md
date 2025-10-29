# 🎨 EIS Ultra Theme v1.0.0  
**Lightweight · Modular · Blazing Fast**  
Modern WordPress theme workspace optimized for SEO, Core Web Vitals, and lightning-fast deployment.

[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![WordPress](https://img.shields.io/badge/WordPress-5.0+-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)
[![License](https://img.shields.io/badge/License-GPLv2-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![Version](https://img.shields.io/badge/Version-1.0.0-brightgreen)](#)
[![Performance](https://img.shields.io/badge/Lighthouse-95+-success?logo=lighthouse&logoColor=white)](https://pagespeed.web.dev/)

---

## ⚡ Overview

EIS Ultra Theme is a modular, performance-first WordPress theme built on PHP 8.2 and pure HTML5/CSS3.  
Designed for Google Core Web Vitals excellence, instant SEO indexing, and a minimal-dependency architecture for scalable deployment.

---

## 🧩 Key Features

| Feature | Description |
|:--|:--|
| ⚙️ **Modular Architecture** | Reusable template parts system for components (header, footer, content, sidebar) |
| ⚡ **Performance-Driven** | LCP ≤ 2.5s  ·  CLS ≤ 0.1  ·  FID ≤ 100ms |
| 🔍 **SEO + Schema Ready** | Auto-injected Schema.org, Open Graph & Twitter metadata |
| 📱 **Responsive & Accessible** | Mobile-first CSS, WCAG 2.1 AA compliance |
| 🧱 **Framework-Free** | No Bootstrap or jQuery — pure vanilla performance |
| 🔒 **Production Aligned** | WordPress standards compliant, ready for deployment |
| 🧾 **Complete Templates** | All essential WordPress templates included |

---

## 📁 Project Structure

```
.
├── 📄 Root Files
│   ├── .replit                     # Replit configuration
│   ├── .gitignore                  # Git ignore rules
│   ├── index.php                   # Local preview launcher
│   ├── test-performance.php        # Performance testing dashboard
│   │
│   ├── 📚 Documentation
│   │   ├── README.md               # Project overview (this file)
│   │   ├── QUICK_START.md          # Quick start guide & usage instructions
│   │   └── replit.md               # Complete developer documentation
│   │
│   └── wp-content/themes/eis-ultra-theme/    # WordPress Theme
│       ├── style.css               # Theme stylesheet + metadata
│       ├── functions.php           # Theme setup and hooks
│       ├── header.php              # Site header template
│       ├── footer.php              # Site footer template
│       ├── sidebar.php             # Sidebar widget area
│       ├── index.php               # Main blog/archive template
│       ├── single.php              # Single post template
│       ├── page.php                # Static page template
│       ├── archive.php             # Archive pages template
│       ├── search.php              # Search results template
│       ├── searchform.php          # Search form template
│       ├── comments.php            # Comments template
│       ├── 404.php                 # Error page template
│       │
│       ├── js/
│       │   └── navigation.js       # Mobile menu toggle
│       │
│       └── template-parts/         # Modular template components
│           ├── content.php         # Default post content
│           ├── content-single.php  # Single post content
│           ├── content-page.php    # Page content
│           ├── content-search.php  # Search result content
│           └── content-none.php    # No content found message
```

---

## 📚 Documentation Guide

### **QUICK_START.md**
*Quick reference guide for getting started*
- 🚀 Preview instructions and live demo access
- 📦 WordPress installation steps
- ✨ Feature highlights and what's included
- 🔧 Development workflow basics

### **replit.md**
*Complete technical documentation*
- 🏗️ Detailed architecture and file descriptions
- 🎨 Comprehensive customization guide
- 📊 Performance optimization strategies
- 🛠️ WordPress integration instructions
- 🔍 Troubleshooting and technical details
- 📝 Code examples and best practices

---

## 🧪 Development Environment

**Platform:** Replit  
**Server:** PHP 8.2 Development Server

```bash
# Server runs automatically
php -S 0.0.0.0:5000 -t .
```

**Preview:** Access via the Replit webview

### Workflow
1. Click **Run** to start the PHP server
2. Edit files → Changes appear on refresh
3. Test via `/test-performance.php`
4. Use Chrome DevTools for debugging

---

## 🧠 Performance Targets

| Metric | Target | Purpose |
|:--|:--|:--|
| **LCP** | ≤ 2.5s | Largest Contentful Paint |
| **CLS** | ≤ 0.1 | Cumulative Layout Shift |
| **FID** | ≤ 100ms | First Input Delay |
| **Performance Score** | 95+ | Lighthouse metric |
| **SEO Score** | 100 | Search optimization |

---

## 🌐 WordPress Integration

### Quick Installation
1. Copy `/wp-content/themes/eis-ultra-theme/` to your WordPress installation
2. Navigate to **Appearance → Themes** in WordPress admin
3. Activate **EIS Ultra Theme**
4. Customize via **Appearance → Customize**

### Theme Features
- ✅ Post thumbnails (featured images)
- ✅ Custom menus (primary + footer)
- ✅ Widget areas (sidebar + footer)
- ✅ Custom logo support
- ✅ Translation ready
- ✅ Editor styles

---

## 🧾 Version History

| Version | Date | Notes |
|---------|------|-------|
| **1.0.0** | Oct 29, 2025 | Initial release with complete WordPress theme structure |

---

## 🧰 Requirements

- **PHP:** 7.4+ (8.2 recommended)
- **WordPress:** 5.0+
- **Browser:** Chrome, Firefox, Safari, Edge (modern versions)
- **Server:** Apache or Nginx with PHP support

---

## 🔧 Testing Tools

### Built-in Performance Dashboard
Navigate to `/test-performance.php` for:
- Core Web Vitals documentation
- Performance testing tools
- Optimization checklist
- Browser API examples

### External Tools
- [Google PageSpeed Insights](https://pagespeed.web.dev/)
- [WebPageTest](https://www.webpagetest.org/)
- [GTmetrix](https://gtmetrix.com/)
- Chrome DevTools Lighthouse

---

## 📝 License

This theme is licensed under the **GNU General Public License v2 or later**.  
See [LICENSE](http://www.gnu.org/licenses/gpl-2.0.html) for details.

---

## 🤝 Contributing

This is an open-source starter theme designed for customization:
- Fork and modify for your projects
- Add custom features as needed
- Use as a learning resource
- Share improvements with the community

---

## 💬 Support

- **Documentation:** See `replit.md` for complete technical guide
- **Quick Start:** See `QUICK_START.md` for getting started
- **WordPress Docs:** [Theme Development Handbook](https://developer.wordpress.org/themes/)
- **Community:** [WordPress Support Forums](https://wordpress.org/support/forums/)

---

## ⭐ Credits

Built with ❤️ for performance and simplicity.

**Author:** EIS Ultra Theme Development  
**Version:** 1.0.0  
**Last Updated:** October 29, 2025

*"Fast pages, happy users."* 🚀

---