@extends('components.layout')

@section('title', $seo['title'] ?? '')
@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ config('anprix.url') . ($seo['canonical'] ?? '') }}">
@endsection

@section('content')

<!-- HERO -->
<section class="py-24 sm:py-28 lg:py-32 relative overflow-hidden">

    <div class="absolute top-[-80px] sm:top-0 left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="absolute bottom-[-80px] sm:bottom-0 right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                    SEO Services in Ahmedabad
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Best SEO Company </span>
                    <span class="services-heading-gradient">in Ahmedabad</span>
                    <span class="txt-split block" style="font-size:0.65em; opacity:0.85;">| Drive Organic Growth & Top Rankings</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    Welcome to the leading SEO company in Ahmedabad, dedicated to turning organic search traffic into sustained business growth. Whether you are a local startup or an expanding enterprise, standing out online requires a specialized SEO agency that understands market intent, search algorithms, and customer behavior.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/seos.png') }}"
                             alt="Best SEO Company in Ahmedabad - Anprix Solutions"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-search text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">SEO Services</p>
                            </div>
                        </div>
                    </div>

                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-chart-line text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Results</p>
                                <p class="text-sm font-semibold">Higher Rankings</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- TRUST BAR -->
<section class="py-8 md:py-10 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <div class="text-center service-reveal" style="transition-delay: 0.05s;">
                <div class="text-2xl sm:text-3xl font-black green-text counter" data-target="10">
                    <span>10</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Years of SEO Experience</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.1s;">
                <div class="text-2xl sm:text-3xl font-black blue-text counter" data-target="200">
                    <span>200</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Clients Ranked on Google</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.15s;">
                <div class="text-2xl sm:text-3xl font-black green-text counter" data-target="300">
                    <span>300</span>%
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Average Traffic Increase</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.2s;">
                <div class="text-2xl sm:text-3xl font-black blue-text">
                    Top 10
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Google Rankings Achieved</p>
            </div>
        </div>
    </div>
</section>

<!-- RESULTS-DRIVEN SEO SERVICES -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Our SEO Services</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Results-Driven </span>
                <span class="services-heading-gradient">SEO Services</span>
                <span class="txt-split"> in Ahmedabad</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                At our top SEO company in Ahmedabad, we deliver tailor-made growth strategies designed for your specific industry. Our solutions focus on long-term SERP visibility and measurable ROI.
            </p>

        </div>

        <!-- 4 SERVICE CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6" id="seo-services-grid">

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Local SEO Services</h3>
                        <p class="text-gray-500 text-sm">Google Business & Maps ranking</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Dominating local map packs and regional searches with optimized Google Business Profiles, local citation building, and targeted geotagged content.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-cog text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">On-Page & Technical Optimization</h3>
                        <p class="text-gray-500 text-sm">Speed, structure & crawl optimization</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Fine-tuning page speed, Core Web Vitals, site architecture, and meta elements so search engines crawl and rank your pages effortlessly.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-link text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Authority Link Building</h3>
                        <p class="text-gray-500 text-sm">High-quality white-hat backlinks</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Strengthening your online authority through high-quality, white-hat backlink acquisition strategies that boost domain authority and referral traffic.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.2s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                        <i class="fas fa-bullseye text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Strategic SEO Marketing</h3>
                        <p class="text-gray-500 text-sm">Buyer intent & conversion optimization</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Capturing buyer intent with engaging content marketing, keyword mapping, and conversion-optimized landing pages that turn visitors into paying clients.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- WHY PARTNER - SPLIT LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: FEATURE CARDS -->
            <div class="grid grid-cols-2 gap-4 md:gap-5 service-reveal">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-award text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">10+ Years Expertise</h4>
                    <p class="text-gray-500 text-xs leading-5">Navigating every Google update</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-brain text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Deep Market Analysis</h4>
                    <p class="text-gray-500 text-xs leading-5">Competitive keyword strategy</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-robot text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">AI-Ready SEO</h4>
                    <p class="text-gray-500 text-xs leading-5">Optimized for AI search overviews</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-dollar-sign text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Revenue Over Vanity</h4>
                    <p class="text-gray-500 text-xs leading-5">ROI-focused strategies</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center sm:col-span-2"
                     style="--accent: #00b7ff; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                            <i class="fas fa-chart-pie text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h4 class="text-sm font-bold group-hover:text-[#00b7ff] transition-colors">Transparent Reporting</h4>
                            <p class="text-gray-500 text-xs leading-5">Clear, jargon-free monthly reports</p>
                        </div>
                    </div>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center sm:col-span-2"
                     style="--accent: #00ffb3; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                            <i class="fas fa-mobile-alt text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h4 class="text-sm font-bold group-hover:text-[#00ffb3] transition-colors">Mobile-First Indexing</h4>
                            <p class="text-gray-500 text-xs leading-5">Optimized for every screen size</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: TEXT -->
            <div class="service-reveal" style="transition-delay: 0.1s;">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                    <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                    <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Why Partner With Us</span>
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Why Partner with the Best
                    <span class="services-heading-gradient block sm:inline"> SEO Agency in Ahmedabad?</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Choosing the best SEO agency in Ahmedabad means partnering with dedicated specialists who prioritize revenue and lead quality over vanity metrics. Digital search is changing rapidly—with AI search overviews and mobile-first indexing redefining how customers find local solutions.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    As a trusted SEO agency Ahmedabad businesses count on, we merge deep market analysis with continuous technical refinement. We ensure your business ranks high for competitive keywords while turning site visitors into loyal, paying clients.
                </p>

                <a href="{{ route('contact') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Scale Your Organic Traffic
                </a>

            </div>

        </div>

    </div>
