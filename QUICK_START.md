# 🚀 QUICK_START.md  
> Fast-track setup for the **EIS Ultra Theme** in Replit or WordPress

---

## 🧩 Overview

**EIS Ultra Theme** is a modular, high-performance WordPress theme built for speed, SEO, and scalability.  
This quick guide helps you get started instantly — whether you're running it in **Replit** for local development or deploying it into **WordPress** production.

---

## 🧰 Requirements

| Tool | Minimum | Recommended |
|------|----------|-------------|
| **PHP** | 7.4+ | 8.2 |
| **WordPress** | 5.0+ | Latest |
| **Browser** | Any modern browser | Chrome or Edge |
| **Server** | Apache / Nginx | Nginx + FastCGI PHP |
| **Platform (Dev)** | — | Replit (PHP 8.2 Module) |

---

## 🧪 Local Development (Replit)

### ✅ **Quick Start**

1. **Open the Replit project**
2. Click **Run** — your local server will start automatically.
3. Visit the **webview** pane or click **Open in new tab**.

```bash
# The Replit server command
php -S 0.0.0.0:8000 -t .
```

4. Modify files inside the `/eis-ultra/` directory.
5. Refresh the page to see your changes immediately.

---

## 🧹 Maintenance Shortcuts

You can add this alias inside your Replit shell for instant cleanup:

```bash
alias clean-project='rm -rf __pycache__ .cache .local node_modules .replit_history *.log *.tmp'
```

**Usage:**

```bash
clean-project
```

This clears out cached data and temp files safely without touching your theme or Git repo.

---

## 🌐 WordPress Integration

### **Installation**

1. **Copy the folder:**
   ```
   /wp-content/themes/eis-ultra-theme/
   ```
   into your WordPress installation's `/wp-content/themes/`.
  
2. **In the WordPress admin dashboard:**
   - Go to **Appearance → Themes**
   - Click **Activate** on EIS Ultra Theme

3. **Customize** via **Appearance → Customize**.

---

## ✨ Theme Highlights

- ✅ **Post Thumbnails**
- ✅ **Primary & Footer Menus**
- ✅ **Sidebar + Footer Widgets**
- ✅ **Custom Logo & Backgrounds**
- ✅ **Schema.org + OG + Twitter Meta**
- ✅ **Mobile-First Responsive Layouts**

---

## 🔄 Version Management

### **Automated via GitHub Actions**

Each time you push changes, your workflow automatically bumps the version using:

```
.github/workflows/version-bump.yml
```

### **Manual Bump (CLI)**

You can also run it directly:

```bash
php scripts/bump_version.php patch
php scripts/bump_version.php minor
php scripts/bump_version.php major
```

This updates the global **VERSION** file and synchronizes version numbers in:
- `eis-ultra/style.css`
- `wp-content/themes/eis-ultra-theme/style.css`

---

## ⚙️ Directory Map (Quick Reference)

```
.
├── .replit
├── .gitignore
├── VERSION
├── index.php
├── test-performance.php
│
├── 📚 Documentation
│   ├── README.md
│   ├── QUICK_START.md
│   └── replit.md
│
├── 🧰 scripts/
│   └── bump_version.php
│
├── 🩺 eis-ultra/
│   ├── assets/
│   ├── components/
│   ├── seo/
│   ├── includes/version-utils.php
│   ├── header.php / footer.php / functions.php
│   └── style.css
│
└── 🪶 wp-content/themes/eis-ultra-theme/
    ├── full WordPress theme
    └── template-parts/
```

---

## 🧠 Performance Tuning

### **Test locally via:**

```
/test-performance.php
```

### **Then verify metrics using:**

- [Google PageSpeed Insights](https://pagespeed.web.dev/)
- [GTmetrix](https://gtmetrix.com/)
- [WebPageTest.org](https://www.webpagetest.org/)

### **Targets**

| Metric | Goal |
|--------|------|
| **LCP** | ≤ 2.0s |
| **CLS** | ≤ 0.1 |
| **INP** | ≤ 100ms |
| **Page Weight** | ≤ 1 MB |
| **Lighthouse Score** | ≥ 95 |

---

## 🧾 Deployment Checklist

| Task | Status |
|------|--------|
| **Replit version running clean** | ✅ |
| **VERSION file synced** | ✅ |
| **Theme validated on WordPress** | ✅ |
| **GitHub Action auto-bump working** | ✅ |
| **.replit workflow verified** | ✅ |

---

## 💬 Need Help?

- 📘 **Full documentation:** `replit.md`
- 💡 **WordPress docs:** [developer.wordpress.org/themes](https://developer.wordpress.org/themes)
- 💬 **Community:** [wordpress.org/support/forums](https://wordpress.org/support/forums)

---

## 🧾 License

**Licensed under GPLv2 or later**  
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

**Author:** EIS Ultra Theme Development  
**Version:** 1.0.0  
**Last Updated:** October 29, 2025

---

> *"Fast pages, happy users."* 🚀