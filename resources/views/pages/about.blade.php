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
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/about') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
@endsection

@section('content')

<!-- ============================ HERO ============================ -->
<section class="about-hero-gradient min-h-screen flex items-center pt-28 sm:pt-32 md:pt-36 pb-16 overflow-hidden relative">

    <!-- Grid overlay + orbs -->
    <div class="absolute inset-0 about-grid-overlay pointer-events-none"></div>
    <div class="absolute top-[-120px] left-[-120px] w-80 sm:w-[480px] h-80 sm:h-[480px] bg-[#00ffb3]/10 blur-[140px] rounded-full about-orb"></div>
    <div class="absolute bottom-[-120px] right-[-120px] w-80 sm:w-[480px] h-80 sm:h-[480px] bg-[#00b7ff]/10 blur-[140px] rounded-full about-orb"></div>

    <!-- Floating particles -->
    <div class="about-particle w-2 h-2 bg-[#00ffb3]/40" style="top:18%; left:8%;"></div>
    <div class="about-particle w-1.5 h-1.5 bg-[#00b7ff]/40" style="top:28%; right:10%; animation-delay:1s;"></div>
    <div class="about-particle w-2.5 h-2.5 bg-[#00ffb3]/30" style="bottom:20%; left:12%; animation-delay:2s;"></div>
    <div class="about-particle w-1 h-1 bg-[#00b7ff]/50" style="bottom:32%; right:6%; animation-delay:0.5s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-6 lg:mb-8 mx-auto lg:mx-0 fade-in-up">
                    <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse shadow-lg shadow-[#00ffb3]/50"></span>
                    <span class="text-xs sm:text-sm text-gray-300 tracking-[0.2em] uppercase font-medium">About Anprix</span>
                </div>

                <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-[3.4rem] font-black leading-[1.12] mb-6 lg:mb-8">
                    <span class="block">
                        <span class="txt-split">We don't just write&nbsp;</span>
                        <span class="code-chip" aria-label="code">
                            <span class="code-word">code</span>
                            <span class="code-caret" aria-hidden="true"></span>
                        </span>
                        <span class="text-white">.</span>
                    </span>
                </h1>
                <h2 class="text sm:text-1xl md:text-2xl lg:text-[1.4rem] font-black leading-[1.12] mb-6 lg:mb-8">
                    <span class="about-gradient-text block mt-1">We build engine rooms for growing businesses.</span>
                </h2>

                <p class="text-gray-400 text-base sm:text-lg leading-8 sm:leading-9 mb-8 max-w-2xl mx-auto lg:mx-0 word-reveal" id="about-hero-desc">
                    Every successful company starts somewhere — a sketch on a napkin, a persistent operational
                    headache, or a vision to scale beyond current limits. <span class="text-white font-medium">ANPRIX was built for those exact moments.</span>
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 mb-5 justify-center lg:justify-start">
                    <a href="{{ route('hire') }}"
                        class="btn-primary px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl shadow-[#00ffb3]/20 w-full sm:w-auto text-center hover:scale-[1.03] transition-all">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Project
                    </a>
                    <a href="{{ route('contact') }}"
                        class="border border-white/10 hover:border-[#00b7ff] hover:text-[#00b7ff] px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg transition w-full sm:w-auto text-center">
                        <i class="fas fa-comments mr-2"></i>
                        Talk To Our Team
                    </a>
                </div>

                <!-- Stats -->
                @php
                $aboutStats = [
                    ['value' => 10, 'suffix' => '+', 'label' => 'Years of Experience', 'color' => '#00ffb3'],
                    ['value' => 100, 'suffix' => '+', 'label' => 'Projects Delivered', 'color' => '#00b7ff'],
                    ['value' => 50, 'suffix' => '+', 'label' => 'Happy Clients', 'color' => '#00ffb3'],
                    ['value' => 98, 'suffix' => '%', 'label' => 'Client Satisfaction', 'color' => '#00b7ff'],
                ];
                @endphp
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 mt-10 sm:mt-12 max-w-2xl mx-auto lg:mx-0">
                    @foreach($aboutStats as $i => $s)
                    <div class="glass-card rounded-2xl p-4 sm:p-5 text-center border border-white/10 fade-in-up delay-{{ ($i + 1) * 100 }}">
                        <div class="text-2xl sm:text-3xl font-black counter" data-target="{{ $s['value'] }}" style="color: {{ $s['color'] }};">
                            <span>{{ $s['value'] }}</span>{{ $s['suffix'] }}
                        </div>
                        <p class="text-[10px] sm:text-xs text-gray-500 mt-2 leading-4">{{ $s['label'] }}</p>
                    </div>
                    @endforeach
                </div>

            </div>

            <!-- RIGHT: SHOWCASE -->
            <div class="relative mt-8 lg:mt-0 flex items-center justify-center fade-in-up delay-200">
                <div class="relative w-full max-w-md lg:max-w-xl mx-auto">

                    <!-- Main card -->
                    <div class="relative glass-card rounded-[26px] sm:rounded-[34px] p-1 sm:p-2 hero-image-glow pulse-ring">
                        <div class="rounded-[22px] sm:rounded-[30px] overflow-hidden text-center">
                            <img src="{{ asset('assets/images/web-developer.png') }}"
                                 alt="Anprix Solutions - About Our Team and Expertise"
                                 width="680" height="500" fetchpriority="high"
                                 class="w-full max-w-[85%] sm:max-w-[78%] mx-auto animate-float">
                        </div>

                        <!-- Floating KPI chips -->
                        <div class="floating-badge absolute -top-4 right-0 sm:-top-7 sm:-right-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                            <div class="flex items-center gap-2.5">
                                <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                    <i class="fas fa-rocket text-sm icon-float"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-[10px] text-gray-500 uppercase tracking-wide">Mission</p>
                                    <p class="text-sm font-semibold">Drive Growth</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-badge absolute -bottom-3 left-0 sm:-bottom-6 sm:-left-6 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                            <div class="flex items-center gap-2.5">
                                <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                    <i class="fas fa-code text-sm icon-float"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-[10px] text-gray-500 uppercase tracking-wide">Engineers</p>
                                    <p class="text-sm font-semibold">Technical DNA</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-badge absolute -bottom-4 right-2 sm:bottom-8 sm:-right-8 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float" style="animation-delay:2s;">
                            <div class="flex items-center gap-2.5">
                                <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                    <i class="fas fa-chart-line text-sm icon-float"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-[10px] text-gray-500 uppercase tracking-wide">ROI First</p>
                                    <p class="text-sm font-semibold">Results</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================ PHILOSOPHY ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-[#00b7ff]/5 blur-[160px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT: STORY -->
            <div class="fade-in-up">

                <div class="relative inline-block mb-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#00ffb3]/20 to-[#00b7ff]/20 rounded-2xl blur-xl opacity-60"></div>
                    <div class="relative px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="green-text font-semibold tracking-[0.25em] uppercase text-xs flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse shadow-lg shadow-[#00ffb3]/50"></span>
                            WHY ANPRIX EXISTS
                        </p>
                    </div>
                </div>

                <h2 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-6 leading-[1.15]">
                    Technology Should
                    <span class="about-gradient-text">Serve Your Business</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 mb-6">
                    We believe modern technology shouldn't make running a business harder.
                    It should make your operations <span class="text-white font-medium">faster, simpler, and ready to scale.</span>
                </p>

                <p class="text-gray-500 text-base leading-8 mb-10">
                    A beautiful site that generates zero leads is just an expensive digital brochure.
                    A fast app that your team hates using is a wasted investment.
                    We bridge the gap between technical execution and real bottom-line growth.
                </p>

                <!-- Quote -->
                <div class="about-quote glass-card rounded-[24px] md:rounded-[30px] p-7 md:p-9 border border-white/10">
                    <p class="relative z-10 text-lg md:text-2xl font-bold leading-9 md:leading-10 text-white/90">
                        "What if technology worked <span class="green-text">for the business</span>, instead of
                        the business working <span class="blue-text">around technology?</span>"
                    </p>
                    <div class="relative z-10 flex items-center gap-3 mt-6 pt-5 border-t border-white/5">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#00ffb3] to-[#00b7ff] flex items-center justify-center text-black font-black text-sm">A</div>
                        <div>
                            <p class="font-bold text-sm">The Question That Built ANPRIX</p>
                            <p class="text-gray-500 text-xs">Our founding principle</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: 3D LAYERED PANEL -->
            <div class="relative fade-in-up delay-200">
                <div class="about-3d-stage mx-auto max-w-md" id="about2dStage">

                    <div class="about-3d-card relative why-panel rounded-[26px] md:rounded-[34px] p-6 sm:p-8" id="about2dCard">

                        <div class="dot-pattern rounded-[inherit]"></div>
                        <div class="about-conic-ring rounded-[26px] md:rounded-[34px]"></div>

                        <div class="relative z-10 about-3d-layer">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-11 h-11 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                                    <i class="fas fa-heartbeat text-lg icon-float"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase tracking-wider">Company Pulse</p>
                                    <p class="font-bold">Built for Today. Ready for Tomorrow.</p>
                                </div>
                            </div>

                            @php
                            $coreDiff = [
                                ['icon' => 'fa-bullseye', 'title' => 'Business-First Strategy', 'desc' => 'We focus on ROI, conversion rates, security, and scalability before writing a single line of code.', 'color' => '#00ffb3'],
                                ['icon' => 'fa-layer-group', 'title' => 'No Tech Stack Bloat', 'desc' => "We don't push trendy frameworks just to charge more. We deploy tools that solve your specific problem cleanly and efficiently.", 'color' => '#00b7ff'],
                                ['icon' => 'fa-handshake', 'title' => 'Long-Term Partnership', 'desc' => "Deploying software isn't the finish line — it's Day 1. We stay on board to optimize, automate, and expand as your business grows.", 'color' => '#00ffb3'],
                            ];
                            @endphp
                            <div class="space-y-4">
                                @foreach($coreDiff as $i => $d)
                                <div class="why-stat flex items-center gap-4 glass-card rounded-2xl p-4 border border-white/5">
                                    <div class="why-stat-ring">
                                        <svg viewBox="0 0 60 60">
                                            <circle class="ring-bg" cx="30" cy="30" r="25"></circle>
                                            <circle class="ring-fg" cx="30" cy="30" r="25" style="--offset: {{ 157 - (40 + $i * 12) }}; stroke: {{ $d['color'] }};"></circle>
                                        </svg>
                                        <span class="absolute inset-0 flex items-center justify-center text-xs font-black" style="color:{{ $d['color'] }};">{{ $i + 1 }}</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">{{ $d['title'] }}</p>
                                        <p class="text-gray-500 text-xs leading-5 mt-1">{{ $d['desc'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================ CORE DIFFERENCE ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-14 md:mb-20 service-reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">The Core Difference</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-[1.1]">
                <span class="txt-split">THE ANPRIX</span>
                <span class="about-gradient-text block">CORE DIFFERENCE</span>
            </h2>
            <p class="max-w-2xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal" id="core-diff-desc">
                We don't sell deliverables. We engineer outcomes — ROI, conversion, speed, and scale.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8" id="benefits-grid">
            @foreach($coreDiff as $i => $d)
            <div class="benefit-card glass-card rounded-[24px] md:rounded-[28px] p-8 md:p-9 border border-white/[0.06] text-center"
                 style="--accent: {{ $d['color'] }}; transition-delay: {{ $i * 0.1 }}s;">

                <div class="benefit-ring rounded-[24px] md:rounded-[28px]"></div>
                <span class="benefit-number">0{{ $i + 1 }}</span>
                <div class="benefit-accent-line"></div>

                <div class="benefit-content">
                    <div class="benefit-icon-wrap bg-gradient-to-br from-white/5 to-white/[0.02]" style="background: {{ $d['color'] }}10;">
                        <i class="fas {{ $d['icon'] }} text-2xl icon-hover" style="color: {{ $d['color'] }};"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3">{{ $d['title'] }}</h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7">{{ $d['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ============================ WHAT WE BUILD & SCALE ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border bg-[#050505] overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20 fade-in-up">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">What We Build & Scale</p>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-6 leading-tight">
                Capabilities That
                <span class="about-gradient-text">Move The Bottom Line</span>
            </h2>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Every capability is framed around business impact — ROI, conversions, speed — not raw technical specs.
            </p>
        </div>

        @php
        $capabilities = [
            ['icon' => 'fa-globe', 'title' => 'Web & Software Systems', 'desc' => 'Scalable, high-speed web platforms engineered for heavy traffic and conversions.', 'color' => '#00ffb3'],
            ['icon' => 'fa-shopping-cart', 'title' => 'eCommerce Platforms', 'desc' => 'Custom storefronts designed to streamline checkout and eliminate cart abandonment.', 'color' => '#00b7ff'],
            ['icon' => 'fa-tachometer-alt', 'title' => 'SaaS & Internal Dashboards', 'desc' => 'Tailored operational tools, CRMs, and management portals that speed up team workflows.', 'color' => '#00ffb3'],
            ['icon' => 'fa-palette', 'title' => 'UI/UX Digital Design', 'desc' => 'Intuitive interfaces crafted to make complex digital products easy to use.', 'color' => '#00b7ff'],
            ['icon' => 'fa-chart-line', 'title' => 'Growth & Performance SEO', 'desc' => 'Data-backed technical marketing built directly into your platform to capture warm leads.', 'color' => '#00ffb3'],
            ['icon' => 'fa-robot', 'title' => 'AI & Automation Tools', 'desc' => 'Custom background integrations that eliminate repetitive manual labor across your business.', 'color' => '#00b7ff'],
        ];
        @endphp

        <div class="glass-card rounded-[24px] md:rounded-[32px] p-4 sm:p-6 md:p-8 border border-white/10 overflow-hidden">

            <div class="hidden md:grid grid-cols-12 gap-4 px-4 pb-4 border-b border-white/5">
                <div class="col-span-1 text-xs text-gray-500 uppercase tracking-wider">#</div>
                <div class="col-span-5 text-xs text-gray-500 uppercase tracking-wider">Capability</div>
                <div class="col-span-6 text-xs text-gray-500 uppercase tracking-wider">What It Means For Your Business</div>
            </div>

            @foreach($capabilities as $i => $c)
            <a href="{{ route('services') }}"
               class="capability-row relative block md:grid md:grid-cols-12 md:gap-4 md:items-center px-3 sm:px-4 py-5 md:py-6 rounded-2xl border border-transparent"
               style="--accent: {{ $c['color'] }};">

                <div class="hidden md:block md:col-span-1">
                    <span class="text-2xl font-black" style="color: color-mix(in srgb, {{ $c['color'] }} 45%, transparent);">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                </div>

                <div class="flex items-center gap-3 sm:gap-4 md:col-span-5 mb-3 md:mb-0">
                    <span class="md:hidden text-xl font-black shrink-0" style="color: color-mix(in srgb, {{ $c['color'] }} 45%, transparent);">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <div class="w-10 h-10 sm:w-11 sm:h-11 shrink-0 rounded-xl flex items-center justify-center" style="background: {{ $c['color'] }}15; color: {{ $c['color'] }};">
                        <i class="fas {{ $c['icon'] }}"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold leading-snug">{{ $c['title'] }}</h3>
                </div>

                <div class="md:col-span-6 flex items-start justify-between gap-4">
                    <p class="text-gray-400 text-sm leading-6 md:leading-7">{{ $c['desc'] }}</p>
                    <span class="capability-arrow shrink-0 mt-1 md:mt-0 text-[#00ffb3]">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </a>
            @endforeach

        </div>

    </div>
</section>

<!-- ============================ 5-STEP EXECUTION ENGINE ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="text-center mb-14 md:mb-20 service-reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Our Process</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-[1.1]">
                <span class="txt-split">THE 5-STEP</span>
                <span class="about-gradient-text block">EXECUTION ENGINE</span>
            </h2>
            <p class="max-w-2xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed">
                Listen &rarr; Plan &rarr; Build &rarr; Launch &rarr; Scale. A repeatable system that turns ideas into shipped, growing products.
            </p>
        </div>

        @php
        $executionSteps = [
            ['num' => '01', 'title' => 'Listen', 'desc' => 'We audit your existing setup, map your business targets, and pinpoint precise bottlenecks.', 'icon' => 'fa-headphones-alt', 'color' => '#00ffb3'],
            ['num' => '02', 'title' => 'Plan', 'desc' => 'We architect the platform, designing user flows and data models prior to development.', 'icon' => 'fa-drafting-compass', 'color' => '#00b7ff'],
            ['num' => '03', 'title' => 'Build', 'desc' => 'Fast, transparent development sprints with regular milestones and zero hidden surprises.', 'icon' => 'fa-code', 'color' => '#00ffb3'],
            ['num' => '04', 'title' => 'Launch', 'desc' => 'Rigorous security testing, stress-testing, and smooth deployment to production.', 'icon' => 'fa-rocket', 'color' => '#00b7ff'],
            ['num' => '05', 'title' => 'Scale', 'desc' => 'Continuous performance monitoring, user feedback analysis, and feature updates as you grow.', 'icon' => 'fa-arrow-trend-up', 'color' => '#00ffb3'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 lg:gap-3 items-stretch">

            @foreach($executionSteps as $i => $s)
            <div class="relative group">

                <div class="execution-card glass-card rounded-[22px] md:rounded-[26px] p-6 md:p-7 h-full border border-white/[0.06] overflow-hidden"
                     style="--step-color: {{ $s['color'] }}; transition-delay: {{ $i * 0.08 }}s;">

                    <div class="card-border-glow rounded-[22px] md:rounded-[26px]"></div>
                    <div class="card-glow-spot bg-[{{ $s['color'] }}]/8 blur-[60px] rounded-full"></div>

                    <span class="services-card-number" style="font-size: 4.5rem;">{{ $s['num'] }}</span>

                    <div class="relative z-10">
                        <div class="execution-icon w-14 h-14 rounded-2xl flex items-center justify-center mb-5"
                             style="background: {{ $s['color'] }}15; color: {{ $s['color'] }};">
                            <i class="fas {{ $s['icon'] }} text-xl icon-hover"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">{{ $s['title'] }}</h3>
                        <p class="text-gray-400 text-sm leading-6">{{ $s['desc'] }}</p>
                    </div>

                </div>

                <!-- Connector -->
                @if($i < count($executionSteps) - 1)
                <div class="execution-link hidden lg:block absolute top-1/2 -right-2 w-5 -translate-y-1/2">
                    <span class="execution-arrow w-7 h-7 rounded-full bg-[#0a0a0a] border border-white/10 flex items-center justify-center">
                        <i class="fas fa-arrow-right text-[9px]" style="color: {{ $s['color'] }};"></i>
                    </span>
                </div>
                <div class="execution-link-vertical lg:hidden mx-auto my-1" style="height: 20px;"></div>
                @endif
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- ============================ MISSION / BUILT FOR TOMORROW ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border bg-[#050505] overflow-hidden relative">
    <div class="absolute inset-0 about-grid-overlay pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT: MISSION -->
            <div class="fade-in-up">
                <div class="relative inline-block mb-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#00ffb3]/20 to-[#00b7ff]/20 rounded-2xl blur-xl opacity-60"></div>
                    <div class="relative px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <p class="blue-text font-semibold tracking-[0.25em] uppercase text-xs flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse shadow-lg shadow-[#00b7ff]/50"></span>
                            OUR MISSION
                        </p>
                    </div>
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-6 leading-[1.15]">
                    Built for Today.
                    <span class="about-gradient-text block">Ready for Tomorrow.</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 mb-6">
                    Technology evolves fast. Building software that breaks the moment your user base doubles
                    is a liability — not an asset.
                </p>

                <p class="text-gray-500 text-base leading-8 mb-8">
                    Our mission is simple: <span class="text-white font-medium">turn complex technical challenges into clear,
                    reliable digital products that drive measurable company growth.</span>
                    We architect flexible systems so you never have to throw everything away
                    and start from scratch when your business reaches its next level.
                </p>

                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center gap-2 text-[#00b7ff] hover:text-white transition border border-[#00b7ff]/30 hover:border-[#00b7ff] px-6 py-3 rounded-2xl text-sm font-semibold">
                    See The Results We've Delivered
                    <i class="fas fa-arrow-right icon-hover"></i>
                </a>
            </div>

            <!-- RIGHT: STAT GRID -->
            @php
            $missionStats = [
                ['value' => 10, 'suffix' => '+', 'label' => 'Years Building', 'icon' => 'fa-calendar-check', 'color' => '#00ffb3'],
                ['value' => 250, 'suffix' => '+', 'label' => 'Websites Delivered', 'icon' => 'fa-globe', 'color' => '#00b7ff'],
                ['value' => 150, 'suffix' => '+', 'label' => 'Happy Clients', 'icon' => 'fa-users', 'color' => '#00ffb3'],
                ['value' => 24, 'suffix' => '/7', 'label' => 'Dedicated Support', 'icon' => 'fa-headset', 'color' => '#00b7ff'],
            ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6">
                @foreach($missionStats as $i => $ms)
                <div class="stat-card glass-card rounded-[22px] md:rounded-[26px] p-6 md:p-8 border border-white/10 text-center fade-in-up delay-{{ ($i + 1) * 100 }}">
                    <div class="w-12 h-12 rounded-2xl mx-auto mb-4 flex items-center justify-center" style="background: {{ $ms['color'] }}12; color: {{ $ms['color'] }};">
                        <i class="fas {{ $ms['icon'] }} text-lg icon-hover"></i>
                    </div>
                    <div class="text-3xl md:text-4xl font-black counter" data-target="{{ $ms['value'] }}" style="color: {{ $ms['color'] }};">
                        <span>{{ $ms['value'] }}</span>{{ $ms['suffix'] }}
                    </div>
                    <p class="text-gray-500 text-sm md:text-base mt-2">{{ $ms['label'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- ============================ CTA + HIRE FORM ============================ -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden relative">
    <div class="absolute top-[-120px] right-[-120px] w-96 h-96 bg-[#00ffb3]/10 blur-[140px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-[-120px] left-[-120px] w-96 h-96 bg-[#00b7ff]/10 blur-[140px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT: CTA CONTENT -->
            <div class="fade-in-up">
                <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">Ready To Grow?</p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-6 leading-[1.15]">
                    Ready To Turn Your
                    <span class="about-gradient-text">Vision Into Reality?</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 mb-8">
                    Whether you are launching your first SaaS, modernizing legacy internal systems,
                    or scaling your digital footprint, ANPRIX is ready to be the technical execution
                    engine behind your growth.
                </p>

                <div class="glass-card rounded-[24px] p-6 md:p-8 border border-white/10 mb-8 relative overflow-hidden">
                    <div class="dot-pattern rounded-[inherit]"></div>
                    <p class="relative z-10 text-lg md:text-xl font-bold mb-1">
                        "Bring us your idea. <span class="green-text">We'll build the system to scale it.</span>"
                    </p>
                    <div class="relative z-10 flex items-center gap-3 mt-4 pt-4 border-t border-white/5">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#00ffb3] to-[#00b7ff] flex items-center justify-center text-black font-black text-sm">A</div>
                        <div>
                            <p class="font-bold text-sm">ANPRIX</p>
                            <p class="text-gray-500 text-xs">Think Different. Build Better. Grow Faster.</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-5">
                    <a href="{{ route('hire') }}"
                       class="btn-primary px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg shadow-2xl shadow-[#00ffb3]/20 w-full sm:w-auto text-center hover:scale-[1.03] transition-all">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Start Your Project
                    </a>
                    <a href="{{ route('contact') }}"
                       class="border border-white/10 hover:border-[#00b7ff] hover:text-[#00b7ff] px-7 sm:px-8 py-4 rounded-2xl text-base sm:text-lg transition w-full sm:w-auto text-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- RIGHT: HIRE FORM -->
            <div class="glass-card rounded-[24px] md:rounded-[35px] p-6 sm:p-8 md:p-10 border border-white/10 fade-in-up delay-200 relative overflow-hidden">
                <div class="form-glow-border rounded-[24px] md:rounded-[35px]"></div>

                <h3 class="text-xl sm:text-2xl md:text-3xl font-black mb-6">
                    Let's Build Your <span class="green-text">Next Big Thing</span>
                </h3>

                <form class="ajax-form space-y-5 sm:space-y-6 relative z-10" method="POST" id="hireForm">
                    @csrf
                    <input type="hidden" name="form_type" value="hire">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">Full Name *</label>
                            <input type="text" name="name" placeholder="Enter your full name" required minlength="3" maxlength="80"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">Phone Number</label>
                            <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="15"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">Email Address *</label>
                        <input type="email" name="email" placeholder="Enter your email address" required maxlength="120"
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">Select Service *</label>
                        <select name="service" required
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3]">
                            <option value="">Select a Service</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Advertising Services">Advertising Services</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Branding & Creative Services">Branding & Creative Services</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3">Project Details *</label>
                        <textarea name="details" rows="5" required minlength="10" maxlength="2000"
                            placeholder="Tell us about your project..."
                            class="w-full bg-black/40 border border-white/10 rounded-2xl px-4 sm:px-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] resize-none"></textarea>
                    </div>

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

<!-- ABOUT PAGE SCRIPTS -->
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ===== 3D Hero Tilt =====
    function init3DTilt(stageId, cardId, maxTilt) {
        var stage = document.getElementById(stageId);
        var card = document.getElementById(cardId);
        if (!stage || !card) return;
        maxTilt = maxTilt || 10;

        stage.addEventListener('mousemove', function(e) {
            var rect = stage.getBoundingClientRect();
            var x = (e.clientX - rect.left) / rect.width - 0.5;
            var y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = 'rotateY(' + (x * maxTilt) + 'deg) rotateX(' + (-y * maxTilt) + 'deg) scale3d(1.02,1.02,1.02)';
        });

        stage.addEventListener('mouseleave', function() {
            card.style.transform = 'rotateY(0deg) rotateX(0deg) scale3d(1,1,1)';
        });
    }

    init3DTilt('about2dStage', 'about2dCard', 8);

    // ===== Execution cards subtle 3D tilt =====
    var execCards = document.querySelectorAll('.execution-card');
    execCards.forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
            var rect = card.getBoundingClientRect();
            var x = (e.clientX - rect.left) / rect.width - 0.5;
            var y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = 'perspective(700px) rotateY(' + (x * 8) + 'deg) rotateX(' + (-y * 6) + 'deg) translateY(-6px) scale3d(1.02,1.02,1.02)';
        });
        card.addEventListener('mouseleave', function() {
            card.style.transform = '';
        });
    });

});
</script>
@endsection
