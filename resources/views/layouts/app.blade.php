<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squarespace - Créez un site web, une boutique en ligne ou un blog</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #fff;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
            text-decoration: none;
        }

        .nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav a {
            color: #1a1a1a;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        .nav a:hover {
            color: #666;
        }

        .btn-primary {
            background: #000;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #333;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5));
            z-index: -1;
        }

        .hero-content {
            max-width: 900px;
            padding: 2rem;
            color: #fff;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
        }

        .btn-white {
            background: #fff;
            color: #000;
        }

        .btn-white:hover {
            background: #f5f5f5;
        }

        .btn-outline {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Stats Section */
        .stats-section {
            padding: 5rem 2rem;
            background: #f8f8f8;
        }

        .stats-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #000;
        }

        .stat-item p {
            font-size: 1.1rem;
            color: #666;
        }

        /* Template Showcase */
        .template-showcase {
            padding: 5rem 2rem;
            background: #fff;
        }

        .showcase-header {
            max-width: 1200px;
            margin: 0 auto 3rem;
            text-align: center;
        }

        .showcase-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .showcase-header p {
            font-size: 1.1rem;
            color: #666;
        }

        .templates-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .template-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .template-card:hover {
            transform: translateY(-8px);
        }

        .template-card img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .template-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: #fff;
        }

        .template-badges {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .badge-pink {
            background: #ff6b9d;
            color: #fff;
        }

        .badge-blue {
            background: #4a90e2;
            color: #fff;
        }

        .badge-green {
            background: #7ed321;
            color: #fff;
        }

        .template-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        /* Business Types */
        .business-types {
            padding: 5rem 2rem;
            background: #f8f8f8;
        }

        .business-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .business-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }

        .business-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .business-btn {
            padding: 1.5rem;
            background: #fff;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
        }

        .business-btn:hover {
            border-color: #000;
            transform: translateY(-2px);
        }

        /* Services Section */
        .services-section {
            padding: 5rem 2rem;
            background: #fff;
        }

        .services-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .services-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            padding: 2rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .service-card:hover {
            border-color: #000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: #666;
            margin-bottom: 1rem;
        }

        .service-link {
            color: #000;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .service-link:hover {
            text-decoration: underline;
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: #fff;
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-column h4 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.75rem;
        }

        .footer-column a {
            color: #999;
            text-decoration: none;
            transition: color 0.2s;
            font-size: 0.95rem;
        }

        .footer-column a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: #fff;
        }

        .footer-legal {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .footer-legal a {
            color: #999;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .footer-legal a:hover {
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .stat-item h3 {
                font-size: 2.5rem;
            }

            .templates-grid,
            .business-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Modal/detail page styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 2000;
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-content {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 2rem;
            color: #fff;
            position: relative;
        }

        .modal-close {
            position: fixed;
            top: 2rem;
            right: 2rem;
            background: #fff;
            color: #000;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 2001;
        }

        .modal-close:hover {
            transform: rotate(90deg);
            background: #f0f0f0;
        }

        .modal-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .modal-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .modal-header p {
            font-size: 1.25rem;
            color: #ccc;
        }

        .modal-image {
            width: 100%;
            max-height: 600px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 3rem;
        }

        .modal-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .modal-feature {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .modal-feature h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .modal-feature p {
            color: #ccc;
            line-height: 1.8;
        }

        .modal-cta {
            text-align: center;
            margin-top: 3rem;
            padding: 3rem 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
        }

        .modal-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .modal-cta p {
            font-size: 1.1rem;
            color: #ccc;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
<!-- Header -->
<header class="header">
    <div class="header-content">
        <a href="#" class="logo">Squarespace</a>
        <nav class="nav">
            <a href="#templates">Modèles</a>
            <a href="#business">Entreprise</a>
            <a href="#services">Services</a>
            <a href="#resources">Ressources</a>
            <a href="#" class="btn-primary">Commencer</a>
        </nav>
        <button class="mobile-menu-btn">☰</button>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&h=1080&fit=crop" alt="Hero" class="hero-bg">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Créez votre présence en ligne</h1>
        <p>Tout ce dont vous avez besoin pour lancer votre site web, votre boutique en ligne ou votre blog</p>
        <div class="hero-buttons">
            <button class="btn-large btn-white">Commencer</button>
            <button class="btn-large btn-outline">Voir les modèles</button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="stats-grid">
        <div class="stat-item">
            <h3>14M+</h3>
            <p>Sites créés avec Squarespace</p>
        </div>
        <div class="stat-item">
            <h3>36B$</h3>
            <p>Générés par nos clients</p>
        </div>
        <div class="stat-item">
            <h3>200+</h3>
            <p>Pays dans le monde</p>
        </div>
    </div>
</section>

<!-- Template Showcase -->
<section class="template-showcase" id="templates">
    <div class="showcase-header">
        <h2>Des modèles conçus par des designers</h2>
        <p>Choisissez parmi plus de 200 modèles pour créer votre site unique</p>
    </div>
    <div class="templates-grid">
        <div class="template-card">
            <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=400&h=500&fit=crop" alt="Cafe Template">
            <div class="template-info">
                <div class="template-badges">
                    <span class="badge badge-pink">Restaurant</span>
                    <span class="badge badge-blue">Portfolio</span>
                    <span class="badge badge-green">Boutique</span>
                </div>
                <h3>The Plant Cafe</h3>
            </div>
        </div>
        <div class="template-card">
            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=400&h=500&fit=crop" alt="Architecture Template">
            <div class="template-info">
                <div class="template-badges">
                    <span class="badge badge-blue">Portfolio</span>
                </div>
                <h3>Architecture Studio</h3>
            </div>
        </div>
        <div class="template-card">
            <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=400&h=500&fit=crop" alt="Fashion Template">
            <div class="template-info">
                <div class="template-badges">
                    <span class="badge badge-pink">Mode</span>
                    <span class="badge badge-green">Boutique</span>
                </div>
                <h3>Fashion Store</h3>
            </div>
        </div>
    </div>
</section>

<!-- Business Types -->
<section class="business-types" id="business">
    <div class="business-content">
        <h2>Quel type d'entreprise avez-vous?</h2>
        <div class="business-grid">
            <button class="business-btn">Restaurant</button>
            <button class="business-btn">Portfolio</button>
            <button class="business-btn">E-commerce</button>
            <button class="business-btn">Blog</button>
            <button class="business-btn">Photographie</button>
            <button class="business-btn">Événements</button>
            <button class="business-btn">Immobilier</button>
            <button class="business-btn">Services</button>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="services-content">
        <h2>Tout ce dont vous avez besoin</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Design personnalisable</h3>
                <p>Des modèles élégants et flexibles pour créer votre site unique</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🛒</div>
                <h3>E-commerce intégré</h3>
                <p>Vendez vos produits en ligne avec une boutique complète</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile-first</h3>
                <p>Votre site s'adapte parfaitement à tous les écrans</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Analytics</h3>
                <p>Suivez les performances de votre site en temps réel</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Sécurité SSL</h3>
                <p>Certificat SSL gratuit pour protéger votre site</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
            <div class="service-card">
                <div class="service-icon">💬</div>
                <h3>Support 24/7</h3>
                <p>Une équipe d'experts disponible pour vous aider</p>
                <a href="#" class="service-link">En savoir plus →</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-grid">
            <div class="footer-column">
                <h4>Produits</h4>
                <ul>
                    <li><a href="#">Sites web</a></li>
                    <li><a href="#">Boutique</a></li>
                    <li><a href="#">Domaines</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Analytics</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Modèles</h4>
                <ul>
                    <li><a href="#">Tous les modèles</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Boutique</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Ressources</h4>
                <ul>
                    <li><a href="#">Centre d'aide</a></li>
                    <li><a href="#">Tutoriels</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Webinaires</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Entreprise</h4>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Carrières</a></li>
                    <li><a href="#">Presse</a></li>
                    <li><a href="#">Investisseurs</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Chat en direct</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Téléphone</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Réseaux sociaux</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-logo">Squarespace</div>
            <div class="footer-legal">
                <a href="#">© 2025 Squarespace</a>
                <a href="#">Confidentialité</a>
                <a href="#">Conditions</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal" id="detailModal"></div>

<script>
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    let lastScroll = 0;
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = 'none';
        }

        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('.nav');

    mobileMenuBtn.addEventListener('click', () => {
        nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
        if (nav.style.display === 'flex') {
            nav.style.position = 'absolute';
            nav.style.top = '100%';
            nav.style.left = '0';
            nav.style.right = '0';
            nav.style.flexDirection = 'column';
            nav.style.background = '#fff';
            nav.style.padding = '1rem';
            nav.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        }
    });

    // Template data
    const templateData = {
        'The Plant Cafe': {
            title: 'The Plant Cafe',
            subtitle: 'Un modèle élégant pour restaurants et cafés',
            image: 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1200&h=600&fit=crop',
            features: [
                {
                    icon: '🍽️',
                    title: 'Menu intégré',
                    description: 'Présentez vos plats avec des photos haute qualité et des descriptions détaillées. Mettez à jour facilement votre menu en temps réel.'
                },
                {
                    icon: '📅',
                    title: 'Réservations en ligne',
                    description: 'Permettez à vos clients de réserver une table directement depuis votre site. Gérez facilement vos réservations.'
                },
                {
                    icon: '🎨',
                    title: 'Design personnalisable',
                    description: 'Adaptez les couleurs, les polices et les mises en page pour refléter l\'identité unique de votre restaurant.'
                },
                {
                    icon: '📱',
                    title: 'Mobile-friendly',
                    description: 'Votre site s\'adapte parfaitement à tous les appareils, offrant une expérience optimale sur mobile et desktop.'
                }
            ]
        },
        'Architecture Studio': {
            title: 'Architecture Studio',
            subtitle: 'Parfait pour les portfolios créatifs',
            image: 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=1200&h=600&fit=crop',
            features: [
                {
                    icon: '🏗️',
                    title: 'Galerie de projets',
                    description: 'Présentez vos réalisations avec des images grand format et des descriptions détaillées de chaque projet.'
                },
                {
                    icon: '🎯',
                    title: 'Mise en page épurée',
                    description: 'Un design minimaliste qui met en valeur votre travail sans distractions inutiles.'
                },
                {
                    icon: '📐',
                    title: 'Grilles personnalisables',
                    description: 'Créez des mises en page uniques avec des grilles flexibles et des sections asymétriques.'
                },
                {
                    icon: '💼',
                    title: 'Présentation professionnelle',
                    description: 'Impressionnez vos clients avec un portfolio qui reflète votre expertise et votre créativité.'
                }
            ]
        },
        'Fashion Store': {
            title: 'Fashion Store',
            subtitle: 'E-commerce moderne pour la mode',
            image: 'https://images.unsplash.com/photo-1445205170230-053b83016050?w=1200&h=600&fit=crop',
            features: [
                {
                    icon: '👗',
                    title: 'Boutique en ligne',
                    description: 'Vendez vos produits avec un système e-commerce complet : gestion des stocks, paiements sécurisés, et expédition.'
                },
                {
                    icon: '💳',
                    title: 'Paiements sécurisés',
                    description: 'Acceptez toutes les méthodes de paiement populaires avec une sécurité maximale pour vos clients.'
                },
                {
                    icon: '📦',
                    title: 'Gestion des commandes',
                    description: 'Suivez et gérez vos commandes facilement depuis un tableau de bord intuitif.'
                },
                {
                    icon: '🎁',
                    title: 'Codes promo',
                    description: 'Créez des promotions et des codes de réduction pour fidéliser vos clients.'
                }
            ]
        }
    };

    // Service data
    const serviceData = {
        'Design personnalisable': {
            title: 'Design personnalisable',
            subtitle: 'Créez un site unique qui reflète votre marque',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '🎨',
                    title: 'Éditeur visuel',
                    description: 'Modifiez votre site en temps réel avec notre éditeur glisser-déposer intuitif. Aucune compétence en codage requise.'
                },
                {
                    icon: '🌈',
                    title: 'Palettes de couleurs',
                    description: 'Choisissez parmi des centaines de combinaisons de couleurs ou créez la vôtre pour correspondre à votre identité de marque.'
                },
                {
                    icon: '✍️',
                    title: 'Typographie',
                    description: 'Accédez à une vaste bibliothèque de polices professionnelles et personnalisez la taille, l\'espacement et le style.'
                },
                {
                    icon: '📐',
                    title: 'Mises en page flexibles',
                    description: 'Créez des designs uniques avec des sections, des blocs et des widgets entièrement personnalisables.'
                }
            ]
        },
        'E-commerce intégré': {
            title: 'E-commerce intégré',
            subtitle: 'Tout pour vendre en ligne avec succès',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '🛍️',
                    title: 'Gestion de produits',
                    description: 'Ajoutez des produits illimités avec photos, descriptions, variantes et gestion des stocks automatique.'
                },
                {
                    icon: '💰',
                    title: 'Paiements multiples',
                    description: 'Acceptez les cartes de crédit, PayPal, Apple Pay, et plus encore avec des frais de transaction compétitifs.'
                },
                {
                    icon: '📊',
                    title: 'Analytics e-commerce',
                    description: 'Suivez vos ventes, identifiez vos meilleurs produits et comprenez le comportement de vos clients.'
                },
                {
                    icon: '🚚',
                    title: 'Expédition flexible',
                    description: 'Configurez des zones d\'expédition, calculez les frais automatiquement et imprimez les étiquettes.'
                }
            ]
        },
        'Mobile-first': {
            title: 'Mobile-first',
            subtitle: 'Parfait sur tous les appareils',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '📱',
                    title: 'Responsive automatique',
                    description: 'Votre site s\'adapte automatiquement à toutes les tailles d\'écran sans configuration supplémentaire.'
                },
                {
                    icon: '⚡',
                    title: 'Vitesse optimisée',
                    description: 'Chargement ultra-rapide sur mobile grâce à l\'optimisation automatique des images et du code.'
                },
                {
                    icon: '👆',
                    title: 'Navigation tactile',
                    description: 'Interface optimisée pour le tactile avec des boutons et des menus faciles à utiliser sur mobile.'
                },
                {
                    icon: '🔍',
                    title: 'SEO mobile',
                    description: 'Optimisé pour les recherches mobiles avec un référencement adapté aux standards de Google.'
                }
            ]
        },
        'Analytics': {
            title: 'Analytics',
            subtitle: 'Comprenez votre audience et optimisez vos performances',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '📈',
                    title: 'Statistiques en temps réel',
                    description: 'Suivez le trafic de votre site en direct : visiteurs actifs, pages vues, et sources de trafic.'
                },
                {
                    icon: '👥',
                    title: 'Données démographiques',
                    description: 'Découvrez d\'où viennent vos visiteurs et quels sont leurs appareils et navigateurs préférés.'
                },
                {
                    icon: '🎯',
                    title: 'Objectifs et conversions',
                    description: 'Définissez des objectifs et mesurez le taux de conversion de vos campagnes marketing.'
                },
                {
                    icon: '📊',
                    title: 'Rapports détaillés',
                    description: 'Générez des rapports personnalisés pour analyser les performances de votre site.'
                }
            ]
        },
        'Sécurité SSL': {
            title: 'Sécurité SSL',
            subtitle: 'Protégez votre site et vos visiteurs',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '🔒',
                    title: 'Certificat SSL gratuit',
                    description: 'Obtenez un certificat SSL inclus gratuitement pour chiffrer toutes les données de votre site.'
                },
                {
                    icon: '🛡️',
                    title: 'Protection DDoS',
                    description: 'Infrastructure sécurisée avec protection contre les attaques DDoS et les menaces en ligne.'
                },
                {
                    icon: '✅',
                    title: 'Conformité RGPD',
                    description: 'Outils intégrés pour respecter les réglementations sur la protection des données.'
                },
                {
                    icon: '🔐',
                    title: 'Sauvegardes automatiques',
                    description: 'Votre site est sauvegardé automatiquement chaque jour pour une tranquillité d\'esprit totale.'
                }
            ]
        },
        'Support 24/7': {
            title: 'Support 24/7',
            subtitle: 'Une équipe d\'experts toujours disponible',
            image: '/placeholder.svg?height=600&width=1200',
            features: [
                {
                    icon: '💬',
                    title: 'Chat en direct',
                    description: 'Discutez instantanément avec notre équipe de support via le chat en direct intégré.'
                },
                {
                    icon: '📧',
                    title: 'Support par email',
                    description: 'Envoyez-nous vos questions par email et recevez une réponse détaillée dans les 24 heures.'
                },
                {
                    icon: '📚',
                    title: 'Centre d\'aide complet',
                    description: 'Accédez à des centaines d\'articles, tutoriels vidéo et guides pratiques.'
                },
                {
                    icon: '👥',
                    title: 'Communauté active',
                    description: 'Rejoignez notre forum communautaire pour échanger avec d\'autres utilisateurs et obtenir des conseils.'
                }
            ]
        }
    };

    // Create modal element
    const modal = document.getElementById('detailModal');

    // Function to show detail page
    function showDetailPage(data) {
        const modalContent = `
        <div class="modal-content">
          <button class="modal-close" onclick="closeModal()">×</button>

          <div class="modal-header">
            <h1>${data.title}</h1>
            <p>${data.subtitle}</p>
          </div>

          <img src="${data.image}" alt="${data.title}" class="modal-image">

          <div class="modal-grid">
            ${data.features.map(feature => `
              <div class="modal-feature">
                <div class="modal-feature-icon">${feature.icon}</div>
                <h3>${feature.title}</h3>
                <p>${feature.description}</p>
              </div>
            `).join('')}
          </div>

          <div class="modal-cta">
            <h2>Prêt à commencer?</h2>
            <p>Créez votre site en quelques minutes avec ${data.title}</p>
            <button class="btn-large btn-white">Commencer gratuitement</button>
          </div>
        </div>
      `;

        modal.innerHTML = modalContent;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Function to close modal
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Add click events to template cards
    document.querySelectorAll('.template-card').forEach((card, index) => {
        card.addEventListener('click', () => {
            const templateName = card.querySelector('h3').textContent;
            if (templateData[templateName]) {
                showDetailPage(templateData[templateName]);
            }
        });
    });

    // Add click events to service cards
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('click', (e) => {
            if (!e.target.classList.contains('service-link')) {
                const serviceName = card.querySelector('h3').textContent;
                if (serviceData[serviceName]) {
                    showDetailPage(serviceData[serviceName]);
                }
            }
        });

        // Prevent link clicks from opening modal
        card.querySelector('.service-link').addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });

    // Close modal on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // Close modal on background click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
</script>
</body>
</html>
