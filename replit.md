# 🧠 REPLIT.md  
> **Developer Manual – EIS Ultra Theme**  
Full technical documentation for Replit-based development and WordPress integration.

---

## ⚙️ Overview

The **EIS Ultra Theme** is a dual-environment WordPress theme and Replit-compatible development framework.  
It enables ultra-fast, modular, SEO-optimized website builds — with live preview capabilities even **outside of WordPress**.

The theme integrates:
- WordPress Template Hierarchy  
- Unified version synchronization via `/VERSION`  
- Standalone Replit runtime environment  
- CI/CD version automation (GitHub Actions)  

---

## 🧩 System Architecture

```
.
├── index.php                  # Replit preview entry point
├── eis-ultra/                 # Unified theme runtime (for Replit + WP)
│   ├── header.php / footer.php / functions.php
│   ├── includes/
│   │   └── version-utils.php   # Shared version utility (single source of truth)
│   ├── assets/
│   │   ├── css/ (main.css, critical.css)
│   │   ├── js/ (main.js, lazyload.js)
│   │   └── images/
│   ├── components/ (Hero, FAQ, Testimonials)
│   └── seo/ (meta-tags.php, og-twitter.php, schema-org.php)
│
├── wp-content/themes/eis-ultra-theme/   # WordPress theme mirror
│   ├── functions.php (unified)
│   ├── header.php / footer.php (auto-detect mode)
│   ├── template-parts/
│   └── full WP theme structure
│
├── scripts/
│   └── bump_version.php
├── VERSION
├── .replit
└── .github/workflows/version-bump.yml
```

### 🧱 Dual Environment Design

| Mode | Purpose | Key Files |
|------|----------|-----------|
| **Replit Mode** | Rapid local development & preview | `index.php`, `/eis-ultra/` |
| **WordPress Mode** | Full CMS deployment | `/wp-content/themes/eis-ultra-theme/` |
| **Shared Utilities** | Sync versioning, SEO, assets | `/eis-ultra/includes/version-utils.php` |

---

## 🧠 Core Concepts

### 1. **Hybrid Header & Footer**

Both `header.php` and `footer.php` detect the environment automatically:
```php
$is_wp = function_exists('language_attributes');
```
- If WordPress is loaded → full theme hooks (`wp_head()`, `wp_footer()`) are executed.
- If not → Replit fallback HTML is rendered with static references to `assets/css/main.css`.

### 2. **Version Synchronization**

All environments use `/VERSION` as a **single source of truth**.

**Path detection in `/eis-ultra/includes/version-utils.php`:**
```php
$paths = [
  __DIR__ . '/../../VERSION',     // Replit
  __DIR__ . '/../../../VERSION',  // WordPress
];
```

This ensures:
- `footer.php` shows the correct live version  
- `functions.php` enqueues assets with accurate cache-busting  
- GitHub Actions automatically bumps version numbers in all environments

---

## 🔄 GitHub Action: Version Bump

Workflow: `.github/workflows/version-bump.yml`

**Trigger:** On `push` to `main`  
**Action:** Runs `php scripts/bump_version.php patch`

**Effect:**
- Increments semantic version (`major.minor.patch`)
- Updates `/VERSION`
- Auto-commits and pushes the new version tag

Example output:
```
✅ Version bumped: 1.0.0 → 1.0.1
```

---

## ⚡ Development Workflow

### 🧰 Local Development (Replit)

#### `.replit`
```ini
modules = ["php-8.2", "python-3.11"]

[workflows]
runButton = "Project"

[[workflows.workflow]]
name = "Server"
author = "agent"
[[workflows.workflow.tasks]]
task = "shell.exec"
args = "php -S 0.0.0.0:8000 -t ."
waitForPort = 8000
```

#### Run Command
```bash
php -S 0.0.0.0:8000 -t .
```

#### Maintenance Alias
```bash
alias clean-project='rm -rf __pycache__ .cache .local node_modules .replit_history *.log *.tmp'
```

---

## 🧩 Component Architecture

| Component | File | Description |
|------------|------|--------------|
| **Hero** | `/components/hero.php` | Displays banner text and call-to-action |
| **FAQ Block** | `/components/faq-block.php` | Collapsible Q&A UI block |
| **Contact Form** | `/components/contact-form.php` | Minimal form for static preview |
| **Testimonials** | `/components/testimonial-carousel.php` | Rotating testimonials slider |
| **Breadcrumb** | `/components/breadcrumb.php` | Schema-compatible navigation trail |

---

## 🔍 SEO + Metadata System

### Automatic Meta Injection
Defined in:  
`/eis-ultra/seo/meta-tags.php`  
`/eis-ultra/seo/og-twitter.php`  
`/eis-ultra/seo/schema-org.php`

