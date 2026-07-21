# St. Michaels Adult Family Home Website

![License](https://img.shields.io/badge/license-Proprietary-blue)
![Framework](https://img.shields.io/badge/framework-Laravel%2013-red)
![Frontend](https://img.shields.io/badge/frontend-Tailwind%20CSS%204-38bdf8)
![Status](https://img.shields.io/badge/status-active-brightgreen)

**St. Michaels Adult Family Home** is the official website for a residential care home in Tacoma, Washington. It helps families learn about the home, understand the available care services, view real photos, find answers to common questions, and submit a private inquiry about care or availability.

This repository contains the Laravel application, Blade views, contact-inquiry workflow, and frontend assets that power the website.

> **Compassionate care in a safe, home-like environment.**

---

## Current Functionality

- Informational pages for the home, services, frequently asked questions, and contact details
- A photo-based tour featuring the home's actual living spaces
- Contact inquiries delivered directly to the business by email
- Server-side form validation, rate limiting, and honeypot spam protection
- Responsive, accessible interface with light and dark color schemes
- Local-business structured data and page-specific metadata for search engines
- Centralized business information for consistent contact details throughout the site

---

## Tech Stack

- **Backend:** PHP 8.3+ and Laravel 13
- **Frontend:** Blade, Tailwind CSS 4, and Vite 8
- **Email:** Laravel Mail with configurable SMTP delivery
- **Testing:** Pest 4 and PHPUnit 12
- **Code Style:** Laravel Pint

---

## Getting Started

### 1. Clone the repository

```bash
git clone git@gitlab.com:techibytesmedia/st-micheal-adult-family-home.git
cd st-micheal-adult-family-home
```

### 2. Install and configure the application

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
```

Configure the mail service, application URL, and business contact email in `.env` before running the application.

### 3. Start local development

Run the application services together:

```bash
composer run dev
```

Or run Laravel and Vite separately:

```bash
php artisan serve
npm run dev
```

---

## Quality Checks

Format modified PHP files:

```bash
vendor/bin/pint --dirty --format agent
```

Run the test suite:

```bash
php artisan test --compact
```

Build production frontend assets:

```bash
npm run build
```

---

## Contributing

Contributions are limited to authorized collaborators. Read [CONTRIBUTING.md](CONTRIBUTING.md) and [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md) before submitting a merge request or pull request.

For development access or repository questions, contact [dev@techibytesmedia.com](mailto:dev@techibytesmedia.com).

---

## Security

Do not disclose suspected vulnerabilities in a public issue. Follow the private reporting process in [SECURITY.md](SECURITY.md).

---

## Maintainer

Built and maintained by the **Techibytes Media Development Team**.

[techibytesmedia.com](https://techibytesmedia.com)

---

## License

This software and its source code are proprietary and confidential. Unauthorized use, reproduction, modification, or distribution is prohibited. See [LICENSE.md](LICENSE.md) for details.

© Techibytes Media LLC. All rights reserved.
