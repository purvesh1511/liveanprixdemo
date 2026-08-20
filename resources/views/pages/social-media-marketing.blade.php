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

            <div>

                <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                    Social Media Marketing Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Best Social Media Marketing Agency </span>
                    <span class="services-heading-gradient">in Ahmedabad</span>
                    <span class="txt-split block" style="font-size:0.65em; opacity:0.85;">| Grow Your Brand</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    In today's hyper-connected digital landscape, having a strong online presence is essential for sustainable business growth. We help local businesses, ambitious startups, and established enterprises build influence, engage high-intent audiences, and convert followers into loyal customers.
                </p>

            </div>

            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/social.png') }}"
                             alt="Best Social Media Marketing Agency in Ahmedabad - Anprix Solutions"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-share-alt text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">Social Media</p>
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
                                <p class="text-sm font-semibold">Brand Growth</p>
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
                <div class="text-2xl sm:text-3xl font-black green-text counter" data-target="200">
                    <span>200</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Brands Served</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.1s;">
                <div class="text-2xl sm:text-3xl font-black blue-text counter" data-target="500">
                    <span>500</span>+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Campaigns Delivered</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.15s;">
                <div class="text-2xl sm:text-3xl font-black green-text">
                    10M+
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Audience Reached</p>
            </div>
            <div class="text-center service-reveal" style="transition-delay: 0.2s;">
                <div class="text-2xl sm:text-3xl font-black blue-text counter" data-target="5">
                    <span>5</span>x
                </div>
                <p class="text-gray-500 text-xs sm:text-sm mt-1">Avg. Engagement Growth</p>
            </div>
        </div>
    </div>
</section>

