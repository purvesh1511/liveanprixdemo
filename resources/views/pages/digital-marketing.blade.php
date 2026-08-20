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
                    Digital Marketing Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Premier </span>
                    <span class="services-heading-gradient">Digital Marketing Company</span>
                    <span class="txt-split block sm:inline"> in Ahmedabad</span>
                    <span class="txt-split block" style="font-size:0.65em; opacity:0.85;">| Scale Your Brand</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    In today's fast-paced business landscape, establishing a powerful online presence is critical for sustained growth. We empower startups, growing businesses, and enterprise brands to capture market share, generate qualified leads, and maximize return on ad spend.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/digital.png') }}"
                             alt="Anprix Solutions - Digital Marketing Services"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-bullhorn text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">Digital Marketing</p>
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

<!-- RESULT-DRIVEN SERVICES - HORIZONTAL CARDS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Result-Driven Services</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Result-Driven </span>
                <span class="services-heading-gradient">Digital Marketing Services</span>
                <span class="txt-split"> in Ahmedabad</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Navigating modern digital channels requires a strategic blend of creative branding, technical precision, and data analytics. Our comprehensive services are engineered to deliver measurable growth across every customer touchpoint.
            </p>

        </div>

        <!-- 4 SERVICE CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6" id="dm-services-grid">

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                        <i class="fas fa-search text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Search Engine Optimization (SEO)</h3>
                        <p class="text-gray-500 text-sm">Organic rankings & long-term traffic</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Dominating organic search rankings to drive high-intent, long-term traffic. We optimize your site structure, content, and authority to ensure sustainable visibility on Google.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-ad text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Pay-Per-Click Advertising (PPC)</h3>
                        <p class="text-gray-500 text-sm">Targeted campaigns & lower acquisition costs</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Targeted Google and Meta ad campaigns engineered for maximum conversions and lower acquisition costs. Every rupee spent is tracked and optimized for ROI.
                </p>
            </div>

            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                        <i class="fas fa-share-alt text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Social Media Engagement</h3>
                        <p class="text-gray-500 text-sm">Brand authority & customer loyalty</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Building brand authority and driving customer loyalty across Instagram, LinkedIn, and YouTube. We create content that resonates and communities that engage.
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
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Conversion Rate Optimization</h3>
                        <p class="text-gray-500 text-sm">Turn clicks into paying clients</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Streamlining landing pages and messaging to turn clicks into paying clients. We analyze user behavior and optimize every touchpoint for maximum conversions.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- HOW WE WORK - PROCESS STEPS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-[-80px] right-0 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Our Process</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">How We </span>
                <span class="services-heading-gradient">Drive Results</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Our proven 4-step process ensures every campaign is strategic, measurable, and optimized for maximum ROI from day one.
            </p>

        </div>

        <!-- PROCESS STEPS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8" id="process-steps">

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
                <p class="text-gray-400 text-sm leading-6">Deep-dive analysis of your current digital presence, competitors, and market landscape to identify growth opportunities.</p>
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
                <p class="text-gray-400 text-sm leading-6">Custom roadmap with channel-specific tactics, budget allocation, and KPI benchmarks tailored to your revenue goals.</p>
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
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Execute & Launch</h3>
                <p class="text-gray-400 text-sm leading-6">Campaign deployment across all channels with creative assets, ad copy, and tracking pixels configured for peak performance.</p>
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
                <p class="text-gray-400 text-sm leading-6">Continuous A/B testing, data analysis, and campaign refinement to maximize ROI and scale what works.</p>
            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE US - SPLIT LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                    <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                    <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Why Choose Us</span>
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Why Choose Us Over Standard
                    <span class="services-heading-gradient block sm:inline"> Advertising Companies</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Traditional promotion methods lack the real-time tracking and scalability required today. Unlike conventional advertising companies in Ahmedabad that focus strictly on broad reach, our performance-first approach offers complete transparency, continuous campaign optimization, and accountable ROI.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    As a trusted digital marketing agency Ahmedabad brands rely on, we blend regional market insights with modern ad technology. Whether expanding locally or nationally, our specialists craft agile strategies tailored to your exact revenue goals.
                </p>

                <a href="{{ route('contact') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Scale Your Brand
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
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Experienced Experts</h4>
                    <p class="text-gray-500 text-xs leading-5">Multi-industry campaign expertise</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-bullseye text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Result-Oriented</h4>
                    <p class="text-gray-500 text-xs leading-5">Measurable business outcomes</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-cogs text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Customized Solutions</h4>
                    <p class="text-gray-500 text-xs leading-5">Tailored to your goals</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-dollar-sign text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Affordable Pricing</h4>
                    <p class="text-gray-500 text-xs leading-5">Flexible packages for all sizes</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-chart-pie text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Transparent Reporting</h4>
                    <p class="text-gray-500 text-xs leading-5">Clear monthly performance data</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-user-tie text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Dedicated Account Mgmt</h4>
                    <p class="text-gray-500 text-xs leading-5">Personal campaign support</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.35s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-database text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Data-Driven</h4>
                    <p class="text-gray-500 text-xs leading-5">Analytics-backed decisions</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center sm:col-span-2"
                     style="--accent: #00ffb3; transition-delay: 0.4s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                            <i class="fas fa-rocket text-lg"></i>
                        </div>
                        <div class="text-left">
                            <h4 class="text-sm font-bold group-hover:text-[#00ffb3] transition-colors">Long-Term Growth Focus</h4>
                            <p class="text-gray-500 text-xs leading-5">Sustainable strategies for lasting success</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- TOOLS & PLATFORMS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    Tools & Platforms
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Use The Best
                    <span class="services-heading-gradient block sm:inline"> Marketing Tools</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    From Google Analytics and SEMrush to HubSpot and Mailchimp, we leverage industry-leading tools to execute and measure your digital marketing campaigns with precision.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your Campaign
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
                        <i class="fab fa-google text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Google Analytics</h4>
                    <p class="text-gray-500 text-xs leading-5">Data & insights</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-facebook text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Meta Ads</h4>
                    <p class="text-gray-500 text-xs leading-5">Facebook & Instagram</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Mailchimp</h4>
                    <p class="text-gray-500 text-xs leading-5">Email marketing</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fas fa-chart-bar text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">SEMrush</h4>
                    <p class="text-gray-500 text-xs leading-5">SEO & competitive</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00b7ff; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mx-auto mb-3">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">LinkedIn Ads</h4>
                    <p class="text-gray-500 text-xs leading-5">B2B marketing</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group text-center"
                     style="--accent: #00ffb3; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mx-auto mb-3">
                        <i class="fas fa-hashtag text-xl"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">HubSpot</h4>
                    <p class="text-gray-500 text-xs leading-5">CRM & automation</p>
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
                    Ready To Turn Your Marketing Channels Into<br class="hidden sm:block"> Predictable Revenue Drivers?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Connect with a leading digital agency dedicated to growing your bottom line. Contact us today for a complimentary strategy call and free digital audit!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Free Strategy Call
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Free Digital Audit
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
