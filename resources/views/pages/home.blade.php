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
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['title'] ?? '' }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
@endsection

@section('content')
<!-- HERO SECTION -->

<section class="hero-gradient min-h-screen flex items-center pt-24 lg:pt-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">


        <!-- LEFT CONTENT -->
        <div class="text-center lg:text-left">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-6 lg:mb-8 mx-auto lg:mx-0">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3]"></span>
                <span class="text-xs sm:text-sm text-gray-300">
                    Top Website Design & Development Company in Ahmedabad
                </span>
            </div>

            <!-- H1 -->
            <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-6 lg:mb-8">
                Build Websites.
                <span class="green-text">Rank on Google.</span>
                <span class="blue-text">Generate More Leads.</span>
            </h1>

            <!-- Description -->
            <p class="text-gray-400 text-base sm:text-lg leading-8 sm:leading-9 mb-8 lg:mb-10 max-w-2xl mx-auto lg:mx-0">
                Anprix Solutions is a leading website development, SEO, and digital marketing company in Ahmedabad, India.
                We build custom websites, Shopify stores, and Laravel web applications, then optimize them with
                technical SEO, Google Ads, and social media marketing to drive traffic, leads, and revenue.
            </p>

            <!-- Service Tags -->
            <div class="flex flex-wrap gap-2 mb-8 justify-center lg:justify-start">
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Website Development</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00b7ff]/10 border border-[#00b7ff]/20 text-[#00b7ff]">SEO Services</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Google Ads</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00b7ff]/10 border border-[#00b7ff]/20 text-[#00b7ff]">Social Media Marketing</span>
                <span class="text-xs px-3 py-1.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3]">Shopify Development</span>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 mb-5 justify-center lg:justify-start">
                <a href="{{ route('contact') }}"
                    class="btn-primary px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl w-full sm:w-auto text-center">
                    <i class="fas fa-rocket mr-2"></i>
                    Get Free SEO Audit
                </a>

                <a href="{{ route('hire') }}"
                    class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg transition w-full sm:w-auto text-center">
                    Start Your Project
                </a>
            </div>

            <!-- Stats -->
            <!-- <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mt-12 mb-5 lg:mt-14 text-center lg:text-left">
                <div>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold green-text">
                        250+
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Websites Delivered
                    </p>
                </div>

                <div>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold blue-text">
                        150+
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Happy Clients
                    </p>
                </div>

                <div>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold green-text">
                        24/7
                    </h3>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Technical Support
                    </p>
                </div>
            </div> -->
        </div>

        <!-- RIGHT CONTENT -->
        <div class="relative mt-6 lg:mt-0 flex items-center justify-center">

            <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

            <!-- MAIN IMAGE SHOWCASE -->
            <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                    <img src="{{ asset('assets/images/heroright1.webp') }}"
                         alt="Anprix Solutions - Website Development Company"
                         width="680" height="500" fetchpriority="high"
                         class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                </div>

                <!-- Floating Badge: Web Development -->
                <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-code text-sm icon-float"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                            <p class="text-sm font-semibold">Web Development</p>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge: SEO -->
                <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-chart-line text-sm icon-float"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] text-gray-500 uppercase tracking-wide">Top Rated</p>
                            <p class="text-sm font-semibold">SEO Services</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

</section>

<!-- CASE STUDIES / RESULTS SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                RECENT RESULTS
            </p>
            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 leading-tight">
                Real Projects, <span class="green-text">Real Growth</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Here are some measurable results we've delivered for our clients through strategic digital solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-100 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black green-text mb-2 counter" data-target="300">
                    <span>300</span>%
                </div>
                <p class="text-gray-400 text-sm mb-3">Traffic Increase</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 90%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">SEO + Content strategy</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-200 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black blue-text mb-2 counter" data-target="150">
                    <span>150</span>+
                </div>
                <p class="text-gray-400 text-sm mb-3">Leads Generated</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 85%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Google Ads campaign</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-300 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black green-text mb-2 counter" data-target="95">
                    <span>95</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">PageSpeed Score</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 95%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Performance optimization</p>
            </div>

            <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-400 hover:-translate-y-1 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-black blue-text mb-2 counter" data-target="3">
                    <span>3</span>x
                </div>
                <p class="text-gray-400 text-sm mb-3">Sales Growth</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 88%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Shopify redesign + SEO</p>
            </div>

        </div>

        <div class="text-center mt-10 fade-in-up">
            <a href="{{ route('portfolio') }}"
               class="inline-flex items-center gap-2 text-[#00ffb3] hover:text-white transition border border-[#00ffb3]/30 hover:border-[#00ffb3] px-6 py-3 rounded-2xl text-sm font-semibold">
                View Full Portfolio
                <i class="fas fa-arrow-right icon-hover"></i>
            </a>
        </div>

    </div>
</section>

<!-- HOW WE WORK - 2-COLUMN LAYOUT -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT COLUMN - enhanced -->
            <div class="lg:sticky lg:top-24 fade-in-up">

                <!-- DECORATIVE GLASS ELEMENT -->
                <div class="relative inline-block mb-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#00ffb3]/20 to-[#00b7ff]/20 rounded-2xl blur-xl opacity-60"></div>
                    <div class="relative px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="green-text font-semibold tracking-[0.25em] uppercase text-xs flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse shadow-lg shadow-[#00ffb3]/50"></span>
                            HOW WE WORK
                            <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse shadow-lg shadow-[#00b7ff]/50"></span>
                        </p>
                    </div>
                </div>

                <!-- HEADING -->
                <h2 class="text-xl sm:text-4xl md:text-5xl font-black mb-6 leading-[1.1]">
                    How We <span class="green-text">Deliver</span><br>
                    <span class="text-white/70">Results</span>
                </h2>

                <!-- GRADIENT DECORATIVE LINE -->
                <div class="w-24 h-1 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-8"></div>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base md:text-lg leading-8 mb-8">
                    A streamlined process designed to deliver high-quality websites
                    and digital solutions on time, every time.
                </p>

                <!-- MINI STATS ROW -->
                <div class="flex flex-wrap gap-6 mb-10">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fas fa-rocket text-sm text-[#00ffb3] icon-hover"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Fast</p>
                            <p class="text-gray-500 text-xs">2-week delivery</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                            <i class="fas fa-code text-sm text-[#00b7ff] icon-hover"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Modern</p>
                            <p class="text-gray-500 text-xs">SEO-optimized code</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fas fa-headset text-sm text-[#00ffb3] icon-hover"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Support</p>
                            <p class="text-gray-500 text-xs">24/7 dedicated</p>
                        </div>
                    </div>
                </div>

                <!-- CTA BUTTON -->
                <a href="#contactForm"
                    class="btn-primary inline-flex items-center gap-3 px-8 py-4 rounded-full text-sm font-bold hover:scale-105 transition-all shadow-lg shadow-[#00ffb3]/20">
                    Start Your Project
                    <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center">
                        <i class="fas fa-arrow-right text-xs"></i>
                    </span>
                </a>
            </div>

            <!-- RIGHT COLUMN -->
            <div>
                <div class="flex flex-col gap-5">

                    @php
                    $how_work_steps = [
                        ['num' => '01', 'title' => 'Discovery', 'desc' => 'We analyze your business goals, target audience, and competitors to define the perfect strategy.', 'color' => '#00ffb3', 'icon' => 'fa-lightbulb'],
                        ['num' => '02', 'title' => 'Design', 'desc' => 'Modern UI/UX design with wireframes and prototypes tailored to your brand identity.', 'color' => '#00b7ff', 'icon' => 'fa-paint-brush'],
                        ['num' => '03', 'title' => 'Develop', 'desc' => 'Clean, scalable code with SEO best practices, speed optimization, and rigorous testing.', 'color' => '#00ffb3', 'icon' => 'fa-code'],
                        ['num' => '04', 'title' => 'Launch & Grow', 'desc' => 'Deploy, monitor, optimize, and provide ongoing support to ensure long-term success.', 'color' => '#00b7ff', 'icon' => 'fa-rocket'],
                    ];
                    @endphp

                    @foreach($how_work_steps as $i => $s)
                    <div class="process-step-card glass-card rounded-2xl p-6 md:p-7 relative border border-white/5 fade-in-up"
                        style="--step-color: {{ $s['color'] }}; transition-delay: {{ $i * 0.1 }}s">

                        <div class="process-step-number text-6xl md:text-7xl font-black text-white/10 absolute right-6 top-2 select-none">
                            {{ $s['num'] }}
                        </div>

                        <div class="relative z-10 pr-20">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                                    style="background: {{ $s['color'] }}20; color: {{ $s['color'] }};">
                                    <i class="fas {{ $s['icon'] }}"></i>
                                </div>
                                <h3 class="text-xl md:text-xl font-bold">
                                    {{ $s['title'] }}
                                </h3>
                            </div>
                            <p class="text-gray-400 leading-7 relative z-10">
                                {{ $s['desc'] }}
                            </p>
                            <div class="flex items-center gap-2 mt-4 relative z-10">
                                <span class="w-1.5 h-1.5 rounded-full"
                                    style="background: {{ $s['color'] }}"></span>
                                <span class="text-xs text-gray-500">
                                    Step {{ $s['num'] }}
                                </span>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</section>
<!-- SERVICES SECTION V2 -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <!-- Background decoration -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <!-- HEADING -->
        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">What We Offer</span>
            </div>

            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">OUR SERVICES</span>
            </h2>

            <p class="max-w-2xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal" id="services-desc">
                We help startups, brands, and businesses grow with high-performance
                websites, SEO, paid ads, and full-stack digital marketing solutions.
            </p>

        </div>

        <!-- SERVICES GRID V2 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6" id="services-grid-v2">

            <!-- 01 WEBSITE DEVELOPMENT -->
            <a href="{{ route('website-development') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00b7ff; transition-delay: 0.05s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">01</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-laptop-code text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        Website Development
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Laravel, WordPress, Shopify, and custom web applications built for performance.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 02 WORDPRESS DEVELOPMENT -->
            <a href="{{ route('wordpress-development') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00ffb3; transition-delay: 0.1s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">02</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fab fa-wordpress text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        WordPress Development
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Custom themes, plugins, WooCommerce stores, and CMS solutions built on WordPress.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 03 ECOMMERCE DEVELOPMENT -->
            <a href="{{ route('ecommerce-development') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00b7ff; transition-delay: 0.15s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">03</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-shopping-cart text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        eCommerce Development
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        High-converting online stores on Shopify, WooCommerce, Magento, and custom platforms.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 04 WEBSITE REDESIGN -->
            <a href="{{ route('website-redesign') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00ffb3; transition-delay: 0.2s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">04</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-paint-brush text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        Website Redesign
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Transform outdated websites into modern, high-performing digital assets with improved UX and speed.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 05 CMS DEVELOPMENT -->
            <a href="{{ route('cms-development') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00ffb3; transition-delay: 0.25s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">05</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-cogs text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        CMS Development
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Custom CMS platforms, headless CMS, and content management solutions for easy growth.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 06 SEO SERVICES -->
            <a href="{{ route('seo') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00ffb3; transition-delay: 0.3s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">06</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-chart-line text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        SEO Services
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Technical SEO, keyword ranking, backlinks, and local search optimization.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 07 DIGITAL MARKETING -->
            <a href="{{ route('digital-marketing') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00b7ff; transition-delay: 0.35s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">07</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-bullhorn text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        Digital Marketing
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Social media growth, branding, funnels, and online marketing strategies.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 08 ADVERTISING -->
            <a href="{{ route('advertising') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00b7ff; transition-delay: 0.4s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">08</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-ad text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        Advertising
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Google Ads, social media ads, retargeting, and data-driven ad campaigns.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

            <!-- 09 BRANDING & CREATIVE -->
            <a href="{{ route('branding-creative') }}"
                class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal block group"
                style="--accent: #00ffb3; transition-delay: 0.45s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">09</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-palette text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        Branding & Creative
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Logo design, brand identity, visual storytelling, and creative strategy.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Learn More</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </a>

        </div>

    </div>
</section>

<!-- CTA SECTION -->

<!-- TESTIMONIAL SECTION -->
<section class="py-16 md:py-24 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADING -->
        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                CLIENT TESTIMONIALS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 leading-tight">
                What Our Clients Say
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Businesses trust Anprix for website development, SEO optimization,
                Shopify solutions, and digital marketing services that deliver real growth.
            </p>
        </div>

        <!-- TESTIMONIAL CAROUSEL -->
        <div id="index-testimonial-carousel" class="relative max-w-5xl mx-auto">

            <!-- SLIDES CONTAINER -->
            <div class="overflow-hidden">

                @foreach($testimonials as $index => $t)
                <div class="testimonial-slide {{ $index === 0 ? 'block' : 'hidden' }}" data-index="{{ $index }}">

                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">

                        <!-- LEFT: CLIENT AVATAR + EXPERIENCE -->
                        <div class="shrink-0 flex flex-col items-center gap-4">

                            <!-- Avatar -->
                            <div class="relative">
                                <div class="w-20 h-20 md:w-24 md:h-24 rounded-full flex items-center justify-center text-2xl md:text-3xl font-black bg-gradient-to-br {{ $t->color }} text-black shadow-lg">
                                    {{ $t->initials }}
                                </div>
                                <!-- Online dot -->
                                <div class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-[#00ffb3] border-4 border-[#0a0a0a] flex items-center justify-center">
                                    <i class="fas fa-check text-[8px] text-black"></i>
                                </div>
                            </div>

                            <!-- Experience Badge -->
                            <div class="glass-card rounded-2xl px-4 py-2.5 border border-[#00ffb3]/20 text-center">
                                <p class="text-xl md:text-2xl font-black green-text leading-none">10+</p>
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider mt-1">Years Experience</p>
                            </div>

                        </div>

                        <!-- RIGHT: MESSAGE BUBBLE -->
                        <div class="relative flex-1 max-w-2xl">

                            <!-- Bubble -->
                            <div class="relative glass-card rounded-[24px] md:rounded-[30px] p-6 sm:p-8 md:p-10 border border-white/10">

                                <!-- Arrow (top-left pointing to avatar) -->
                                <div class="hidden md:block absolute -left-3 top-8 w-0 h-0 border-t-[10px] border-t-transparent border-r-[12px] border-r-white/10 border-b-[10px] border-b-transparent"></div>
                                <div class="md:hidden absolute -top-3 left-10 w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[12px] border-b-white/10"></div>

                                <!-- Quote icon -->
                                <div class="flex items-center gap-3 mb-4 md:mb-5">
                                    <div class="w-9 h-9 rounded-lg flex items-center justify-center"
                                         style="background: {{ $t->star_color }}15;">
                                        <i class="fas fa-quote-left text-sm" style="color: {{ $t->star_color }};"></i>
                                    </div>
                                    <!-- Stars -->
                                    <div class="flex gap-0.5" style="color: {{ $t->star_color }}">
                                        {!! str_repeat('<i class="fas fa-star text-xs"></i> ', $t->stars) !!}
                                    </div>
                                </div>

                                <!-- Message -->
                                <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-7 md:leading-8 mb-6">
                                    {{ $t->message }}
                                </p>

                                <!-- Client Row -->
                                <div class="flex items-center justify-between pt-5 border-t border-white/5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold bg-gradient-to-br {{ $t->color }} text-black">
                                            {{ $t->initials }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm">{{ $t->name }}</p>
                                            <p class="text-gray-500 text-xs">{{ $t->role }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                        <i class="fas fa-check-circle text-[#00ffb3]"></i>
                                        Verified Client
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                @endforeach

            </div>

            <!-- DOTS + NAV -->
            <div class="flex items-center justify-center gap-4 mt-10 md:mt-12">

                <!-- Prev -->
                <button type="button" id="index-testimonial-prev"
                        class="w-10 h-10 rounded-full glass-card border border-white/10 flex items-center justify-center text-white/60 hover:text-[#00ffb3] hover:border-[#00ffb3]/30">
                    <i class="fas fa-chevron-left text-xs"></i>
                </button>

                <!-- Dots -->
                <div class="flex items-center gap-2">
                    @foreach($testimonials as $index => $t)
                    <button type="button"
                            class="index-testimonial-dot w-2.5 h-2.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'w-7' : 'bg-white/20 hover:bg-white/40' }}"
                            data-index="{{ $index }}"
                            style="{{ $index === 0 ? 'background:' . $t->star_color : '' }}">
                    </button>
                    @endforeach
                </div>

                <!-- Next -->
                <button type="button" id="index-testimonial-next"
                        class="w-10 h-10 rounded-full glass-card border border-white/10 flex items-center justify-center text-white/60 hover:text-[#00ffb3] hover:border-[#00ffb3]/30">
                    <i class="fas fa-chevron-right text-xs"></i>
                </button>

            </div>

        </div>

        <!-- BOTTOM STATS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mt-14 md:mt-20">

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-100">
                <h3 class="text-xl sm:text-3xl md:text-4xl font-black green-text mb-3 counter" data-target="100">
                    <span>100</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Completed Projects</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-200">
                <h3 class="text-xl sm:text-3xl md:text-4xl font-black blue-text mb-3 counter" data-target="50">
                    <span>50</span>+
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Happy Clients</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-300">
                <h3 class="text-xl sm:text-3xl md:text-4xl font-black green-text mb-3 counter" data-target="98">
                    <span>98</span>%
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Client Satisfaction</p>
            </div>

            <!-- STAT -->
            <div class="stat-card glass-card rounded-2xl md:rounded-3xl p-6 md:p-8 text-center border border-white/10 fade-in-up delay-400">
                <h3 class="text-xl sm:text-3xl md:text-4xl font-black blue-text mb-3 counter" data-target="24">
                    <span>24</span>/7
                </h3>
                <p class="text-gray-500 text-sm md:text-base leading-6">Premium Support</p>
            </div>

        </div>

    </div>
</section>

<!-- Index Testimonial Carousel JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots   = document.querySelectorAll('.index-testimonial-dot');
    const prev   = document.getElementById('index-testimonial-prev');
    const next   = document.getElementById('index-testimonial-next');
    let current  = 0;
    let autoPlay;

    function showSlide(index) {
        slides.forEach(s => s.classList.add('hidden'));
        dots.forEach(d => {
            d.classList.remove('w-8');
            d.classList.add('bg-white/20');
            d.style.background = '';
        });
        slides[index].classList.remove('hidden');
        dots[index].classList.remove('bg-white/20');
        dots[index].classList.add('w-8');
        const colors = @json($testimonials->pluck('star_color')->toArray());
        dots[index].style.background = colors[index] || '#00ffb3';
        current = index;
    }

    function nextSlide() { showSlide((current + 1) % slides.length); }
    function prevSlide() { showSlide((current - 1 + slides.length) % slides.length); }

    if (next && prev) {
        next.addEventListener('click', function() { nextSlide(); resetAuto(); });
        prev.addEventListener('click', function() { prevSlide(); resetAuto(); });
    }
    dots.forEach(d => d.addEventListener('click', function() {
        showSlide(parseInt(this.dataset.index)); resetAuto();
    }));

    function resetAuto() { clearInterval(autoPlay); autoPlay = setInterval(nextSlide, 5000); }
    resetAuto();
});
</script>

<!-- FAQ SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-16 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                FAQ
            </p>
            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 leading-tight">
                Frequently Asked <span class="green-text">Questions</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Everything you need to know about our website development, SEO, and digital marketing services.
            </p>
        </div>

        <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">
            @foreach($faqs as $idx => $faq)
            <div class="glass-card rounded-2xl border border-white/10 overflow-hidden fade-in-up delay-{{ ($idx + 1) * 100 }}" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button class="faq-btn w-full flex items-center justify-between p-5 sm:p-6 text-left transition" onclick="$(this).next().slideToggle(300);$(this).find('.faq-icon').toggleClass('rotate-180')">
                    <span class="font-bold text-base sm:text-lg pr-4" itemprop="name">{{ $faq->question }}</span>
                    <svg class="faq-icon w-5 h-5 shrink-0 text-[#00ffb3] transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden px-5 sm:px-6 pb-5 sm:pb-6" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text" class="text-gray-400 text-sm sm:text-base leading-7">{!! $faq->answer !!}</div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- HIRE US FORM SECTION -->
<section class="py-16 md:py-24 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start lg:items-center">

            <!-- LEFT CONTENT -->
            <div class="fade-in-up">

                <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">
                    HIRE ANPRIX
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Let's Build Your
                    <span class="green-text block sm:inline">Next Digital Project</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 mb-10">
                    Need a professional website, Shopify store, SEO optimization,
                    Google Ads campaign, or complete digital marketing solution?
                    Our expert team is ready to help your business grow online.
                </p>

                <div class="space-y-6">

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold">Premium Website Design</h3>
                            <p class="text-gray-500 text-sm md:text-base">Modern responsive websites optimized for
                                speed.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold">SEO & Google Ranking</h3>
                            <p class="text-gray-500 text-sm md:text-base">Improve visibility and ranking on Google.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold">Marketing & Ads</h3>
                            <p class="text-gray-500 text-sm md:text-base">Generate leads using powerful campaigns.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="glass-card rounded-[24px] md:rounded-[35px] p-6 sm:p-8 md:p-10 border border-white/10 fade-in-up delay-200">

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black mb-6">
                    Hire Us
                </h3>

                <form class="ajax-form space-y-5 sm:space-y-6" method="POST" id="hireForm">
                    @csrf
                    <input type="hidden" name="form_type" value="hire">

                    <!-- NAME + PHONE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Full Name *
                            </label>
                            <input type="text" name="name" placeholder="Enter your full name" required minlength="3"
                                maxlength="80"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Phone Number
                            </label>
                            <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="15"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Email Address *
                        </label>
                        <input type="email" name="email" placeholder="Enter your email address" required maxlength="120"
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                    </div>

                    <!-- SERVICE -->
                    <div>
                        <label for="index-service" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Select Service *
                        </label>
                        <select id="index-service" name="service" required
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                            <option value="">Select a Service</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Advertising Services">Advertising Services</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Branding & Creative Services">Branding & Creative Services</option>
                        </select>
                    </div>

                    <!-- BUDGET + TIMELINE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                        <div>
                            <label for="index-budget" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Estimated Budget
                            </label>
                            <select id="index-budget" name="budget"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                                <option value="">Select Budget Range</option>
                                <option value="Less than $5,000">Less than $5,000</option>
                                <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                <option value="$25,000+">$25,000+</option>
                            </select>
                        </div>

                        <div>
                            <label for="index-timeline" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                                Project Timeline
                            </label>
                            <select id="index-timeline" name="timeline"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                                <option value="">Select Timeline</option>
                                <option value="ASAP (Within 2 weeks)">ASAP (Within 2 weeks)</option>
                                <option value="Within 1 month">Within 1 month</option>
                                <option value="1-3 months">1-3 months</option>
                                <option value="3+ months">3+ months</option>
                            </select>
                        </div>

                    </div>

                    <!-- DETAILS -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">
                            Project Details *
                        </label>

                        <textarea name="details" rows="5" required minlength="10" maxlength="2000"
                            placeholder="Tell us about your project..."
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] resize-none"></textarea>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full btn-primary py-4 sm:py-5 rounded-2xl text-base sm:text-lg font-semibold transition hover:scale-[1.02] active:scale-[0.98]">
                        Get Free Proposal
                        <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>

                    <p class="text-center text-gray-500 text-xs mt-4">
                        <i class="fa-solid fa-lock mr-1 icon-hover"></i>
                        Your information is secure. We'll never share your data.
                    </p>

                </form>

            </div>

        </div>

    </div>
</section>
@endsection