<!-- DATA-DRIVEN SERVICES -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Our Services</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Data-Driven </span>
                <span class="services-heading-gradient">Social Media Marketing</span>
                <span class="txt-split"> Services in Ahmedabad</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Navigating the changing algorithms across Instagram, Meta, LinkedIn, and YouTube requires expertise and real-time strategy. Our focus goes beyond likes and vanity metrics to deliver real business impact and measurable ROI.
            </p>

        </div>

        <!-- 4 SERVICE CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6" id="sm-services-grid">

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                        <i class="fas fa-chess text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Social Media Strategy & Planning</h3>
                        <p class="text-gray-500 text-sm">Custom roadmaps for your goals</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Custom roadmaps tailored to your target audience persona, local market dynamics, and revenue objectives. We create data-backed strategies that align your social presence with real business outcomes.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-video text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Content Creation & Video Production</h3>
                        <p class="text-gray-500 text-sm">Scroll-stopping content in-house</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    High-converting Reels, carousel posts, brand storytelling, and engaging visual graphics produced in-house. Our creative team crafts content that resonates with your audience and drives engagement.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-ad text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Targeted Paid Social Advertising</h3>
                        <p class="text-gray-500 text-sm">Meta, LinkedIn & YouTube ads</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Laser-focused ad campaigns on Meta, LinkedIn, and YouTube engineered to capture leads and drive online sales. We optimize every rupee of your ad spend for maximum conversions.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.2s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                        <i class="fas fa-comments text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Community Management</h3>
                        <p class="text-gray-500 text-sm">Authentic trust & engagement</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Proactive engagement, DM responses, and comment management to foster authentic trust with your audience. We turn followers into brand advocates through genuine, timely interactions.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- HOW WE WORK - PROCESS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-[-80px] right-0 w-[500px] h-[500px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Our Process</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">How We </span>
                <span class="services-heading-gradient">Build Your Brand</span>
            </h2>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group relative"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-5xl md:text-6xl font-black text-white/[0.03] absolute top-4 right-5">01</div>
                <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-search text-xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Audit & Research</h3>
                <p class="text-gray-400 text-sm leading-6">Deep-dive into your audience, competitors, and market landscape.</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group relative"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-5xl md:text-6xl font-black text-white/[0.03] absolute top-4 right-5">02</div>
                <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-chess text-xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Strategy Design</h3>
                <p class="text-gray-400 text-sm leading-6">Custom content calendar and platform-specific roadmaps.</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group relative"
                 style="--accent: #00b7ff; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-5xl md:text-6xl font-black text-white/[0.03] absolute top-4 right-5">03</div>
                <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-5">
                    <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Create & Launch</h3>
                <p class="text-gray-400 text-sm leading-6">Content production, ad deployment, and community activation.</p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group relative"
                 style="--accent: #00ffb3; transition-delay: 0.2s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>
                <div class="text-5xl md:text-6xl font-black text-white/[0.03] absolute top-4 right-5">04</div>
                <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-5">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Optimize & Scale</h3>
                <p class="text-gray-400 text-sm leading-6">Data analysis, A/B testing, and scaling winning campaigns.</p>
            </div>

        </div>

    </div>
</section>

<!-- WHY PARTNER - SPLIT LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                    <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                    <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Why Partner With Us</span>
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Why Partner with a Leading
                    <span class="services-heading-gradient block sm:inline"> Social Media Agency?</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Choosing the best social media marketing agency in Ahmedabad means working with creative specialists who understand Gujarat's fast-moving business ecosystem. Our team blends data-led performance marketing with viral, trend-driven creative concepts.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    Whether you need end-to-end management or specialized campaigns for brand awareness, our solutions give your business a distinct competitive edge.
                </p>

                <a href="{{ route('contact') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Scale Your Digital Impact
                </a>

            </div>

            <!-- RIGHT: FEATURE CARDS -->
            <div class="grid grid-cols-2 gap-4 md:gap-5">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-chart-line text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Data-Led Performance</h4>
                    <p class="text-gray-500 text-xs leading-5">Analytics-backed campaigns</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-fire text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Trend-Driven Creative</h4>
                    <p class="text-gray-500 text-xs leading-5">Viral, trend-forward content</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-map-marked-alt text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Gujarat Market Expertise</h4>
                    <p class="text-gray-500 text-xs leading-5">Local insights, global standards</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-layer-group text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Multi-Platform Mastery</h4>
                    <p class="text-gray-500 text-xs leading-5">All major platforms covered</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-cogs text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Full-Service Capability</h4>
                    <p class="text-gray-500 text-xs leading-5">End-to-end management</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center sm:col-span-2"
                     style="--accent: #00ffb3; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                            <i class="fas fa-trophy text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h4 class="text-sm font-bold group-hover:text-[#00ffb3] transition-colors">Distinct Competitive Edge</h4>
                            <p class="text-gray-500 text-xs leading-5">Stand out in crowded feeds</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- PLATFORMS WE MANAGE -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    Platforms We Manage
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Master Every
                    <span class="services-heading-gradient block sm:inline"> Social Platform</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    From algorithm-friendly Instagram Reels to LinkedIn thought leadership and YouTube video strategies, we optimize your brand's presence where your audience spends their time.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your Strategy
                </a>

            </div>

            <!-- RIGHT: PLATFORM CARDS -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-5">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fab fa-instagram text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Instagram</h4>
                    <p class="text-gray-500 text-xs leading-5">Reels & growth</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-facebook text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Facebook</h4>
                    <p class="text-gray-500 text-xs leading-5">Ads & community</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">LinkedIn</h4>
                    <p class="text-gray-500 text-xs leading-5">B2B networking</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-youtube text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">YouTube</h4>
                    <p class="text-gray-500 text-xs leading-5">Video marketing</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fab fa-twitter text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">X (Twitter)</h4>
                    <p class="text-gray-500 text-xs leading-5">Real-time engagement</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-pinterest text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Pinterest</h4>
                    <p class="text-gray-500 text-xs leading-5">Visual discovery</p>
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
                    SCALE YOUR DIGITAL IMPACT TODAY
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready to Transform Your Brand's<br class="hidden sm:block"> Digital Reach?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with a trusted social media agency in Ahmedabad dedicated to turning social channels into consistent revenue drivers. Contact us today for a complimentary social audit!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Free Social Audit
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
