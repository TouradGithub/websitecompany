<!DOCTYPE html>
<html lang="fr">
@php
    $setting = App\Models\Setting::first();
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->name}} - Un site web rend tout possible</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

</head>
<body>

<!-- Header -->
<header>
    <div class="header-content">

        <a href="#" class="logo" style="display:flex; align-items:center; text-decoration:none; font-size:22px; font-weight:bold; color:#000;">
            <img src="{{asset('storage/'.$setting->logo)}}" alt="Logo"
                 style="width:40px; height:40px; object-fit:cover; margin-right:6px; border-radius:50%;">
            {{$setting?->name}}
        </a>

        <!-- Hamburger menu for mobile -->
        <div class="menu-btn" onclick="toggleMenu()">☰</div>

        <nav id="nav-menu">
            {{-- <a href="#templates">Modèles</a> --}}
            <a href="#templates">Services</a>
            <a href="#contact">Contact</a>
            <a href="{{ route('about') }}" class="cta-btn">À propos</a>
        </nav>

    </div>
</header>


<!-- Hero Section with Background Slider -->
<section class="hero">
    <div class="hero-slider">
        <div class="hero-slide active">
            <img src="{{asset('imgs/340c677d-eaff-4494-bd15-1f9acde741ea.JPG')}}" alt="Slide 1">
        </div>
        <div class="hero-slide">
            <img src="{{asset('imgs/7c5cd012-f37b-416a-a2ed-254472dc4a6a.JPG')}}" alt="Slide 2">
        </div>
        <div class="hero-slide">
            <img src="{{asset('imgs/8a288c29-1710-4c1d-9672-18521a58b036.JPG')}}" alt="Slide 3">
        </div>
        <div class="hero-slide">
            <img src="{{asset('imgs/ebd05ec7-5985-4519-8f43-210e45eb2a0d.JPG')}}" alt="Slide 4">
        </div>
        <div class="hero-slide">
            <img src="{{asset('imgs/fc65ff08-feb2-40b8-9c89-9d10e0d52fee.JPG')}}" alt="Slide 5">
        </div>
    </div>
    <div class="hero-indicators">
        <span class="indicator active" data-slide="0"></span>
        <span class="indicator" data-slide="1"></span>
        <span class="indicator" data-slide="2"></span>
        <span class="indicator" data-slide="3"></span>
        <span class="indicator" data-slide="4"></span>
    </div>
</section>

<!-- Hero Content Section -->
<section class="hero-content-section">
    <div class="hero-content-wrapper">
        {{-- <h1>Un site web rend tout possible</h1> --}}
        <p class="hero-description">{{$setting?->description}}</p>
        <p class="hero-subtitle">Créez un site web magnifique qui représente vraiment votre marque</p>
        <a href="#contact" class="hero-btn">Commencer</a>
    </div>
</section>
@include('front.galerie')
<!-- Template Showcase -->
<section class="template-showcase" id="templates">
    <h2 class="section-title">Notre Services</h2>
    <div class="templates-grid">
        @foreach(App\Models\Service::all() as $service)
        <a href="{{ route('service.show', $service) }}" class="template-card" style="text-decoration: none;">
            <img src="{{asset('storage/'.$service->image)}}" alt="{{ $service->name }}">
            <div class="template-info">
                <h3>{{$service->name}}</h3>
                <p>Voir les details →</p>
            </div>
        </a>
        @endforeach
    </div>
</section>



<!-- Stats Section -->
<section class="stats-section">
    <div class="stats-grid">
        <div class="stat-item">
            <h2>Millions</h2>
            <p>de sites web créés</p>
        </div>
        <div class="stat-item">
            <h2>24/7</h2>
            <p>Support client</p>
        </div>
        <div class="stat-item">
            <h2>100+</h2>
            <p>Modèles professionnels</p>
        </div>
    </div>
</section>

