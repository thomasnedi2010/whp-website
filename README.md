# WHP Digital & Entertainment — Complete PHP website

## Deployment

Upload **all contents of this directory** to your PHP-enabled website document root (or `htdocs/whp-project/` in XAMPP). Keep the `assets/css`, `assets/js` and `assets/img` directories intact. Start Apache and visit `http://localhost/whp-project/`.

The site contains shared `header.php` and `footer.php`, complete page CSS (`assets/css/main.css`, `auth.css`, `login.css`, `signup.css`), JavaScript, images, 14 separate detailed service pages, Services directory, About, Portfolio, Why Us, Contact, Quote, Support, policy pages and account forms. All service links are visible on mobile and in the desktop Services dropdown.

## Important operational limits

- Login, registration, password recovery and Google/Facebook/GitHub sign-in are **UI-only**. Connect a real accounts database, session management and OAuth integrations before accepting credentials on a production deployment.
- Contact and Quote forms use `form-handler.php`, require working PHP mail transport and include CSRF and basic spam checks. Configure your hosting mail system and test delivery.
- The customer chat is an automated FAQ, not a staffed live chat. Newsletter uses an email subscription request; it does not store subscribers.
- Company social URLs are placeholders; replace them with actual WHP profiles.
- The legal/policy pages are drafts and require review prior to publishing.
- Hero imagery currently uses Unsplash-hosted images, so external connectivity is required for those backgrounds. Local branding and images are in `assets/img/`.

## Structure

- `index.php`: homepage and original slider / sections
- `header.php`, `footer.php`: shared layout / navigation / popup / chat
- `services.php`: service directory with links to all 14 service pages
- `about.php`, `portfolio.php`, `why-us.php`: corporate pages
- `contact.php`, `quote.php`, `form-handler.php`: enquiry and quotation workflow
- `login.php`, `signup.php`, `reset-password.php`: account interface pages
- `support.php`, `privacy.php`, `terms.php`, `cookies.php`: resources
- `page-helpers.php`: forms / shared page helpers
- `assets/css/`: full site stylesheet plus auth styles
- `assets/js/`: homepage, chatbot and auth behaviour
- `assets/img/`: original image assets

## Compatibility

PHP 8+ is recommended, with Apache and `mod_rewrite` for any host-specific routes. `index.php` and explicit `.php` navigation work without clean URL rewriting. Do not copy an unrelated PHP handler into `.htaccess`. Take a full backup before replacing an existing installation.


## Header fix (8 Nov 2026)
- `assets/css/navigation.css` isolates desktop and mobile header menus from the generic site styling.
- Services has a compact desktop dropdown and a separate mobile expand arrow; the main Services label opens `services.php`.
- CSS and JS include updated version parameters to force a fresh copy after deployment.
- Previous site pages and project assets remain unchanged.
- On existing installations replace all package files together; do not mix older `header.php` with new CSS.


## Services mega-menu update (2026-11-08)
Desktop Services now opens a wide two-column menu with all 14 service links, a View All Services link, and no internal scrollbar. Mobile retains the expandable Services submenu in the existing off-canvas navigation. The existing WHP dark-blue branding and remaining pages are unchanged. Replace the project files together, and hard-refresh the browser (Ctrl+Shift+R).


## Service card alignment fix (8 November 2026)

All fourteen service detail pages use shared `.whp-detail-layout` and `.whp-content-panel` classes. The original broad `section` styling supplied `margin: 0 auto`, which made shorter nested content panels shrink and center. This update adds scoped CSS to keep the What We Offer and Our Approach cards the same column width and aligned at their left edge, with the quote/explore sidebar aligned at the top. No content, forms, or page hierarchy is altered. Main CSS cache version was incremented.


## Mobile sidebar update (half-screen)
The mobile navigation drawer now opens from the right and occupies exactly 50% of viewport width, with full viewport height. Navigation, service submenu, close control, and existing functionality remain unchanged. Long menus may scroll vertically inside the half-width drawer to keep every link accessible. The rest of the page remains visible on the left. CSS reference uses a new cache version.

## Latest update: Full-width mobile menu

The mobile navigation drawer now occupies 100% of viewport width and height. The original links, submenu, colors and desktop navigation remain in place. Reload with Ctrl+Shift+R.


## Why Choose Us image correction (8 Nov 2026)
The homepage now displays the entire original `assets/img/why.png` without cropping, retaining the Africa-image-left / content-right section, all eight expandable reasons, and the original dark branding. The dedicated Why Us page now uses the same picture. All other PHP/CSS/JS/assets from the previous full website package are retained.
