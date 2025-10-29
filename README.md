# 🩺 EIS Ultra Theme  
> Part of the **EIS Ultra AI + ReimburseIQ™** ecosystem — engineered for speed, scalability, and SEO intelligence.

**EIS Ultra Theme** is a lightweight, SEO-optimized, and Core Web Vitals–compliant WordPress theme built for lightning-fast performance.  
It also includes a **standalone Replit preview mode** for local development and design without needing a WordPress instance.

[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![WordPress](https://img.shields.io/badge/WordPress-5.0+-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)
[![License](https://img.shields.io/badge/License-GPLv2-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![Version](https://img.shields.io/badge/Version-1.0.0-brightgreen)](#)
[![Performance](https://img.shields.io/badge/Lighthouse-95+-success?logo=lighthouse&logoColor=white)](https://pagespeed.web.dev/)

---

## ⚡ Overview

EIS Ultra Theme is a modular, performance-first WordPress theme built on PHP 8.2 and pure HTML5/CSS3.  
It’s designed for Google Core Web Vitals excellence, instant SEO indexing, and minimal dependency architecture for scalable deployment.

---

## 🧩 Key Features

| Feature | Description |
|:--|:--|
| ⚙️ **Modular Architecture** | Reusable template parts for header, footer, content, and sidebar |
| ⚡ **Performance-Driven** | LCP ≤ 2.5s · CLS ≤ 0.1 · FID ≤ 100ms |
| 🔍 **SEO + Schema Ready** | Auto-injected Schema.org, Open Graph & Twitter metadata |
| 📱 **Responsive & Accessible** | Mobile-first CSS, WCAG 2.1 AA compliance |
| 🧱 **Framework-Free** | No Bootstrap or jQuery — pure vanilla performance |
| 🔒 **Production Aligned** | WordPress standards compliant, CI/CD ready |
| 🧾 **Complete Templates** | All essential WordPress templates included |
| 🔢 **Unified Versioning** | `/VERSION` file auto-syncs across WordPress + Replit |
| 🧠 **Hybrid Support** | Works identically inside WP or standalone preview |

---

## 🪶 Built-In Standards

- **Performance Targets:**  
  ✅ LCP ≤ 2.0 s  ✅ CLS ≤ 0.1  ✅ INP ≤ 100 ms  
- **Page Weight:** ≤ 1 MB  
- **Version Sync:** via `includes/version-utils.php`  
- **Auto-Bump:** via `.github/workflows/version-bump.yml`  

---

## 📁 Project Structure

```bash
.
├── 📄 Root Files
│   ├── .replit                     # Replit config for PHP 8.2 local server
│   ├── .gitignore                  # Unified ignore rules (Replit + WordPress)
│   ├── VERSION                     # Global version file
│   ├── index.php                   # Local Replit preview launcher
│   ├── test-performance.php        # Local performance dashboard
│   │
│   ├── 📚 Documentation
│   │   ├── README.md               # Project overview (this file)
│   │   ├── QUICK_START.md          # Quick setup guide
│   │   └── replit.md               # Full technical documentation
│   │
│   └── 🧰 scripts/
│       └── bump_version.php        # CLI version bump + Git auto-commit helper
│
├── 🩺 eis-ultra/                   # Replit standalone theme environment
│   ├── assets/
│   │   ├── css/                    # Main + critical CSS
│   │   ├── js/                     # Theme JavaScript
│   │   └── images/
│   ├── components/                 # Modular PHP components (hero, FAQ, etc.)
│   ├── seo/                        # Meta, OG/Twitter, Schema.org helpers
│   ├── includes/                   # Shared utilities
│   │   └── version-utils.php       # Version handler for WP + Replit
│   ├── footer.php
│   ├── functions.php
│   ├── header.php
│   ├── index.php
│   ├── page.php
│   ├── single.php
│   └── style.css
│
└── 🪶 wp-content/
    └── themes/
        └── eis-ultra-theme/
            ├── 404.php
            ├── archive.php
            ├── comments.php
            ├── footer.php
            ├── functions.php
            ├── header.php
            ├── index.php
            ├── js/
            │   └── navigation.js
            ├── page.php
            ├── search.php
            ├── searchform.php
            ├── sidebar.php
            ├── single.php
            ├── style.css
            └── template-parts/
                ├── content-none.php
                ├── content-page.php
                ├── content.php
                ├── content-search.php
                └── content-single.php

```
---

## 📚 **Documentation Guide**

### ***🚀 QUICK_START.md***
Quick reference guide for getting started
  1. 🚀 Preview instructions and live demo access
  2. 📦 WordPress installation steps
  3. ✨ Feature highlights
  4. 🔧 Development workflow basics

### ***🌀 replit.md***
Complete technical documentation
  1. 🏗️ Detailed architecture and file descriptions
  2. 🎨 Customization & component system
  3. 📊 Performance optimization strategies
  4. 🛠️ WordPress integration guide
  5. 🔍 Troubleshooting + examples
    
---

## 🧪 Development Environment

**Platform:** Replit  
**Server:** PHP 8.2 Development Server

```bash
# Server runs automatically
php -S 0.0.0.0:8000 -t .
```

**Preview:** Access via the Replit webview

### Workflow
1. Click Run to start the PHP server
2. Edit files → refresh browser to see changes
3. Test via /test-performance.php
4. Use Chrome DevTools + Lighthouse for profiling

---

## 🧠 Performance Targets
| Metric                | Target  | Purpose                  |
| :-------------------- | :------ | :----------------------- |
| **LCP**               | ≤ 2.5s  | Largest Contentful Paint |
| **CLS**               | ≤ 0.1   | Cumulative Layout Shift  |
| **FID**               | ≤ 100ms | First Input Delay        |
| **Performance Score** | 95+     | Lighthouse               |
| **SEO Score**         | 100     | Search optimization      |


---

## 🌐 WordPress Integration

### Quick Installation
1. Copy /wp-content/themes/eis-ultra-theme/ into your WordPress installation
2. Navigate to **Appearance → Themes** in WordPress admin
3. Activate **EIS Ultra Theme**
4. Customize via **Appearance → Customize**

### Theme Features
- ✅ Post thumbnails (featured images)
- ✅ Custom menus (primary + footer)
- ✅ Widget areas (sidebar + footer)
- ✅ Translation ready
- ✅ Custom logo & background
- ✅ Editor styles
- ✅ SEO + Schema-ready

---

## 🧾 Version History

| Version | Date | Notes |
|---------|------|-------|
| **1.0.0** | Oct 29, 2025 | Initial release with unified hybrid support |

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
- Fork and enhance for your projects
- Add custom features or modify as needed
- Use for client builds or R&D
- Share your optimizations

---

## 💬 Support

- **Documentation:** 📘 Full Docs - `replit.md` for complete technical guide
- **Quick Start:** 🚀 Quick Start - `QUICK_START.md` for getting started
- **WordPress Docs:** 🧩 WordPress Handbook - [Theme Development Handbook](https://developer.wordpress.org/themes/)
- **Community:** 💬 Community - [WordPress Support Forums](https://wordpress.org/support/forums/)

---

## ⭐ Credits

Built with ❤️ for performance and simplicity.

**Author:** EIS Ultra Theme Development  
**Version:** 1.0.0  
**Last Updated:** October 29, 2025

*"Fast pages, happy users."* 🚀

---
**Build Info**  
• Version 1.0.0 • Environment Replit (PHP 8.2) • Status ✅ Production Ready  
• Repository [github.com/EISUltra/eis-ultra-theme](https://github.com/EISUltra/eis-ultra-theme)  
