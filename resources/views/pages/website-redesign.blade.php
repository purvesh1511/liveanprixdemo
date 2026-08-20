@extends('components.layout')

@section('title', $seo['title'] ?? '')
@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ config('anprix.url') . ($seo['canonical'] ?? '') }}">
@endsection

@section('content')

<section class="py-24 sm:py-28 lg:py-32 relative overflow-hidden">

    <div class="absolute top-[-80px] sm:top-0 left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] sm:bottom-0 right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <div>
                <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                    Website Redesign Services
                </p>
                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Elevate </span>
                    <span class="services-heading-gradient">Your Digital Presence</span>
                    <span class="txt-split block sm:inline"> with Next-Gen</span>
                    <span class="txt-split block sm:inline"> Website Redesign Services</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    Is your current website lagging behind modern design standards, suffering from slow load times, or failing to convert visitors into paying clients? Our custom website redesign services are engineered to transform your existing site into a high-converting, visually striking digital powerhouse.
                </p>
            </div>

            <div class="relative flex items-center justify-center">
                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/website-redesign.png') }}"
                             alt="Anprix Solutions - Website Redesign Services"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-paint-brush text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">Website Redesign</p>
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
                                <p class="text-sm font-semibold">Higher Conversions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="py-20 md:py-32 section-border overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="service-reveal">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    Why You Need a Dedicated Expert
                </p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Why You Need a Dedicated
                    <span class="services-heading-gradient block sm:inline"> Website Redesign Expert</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Redesigning a website involves far more than updating graphics or changing color palettes. It requires a strategic approach to user experience (UI/UX), mobile performance, conversion rate optimization, and preserving existing search rankings.
                </p>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    When you partner with a seasoned website redesign expert, you protect years of built-up search authority while upgrading your digital architecture.
                </p>
                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your Redesign
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5">
                @php
                $features = [
                    ['icon' => 'fa-search', 'accent' => '#00ffb3', 'title' => 'SEO & Ranking Preservation', 'desc' => 'Seamless 301 redirect mapping & structured data updates', 'delay' => ''],
                    ['icon' => 'fa-bolt', 'accent' => '#00b7ff', 'title' => 'Performance Optimization', 'desc' => 'Eliminating legacy code bloat & Core Web Vitals', 'delay' => ''],
                    ['icon' => 'fa-bullseye', 'accent' => '#00ffb3', 'title' => 'Conversion-Driven UI/UX', 'desc' => 'Streamlining navigation & intuitive CTAs that turn visitors into leads', 'delay' => 'transition-delay: 0.1s;'],
                    ['icon' => 'fa-mobile-alt', 'accent' => '#00b7ff', 'title' => 'Mobile Responsiveness', 'desc' => 'Ensuring flawless performance across all devices', 'delay' => 'transition-delay: 0.15s;'],
                    ['icon' => 'fa-shield-alt', 'accent' => '#00ffb3', 'title' => 'Security Hardening', 'desc' => 'Protecting your site with enterprise-grade protocols', 'delay' => 'transition-delay: 0.2s;'],
                    ['icon' => 'fa-expand-arrows-alt', 'accent' => '#00b7ff', 'title' => 'Scalability', 'desc' => 'Building architecture that grows with your business', 'delay' => 'transition-delay: 0.25s;'],
                ];
                @endphp
                @foreach($features as $f)
                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] group text-center"
                     style="--accent: {{ $f['accent'] }}; {{ $f['delay'] }}">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-{{ $f['accent'] === '#00ffb3' ? '[#00ffb3]' : '[#00b7ff]' }}/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-12 h-12 rounded-xl bg-{{ $f['accent'] === '#00ffb3' ? '[#00ffb3]' : '[#00b7ff]' }}/10 flex items-center justify-center text-{{ $f['accent'] === '#00ffb3' ? '[#00ffb3]' : '[#00b7ff]' }} mx-auto mb-3">
                        <i class="fas {{ $f['icon'] }} text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-{{ $f['accent'] === '#00ffb3' ? '[#00ffb3]' : '[#00b7ff]' }} transition-colors">{{ $f['title'] }}</h4>
                    <p class="text-gray-500 text-xs leading-5">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<section class="py-20 md:py-32 section-border overflow-hidden relative">
    <div class="absolute top-[-80px] right-0 w-[500px] h-[500px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="grid grid-cols-1 gap-4 md:gap-5 service-reveal">
                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                            <i class="fas fa-brain text-lg"></i>
                        </div>
                        <h4 class="text-lg font-bold group-hover:text-[#00b7ff] transition-colors">Predictive UX & Layout Testing</h4>
                    </div>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                        Analyzing user behavior heatmaps with AI algorithms to optimize interaction paths before deployment. We predict what works before a single line of code is written.
                    </p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group"
                     style="--accent: #00ffb3; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] shrink-0">
                            <i class="fas fa-layer-group text-lg"></i>
                        </div>
                        <h4 class="text-lg font-bold group-hover:text-[#00ffb3] transition-colors">Dynamic Content Personalization</h4>
                    </div>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                        Delivering tailored messaging and layout variations based on real-time visitor intent and traffic sources. Every visitor sees what matters most to them.
                    </p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] shrink-0">
                            <i class="fas fa-code text-lg"></i>
                        </div>
                        <h4 class="text-lg font-bold group-hover:text-[#00b7ff] transition-colors">Automated Code Refactoring</h4>
                    </div>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                        Using advanced AI development tools to clean legacy databases and harden site security. Your platform becomes faster, cleaner, and more resilient.
                    </p>
                </div>
            </div>

            <div class="service-reveal" style="transition-delay: 0.1s;">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                    <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                    <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">AI-Powered Redesign</span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Revolutionize Your Platform with
                    <span class="services-heading-gradient block sm:inline"> AI Website Redesign</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    The landscape of web development has evolved rapidly. By leveraging modern AI website redesign workflows, we accelerate development timelines while building smarter, hyper-personalized user experiences tailored to your audience.
                </p>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    Our AI-integrated redesign process delivers distinct competitive advantages that traditional methods simply cannot match.
                </p>
                <a href="{{ route('contact') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-magic"></i>
                    Explore AI Redesign
                </a>
            </div>

        </div>
    </div>
</section>

<section class="py-20 md:py-32 section-border overflow-hidden relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden service-reveal">
            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

            <div class="relative z-10">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    TRANSFORM YOUR ONLINE BRAND TODAY
                </p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Outshine<br class="hidden sm:block"> Your Competitors?
                </h2>
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Don't let an obsolete platform hold your business back. Whether you need a complete enterprise overhaul or an innovative AI website redesign strategy, our team brings the technical precision required to dominate your niche.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">
                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Free UX Audit
                    </a>
                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Custom Project Proposal
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
