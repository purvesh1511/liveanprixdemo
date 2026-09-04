<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('anprix.name') . ' - ' . config('anprix.tagline'))</title>

    @yield('seo')

    <meta name="theme-color" content="#050505">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'" loading="lazy">

    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'anprix': {
                            'primary': '#00ffb3',
                            'dark': '#050505',
                            'darker': '#0a0a0a',
                            'card': '#111111',
                            'border': '#1a1a1a',
                            'muted': '#888888',
                        }
                    }
                }
            }
        }
    </script>

    {{-- JSON-LD: Organization --}}
    <script type="application/ld+json">
    {
        "{{'@'}}context": "https://schema.org",
        "{{'@'}}type": "Organization",
        "name": "{{ config('anprix.name') }}",
        "url": "{{ config('anprix.url') }}",
        "logo": "{{ config('anprix.url') }}/assets/images/anprix-logo.webp",
        "description": "{{ config('anprix.description') }}",
        "email": "{{ config('anprix.email') }}",
        "telephone": "{{ config('anprix.phone') }}",
        "address": {
            "{{'@'}}type": "PostalAddress",
            "streetAddress": "{{ config('anprix.address') }}",
            "addressLocality": "Gandhinagar",
            "addressRegion": "Gujarat",
            "postalCode": "382421",
            "addressCountry": "IN"
        },
        "sameAs": [
            "{{ config('anprix.social.facebook') }}",
            "{{ config('anprix.social.twitter') }}",
            "{{ config('anprix.social.linkedin') }}",
            "{{ config('anprix.social.instagram') }}",
            "{{ config('anprix.social.youtube') }}"
        ]
    }
    </script>

    {{-- JSON-LD: WebSite --}}
    <script type="application/ld+json">
    {
        "{{'@'}}context": "https://schema.org",
        "{{'@'}}type": "WebSite",
        "name": "{{ config('anprix.name') }}",
        "url": "{{ config('anprix.url') }}",
        "potentialAction": {
            "{{'@'}}type": "SearchAction",
            "target": "{{ config('anprix.url') }}/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    {{-- JSON-LD: Service --}}
    <script type="application/ld+json">
    {
        "{{'@'}}context": "https://schema.org",
        "{{'@'}}type": "Service",
        "serviceType": "Digital Marketing & Web Development",
        "provider": {
            "{{'@'}}type": "Organization",
            "name": "{{ config('anprix.name') }}"
        },
        "areaServed": {
            "{{'@'}}type": "Country",
            "name": "{{ config('anprix.country') }}"
        },
        "description": "{{ config('anprix.description') }}"
    }
    </script>

    {{-- JSON-LD: LocalBusiness --}}
    <script type="application/ld+json">
    {
        "{{'@'}}context": "https://schema.org",
        "{{'@'}}type": "LocalBusiness",
        "name": "{{ config('anprix.name') }}",
        "image": "{{ config('anprix.url') }}/assets/images/anprix-logo.webp",
        "url": "{{ config('anprix.url') }}",
        "telephone": "{{ config('anprix.phone') }}",
        "email": "{{ config('anprix.email') }}",
        "address": {
            "{{'@'}}type": "PostalAddress",
            "streetAddress": "{{ config('anprix.address') }}",
            "addressLocality": "Gandhinagar",
            "addressRegion": "Gujarat",
            "postalCode": "382421",
            "addressCountry": "IN"
        },
        "geo": {
            "{{'@'}}type": "GeoCoordinates",
            "latitude": 23.2156,
            "longitude": 72.6369
        },
        "openingHoursSpecification": [
            {
                "{{'@'}}type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "18:00"
            },
            {
                "{{'@'}}type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "10:00",
                "closes": "16:00"
            }
        ],
        "aggregateRating": {
            "{{'@'}}type": "AggregateRating",
            "ratingValue": "4.9",
            "bestRating": "5",
            "ratingCount": "85"
        }
    }
    </script>

    @yield('head')
</head>

<body class="bg-anprix-dark text-white font-inter antialiased">
    {{-- GTM noscript --}}
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('anprix.gtm_id') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    {{-- ============================================================ --}}
    {{-- HEADER --}}
    {{-- ============================================================ --}}
    @php
        $isServicePage = in_array(Route::currentRouteName(), [
            'services',
            'website-development',
            'wordpress-development',
            'ecommerce-development',
            'website-redesign',
            'cms-development',
            'seo',
            'digital-marketing',
            'social-media-marketing',
            'advertising',
            'branding-creative',
        ]);
    @endphp

    <header id="site-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-anprix-dark/80 backdrop-blur-lg border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('assets/images/anprix-logo.webp') }}" alt="{{ config('anprix.name') }}" class="h-10 w-auto" loading="eager">
                    <!-- <span class="text-xl font-bold tracking-tight group-hover:text-anprix-primary transition-colors">
                        {{ config('anprix.name') }}
                    </span> --> 
                </a>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        Home
                    </a>

                    <a href="{{ route('about') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        About
                    </a>

                    {{-- Services Mega Menu --}}
                    <div class="relative group" id="services-dropdown">
                        <button class="px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1.5 {{ $isServicePage ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                            Services
                            <svg class="w-3.5 h-3.5 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Mega Menu Dropdown --}}
                        <div class="absolute top-full left-1/2 -translate-x-1/2 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="bg-anprix-card border border-anprix-border rounded-2xl p-8 w-[820px] shadow-2xl shadow-black/40">
                                <div class="grid grid-cols-4 gap-8">

                                    {{-- Column: Development --}}
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wider text-anprix-primary mb-4">Development</h3>
                                        <ul class="space-y-2.5">
                                            <li>
                                                <a href="{{ route('website-development') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover/item:bg-blue-500/20 transition-colors">
                                                        <i class="fas fa-code text-blue-400 text-xs"></i>
                                                    </span>
                                                    Website Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('wordpress-development') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover/item:bg-blue-500/20 transition-colors">
                                                        <i class="fab fa-wordpress text-blue-400 text-xs"></i>
                                                    </span>
                                                    WordPress Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ecommerce-development') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover/item:bg-blue-500/20 transition-colors">
                                                        <i class="fas fa-shopping-cart text-blue-400 text-xs"></i>
                                                    </span>
                                                    E-Commerce Development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('website-redesign') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover/item:bg-blue-500/20 transition-colors">
                                                        <i class="fas fa-palette text-blue-400 text-xs"></i>
                                                    </span>
                                                    Website Redesign
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cms-development') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover/item:bg-blue-500/20 transition-colors">
                                                        <i class="fas fa-cogs text-blue-400 text-xs"></i>
                                                    </span>
                                                    CMS Development
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Column: SEO --}}
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wider text-anprix-primary mb-4">SEO</h3>
                                        <ul class="space-y-2.5">
                                            <li>
                                                <a href="{{ route('seo') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover/item:bg-green-500/20 transition-colors">
                                                        <i class="fas fa-search text-green-400 text-xs"></i>
                                                    </span>
                                                    SEO Services
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('seo') }}#local-seo" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover/item:bg-green-500/20 transition-colors">
                                                        <i class="fas fa-map-marker-alt text-green-400 text-xs"></i>
                                                    </span>
                                                    Local SEO
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('seo') }}#technical-seo" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover/item:bg-green-500/20 transition-colors">
                                                        <i class="fas fa-wrench text-green-400 text-xs"></i>
                                                    </span>
                                                    Technical SEO
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('seo') }}#on-page-seo" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover/item:bg-green-500/20 transition-colors">
                                                        <i class="fas fa-file-alt text-green-400 text-xs"></i>
                                                    </span>
                                                    On-Page SEO
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('seo') }}#link-building" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover/item:bg-green-500/20 transition-colors">
                                                        <i class="fas fa-link text-green-400 text-xs"></i>
                                                    </span>
                                                    Link Building
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Column: Marketing --}}
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wider text-anprix-primary mb-4">Marketing</h3>
                                        <ul class="space-y-2.5">
                                            <li>
                                                <a href="{{ route('digital-marketing') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover/item:bg-purple-500/20 transition-colors">
                                                        <i class="fas fa-bullseye text-purple-400 text-xs"></i>
                                                    </span>
                                                    Digital Marketing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('social-media-marketing') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover/item:bg-purple-500/20 transition-colors">
                                                        <i class="fas fa-share-alt text-purple-400 text-xs"></i>
                                                    </span>
                                                    Social Media Marketing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('advertising') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover/item:bg-purple-500/20 transition-colors">
                                                        <i class="fas fa-ad text-purple-400 text-xs"></i>
                                                    </span>
                                                    Advertising
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('digital-marketing') }}#ppc" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover/item:bg-purple-500/20 transition-colors">
                                                        <i class="fas fa-mouse-pointer text-purple-400 text-xs"></i>
                                                    </span>
                                                    PPC Management
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('digital-marketing') }}#email" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover/item:bg-purple-500/20 transition-colors">
                                                        <i class="fas fa-envelope text-purple-400 text-xs"></i>
                                                    </span>
                                                    Email Marketing
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Column: Branding --}}
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wider text-anprix-primary mb-4">Branding</h3>
                                        <ul class="space-y-2.5">
                                            <li>
                                                <a href="{{ route('branding-creative') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center group-hover/item:bg-amber-500/20 transition-colors">
                                                        <i class="fas fa-paint-brush text-amber-400 text-xs"></i>
                                                    </span>
                                                    Branding & Creative
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('branding-creative') }}#logo" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center group-hover/item:bg-amber-500/20 transition-colors">
                                                        <i class="fas fa-feather-alt text-amber-400 text-xs"></i>
                                                    </span>
                                                    Logo Design
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('branding-creative') }}#graphic" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center group-hover/item:bg-amber-500/20 transition-colors">
                                                        <i class="fas fa-image text-amber-400 text-xs"></i>
                                                    </span>
                                                    Graphic Design
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('branding-creative') }}#ui-ux" class="flex items-center gap-3 text-sm text-gray-400 hover:text-white transition-colors group/item">
                                                    <span class="w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center group-hover/item:bg-amber-500/20 transition-colors">
                                                        <i class="fas fa-object-group text-amber-400 text-xs"></i>
                                                    </span>
                                                    UI/UX Design
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('portfolio') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('portfolio') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        Portfolio
                    </a>

                    <a href="{{ route('team') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('team') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        Team
                    </a>

                    <a href="{{ route('blog.index') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('blog.*') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        Blog
                    </a>

                    <a href="{{ route('contact') }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-anprix-primary' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        Contact
                    </a>
                </nav>

                {{-- CTA + Mobile Toggle --}}
                <div class="flex items-center gap-4">
                    <a href="{{ route('hire') }}"
                       class="hidden lg:inline-flex items-center gap-2 px-6 py-2.5 bg-anprix-primary text-anprix-dark text-sm font-bold rounded-lg hover:bg-anprix-primary/90 transition-all hover:shadow-lg hover:shadow-anprix-primary/20">
                        <i class="fas fa-rocket text-xs"></i>
                        Hire Us
                    </a>

                    {{-- Mobile Hamburger --}}
                    <button id="mobile-menu-toggle" class="lg:hidden relative w-10 h-10 flex items-center justify-center rounded-lg text-gray-400 hover:text-white hover:bg-white/10 transition-colors" aria-label="Toggle menu">
                        <svg id="hamburger-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="hamburger-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    {{-- ============================================================ --}}
    {{-- MOBILE MENU --}}
    {{-- ============================================================ --}}
    <div id="mobile-menu" class="fixed inset-0 z-[60] lg:hidden hidden">
        {{-- Backdrop --}}
        <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

        {{-- Panel --}}
        <div id="mobile-menu-panel" class="absolute top-0 right-0 h-full w-full max-w-sm bg-anprix-darker border-l border-anprix-border overflow-y-auto transform translate-x-full transition-transform duration-300">
            <div class="p-6">
                {{-- Mobile Menu Header --}}
                <div class="flex items-center justify-between mb-8">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/anprix-logo.webp') }}" alt="{{ config('anprix.name') }}" class="h-8 w-auto">
                        <!-- <span class="font-bold">{{ config('anprix.name') }}</span> -->
                    </a>
                    <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-400 hover:text-white hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                {{-- Mobile Nav Links --}}
                <nav class="space-y-1">
                    <a href="{{ route('home') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-home w-5 mr-3 text-center text-xs"></i>Home
                    </a>
                    <a href="{{ route('about') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-info-circle w-5 mr-3 text-center text-xs"></i>About
                    </a>

                    {{-- Mobile Services Accordion --}}
                    <div class="mobile-services-group">
                        <button class="mobile-services-toggle w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm font-medium {{ $isServicePage ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                            <span><i class="fas fa-cogs w-5 mr-3 text-center text-xs"></i>Services</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="mobile-services-content hidden pl-4 space-y-1 mt-1">
                            {{-- Development --}}
                            <p class="px-4 py-1 text-xs font-bold uppercase tracking-wider text-blue-400">Development</p>
                            <a href="{{ route('website-development') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Website Development</a>
                            <a href="{{ route('wordpress-development') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">WordPress Development</a>
                            <a href="{{ route('ecommerce-development') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">E-Commerce Development</a>
                            <a href="{{ route('website-redesign') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Website Redesign</a>
                            <a href="{{ route('cms-development') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">CMS Development</a>

                            {{-- SEO --}}
                            <p class="px-4 py-1 text-xs font-bold uppercase tracking-wider text-green-400 mt-3">SEO</p>
                            <a href="{{ route('seo') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">SEO Services</a>

                            {{-- Marketing --}}
                            <p class="px-4 py-1 text-xs font-bold uppercase tracking-wider text-purple-400 mt-3">Marketing</p>
                            <a href="{{ route('digital-marketing') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Digital Marketing</a>
                            <a href="{{ route('social-media-marketing') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Social Media Marketing</a>
                            <a href="{{ route('advertising') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Advertising</a>

                            {{-- Branding --}}
                            <p class="px-4 py-1 text-xs font-bold uppercase tracking-wider text-amber-400 mt-3">Branding</p>
                            <a href="{{ route('branding-creative') }}" class="block px-4 py-2 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/5 transition-colors">Branding & Creative</a>
                        </div>
                    </div>

                    <a href="{{ route('portfolio') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('portfolio') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-briefcase w-5 mr-3 text-center text-xs"></i>Portfolio
                    </a>
                    <a href="{{ route('team') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('team') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-users w-5 mr-3 text-center text-xs"></i>Team
                    </a>
                    <a href="{{ route('blog.index') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('blog.*') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-newspaper w-5 mr-3 text-center text-xs"></i>Blog
                    </a>
                    <a href="{{ route('contact') }}"
                       class="block px-4 py-3 rounded-xl text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-anprix-primary bg-anprix-primary/10' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                        <i class="fas fa-envelope w-5 mr-3 text-center text-xs"></i>Contact
                    </a>
                </nav>

                {{-- Mobile CTA --}}
                <div class="mt-8">
                    <a href="{{ route('hire') }}"
                       class="flex items-center justify-center gap-2 w-full px-6 py-3 bg-anprix-primary text-anprix-dark text-sm font-bold rounded-xl hover:bg-anprix-primary/90 transition-all">
                        <i class="fas fa-rocket text-xs"></i>
                        Hire Us
                    </a>
                </div>

                {{-- Mobile Social Links --}}
                <div class="mt-8 pt-6 border-t border-anprix-border">
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-4">Follow Us</p>
                    <div class="flex items-center gap-3">
                        <a href="{{ config('anprix.social.facebook') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-400 hover:bg-blue-400/10 transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ config('anprix.social.twitter') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-sky-400 hover:bg-sky-400/10 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ config('anprix.social.linkedin') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-500 hover:bg-blue-500/10 transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ config('anprix.social.instagram') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-pink-400 hover:bg-pink-400/10 transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ config('anprix.social.youtube') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-red-400 hover:bg-red-400/10 transition-all">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Spacer for fixed header --}}
    <div class="h-20"></div>

    {{-- ============================================================ --}}
    {{-- PAGE CONTENT --}}
    {{-- ============================================================ --}}
    <main>
        @yield('content')
    </main>

    {{-- ============================================================ --}}
    {{-- FOOTER --}}
    {{-- ============================================================ --}}
    <footer class="bg-anprix-darker border-t border-anprix-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Main Footer --}}
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                {{-- Column 1: About --}}
                <div>
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('assets/images/anprix-logo.webp') }}" alt="{{ config('anprix.name') }}" class="h-9 w-auto">
                        <span class="text-lg font-bold">{{ config('anprix.name') }}</span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        {{ config('anprix.tagline') }}. We help businesses grow with cutting-edge web development and result-driven digital marketing strategies.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="{{ config('anprix.social.facebook') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-400 hover:bg-blue-400/10 transition-all" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ config('anprix.social.twitter') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-sky-400 hover:bg-sky-400/10 transition-all" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ config('anprix.social.linkedin') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-500 hover:bg-blue-500/10 transition-all" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ config('anprix.social.instagram') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-pink-400 hover:bg-pink-400/10 transition-all" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ config('anprix.social.youtube') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-red-400 hover:bg-red-400/10 transition-all" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                {{-- Column 2: Services --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-6">Services</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('website-development') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Website Development</a>
                        </li>
                        <li>
                            <a href="{{ route('wordpress-development') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">WordPress Development</a>
                        </li>
                        <li>
                            <a href="{{ route('ecommerce-development') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">E-Commerce Development</a>
                        </li>
                        <li>
                            <a href="{{ route('seo') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">SEO Services</a>
                        </li>
                        <li>
                            <a href="{{ route('digital-marketing') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="{{ route('social-media-marketing') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Social Media Marketing</a>
                        </li>
                        <li>
                            <a href="{{ route('advertising') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Advertising</a>
                        </li>
                        <li>
                            <a href="{{ route('branding-creative') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Branding & Creative</a>
                        </li>
                    </ul>
                </div>

                {{-- Column 3: Quick Links --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('team') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Our Team</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('hire') }}" class="text-sm text-gray-400 hover:text-anprix-primary transition-colors">Hire Us</a>
                        </li>
                    </ul>
                </div>

                {{-- Column 4: Contact + Newsletter --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-white mb-6">Contact</h3>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-anprix-primary text-xs mt-1"></i>
                            <span class="text-sm text-gray-400">{{ config('anprix.address') }}</span>
                        </li>
                        <li>
                            <a href="tel:{{ config('anprix.phone') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-anprix-primary transition-colors">
                                <i class="fas fa-phone text-anprix-primary text-xs"></i>
                                {{ config('anprix.phone') }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ config('anprix.email') }}" class="flex items-center gap-3 text-sm text-gray-400 hover:text-anprix-primary transition-colors">
                                <i class="fas fa-envelope text-anprix-primary text-xs"></i>
                                {{ config('anprix.email') }}
                            </a>
                        </li>
                    </ul>

                    {{-- Newsletter --}}
                    <h4 class="text-sm font-bold text-white mb-3">Newsletter</h4>
                    <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" class="flex gap-2">
                        @csrf
                        <input type="email" name="email" placeholder="Your email" required
                               class="flex-1 px-4 py-2.5 bg-white/5 border border-anprix-border rounded-lg text-sm text-white placeholder-gray-500 focus:outline-none focus:border-anprix-primary/50 transition-colors">
                        <button type="submit" class="px-4 py-2.5 bg-anprix-primary text-anprix-dark rounded-lg text-sm font-bold hover:bg-anprix-primary/90 transition-colors shrink-0">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="py-6 border-t border-anprix-border flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-500">
                    &copy; {{ date('Y') }} {{ config('anprix.name') }}. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    {{-- ============================================================ --}}
    {{-- WHATSAPP FLOATING BUTTON --}}
    {{-- ============================================================ --}}
    <a href="https://wa.me/{{ config('anprix.whatsapp_number') }}?text={{ urlencode(config('anprix.whatsapp_message')) }}"
       target="_blank"
       rel="noopener"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30 hover:shadow-green-500/50 hover:scale-110 transition-all duration-300 group"
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
        <span class="absolute right-full mr-3 px-3 py-1.5 bg-white text-gray-900 text-xs font-medium rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity shadow-lg pointer-events-none">
            Chat with us
        </span>
    </a>

    {{-- ============================================================ --}}
    {{-- SCRIPTS --}}
    {{-- ============================================================ --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/ajax-forms.js') }}"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // ─── Header scroll effect ────────────────────────────
        const header = document.getElementById('site-header');
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 50) {
                header.classList.add('shadow-lg', 'shadow-black/10');
            } else {
                header.classList.remove('shadow-lg', 'shadow-black/10');
            }

            if (currentScroll > 300 && currentScroll > lastScroll) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }

            lastScroll = currentScroll;
        });

        // ─── Mobile menu ─────────────────────────────────────
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const mobileClose = document.getElementById('mobile-menu-close');
        const mobileBackdrop = document.getElementById('mobile-menu-backdrop');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobilePanel = document.getElementById('mobile-menu-panel');
        const hamburgerOpen = document.getElementById('hamburger-open');
        const hamburgerClose = document.getElementById('hamburger-close');

        let isMobileMenuOpen = false;

        function openMobileMenu() {
            if (isMobileMenuOpen) return;
            isMobileMenuOpen = true;
            mobileMenu.classList.remove('hidden');
            requestAnimationFrame(function() {
                mobilePanel.classList.remove('translate-x-full');
            });
            hamburgerOpen.classList.add('hidden');
            hamburgerClose.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            if (!isMobileMenuOpen) return;
            isMobileMenuOpen = false;
            mobilePanel.classList.add('translate-x-full');
            setTimeout(function() {
                mobileMenu.classList.add('hidden');
            }, 300);
            hamburgerOpen.classList.remove('hidden');
            hamburgerClose.classList.add('hidden');
            document.body.style.overflow = '';
        }

        if (mobileToggle) mobileToggle.addEventListener('click', function() {
            if (isMobileMenuOpen) { closeMobileMenu(); } else { openMobileMenu(); }
        });
        if (mobileClose) mobileClose.addEventListener('click', closeMobileMenu);
        if (mobileBackdrop) mobileBackdrop.addEventListener('click', closeMobileMenu);

        // Close menu when a nav link inside the panel is clicked
        document.querySelectorAll('#mobile-menu-panel a').forEach(function(link) {
            link.addEventListener('click', closeMobileMenu);
        });

        // Close with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeMobileMenu();
        });

        // ─── Mobile services accordion ───────────────────────
        document.querySelectorAll('.mobile-services-toggle').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // ─── Scroll animations (IntersectionObserver) ───────
        const animateElements = document.querySelectorAll('.animate-on-scroll');

        if (animateElements.length > 0 && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animateElements.forEach(function(el) {
                observer.observe(el);
            });
        }

        // ─── Fade-in-up scroll animations ────────────────────
        const fadeElements = document.querySelectorAll('.fade-in-up');

        if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
            const fadeObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        fadeObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            fadeElements.forEach(function(el) {
                fadeObserver.observe(el);
            });
        }

        // ─── Service reveal animations ──────────────────────
        const serviceRevealElements = document.querySelectorAll('.service-reveal');

        if (serviceRevealElements.length > 0 && 'IntersectionObserver' in window) {
            const serviceObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        serviceObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            serviceRevealElements.forEach(function(el) {
                serviceObserver.observe(el);
            });
        }

        // ─── Benefit card animations ────────────────────────
        const benefitCards = document.querySelectorAll('.benefit-card');

        if (benefitCards.length > 0 && 'IntersectionObserver' in window) {
            const benefitObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('benefit-visible');
                        benefitObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            benefitCards.forEach(function(el) {
                benefitObserver.observe(el);
            });
        }

        // ─── Text split for character animations (txt-split) ─
        document.querySelectorAll('.txt-split').forEach(function(el) {
            const text = el.textContent;
            el.textContent = '';
            el.setAttribute('aria-label', text);

            text.split('').forEach(function(char, i) {
                const span = document.createElement('span');
                span.className = 'char';
                span.textContent = char === ' ' ? '\u00A0' : char;
                span.style.transitionDelay = (i * 0.03) + 's';
                el.appendChild(span);
            });

            if ('IntersectionObserver' in window) {
                var charObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.querySelectorAll('.char').forEach(function(c) {
                                c.classList.add('char-visible');
                            });
                            charObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });
                charObserver.observe(el);
            }
        });

        // ─── Word reveal animations ─────────────────────────
        document.querySelectorAll('.word-reveal').forEach(function(el) {
            var text = el.textContent;
            el.textContent = '';
            el.setAttribute('aria-label', text);

            text.split(/\s+/).forEach(function(word, i) {
                var span = document.createElement('span');
                span.className = 'word';
                span.textContent = word;
                span.style.transitionDelay = (i * 0.08) + 's';
                el.appendChild(span);
                el.appendChild(document.createTextNode(' '));
            });

            if ('IntersectionObserver' in window) {
                var wordObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.querySelectorAll('.word').forEach(function(w) {
                                w.classList.add('word-visible');
                            });
                            wordObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1 });
                wordObserver.observe(el);
            }
        });

        // ─── Counter animation ───────────────────────────────
        const counters = document.querySelectorAll('.counter');

        if (counters.length > 0 && 'IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-target')) || 0;
                        const suffix = el.getAttribute('data-suffix') || '';
                        const duration = 2000;
                        const increment = target / (duration / 16);
                        let current = 0;

                        function updateCounter() {
                            current += increment;
                            if (current < target) {
                                el.textContent = Math.floor(current) + suffix;
                                requestAnimationFrame(updateCounter);
                            } else {
                                el.textContent = target + suffix;
                            }
                        }

                        updateCounter();
                        counterObserver.unobserve(el);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(function(el) {
                counterObserver.observe(el);
            });
        }

        // ─── Magnetic hover cards ────────────────────────────
        document.querySelectorAll('.magnetic-card, .services-magnetic-card').forEach(function(card) {
            card.addEventListener('mousemove', function(e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale3d(1.02, 1.02, 1.02)';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            });
        });

        // ─── Text split for character animations ─────────────
        document.querySelectorAll('.split-text').forEach(function(el) {
            const text = el.textContent;
            el.textContent = '';
            el.setAttribute('aria-label', text);

            text.split('').forEach(function(char, i) {
                const span = document.createElement('span');
                span.textContent = char === ' ' ? '\u00A0' : char;
                span.style.display = 'inline-block';
                span.style.transitionDelay = (i * 0.03) + 's';
                el.appendChild(span);
            });
        });

        // ─── Smooth scroll for anchor links ──────────────────
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    closeMobileMenu();
                }
            });
        });
    });
    </script>

    @yield('scripts')
</body>
</html>
