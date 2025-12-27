<!DOCTYPE html>
<html lang="fr">
@php
    $setting = App\Models\Setting::first();
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->name}} - À propos</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

<!-- Header -->
<header>
    <div class="header-content">
        <a href="{{ route('home') }}" class="logo" style="display:flex; align-items:center; text-decoration:none; font-size:22px; font-weight:bold; color:#000;">
            <img src="{{asset('storage/'.$setting->logo)}}" alt="Logo"
                 style="width:40px; height:40px; object-fit:cover; margin-right:6px; border-radius:50%;">
            {{$setting?->name}}
        </a>

        <!-- Hamburger menu for mobile -->
        <div class="menu-btn" onclick="toggleMenu()">&#9776;</div>

        <nav id="nav-menu">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('home') }}#services">Services</a>
            <a href="{{ route('home') }}#contact">Contact</a>
            <a href="{{ route('about') }}" class="cta-btn">À propos</a>
        </nav>
    </div>
</header>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="about-hero-content">
        <h1>À propos de nous</h1>
        <p>Découvrez notre histoire et notre mission</p>
    </div>
</section>

<!-- About Content Section -->
<section class="about-content">
    <div class="about-wrapper">
        <div class="about-text">
            @if($setting?->about_content)
                {!! nl2br(e($setting->about_content)) !!}
            @else
                <h2>Notre Histoire</h2>
                <p>{{$setting?->description}}</p>
                <p>Nous sommes une équipe passionnée dédiée à la création de sites web professionnels et modernes. Notre mission est d'aider les entreprises à établir une présence en ligne forte et efficace.</p>
            @endif
        </div>

        <div class="about-cta">
            <h2>Prêt à démarrer votre projet ?</h2>
            <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins.</p>
            <a href="{{ route('home') }}#contact" class="hero-btn">Nous contacter</a>
        </div>
    </div>
</section>

<!-- Footer -->
@include('front.footer', ['setting' => $setting])

<script src="{{ asset('scripts.js') }}"></script>
<script>
    function toggleMenu() {
        document.getElementById('nav-menu').classList.toggle('active');
    }
</script>

</body>
</html>
