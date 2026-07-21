# Security Policy

## Supported Versions

Security updates are applied to the latest version of the St. Michaels Adult Family Home website on the `main` branch. Older, unreleased, or independently modified builds are not supported.

## Reporting a Vulnerability

If you discover a security vulnerability, **do not disclose it publicly or open a public issue**.

Report it privately to [security@techibytesmedia.com](mailto:security@techibytesmedia.com) and include:

- A clear description of the vulnerability and its potential impact
- Steps to reproduce the issue or a proof of concept, when available
- The affected page, endpoint, component, or revision
- Any recommended mitigation you have identified

We will acknowledge the report as soon as practical, investigate it, and provide updates when appropriate. Please allow a reasonable remediation period before any public disclosure.

## Security Expectations

This website accepts and stores contact inquiries that may contain personal information. Contributions must therefore:

- Use HTTPS in deployed environments
- Validate all user input through Laravel Form Requests
- Escape user-provided output in Blade templates
- Authorize access to stored inquiries and administrative functionality
- Preserve rate limiting and spam protection on public forms
- Keep secrets, credentials, and `.env` files out of version control
- Avoid logging sensitive inquiry content unless operationally necessary
- Keep framework and frontend dependencies supported and up to date
- Include tests for changes affecting validation, data storage, email delivery, or access control

Thank you for helping protect the website and the families who contact St. Michaels Adult Family Home.

