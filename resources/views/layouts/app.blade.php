<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCraft Solutions - Professional Software Development</title>
    <meta name="description" content="Transform your ideas into powerful digital solutions with our expert development team">

    <style>
        /* CSS Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #7c3aed;
            --primary-dark: #6d28d9;
            --secondary: #3b82f6;
            --accent: #06b6d4;
            --background: #ffffff;
            --surface: #f9fafb;
            --text: #111827;
            --text-muted: #6b7280;
            --border: #e5e7eb;
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 1.5rem;
            --spacing-lg: 2rem;
            --spacing-xl: 3rem;
            --spacing-2xl: 4rem;
            --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            --transition: all 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            color: var(--text);
            background: var(--background);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-md);
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            z-index: 1000;
            transition: var(--transition);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: var(--spacing-md);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            transition: var(--transition);
        }

        .logo:hover {
            color: var(--primary-dark);
        }

        .nav-menu {
            display: flex;
            gap: var(--spacing-lg);
            align-items: center;
        }

        .nav-link {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: var(--spacing-xs);
        }

        .hamburger {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--text);
            position: relative;
            transition: var(--transition);
        }

        .hamburger::before,
        .hamburger::after {
            content: "";
            position: absolute;
            width: 24px;
            height: 2px;
            background: var(--text);
            transition: var(--transition);
        }

        .hamburger::before {
            top: -8px;
        }

        .hamburger::after {
            top: 8px;
        }

        .mobile-menu-btn.active .hamburger {
            background: transparent;
        }

        .mobile-menu-btn.active .hamburger::before {
            transform: rotate(45deg);
            top: 0;
        }

        .mobile-menu-btn.active .hamburger::after {
            transform: rotate(-45deg);
            top: 0;
        }

        /* Hero Section */
        .hero {
            padding: 8rem var(--spacing-md) 4rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: var(--spacing-md);
            line-height: 1.2;
        }

        .hero-description {
            font-size: 1.25rem;
            margin-bottom: var(--spacing-xl);
            opacity: 0.95;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: var(--spacing-md);
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 0.875rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary);
        }

        .btn-full {
            width: 100%;
        }

        /* Section Styles */
        section {
            padding: var(--spacing-2xl) 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: var(--spacing-xl);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-md);
            color: var(--text);
        }

        .section-description {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Services Section */
        .services {
            background: var(--surface);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-lg);
        }

        .service-card {
            background: white;
            padding: var(--spacing-xl);
            border-radius: 12px;
            border: 1px solid var(--border);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-md);
            color: white;
        }

        .service-icon svg {
            width: 30px;
            height: 30px;
        }

        .service-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: var(--spacing-sm);
            color: var(--text);
        }

        .service-description {
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Projects Section */
        .projects {
            background: white;
        }

        .project-slider {
            position: relative;
            margin-bottom: var(--spacing-2xl);
            overflow: hidden;
            border-radius: 16px;
        }

        .slider-container {
            overflow: hidden;
            border-radius: 16px;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .project-slide {
            min-width: 100%;
            position: relative;
            aspect-ratio: 2 / 1;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: white;
            padding: var(--spacing-xl);
        }

        .project-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: var(--spacing-sm);
        }

        .project-description {
            font-size: 1.125rem;
            margin-bottom: var(--spacing-md);
            opacity: 0.9;
        }

        .project-tags {
            display: flex;
            gap: var(--spacing-sm);
            flex-wrap: wrap;
        }

        .project-tag {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.375rem 0.875rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            z-index: 10;
        }

        .slider-btn:hover {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .slider-btn svg {
            width: 24px;
            height: 24px;
            color: var(--primary);
        }

        .slider-btn-prev {
            left: var(--spacing-md);
        }

        .slider-btn-next {
            right: var(--spacing-md);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-md) 0;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--border);
            cursor: pointer;
            transition: var(--transition);
        }

        .slider-dot.active {
            background: var(--primary);
            width: 30px;
            border-radius: 5px;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-lg);
        }

        .project-card {
            background: var(--surface);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--border);
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .project-card-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .project-card-content {
            padding: var(--spacing-lg);
        }

        .project-card-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: var(--spacing-sm);
            color: var(--text);
        }

        .project-card-description {
            color: var(--text-muted);
            margin-bottom: var(--spacing-md);
            line-height: 1.6;
        }

        .project-card-tags {
            display: flex;
            gap: var(--spacing-xs);
            flex-wrap: wrap;
        }

        .project-card-tags .project-tag {
            background: var(--primary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 16px;
            font-size: 0.875rem;
        }

        /* Testimonials Section */
        .testimonials {
            background: var(--surface);
        }

        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }

        .testimonials-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .testimonial-card {
            min-width: 100%;
            background: white;
            padding: var(--spacing-xl);
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .testimonial-stars {
            color: #fbbf24;
            font-size: 1.5rem;
            margin-bottom: var(--spacing-md);
        }

        .testimonial-text {
            font-size: 1.125rem;
            line-height: 1.8;
            color: var(--text);
            margin-bottom: var(--spacing-lg);
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-name {
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.25rem;
        }

        .testimonial-role {
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        /* Contact Section */
        .contact {
            background: white;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: var(--spacing-2xl);
            margin-top: var(--spacing-xl);
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-lg);
        }

        .contact-card {
            padding: var(--spacing-lg);
            background: var(--surface);
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-md);
            color: white;
        }

        .contact-icon svg {
            width: 24px;
            height: 24px;
        }

        .contact-card-title {
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: var(--spacing-xs);
            color: var(--text);
        }

        .contact-card-text {
            color: var(--text-muted);
        }

        /* Contact Form */
        .contact-form {
            background: var(--surface);
            padding: var(--spacing-xl);
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .form-group {
            margin-bottom: var(--spacing-md);
        }

        .form-label {
            display: block;
            margin-bottom: var(--spacing-xs);
            font-weight: 600;
            color: var(--text);
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-family: var(--font-sans);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Footer */
        .footer {
            background: var(--text);
            color: white;
            padding: var(--spacing-2xl) 0 var(--spacing-md);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-xl);
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-md);
        }

        .footer-text {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            margin-bottom: var(--spacing-md);
        }

        .social-links {
            display: flex;
            gap: var(--spacing-md);
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--primary);
            transform: translateY(-2px);
        }

        .social-link svg {
            width: 20px;
            height: 20px;
        }

        .footer-heading {
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: var(--spacing-md);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: var(--spacing-sm);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: var(--spacing-md);
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .nav-menu {
                position: fixed;
                top: 73px;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: var(--spacing-lg);
                border-bottom: 1px solid var(--border);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: var(--transition);
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .slider-btn {
                width: 40px;
                height: 40px;
            }

            .slider-btn-prev {
                left: var(--spacing-sm);
            }

            .slider-btn-next {
                right: var(--spacing-sm);
            }
        }

        @media (max-width: 640px) {
            .hero {
                padding: 6rem var(--spacing-md) 3rem;
            }

            .hero-title {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .services-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-title {
                font-size: 1.5rem;
            }

            .project-overlay {
                padding: var(--spacing-md);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <a href="#" class="logo">DevCraft</a>

            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                <span class="hamburger"></span>
            </button>

            <div class="nav-menu" id="navMenu">
                <a href="#home" class="nav-link">Home</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#testimonials" class="nav-link">Testimonials</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Transform Your Ideas Into Powerful Digital Solutions</h1>
                <p class="hero-description">
                    We're a team of passionate developers crafting exceptional web and mobile applications
                    that drive business growth and innovation.
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Start Your Project</a>
                    <a href="#projects" class="btn btn-secondary">View Our Work</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    @include('front.service')
    <!-- Projects Section -->
    @include('front.project')

    <!-- Testimonials Section -->
   @include('front.Testimonial')
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-description">
                    Ready to start your project? Let's discuss how we can help
                </p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Office Location</h3>
                        <p class="contact-card-text">123 Tech Street, Silicon Valley, CA 94025</p>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Email Us</h3>
                        <p class="contact-card-text">hello@devcraft.com</p>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Call Us</h3>
                        <p class="contact-card-text">+1 (555) 123-4567</p>
                    </div>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-input" placeholder="Project inquiry" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Tell us about your project..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-title">DevCraft Solutions</h3>
                    <p class="footer-text">
                        Building exceptional digital experiences that drive business growth and innovation.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="GitHub">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-section">
                    <h4 class="footer-heading">Services</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Web Development</a></li>
                        <li><a href="#services">Mobile Apps</a></li>
                        <li><a href="#services">UI/UX Design</a></li>
                        <li><a href="#services">Cloud Solutions</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="footer-heading">Company</h4>
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#projects">Portfolio</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="footer-heading">Legal</h4>
                    <ul class="footer-links">
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms of Service</a></li>
                        <li><a href="#cookies">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 DevCraft Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const navMenu = document.getElementById("navMenu");

        mobileMenuBtn.addEventListener("click", () => {
            mobileMenuBtn.classList.toggle("active");
            navMenu.classList.toggle("active");
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenuBtn.classList.remove("active");
                navMenu.classList.remove("active");
            });
        });

        // Project Slider
        const sliderTrack = document.getElementById("sliderTrack");
        const sliderPrev = document.getElementById("sliderPrev");
        const sliderNext = document.getElementById("sliderNext");
        const sliderDotsContainer = document.getElementById("sliderDots");
        const slides = document.querySelectorAll(".project-slide");

        let currentSlide = 0;
        const totalSlides = slides.length;

        // Create dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement("div");
            dot.classList.add("slider-dot");
            if (i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => goToSlide(i));
            sliderDotsContainer.appendChild(dot);
        }

        const dots = document.querySelectorAll(".slider-dot");

        function updateSlider() {
            sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle("active", index === currentSlide);
            });
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        sliderNext.addEventListener("click", nextSlide);
        sliderPrev.addEventListener("click", prevSlide);

        // Auto-play slider
        let sliderInterval = setInterval(nextSlide, 5000);

        // Pause auto-play on hover
        const projectSlider = document.querySelector(".project-slider");
        projectSlider.addEventListener("mouseenter", () => {
            clearInterval(sliderInterval);
        });

        projectSlider.addEventListener("mouseleave", () => {
            sliderInterval = setInterval(nextSlide, 5000);
        });

        // Testimonials Slider
        const testimonialsTrack = document.getElementById("testimonialsTrack");
        const testimonialCards = document.querySelectorAll(".testimonial-card");
        let currentTestimonial = 0;
        const totalTestimonials = testimonialCards.length;

        function updateTestimonials() {
            testimonialsTrack.style.transform = `translateX(-${currentTestimonial * 100}%)`;
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
            updateTestimonials();
        }

        // Auto-rotate testimonials
        setInterval(nextTestimonial, 6000);

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            });
        });

        // Header scroll effect
        const header = document.querySelector(".header");
        let lastScroll = 0;

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 100) {
                header.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
            } else {
                header.style.boxShadow = "none";
            }
            lastScroll = currentScroll;
        });

        // Contact Form Handler
        const contactForm = document.getElementById("contactForm");

        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);

            // For Laravel integration, uncomment this:
            /*
            fetch('/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                alert('Message sent successfully!');
                contactForm.reset();
            })
            .catch(error => {
                alert('Error sending message. Please try again.');
                console.error('Error:', error);
            });
            */

            // For demo purposes
            alert("Thank you for your message! We will get back to you soon.");
            contactForm.reset();
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        // Observe all cards for animation
        document.querySelectorAll(".service-card, .project-card, .contact-card").forEach((card) => {
            card.style.opacity = "0";
            card.style.transform = "translateY(20px)";
            card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
            observer.observe(card);
        });
    </script>
</body>
</html>
