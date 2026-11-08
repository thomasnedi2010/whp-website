<?php
// Shared navigation helpers; keep page locations centralized.
$whp_current_page = basename(parse_url($_SERVER['SCRIPT_NAME'] ?? 'index.php', PHP_URL_PATH) ?: 'index.php');
$whp_services_pages = ['services.php','website-development.php','web-hosting.php','domain-registration.php','software-development.php','ai-solutions.php','elearning.php','cloud-solutions.php','it-support.php','cybersecurity.php','branding-design.php','digital-marketing.php','event-planning.php','kwithu-events.php','entertainment-management.php'];
function whp_nav_active(string $page): string {
    global $whp_current_page, $whp_services_pages;
    $active = $page === 'services.php' ? in_array($whp_current_page, $whp_services_pages, true) : $whp_current_page === $page;
    return $active ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($whp_page_title ?? "WHP | Digital & Entertainment", ENT_QUOTES, "UTF-8") ?></title>
    <meta name="description" content="<?= htmlspecialchars($whp_page_description ?? "WHP Digital & Entertainment — technology, innovation and entertainment solutions.", ENT_QUOTES, "UTF-8") ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- FontAwesome 6.5.1 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css?v=20261108e">
    <link rel="stylesheet" href="assets/css/navigation.css?v=20261108-fulldrawer">
</head>
<body>

    <!-- ============ PROFESSIONAL TECH LOADER ============ -->
    <div id="pageLoader">
        <div class="loader-stage">
            <div class="loader-line loader-line-1"></div>
            <div class="loader-line loader-line-2"></div>
            <div class="loader-line loader-line-3"></div>
            <div class="loader-core"></div>
        </div>
        <div class="loader-text">WHP <span>|</span> DIGITAL<span class="loader-dots"></span></div>
    </div>

    <!-- Main Fixed Header -->
    <header id="mainHeader">
        <div class="top-bar">
            <div class="top-bar-container">
                <div class="top-bar-left">
                    <a href="mailto:info@whp-digital.com" class="top-bar-item">
                        <i class="fa-solid fa-envelope" style="color:var(--accent-blue);"></i> info@whp-digital.com
                    </a>
                </div>
                <div class="top-bar-right">
                    <div class="top-bar-socials">
                        <a href="https://github.com" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                        <a href="https://x.com" target="_blank" title="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://youtube.com" target="_blank" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="top-bar-auth">
                        <a href="login.php" class="btn-auth-sm btn-login">Log In</a>
                        <a href="signup.php" class="btn-auth-sm btn-signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="WHP Logo" class="logo-img" onerror="this.style.display='none'; document.getElementById('logoFallbackNav').style.display='inline-flex';">
                <span id="logoFallbackNav" style="display:none;" class="text-main"><i class="fa-solid fa-circle" style="color:var(--accent-blue)"></i> WHP</span>
            </a>

            <ul class="nav-links" id="navLinks">
                <li class="mobile-drawer-header">
                    <a href="index.php" class="logo">
                        <img src="assets/img/logo.png" alt="WHP Logo" class="logo-img" onerror="this.style.display='none'; document.getElementById('logoFallbackDrawer').style.display='inline-flex';">
                        <span id="logoFallbackDrawer" style="display:none;" class="text-main"><i class="fa-solid fa-circle" style="color:var(--accent-blue)"></i> WHP</span>
                    </a>
                    <button class="close-drawer-btn" id="closeDrawerBtn" aria-label="Close Navigation Menu">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </li>

                <li><a href="index.php" class="<?= whp_nav_active('index.php') ?>">Home</a></li>
                <li class="whp-nav-services">
                    <div class="whp-service-trigger"><a href="services.php" class="<?= whp_nav_active('services.php') ?>">Services</a><button type="button" class="whp-services-toggle" aria-label="Show service links" aria-expanded="false" aria-controls="whpServicesDropdown"><i class="fa-solid fa-angle-down" aria-hidden="true"></i></button></div>
                    <div class="whp-nav-submenu" id="whpServicesDropdown" aria-label="Service pages">
                        <a href="services.php" class="whp-all-services"><i class="fa-solid fa-layer-group" aria-hidden="true"></i> View All Services <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                        <div class="whp-mega-grid">
                            <div class="whp-mega-column">
                                <span class="whp-mega-heading">WEB &amp; DIGITAL SOLUTIONS</span>
                                <a href="website-development.php"><i class="fa-solid fa-code" aria-hidden="true"></i> Website Development</a>
                                <a href="web-hosting.php"><i class="fa-solid fa-server" aria-hidden="true"></i> Website Hosting</a>
                                <a href="domain-registration.php"><i class="fa-solid fa-globe" aria-hidden="true"></i> Domain Registration</a>
                                <a href="software-development.php"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i> Custom Software &amp; Systems</a>
                                <a href="ai-solutions.php"><i class="fa-solid fa-robot" aria-hidden="true"></i> AI Solutions</a>
                                <a href="elearning.php"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i> E-Learning &amp; LMS</a>
                                <a href="cloud-solutions.php"><i class="fa-solid fa-cloud" aria-hidden="true"></i> Cloud Computing</a>
                            </div>
                            <div class="whp-mega-column">
                                <span class="whp-mega-heading">SUPPORT, BRANDING &amp; EVENTS</span>
                                <a href="it-support.php"><i class="fa-solid fa-headset" aria-hidden="true"></i> IT Support</a>
                                <a href="cybersecurity.php"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> Cybersecurity</a>
                                <a href="branding-design.php"><i class="fa-solid fa-palette" aria-hidden="true"></i> Branding &amp; UI/UX</a>
                                <a href="digital-marketing.php"><i class="fa-solid fa-bullhorn" aria-hidden="true"></i> Digital Marketing</a>
                                <a href="event-planning.php"><i class="fa-solid fa-calendar-check" aria-hidden="true"></i> Event Planning</a>
                                <a href="kwithu-events.php"><i class="fa-solid fa-ticket" aria-hidden="true"></i> Kwithu Events</a>
                                <a href="entertainment-management.php"><i class="fa-solid fa-music" aria-hidden="true"></i> Entertainment Support</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="<?= whp_nav_active('portfolio.php') ?>" href="portfolio.php">Portfolio</a></li>
                <li><a class="<?= whp_nav_active('about.php') ?>" href="about.php">About Us</a></li>
                <li><a class="<?= whp_nav_active('why-us.php') ?>" href="why-us.php">Why Us</a></li>
                <li><a class="<?= whp_nav_active('contact.php') ?>" href="contact.php">Contact Us</a></li>
                <li class="desktop-only-quote"><a href="quote.php" class="nav-btn-quote <?= whp_nav_active('quote.php') ?>">Get Quote</a></li>

                <li class="mobile-quote-container">
                    <a href="quote.php" class="mobile-quote-btn">Get Quote</a>
                </li>

                <li class="mobile-auth-container">
                    <a href="login.php" class="btn-auth-sm btn-login">Log In</a>
                    <a href="signup.php" class="btn-auth-sm btn-signup">Sign Up</a>
                </li>
            </ul>

            <button class="mobile-toggle" id="mobileToggle" aria-label="Open Navigation Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Hero -->
