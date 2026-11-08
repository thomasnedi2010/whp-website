
        window.addEventListener('load', () => {
            const loader = document.getElementById('pageLoader');
            // brief artificial delay so the animation is visible (optional)
            loader.classList.add('loaded');
        });

        function handleCookieConsent(choice) {
            const banner = document.getElementById('cookieConsentBanner');
            banner.classList.add('hidden');
            localStorage.setItem('whp_cookie_consent', choice);
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (localStorage.getItem('whp_cookie_consent')) {
                document.getElementById('cookieConsentBanner').classList.add('hidden');
            }
        });

        (function initHeroSlider() {
            const bgSlides = document.querySelectorAll('.hero-slide');
            const messages = document.querySelectorAll('.hero-message');
            const totalSlides = bgSlides.length;
            let currentIndex = 0;
            let slideInterval = null;
            const INTERVAL_MS = 6500;

            function activateIndex(index) {
                bgSlides.forEach(slide => slide.classList.remove('active'));
                messages.forEach(msg => msg.classList.remove('active'));
                if (bgSlides[index]) bgSlides[index].classList.add('active');
                if (messages[index]) messages[index].classList.add('active');
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                activateIndex(currentIndex);
            }

            function startSlider() {
                if (slideInterval) clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, INTERVAL_MS);
            }

            const heroSection = document.querySelector('.hero');
            if (heroSection) {
                heroSection.addEventListener('mouseenter', () => { if (slideInterval) clearInterval(slideInterval); });
                heroSection.addEventListener('mouseleave', () => { startSlider(); });
            }

            if (totalSlides > 0) { activateIndex(0); startSlider(); }

            window.addEventListener('beforeunload', () => { if (slideInterval) clearInterval(slideInterval); });
        })();

        const mobileToggle = document.getElementById('mobileToggle');
        const closeDrawerBtn = document.getElementById('closeDrawerBtn');
        const navLinks = document.getElementById('navLinks');

        function openMenu() {
            navLinks.classList.add('active');
            document.body.classList.add('menu-open');
        }

        function closeMenu() {
            navLinks.classList.remove('active');
            document.body.classList.remove('menu-open');
        }

        // The Services label navigates to the service directory; the arrow expands the list.
        const servicesToggle = document.querySelector('.whp-services-toggle');
        const servicesItem = document.querySelector('.whp-nav-services');
        if (servicesToggle && servicesItem) {
            servicesToggle.addEventListener('click', (event) => {
                event.stopPropagation();
                const open = servicesItem.classList.toggle('open');
                servicesToggle.setAttribute('aria-expanded', String(open));
            });
            document.addEventListener('click', (event) => {
                if (!servicesItem.contains(event.target)) {
                    servicesItem.classList.remove('open');
                    servicesToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1024 && navLinks.classList.contains('active')) closeMenu();
        });
        mobileToggle.addEventListener('click', openMenu);
        closeDrawerBtn.addEventListener('click', closeMenu);

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => { closeMenu(); });
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 45) {
                document.body.classList.add('scrolled-down');
            } else {
                document.body.classList.remove('scrolled-down');
            }
        });

        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioCards = document.querySelectorAll('.media-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.dataset.filter;
                portfolioCards.forEach(card => {
                    card.style.display = (filter === 'all' || card.dataset.category === filter) ? 'block' : 'none';
                });
            });
        });

        function handleSubscribeSubmit(event) {
            event.preventDefault();
            const email = document.getElementById('subscribeEmail').value;
            // This site has no newsletter database. Open a clearly labeled subscription request instead.
            const subject = encodeURIComponent('WHP newsletter subscription request');
            const body = encodeURIComponent('Please add this address to your newsletter list: ' + email);
            window.location.href = 'mailto:info@whp-digital.com?subject=' + subject + '&body=' + body;
        }

        // Preserve PHP-page active header state while navigating; homepage
        // anchors continue to scroll normally without erasing navigation state.

        (function initWhyToggle() {
            document.querySelectorAll('.whp-why-toggle').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var item = btn.closest('.whp-why-item');
                    var open = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', open ? 'false' : 'true');
                    item.classList.toggle('open', !open);
                });
            });
        })();

        (function initWhpAccountPopup(){
          const overlay=document.getElementById('whpAuthOverlay');
          const frame=document.getElementById('whpAuthFrame');
          const close=document.getElementById('whpAuthClose');
          if(!overlay||!frame||!close)return;
          let priorFocus=null;
          function openForm(page){
            priorFocus=document.activeElement;
            overlay.querySelector('.whp-popup-shell').style.setProperty('--whp-dialog-height', (page==='reset-password.php'?'300px':'530px'));
            frame.src=page;
            overlay.hidden=false;
            document.body.classList.add('whp-auth-open');
            close.focus();
          }
          function closeForm(){
            overlay.hidden=true;
            document.body.classList.remove('whp-auth-open');
            frame.src='about:blank';
            if(priorFocus&&priorFocus.isConnected)priorFocus.focus();
          }
          document.querySelectorAll('a[href="login.php"],a[href="signup.php"]').forEach(a=>{
            a.addEventListener('click',e=>{e.preventDefault();openForm(a.getAttribute('href'));});
          });
          close.addEventListener('click',closeForm);
          overlay.addEventListener('click',e=>{if(e.target===overlay)closeForm();});
          document.addEventListener('keydown',e=>{
            if(overlay.hidden)return;
            if(e.key==='Escape'){e.preventDefault();closeForm();}
            if(e.key==='Tab'&&document.activeElement===close&&!e.shiftKey){e.preventDefault();frame.focus();}
          });
          window.addEventListener('message',e=>{
            if(e.origin!==window.location.origin||e.source!==frame.contentWindow)return;
            if(e.data?.whpAuth==='close')closeForm();
            if(e.data?.whpAuth==='go'&&['login.php','signup.php','reset-password.php'].includes(e.data.page)){frame.src=e.data.page;}
            if(e.data?.whpAuth==='height'&&Number.isFinite(e.data.height)){overlay.querySelector('.whp-popup-shell').style.setProperty('--whp-dialog-height',Math.max(180,Math.min(800,e.data.height))+'px');}
          });
        })();
    

// Cookie settings on cookies.php; no additional marketing cookies are set here.
document.querySelectorAll('[data-whp-cookie]').forEach(btn=>btn.addEventListener('click',()=>{const choice=btn.dataset.whpCookie;localStorage.setItem('whp_cookie_consent',choice);const s=document.getElementById('whpCookieResult');if(s)s.textContent='Preference saved on this browser.';const b=document.getElementById('cookieConsentBanner');if(b)b.classList.add('hidden');}));
