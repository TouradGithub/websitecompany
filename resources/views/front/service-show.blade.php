<!DOCTYPE html>
<html lang="fr">
@php
    $setting = App\Models\Setting::first();
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->name }} - {{ $setting->name }}</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        /* Service Detail Page Styles */
        .service-hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 70px;
        }

        .service-hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .service-hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.7));
        }

        .service-hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: #fff;
            padding: 2rem;
            max-width: 800px;
        }

        .service-hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .service-hero-content .service-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        /* Service Detail Content */
        .service-detail {
            padding: 5rem 2rem;
            background: #fff;
        }

        .service-detail-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .service-description {
            font-size: 1.25rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 3rem;
            text-align: center;
            padding: 2rem;
            background: #f9f9f9;
            border-radius: 1rem;
            border-left: 4px solid #000;
        }

        .service-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            padding: 2rem;
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }

        .feature-card .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: #000;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Other Services Section */
        .other-services {
            padding: 5rem 2rem;
            background: #f5f5f5;
        }

        .other-services h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
            color: #000;
        }

        .other-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .other-service-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            height: 350px;
            text-decoration: none;
            display: block;
            transition: transform 0.3s;
        }

        .other-service-card:hover {
            transform: scale(1.02);
        }

        .other-service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .other-service-card:hover img {
            transform: scale(1.1);
        }

        .other-service-card .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            color: #fff;
        }

        .other-service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .other-service-card span {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* CTA Section */
        .service-cta {
            padding: 5rem 2rem;
            background: #000;
            text-align: center;
            color: #fff;
        }

        .service-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .service-cta p {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-cta .cta-button {
            display: inline-block;
            background: #fff;
            color: #000;
            padding: 1rem 3rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-cta .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255,255,255,0.2);
        }

        /* Back Button */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #000;
            text-decoration: none;
            font-weight: 500;
            padding: 1rem 0;
            transition: opacity 0.3s;
        }

        .back-link:hover {
            opacity: 0.6;
        }

        .breadcrumb {
            padding: 1rem 2rem;
            background: #fff;
            border-bottom: 1px solid #eee;
            margin-top: 70px;
        }

        .breadcrumb-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: #666;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: #000;
        }

        .breadcrumb span {
            color: #999;
        }

        .breadcrumb .current {
            color: #000;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .service-hero {
                height: 50vh;
                min-height: 400px;
            }

            .service-hero-content h1 {
                font-size: 2rem;
            }

            .service-hero-content .service-icon {
                font-size: 3rem;
            }

            .service-description {
                font-size: 1rem;
                padding: 1.5rem;
            }

            .service-cta h2 {
                font-size: 1.75rem;
            }

            .breadcrumb {
                margin-top: 60px;
            }

            .service-hero {
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="header-content">
        <a href="{{ route('home') }}" class="logo" style="display:flex; align-items:center; text-decoration:none; font-size:22px; font-weight:bold; color:#000;">
            <img src="{{ asset('storage/'.$setting->logo) }}" alt="Logo"
                 style="width:40px; height:40px; object-fit:cover; margin-right:6px; border-radius:50%;">
            {{ $setting?->name }}
        </a>

        <div class="menu-btn" onclick="toggleMenu()">☰</div>

        <nav id="nav-menu">
            {{-- <a href="{{ route('home') }}#templates">Modeles</a> --}}
            <a href="{{ route('home') }}#templates">Services</a>
            <a href="{{ route('home') }}#contact">Contact</a>
 <a href="{{ route('about') }}" class="cta-btn">À propos</a>        </nav>
    </div>
</header>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="breadcrumb-container">
        <a href="{{ route('home') }}">Accueil</a>
        <span>/</span>
        <a href="{{ route('home') }}#templates">Modeles</a>
        <span>/</span>
        <span class="current">{{ $service->name }}</span>
    </div>
</div>

<!-- Service Hero -->
<section class="service-hero" style="margin-top: 0;">
    <div class="service-hero-image">
        <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->name }}">
    </div>
    <div class="service-hero-overlay"></div>
    <div class="service-hero-content">

        <h1>{{ $service->name }}</h1>
    </div>
</section>

<!-- Service Detail -->
<section class="service-detail">
    <div class="service-detail-container">
        @if($service->description)
            <div class="service-description">
                {!! $service->description !!}
            </div>
        @endif

        <div class="service-features">
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Design moderne</h3>
                <p>Un design contemporain et elegant qui met en valeur votre marque et attire vos visiteurs.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>100% Responsive</h3>
                <p>Votre site s'adapte parfaitement a tous les ecrans, du mobile au desktop.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Performance optimale</h3>
                <p>Chargement rapide et experience utilisateur fluide pour satisfaire vos visiteurs.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Securite renforcee</h3>
                <p>Protection SSL et mesures de securite avancees pour proteger vos donnees.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛠️</div>
                <h3>Facile a gerer</h3>
                <p>Interface d'administration intuitive pour gerer votre contenu en toute simplicite.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Analytics integre</h3>
                <p>Suivez vos performances avec des outils d'analyse detailles et complets.</p>
            </div>
        </div>
    </div>
</section>

<!-- Other Services -->
@if($otherServices->count() > 0)
<section class="other-services">
    <h2>Decouvrez aussi</h2>
    <div class="other-services-grid">
        @foreach($otherServices as $otherService)
            <a href="{{ route('service.show', $otherService) }}" class="other-service-card">
                <img src="{{ asset('storage/'.$otherService->image) }}" alt="{{ $otherService->name }}">
                <div class="card-overlay">
                    <h3>{{ $otherService->name }}</h3>
                    <span>Voir les details →</span>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="service-cta">
    <h2>Pret a commencer ?</h2>
    <p>Contactez-nous des aujourd'hui pour discuter de votre projet et obtenir un devis personnalise.</p>
    <a href="{{ route('home') }}#contact" class="cta-button">Nous contacter</a>
</section>

<!-- Footer -->
@include('front.footer', ['setting' => $setting])

<script>
    function toggleMenu() {
        document.getElementById('nav-menu').classList.toggle('active');
    }
</script>

</body>
</html>
