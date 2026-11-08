<?php require __DIR__ . '/header.php'; ?>
    <section class="hero" id="home">
        <div class="hero-bg-slider">
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?auto=format&fit=crop&w=1920&q=80');"></div>
        </div>
        <div class="hero-overlay"></div>

        <div class="hero-container-inner">
            <div class="hero-content">
                <div class="hero-message-slider" id="heroMessageSlider">
                    <div class="hero-message active">
                        <h1>Digital <span>Innovation</span></h1>
                        <p>WHP Digital & Entertainment delivers innovative technology solutions for businesses, organisations and individuals, combining creativity and professional service to turn ideas into practical digital experiences.</p>
                    </div>
                    <div class="hero-message">
                        <h1>Connecting <span>Technology & Entertainment</span></h1>
                        <p>From software and e-learning platforms to event planning and entertainment support, we help organisations and communities connect, grow and create opportunities.</p>
                    </div>
                    <div class="hero-message">
                        <h1>Discover <span>Kwithu Events</span></h1>
                        <p>Our event technology platform aims to make it easier to discover, promote, register for and manage events, connecting organisers, entertainers, vendors and audiences.</p>
                    </div>
                </div>

                <div class="cta-group">
                    <a href="#portfolio" class="btn btn-primary">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="#cta" class="btn btn-secondary">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>Practical technology solutions and professional entertainment services</p>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-gamepad"></i></div>
                <h3><a class="whp-card-link" href="website-development.php">Website Design &amp; Development</a></h3>
                <p>Business, corporate, e-commerce, educational and institutional websites; custom web development, maintenance, hosting and domain registration.</p>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                <h3><a class="whp-card-link" href="software-development.php">Software & Systems Development</a></h3>
                <p>Custom business software, management information systems, school management systems, business automation, databases, APIs and system integrations.</p>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-vr-cardboard"></i></div>
                <h3><a class="whp-card-link" href="ai-solutions.php">Artificial Intelligence Solutions</a></h3>
                <p>AI-powered business tools, intelligent automation, AI integration into websites and business systems, productivity tools and digital innovations.</p>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-code"></i></div>
                <h3><a class="whp-card-link" href="elearning.php">Education &amp; E-Learning Technology</a></h3>
                <p>Educational websites, e-learning platforms, learning management systems (LMS), digital learning resources, online training and technology-driven education support.</p>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-film"></i></div>
                <h3><a class="whp-card-link" href="cloud-solutions.php">Cloud Computing & Hosting</a></h3>
                <p>Cloud applications, hosting and deployment, cloud storage, server administration, data backup and recovery, and cloud infrastructure management.</p>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3><a class="whp-card-link" href="branding-design.php">Technology & Creative Support</a></h3>
                <p>IT consulting and support, networking, cybersecurity, graphic design, digital branding, UI/UX, digital marketing and technology consultancy.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio">
        <div class="section-title">
            <h2>Technology & Entertainment</h2>
            <p>Explore our digital capabilities and entertainment services</p>
        </div>

        <div class="filter-container">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="tech">Technology</button>
            <button class="filter-btn" data-filter="ent">Entertainment</button>
        </div>

        <div class="grid-3" id="portfolioGrid">
            <div class="media-card" data-category="tech">
                <div class="media-thumb" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=600&q=80');">
                    <span class="media-tag">Digital Technology</span>
                </div>
                <div class="media-content">
                    <h4>Digital Business Solutions</h4>
                    <p>Websites, software, AI, learning platforms and cloud solutions designed to support digital transformation and efficient business operations.</p>
                </div>
            </div>

            <div class="media-card" data-category="ent">
                <div class="media-thumb" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?auto=format&fit=crop&w=600&q=80');">
                    <span class="media-tag">Event Technology</span>
                </div>
                <div class="media-content">
                    <h4>Kwithu Events</h4>
                    <p>Our event technology platform aims to support event discovery, listings, registration, bookings, ticketing, organiser management and promotion.</p>
                </div>
            </div>

            <div class="media-card" data-category="ent">
                <div class="media-thumb" style="background-image: url('https://images.unsplash.com/photo-1592478411213-6153e4ebc07d?auto=format&fit=crop&w=600&q=80');">
                    <span class="media-tag">Entertainment Services</span>
                </div>
                <div class="media-content">
                    <h4>Event Planning & Management</h4>
                    <p>Corporate events, conferences, music shows, festivals, private functions, awards, artist coordination, promotion and event support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="section-title">
            <h2>Who We Are</h2>
            <p>Technology, innovation and entertainment under one vision</p>
        </div>
        <div class="whp-story-list">
            <article class="card whp-story-card">
                <div class="whp-story-image">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="Digital technology development workspace with computer screens" loading="lazy" decoding="async">
                </div>
                <div class="whp-story-content">
                    <span class="whp-story-eyebrow">Digital</span>
                    <h3>WHP Digital</h3>
                    <p>WHP Digital &amp; Entertainment operates across Digital Technology and Entertainment. We provide reliable, scalable technology solutions to help individuals, businesses and organisations work more efficiently.</p>
                </div>
            </article>
            <article class="card whp-story-card">
                <div class="whp-story-image">
                    <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="Live entertainment event with lighting and an audience" loading="lazy" decoding="async">
                </div>
                <div class="whp-story-content">
                    <span class="whp-story-eyebrow">Entertainment</span>
                    <h3>WHP Entertainment</h3>
                    <p>We create, organise, promote and support entertainment experiences, including event planning, performer coordination, publicity, partnerships and service coordination, supported by Kwithu Events.</p>
                </div>
            </article>
            <article class="card whp-story-card">
                <div class="whp-story-image">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="Global network lights representing digital innovation and connectivity" loading="lazy" decoding="async">
                </div>
                <div class="whp-story-content">
                    <span class="whp-story-eyebrow">Our Future</span>
                    <h3>Our Vision</h3>
                    <p>To become a leading technology and entertainment company, recognised for driving digital innovation, transforming entertainment experiences and creating opportunities across Africa and beyond.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why-us">
        <div class="section-title">
            <h2>Why Choose Us</h2>
            <p>Our approach combines technology, creativity and professionalism</p>
        </div>

        <div class="whp-why-feature">
            <div class="whp-why-art">
                <img src="assets/img/why.png" alt="Africa digital connectivity illustration representing WHP’s technology and entertainment vision" loading="lazy" decoding="async">
            </div>

            <div class="whp-why-panel-wrap">
                <div class="whp-why-intro">
                    <h3>Connecting ideas.<br><span>Creating impact.</span></h3>
                    <p>We bring technology, innovation and entertainment together to make services practical, creative and valuable. Here's what makes working with WHP different:</p>
                </div>

                <ul class="whp-why-list">
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Quality Work</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We focus on quality technology solutions and well-coordinated entertainment experiences. Every project is built with care, tested properly, and delivered to a standard we're proud to put our name on.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Fast Delivery</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We aim to deliver practical solutions efficiently, without compromising service quality. Clear planning and realistic timelines mean you know what's happening and when to expect it.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Expert Team</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We combine technology, creative thinking and professional service delivery. Our team covers development, design, AI, cloud, events and coordination — so you get one team that understands the whole picture.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Client Focused</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We tailor our work to the needs of individuals, businesses and organisations. Instead of forcing a template, we listen first and build around what actually helps you.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Creative Ideas</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>Technology and entertainment working together to create opportunities. We bring fresh thinking to both digital products and live experiences, so the result feels distinctive rather than generic.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Reliable Support</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We support clients with IT consultancy, technical support and event coordination. When something needs attention, we're reachable and responsive — not gone after launch.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Results Driven</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>Our objective is to make technology accessible, practical and valuable. Success means your system works, your event runs smoothly, and you see real benefit from the work.</p>
                        </div>
                    </li>
                    <li class="whp-why-item">
                        <button class="whp-why-toggle" type="button" aria-expanded="false">
                            <span class="whp-why-label">Trusted Partner</span>
                            <span class="whp-why-icon" aria-hidden="true"></span>
                        </button>
                        <div class="whp-why-panel">
                            <p>We value collaboration with organisers, entertainers, businesses and communities. Long-term relationships matter to us more than one-off jobs, and we act accordingly.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section" id="cta">
        <div class="cta-banner">
            <h2>Ready to Create <span>Something Great?</span></h2>
            <p>Let us connect technology, creativity and entertainment to support your next digital solution or event.</p>
            <div class="cta-banner-buttons">
                <a href="signup.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Create Free Account</a>
                <a href="#subscribe" class="btn btn-secondary"><i class="fa-solid fa-envelope"></i> Get Newsletter Access</a>
            </div>
        </div>
    </section>

    <!-- ============ EXPANDED PROFESSIONAL FOOTER ============ -->
<?php require __DIR__ . '/footer.php'; ?>