These are included dynamically via:
```php
<?php include "eis-ultra/seo/schema-org.php"; ?>
<?php include "eis-ultra/seo/meta-tags.php"; ?>
<?php include "eis-ultra/seo/og-twitter.php"; ?>
```

| Type | Injected Tags | Purpose |
|------|----------------|----------|
| **Meta** | `<meta name="description">` | Core SEO snippet |
| **Open Graph** | `og:title`, `og:image`, `og:url` | Facebook + LinkedIn previews |
| **Twitter Cards** | `twitter:card`, `twitter:image` | Twitter preview integration |
| **Schema.org JSON-LD** | Structured data for `Article` / `WebPage` | Google SERP rich results |

---

## 🧾 functions.php Breakdown

Key WordPress hooks:

| Hook | Purpose |
|------|----------|
| `after_setup_theme` | Initializes menus, logos, and post thumbnails |
| `wp_enqueue_scripts` | Loads styles and scripts with versioned cache-busting |
| `wp_head` | Adds SEO metadata |
| `wp_footer` | Injects schema.org JSON-LD + version info |
| `init` | Cleans up emojis, legacy meta, and unneeded scripts |
| `excerpt_length`, `excerpt_more` | Streamlined post excerpts |
| `widgets_init` | Registers sidebar and footer widget areas |

---

## 🧩 Version Display Logic

Footer display comes from:
```php
function eis_ultra_theme_display_version() {
    $version = eis_ultra_get_version();
    echo '<div class="theme-version">🩺 EIS Ultra Theme v' . esc_html($version) . '</div>';
}
add_action('wp_footer', 'eis_ultra_theme_display_version', 100);
```

Also renders in Replit mode (no WordPress dependency):
```php
echo '<div class="theme-version">🩺 EIS Ultra Theme v' . htmlspecialchars($theme_version) . '</div>';
```

---

## 🧮 Asset Handling

All assets are versioned dynamically using the same `$theme_version` from `version-utils.php`:

```php
wp_enqueue_style('eis-ultra-style', get_stylesheet_uri(), [], $theme_version);
wp_enqueue_script('eis-ultra-main-js', get_template_directory_uri() . '/assets/js/main.js', [], $theme_version, true);
```

This ensures browser cache invalidation on every release bump.

---

## 🧱 Build & Deployment Strategy

| Phase | Environment | Description |
|-------|--------------|--------------|
| **Phase 1** | Replit | Design, layout, and SEO structure |
| **Phase 2** | WordPress | Full theme integration and validation |
| **Phase 3** | GitHub Actions | Automated versioning and CI |
| **Phase 4** | Cloud / CDN | Deployment to production environment |

---

## 🧪 Testing & Optimization

### Local Testing Tools
- `/test-performance.php` for visual verification  
- Chrome Lighthouse (Core Web Vitals)  
- `error_log()` outputs in Replit console  

### Optimization Targets
| Metric | Target | Method |
|:--|:--|:--|
| **LCP** | ≤ 2.0s | Inline critical CSS |
| **CLS** | ≤ 0.1 | Avoid layout shifts |
| **INP** | ≤ 100ms | Lazyload non-critical JS |
| **Size** | ≤ 1MB | Minify & compress assets |

---

## 🧠 Dev Notes

- ✅ All PHP files are **namespace-safe** (no global pollution)  
- ✅ Supports PHP 8.2 strict types  
- ✅ Theme is **fully WordPress-compliant** and **preview-safe**  
- ✅ Local assets and CDN fallbacks supported  
- ✅ `version-utils.php` prevents drift between Replit + WordPress  

---

## 📦 Future Expansion

| Feature | Status |
|:--|:--|
| 🧠 AI-driven SEO Schema Assistant | Planned (Phase 2.5) |
| 🧾 Plugin auto-installer for ReimburseIQ™ | Planned |
| 🧩 Gutenberg block versions of core components | In Progress |
| 📊 Realtime Lighthouse telemetry sync | Planned |
| 🧰 NPM + Build pipeline integration | Optional for later CI/CD stage |

---

## 💬 Support & Contribution

| Resource | Link |
|-----------|------|
| Documentation | [`README.md`](./README.md) |
| Quick Start | [`QUICK_START.md`](./QUICK_START.md) |
| GitHub Repo | [github.com/EISUltra/eis-ultra-theme](https://github.com/EISUltra/eis-ultra-theme) |
| WordPress Docs | [developer.wordpress.org/themes](https://developer.wordpress.org/themes/) |
| Community Support | [wordpress.org/support/forums](https://wordpress.org/support/forums/) |

---

## 🧾 License

Licensed under **GPLv2 or later**  
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

**Author:** EIS Ultra Theme Development  
**Version:** 1.0.0  
**Last Updated:** October 29, 2025  

> *"Fast pages, happy users — everywhere they load."