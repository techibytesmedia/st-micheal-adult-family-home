# Contributing to the St. Michaels Adult Family Home Website

Thank you for helping improve the St. Michaels Adult Family Home website. Contributions are accepted from authorized collaborators and should preserve the site's reliability, accessibility, privacy, and welcoming tone.

## Development Workflow

1. Clone or fork the repository using the access method provided by a maintainer.
2. Create a focused branch:

   ```bash
   git checkout -b feature/short-description
   ```

3. Install and configure the project as described in [README.md](README.md).
4. Make focused changes that follow the existing Laravel, Blade, and Tailwind conventions.
5. Format modified PHP files:

   ```bash
   vendor/bin/pint --dirty --format agent
   ```

6. Run the automated tests:

   ```bash
   php artisan test --compact
   ```

7. When frontend files change, verify the production build:

   ```bash
   npm run build
   ```

8. Submit a merge request or pull request with a clear title, summary, test results, and screenshots for visible interface changes.

## Contribution Guidelines

- Follow the existing project structure and naming conventions.
- Keep changes small and focused so they are easier to review.
- Write meaningful commit messages.
- Add or update Pest tests whenever behavior changes.
- Reuse existing Blade components before introducing new ones.
- Preserve responsive behavior, keyboard access, readable contrast, and dark-mode support.
- Use named Laravel routes when linking to application pages.
- Keep business information centralized in `config/site.php`.
- Never commit secrets, credentials, `.env` values, production data, or real contact inquiries.
- Do not add or upgrade dependencies without maintainer approval.
- Update public-facing copy carefully and verify business, care, and contact claims with the project owner.

## Areas Requiring Extra Care

- **Contact inquiries:** Preserve validation, database storage, email notification, rate limiting, and honeypot protection.
- **Privacy:** Never use real resident, family, or inquiry information in code, tests, screenshots, or discussions.
- **Business details:** Confirm changes to the address, phone number, email address, services, or availability before merging.
- **Search metadata:** Keep page titles, descriptions, structured data, and visible content accurate and consistent.
- **Photography:** Use only approved images and avoid exposing private or identifying resident information.

## Review Requirements

All contributions must pass automated tests and formatting checks and must be reviewed before merging. A maintainer may request changes for correctness, security, accessibility, privacy, or consistency.

## Questions

For development access, suggestions, or contribution questions, contact [dev@techibytesmedia.com](mailto:dev@techibytesmedia.com).