<!-- Boost Section -->
<section class="boost-section">
    <div class="boost-content">
        <h2 class="section-title">Nos activités</h2>
        <div class="tabs">
            <div class="tab active" data-tab="design">Design</div>
            <div class="tab" data-tab="marketing">Marketing</div>
            <div class="tab" data-tab="commerce">Commerce</div>
        </div>
        <div class="tab-content active" data-content="design">
            <div class="tab-image">
                <img src="{{asset('uploads/img/placeholder.svg')}}" alt="Design">
            </div>
            <div class="tab-text">
                <h3>Design professionnel</h3>
                <p>Créez un site web magnifique avec nos modèles primés et notre éditeur de design intuitif. Personnalisez chaque détail pour refléter votre marque unique.</p>
            </div>
        </div>
        <div class="tab-content" data-content="marketing">
            <div class="tab-image">
                <img src="{{asset('uploads/img/placeholder.svg')}}" alt="Marketing">
            </div>
            <div class="tab-text">
                <h3>Outils marketing intégrés</h3>
                <p>Développez votre audience avec des outils marketing puissants. Email marketing, SEO, analytics et plus encore, tout en un seul endroit.</p>
            </div>
        </div>
        <div class="tab-content" data-content="commerce">
            <div class="tab-image">
                <img src="{{asset('uploads/img/placeholder.svg')}}" alt="Commerce">
            </div>
            <div class="tab-text">
                <h3>E-commerce simplifié</h3>
                <p>Vendez en ligne avec une plateforme e-commerce complète. Gestion des stocks, paiements sécurisés et livraison intégrée.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <h2 class="section-title">Tout ce dont vous avez besoin</h2>
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">🎨</div>
            <h3>Design personnalisé</h3>
            <p>Des centaines de modèles professionnels entièrement personnalisables pour créer un site unique.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">📱</div>
            <h3>Responsive mobile</h3>
            <p>Votre site s'adapte parfaitement à tous les écrans, du mobile au desktop.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">🛒</div>
            <h3>E-commerce intégré</h3>
            <p>Vendez vos produits en ligne avec une boutique complète et sécurisée.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">📊</div>
            <h3>Analytics avancé</h3>
            <p>Suivez vos performances avec des outils d'analyse détaillés.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">🔒</div>
            <h3>Sécurité SSL</h3>
            <p>Sécurisez votre site avec un certificat SSL inclus gratuitement.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">💬</div>
            <h3>Support 24/7</h3>
            <p>Notre équipe est disponible à tout moment pour vous aider.</p>
        </div>
    </div>
</section>

<!-- Gallery Slider -->


<!-- Testimonials -->
<section class="testimonials">
    <h2 class="section-title">Ce que disent nos clients</h2>
    <div class="testimonial-container">
        <div class="testimonial active">
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">"Squarespace m'a permis de créer un site professionnel en quelques heures. L'éditeur est incroyablement intuitif!"</p>
            <p class="testimonial-author">Mohamed Sidi</p>
            <p class="testimonial-role">Photographe</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">"La meilleure plateforme pour vendre en ligne. Le système e-commerce est simple et puissant."</p>
            <p class="testimonial-author">Babe Dialo</p>
            <p class="testimonial-role">Propriétaire boutique</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p class="testimonial-text">"Le support client est exceptionnel. Ils m'ont aidé à chaque étape de la création de mon site."</p>
            <p class="testimonial-author">Ahmed Med</p>
            <p class="testimonial-role">Chef cuisinière</p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->

@include('front.contact')

<!-- Footer -->

@include('front.footer' ,$setting)
<script src="{{ asset('scripts.js') }}"></script>
<script>
    function handleSubmit(event) {
        event.preventDefault();

        const formData = new FormData(event.target);
        fetch('{{url('contact-post')}}', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(result => {
                console.log('Success:', result);
                alert('Merci pour votre message! Nous vous répondrons bientôt.');
                event.target.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Une erreur est survenue. Réessayez plus tard.');
            });

    }
</script>
<script>
    function toggleMenu() {
        document.getElementById('nav-menu').classList.toggle('active');
    }
</script>

</body>
</html>
