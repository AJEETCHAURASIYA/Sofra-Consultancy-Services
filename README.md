# Sofra-Consultancy-Services
A WordPress-based business website project for Sofra Consultancy Services. Built with custom themes, SEO integration, contact forms, and deployment-ready setup. Designed for quick 2-day development using free tools and plugins.

---

```markdown
#🌐 Sofra Consultancy Services - WordPress Website Project

This repository contains the source files and documentation for building a business website for **Sofra Consultancy Services** using **WordPress**. The goal of this project is to create a responsive, SEO-optimized, and feature-rich site using open-source tools.

---

## 📌 Project Overview

**Company:** Sofra Consultancy Services  
**Sector:** IT Consulting, Recruitment, Educational Technology  
**Website Type:** Business & Informational  
**Tech Stack:** WordPress, Elementor/Gutenberg, Yoast SEO, WPForms, XAMPP/WAMP  
**Developer:** Ajeet Chaurasiya  
**Start Date:** April 22, 2025

---

## 🚀 Features Implemented

- ✅ Responsive business theme
- ✅ Core pages: Home, About Us, Services, Blog, Contact Us
- ✅ Custom Post Type: Testimonials / Projects
- ✅ SEO integration using Yoast SEO
- ✅ Contact form integration (WPForms / Contact Form 7)
- ✅ Performance & security plugins (Smush, W3 Total Cache, Wordfence)
- ✅ Optional deployment to free hosting platforms (000WebHost, InfinityFree, Netlify)

---

## 📅 Project Tasks

### 🟩 Day 1: Basic Setup & Core Pages

#### Task 1: WordPress Installation
- Install WordPress via XAMPP/WAMP or use live hosting
- Choose and customize a free business-style theme
- Create pages: `Home`, `About Us`, `Services`, `Blog`, `Contact Us`

#### Task 2: Theme Customization
- Use custom CSS for design enhancements
- Create a child theme (optional)
- Implement custom header/footer
- Register a custom post type (`Projects` or `Testimonials`)

#### Task 3: Plugin Integration
- Configure **Yoast SEO** for basic SEO
- Build a custom landing page using **Elementor** or **Gutenberg**

---

### 🟦 Day 2: Intermediate Features & Deployment

#### Task 4: Forms & Database Handling
- Integrate **WPForms** or **Contact Form 7**
- (Optional) Store form data and view it via admin dashboard

#### Task 5: Security & Optimization
- Add **Wordfence Security** or **iThemes Security**
- Use **W3 Total Cache** and **Smush** for performance improvement

#### Task 6: Deployment (Bonus)
Deploy your site on one of the free hosting services:
- 000WebHost
- InfinityFree
- FreeHostia
- AwardSpace
- ByetHost
- Netlify (for headless)
- Vercel (for headless)

---

## 💡 Bonus Challenge: Fix Unwanted White Space

**Common Issues:**
- Extra padding/margin from themes
- Spacer blocks in Elementor/Gutenberg
- Empty `<div>` or `<p>` tags

**CSS Solution:**
```css
section {
  margin: 0 !important;
  padding: 0 !important;
}
.elementor-widget-spacer {
  display: none;
}
```

**PHP Solution:**
```php
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
```

**Resources:**
- [WPBeginner](https://www.wpbeginner.com/)
- [StackOverflow](https://stackoverflow.com/)

---

## 📦 Deliverables

- 🔹 5-page responsive WordPress website
- 🔹 SEO-friendly setup with Yoast
- 🔹 Functional contact form
- 🔹 Custom post type setup
- 🔹 Caching & security plugins configured
- 🔹 Deployed version (optional)

---

## 📧 Contact

**Developer:** Ajeet Chaurasiya  
**Email:** ajeetsofra@gmail.com  
**LinkedIn:** [Connect with me](https://www.linkedin.com/in/ajeet-chaurasiya/)  


---
