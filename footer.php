    <footer id="subscribe">
        <div class="footer-main">

            <!-- Brand + contact -->
            <div class="footer-brand">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="WHP Logo" class="footer-logo-img" onerror="this.style.display='none'; document.getElementById('logoFallbackFooter').style.display='inline-flex';">
                    <span id="logoFallbackFooter" style="display:none;" class="text-main"><i class="fa-solid fa-circle" style="color:var(--accent-blue)"></i> WHP</span>
                </a>
                <p>Connecting technology, creativity and entertainment through digital solutions and professional event services — built for Africa and beyond.</p>

                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@whp-digital.com">info@whp-digital.com</a>
                    </div>
                </div>

                <div class="social-icons-bar">
                    <a href="https://github.com" target="_blank" class="social-icon github" title="GitHub" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://x.com" target="_blank" class="social-icon x-twitter" title="X (Twitter)" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank" class="social-icon instagram" title="Instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com" target="_blank" class="social-icon facebook" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://youtube.com" target="_blank" class="social-icon youtube" title="YouTube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="social-icon linkedin" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Company -->
            <div class="footer-column">
                <h4>Company</h4>
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="why-us.php">Why Us</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="quote.php">Request a Quote</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li><a href="website-development.php">Website Development</a></li>
                    <li><a href="software-development.php">Software &amp; Systems</a></li>
                    <li><a href="ai-solutions.php">AI Solutions</a></li>
                    <li><a href="web-hosting.php">Web Hosting</a></li>
                    <li><a href="domain-registration.php">Domain Registration</a></li>
                    <li><a href="cloud-solutions.php">Cloud Computing</a></li>
                    <li><a href="elearning.php">E-Learning Platforms</a></li>
                    <li><a href="it-support.php">IT Consultancy</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="footer-column">
                <h4>Resources</h4>
                <ul>
                    <li><a href="portfolio.php">Capabilities &amp; Portfolio</a></li>
                    <li><a href="about.php">Our Vision</a></li>
                    <li><a href="support.php">Help &amp; Support</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                    <li><a href="cookies.php">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-column">
                <div class="subscribe-card">
                    <h4><i class="fa-solid fa-paper-plane" style="color:var(--accent-blue);"></i> Stay Updated</h4>
                    <p>Request WHP email updates on digital technology, innovation, entertainment and events.</p>
                    <form onsubmit="handleSubscribeSubmit(event)">
                        <div class="subscribe-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="subscribeEmail" class="subscribe-input" placeholder="Enter your email address" required>
                        </div>
                        <button type="submit" class="subscribe-btn-full">
                            <span>Request Updates</span>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trust strip -->
        <div class="footer-trust">
            <div class="footer-trust-item"><i class="fa-solid fa-shield-halved"></i> Secure &amp; Reliable</div>
            <div class="footer-trust-item"><i class="fa-solid fa-clock"></i> On-Time Delivery</div>
            <div class="footer-trust-item"><i class="fa-solid fa-users-gear"></i> Expert Team</div>
            <div class="footer-trust-item"><i class="fa-solid fa-globe"></i> Built for Africa</div>
            <div class="footer-trust-item"><i class="fa-solid fa-headset"></i> Ongoing Support</div>
        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <p>&copy; 2026 WHP Digital &amp; Entertainment. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy.php">Privacy</a>
                <a href="cookies.php">Cookies</a>
                <a href="terms.php">Terms</a>
                <a href="support.php">Support</a>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent -->
    <div id="cookieConsentBanner">
        <div class="cookie-content">
            <h4><i class="fa-solid fa-cookie-bite" style="color:var(--accent-blue);"></i> We Value Your Privacy</h4>
            <p>We use local storage to remember your cookie choice and essential PHP session cookies for form security. Read our Cookie Policy for details.</p>
        </div>
        <div class="cookie-actions">
            <button class="cookie-btn cookie-btn-decline" onclick="handleCookieConsent('decline')">Decline</button>
            <button class="cookie-btn cookie-btn-accept" onclick="handleCookieConsent('accept')">Accept All</button>
        </div>
    </div>

    <!-- Auth popup -->
    <div id="whpAuthOverlay" hidden>
      <div class="whp-popup-shell" role="dialog" aria-modal="true" aria-label="WHP account access">
        <button type="button" class="whp-popup-close" id="whpAuthClose" aria-label="Close account form"><i class="fa-solid fa-xmark" aria-hidden="true"></i></button>
        <iframe id="whpAuthFrame" title="WHP account login or registration" src="about:blank" loading="eager"></iframe>
      </div>
    </div>


    <!-- Customer-help chat: automated FAQ replies with email handoff (not live support) -->
    <aside class="whp-chat-window" id="whpChatWindow" aria-label="WHP customer help" hidden>
      <div class="whp-chat-header"><div><strong>WHP Customer Help</strong><small>Automated answers · Email for a person</small></div><button class="whp-chat-close" type="button" id="whpChatClose" aria-label="Close customer help">&times;</button></div>
      <div class="whp-chat-messages" id="whpChatMessages" role="log" aria-live="polite"></div>
      <div class="whp-chat-quick" aria-label="Common questions">
        <button type="button" data-whp-question="What services do you offer?">Services</button>
        <button type="button" data-whp-question="How can I request a quote?">Get a quote</button>
        <button type="button" data-whp-question="Tell me about Kwithu Events">Kwithu Events</button>
        <button type="button" data-whp-question="How can I contact your team?">Contact team</button>
      </div>
      <form class="whp-chat-form" id="whpChatForm"><input type="text" id="whpChatInput" aria-label="Your question" placeholder="Type your question..." maxlength="800" required><button type="submit" aria-label="Send message"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i></button></form>
    </aside>
    <div class="whp-floating-actions">
      <button type="button" class="whp-float-button" id="whpBackTop" title="Back to top" aria-label="Back to top"><i class="fa-solid fa-arrow-up" aria-hidden="true"></i></button>
      <button type="button" class="whp-float-button" id="whpChatToggle" aria-label="Open customer help" aria-expanded="false"><i class="fa-solid fa-comments" aria-hidden="true"></i></button>
    </div>

    <script src="assets/js/main.js?v=20261108b" defer></script>
    <script src="assets/js/customer-help.js" defer></script>
</body>
</html>