</section>

<!-- PROVEN SEO RESULTS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Proven Results</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Measurable </span>
                <span class="services-heading-gradient">SEO Growth</span>
                <span class="txt-split"> We Deliver</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Our data-driven SEO strategies consistently deliver measurable results for businesses across industries.
            </p>

        </div>

        <!-- STATS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

            <div class="services-magnetic-card glass-card rounded-[24px] p-6 md:p-8 border border-white/[0.06] text-center service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-4xl md:text-5xl font-black green-text mb-2 counter" data-target="300">
                    <span>300</span>%
                </div>
                <p class="text-gray-400 text-sm mb-3">Avg. Traffic Increase</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 90%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Within 6 months</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[24px] p-6 md:p-8 border border-white/[0.06] text-center service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-4xl md:text-5xl font-black blue-text mb-2 counter" data-target="150">
                    <span>150</span>+
                </div>
                <p class="text-gray-400 text-sm mb-3">Keywords in Top 10</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 85%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Google first page</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[24px] p-6 md:p-8 border border-white/[0.06] text-center service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-4xl md:text-5xl font-black green-text mb-2 counter" data-target="95">
                    <span>95</span>
                </div>
                <p class="text-gray-400 text-sm mb-3">PageSpeed Score</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00ffb3] to-[#00b7ff]" style="width: 95%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Technical SEO optimization</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[24px] p-6 md:p-8 border border-white/[0.06] text-center service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.2s;">
                <div class="card-border-glow rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-4xl md:text-5xl font-black blue-text mb-2 counter" data-target="3">
                    <span>3</span>x
                </div>
                <p class="text-gray-400 text-sm mb-3">Lead Generation</p>
                <div class="w-full h-1.5 rounded-full bg-white/5 overflow-hidden">
                    <div class="h-full rounded-full bg-gradient-to-r from-[#00b7ff] to-[#00ffb3]" style="width: 88%"></div>
                </div>
                <p class="text-gray-500 text-xs mt-3">Average client growth</p>
            </div>

        </div>

    </div>

</section>

<!-- SEO TOOLS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    SEO Tools
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Use Industry-Leading
                    <span class="services-heading-gradient block sm:inline"> SEO Tools</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    From keyword research and rank tracking to site audits and competitor analysis, we leverage the best SEO tools to deliver measurable results for your business.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your SEO Journey
                </a>

            </div>

            <!-- RIGHT: TOOL CARDS -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-5">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-chart-bar text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">SEMrush</h4>
                    <p class="text-gray-500 text-xs leading-5">Research & audits</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-google text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Search Console</h4>
                    <p class="text-gray-500 text-xs leading-5">Monitoring & insights</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fab fa-google text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Analytics</h4>
                    <p class="text-gray-500 text-xs leading-5">Traffic analysis</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-link text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Ahrefs</h4>
                    <p class="text-gray-500 text-xs leading-5">Backlink analysis</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-tachometer-alt text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">GTmetrix</h4>
                    <p class="text-gray-500 text-xs leading-5">Speed optimization</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-key text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Moz</h4>
                    <p class="text-gray-500 text-xs leading-5">Domain authority</p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden service-reveal">

            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full">
            </div>

            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full">
            </div>

            <div class="relative z-10">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    SCALE YOUR ORGANIC TRAFFIC TODAY
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Outrank Your<br class="hidden sm:block"> Competitors?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    If you are ready to invest in the best SEO services in Ahmedabad to outrank competitors and capture high-intent leads, our team is equipped to deliver. Partner with the best SEO company Ahmedabad brands trust for transparent reporting and sustainable growth.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Complimentary Website Audit
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Start Your SEO Journey
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
