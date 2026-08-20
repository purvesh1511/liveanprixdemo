@extends('components.layout')

@section('title', $seo['title'] ?? '')

@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    @if(!empty($seo['canonical']))
    <link rel="canonical" href="{{ config('anprix.url') . $seo['canonical'] }}">
    @endif
    <meta property="og:title" content="{{ $seo['title'] ?? '' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/portfolio') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="hero-gradient min-h-[85vh] flex items-center pt-28 sm:pt-32 md:pt-40 pb-16 sm:pb-20 md:pb-28 overflow-hidden relative">
    <div class="absolute top-[-80px] left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left fade-in-up">
                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2 justify-center lg:justify-start">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    OUR PORTFOLIO
                </p>
                <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-6 sm:mb-8">
                    Creative
                    <span class="hero-heading-accent green-text">Digital Projects</span>
                    We Have Delivered
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl mx-auto lg:mx-0">
                    Explore our portfolio of
                    <span class="text-white font-medium">website development</span>,
                    <span class="text-white font-medium">Shopify stores</span>,
                    <span class="text-white font-medium">SEO optimization</span>,
                    and <span class="text-white font-medium">digital marketing projects</span>.
                </p>

                <!-- Service Tags -->
                <div class="flex flex-wrap gap-3 mt-8 justify-center lg:justify-start">
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00ffb3]/10 hover:border-[#00ffb3]/30 transition-all duration-300">
                        <i class="fas fa-code text-[#00ffb3]"></i>
                        Web Design
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00b7ff]/10 hover:border-[#00b7ff]/30 transition-all duration-300">
                        <i class="fab fa-shopify text-[#00b7ff]"></i>
                        Shopify
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00ffb3]/10 hover:border-[#00ffb3]/30 transition-all duration-300">
                        <i class="fas fa-search text-[#00ffb3]"></i>
                        SEO
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00b7ff]/10 hover:border-[#00b7ff]/30 transition-all duration-300">
                        <i class="fas fa-bullhorn text-[#00b7ff]"></i>
                        Marketing
                    </div>
                </div>

                <!-- Mini Stats -->
                <div class="flex flex-wrap items-center gap-5 sm:gap-8 mt-10 pt-6 border-t border-white/5 justify-center lg:justify-start">
                    <div class="hero-mini-stat">
                        <span class="text-xl sm:text-2xl font-black green-text counter" data-target="100">
                            <span>100</span>+
                        </span>
                        <p class="text-[11px] text-gray-500 mt-0.5">Projects Done</p>
                    </div>
                    <div class="w-px h-8 bg-white/5"></div>
                    <div class="hero-mini-stat">
                        <span class="text-xl sm:text-2xl font-black blue-text counter" data-target="50">
                            <span>50</span>+
                        </span>
                        <p class="text-[11px] text-gray-500 mt-0.5">Happy Clients</p>
                    </div>
                    <div class="w-px h-8 bg-white/5"></div>
                    <div class="hero-mini-stat">
                        <span class="text-xl sm:text-2xl font-black green-text counter" data-target="98">
                            <span>98</span>%
                        </span>
                        <p class="text-[11px] text-gray-500 mt-0.5">Success Rate</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="relative mt-6 lg:mt-0 flex items-center justify-center fade-in-up delay-200">
                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-sm lg:max-w-md mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/portfolio.png') }}"
                             alt="Anprix Portfolio"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[75%] sm:max-w-[70%] md:max-w-[65%] lg:max-w-[80%] xl:max-w-[420px] mx-auto animate-float">
                    </div>

                    <!-- Floating Badge: Projects -->
                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-briefcase text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Delivered</p>
                                <p class="text-sm font-semibold text-[#00ffb3]">100+ Projects</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge: Rating -->
                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-star text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Rating</p>
                                <p class="text-sm font-semibold">4.9 / 5.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FILTER SECTION -->
<section class="py-10 md:py-12 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-5">
            <button class="category-btn active px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]" data-filter="all">All Projects</button>
            <button class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]" data-filter="web">Website Design</button>
            <button class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00b7ff]" data-filter="shopify">Shopify</button>
            <button class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00ffb3]" data-filter="seo">SEO</button>
            <button class="category-btn px-5 py-2.5 rounded-full text-sm md:text-base transition border border-white/10 hover:border-[#00b7ff]" data-filter="marketing">Marketing</button>
        </div>
    </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="py-16 md:py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h2 class="sr-only">Portfolio</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8" id="portfolio-grid">
            @foreach($portfolioItems as $item)
            <div class="portfolio-card glass-card rounded-[24px] md:rounded-[35px] overflow-hidden group transition-transform hover:-translate-y-1"
                data-category="{{ $item->category }}" data-id="{{ $item->id }}">

                <div class="relative h-[220px] sm:h-[260px] md:h-[320px] overflow-hidden">
                    <img src="{{ $item->image ? (str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image)) : asset('assets/images/portfolio.png') }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="{{ $item->title }}" loading="lazy">

                    <div class="absolute top-4 left-4 md:top-5 md:left-5">
                        <span class="{{ $item->type_color == 'green' ? 'bg-[#00ffb3]' : 'bg-[#00b7ff]' }} text-black text-xs sm:text-sm font-bold px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-lg">
                            {{ $item->type }}
                        </span>
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4 md:p-6">
                        <div class="flex flex-wrap gap-2 justify-center">
                            @foreach($item->features as $feature)
                            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] sm:text-xs text-white">
                                {{ $feature }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="p-6 md:p-8">
                    <p class="{{ $item->type_color == 'green' ? 'green-text' : 'blue-text' }} uppercase tracking-[3px] text-xs mb-3 md:mb-4">
                        {{ $item->subtitle }}
                    </p>
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-black mb-3 md:mb-4 transition-colors duration-300 group-hover:text-[#00ffb3]">
                        {{ $item->title }}
                    </h3>
                    <p class="text-gray-400 text-sm md:text-base leading-7 md:leading-8 mb-5 md:mb-6">
                        {{ $item->description }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[10px] sm:text-xs px-3 py-1 rounded-full bg-white/5 border border-white/10">
                            {{ $item->technology }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-500">
                            <i class="fas fa-star text-yellow-500 text-xs sm:text-sm"></i>
                            <span>4.9 Rating</span>
                        </div>
                        <a href="{{ route('contact') }}?project={{ $item->id }}"
                            class="{{ $item->type_color == 'green' ? 'green-text' : 'blue-text' }} font-semibold text-sm sm:text-base hover:underline inline-flex items-center gap-2 group/link">
                            View Project
                            <i class="fas fa-arrow-right group-hover/link:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 md:mt-16">
            <button id="loadMoreBtn" class="btn-outline px-6 md:px-8 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2">
                Load More Projects
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
    </div>
</section>

<!-- Portfolio Stats Section -->
<section class="py-12 md:py-16 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-100">
                <div class="text-4xl sm:text-5xl font-black green-text mb-3 counter flex items-center justify-center gap-2" data-target="100">
                    <i class="fa-solid fa-briefcase text-xl sm:text-2xl"></i><span>0</span>
                </div>
                <p class="text-gray-500 text-sm sm:text-base">Projects Completed</p>
            </div>
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-200">
                <div class="text-4xl sm:text-5xl font-black blue-text mb-3 counter flex items-center justify-center gap-2" data-target="50">
                    <i class="fa-solid fa-users text-xl sm:text-2xl"></i><span>0</span>
                </div>
                <p class="text-gray-500 text-sm sm:text-base">Happy Clients</p>
            </div>
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-300">
                <div class="text-4xl sm:text-5xl font-black green-text mb-3 counter flex items-center justify-center gap-2" data-target="98">
                    <i class="fa-solid fa-chart-line text-xl sm:text-2xl"></i><span>0</span>
                </div>
                <p class="text-gray-500 text-sm sm:text-base">Success Rate (%)</p>
            </div>
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-400">
                <div class="text-4xl sm:text-5xl font-black blue-text mb-3 counter flex items-center justify-center gap-2" data-target="24">
                    <i class="fa-solid fa-headset text-xl sm:text-2xl"></i><span>0</span>
                </div>
                <p class="text-gray-500 text-sm sm:text-base">24/7 Support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-28 section-border overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="glass-card rounded-[28px] sm:rounded-[40px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">
            <div class="absolute top-[-60px] left-[-60px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-60px] right-[-60px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>
            <div class="relative z-10">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-sm">START YOUR PROJECT</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">Ready To Build Your Next Digital Project?</h2>
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-8 md:mb-10">
                    Work with Anprix to create modern websites, Shopify stores, SEO campaigns, and powerful marketing solutions.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">
                    <a href="{{ route('hire') }}" class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-rocket"></i> Hire Us
                    </a>
                    <a href="{{ route('contact') }}" class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
