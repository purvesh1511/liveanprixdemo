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
                    WordPress Development Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Leading </span>
                    <span class="services-heading-gradient">WordPress Website Development</span>
                    <span class="txt-split block sm:inline"> Company</span>
                    <span class="txt-split block" style="font-size:0.65em; opacity:0.85;">| Modern Web Solutions</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    In today's fast-moving digital economy, your website serves as the backbone of your digital marketing strategy. As a premier WordPress website development company, we create fast, secure, and fully customized websites tailored to your unique business goals.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/cms.png') }}"
                             alt="Anprix Solutions - WordPress Website Development Company"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fab fa-wordpress text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">WordPress</p>
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
                                <p class="text-sm font-semibold">SEO-Friendly Sites</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- FULL-STACK SERVICES - VERTICAL TIMELINE LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-1/4 left-0 w-[400px] h-[400px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <!-- HEADING -->
        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00b7ff] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">What We Offer</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Full-Spectrum </span>
                <span class="services-heading-gradient">WordPress</span>
                <span class="txt-split"> Website Development Services</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Building a high-converting web platform demands technical precision, intuitive design, and clean architecture. Our custom WordPress website development services are engineered to deliver superior speed, security, and search engine visibility.
            </p>

        </div>

        <!-- TIMELINE SERVICES -->
        <div class="relative">

            <!-- Vertical line -->
            <div class="hidden lg:block absolute left-[52px] top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#00ffb3]/20 via-[#00b7ff]/20 to-[#00ffb3]/20"></div>

            <div class="space-y-6 lg:space-y-8">

                <!-- 01 Custom Theme & Plugin Development -->
                <div class="wp-service-item flex gap-5 lg:gap-8 items-start service-reveal" style="transition-delay: 0.05s;">

                    <div class="hidden lg:flex flex-shrink-0 w-[104px] h-[104px] rounded-[28px] bg-[#00ffb3]/10 border border-[#00ffb3]/20 items-center justify-center relative">
                        <span class="text-3xl font-black text-[#00ffb3]">01</span>
                        <div class="absolute inset-0 rounded-[28px] bg-[#00ffb3]/5 animate-pulse"></div>
                    </div>

                    <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-8 border border-white/[0.06] flex-1 group"
                         style="--accent: #00ffb3;">
                        <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                        <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                        <div class="services-card-glow-line"></div>

                        <div class="flex items-center gap-3 mb-4">
                            <div class="lg:hidden w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] text-sm font-bold">01</div>
                            <i class="fab fa-wordpress text-[#00ffb3] text-xl"></i>
                            <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Custom Theme & Plugin Development</h3>
                        </div>
                        <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                            Unique, brand-aligned themes and custom-coded plugins built without unnecessary code bloat. Every component is handcrafted for your specific business needs, ensuring peak performance and maintainability.
                        </p>
                    </div>

                </div>

                <!-- 02 E-Commerce & WooCommerce -->
                <div class="wp-service-item flex gap-5 lg:gap-8 items-start service-reveal" style="transition-delay: 0.1s;">

                    <div class="hidden lg:flex flex-shrink-0 w-[104px] h-[104px] rounded-[28px] bg-[#00b7ff]/10 border border-[#00b7ff]/20 items-center justify-center relative">
                        <span class="text-3xl font-black text-[#00b7ff]">02</span>
                        <div class="absolute inset-0 rounded-[28px] bg-[#00b7ff]/5 animate-pulse"></div>
                    </div>

                    <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-8 border border-white/[0.06] flex-1 group"
                         style="--accent: #00b7ff;">
                        <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                        <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                        <div class="services-card-glow-line"></div>

                        <div class="flex items-center gap-3 mb-4">
                            <div class="lg:hidden w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] text-sm font-bold">02</div>
                            <i class="fas fa-shopping-cart text-[#00b7ff] text-xl"></i>
                            <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">E-Commerce & WooCommerce</h3>
                        </div>
                        <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                            Scalable digital storefronts designed to streamline shopping experiences and boost conversion rates. From product catalogs to payment gateways, we build stores that sell.
                        </p>
                    </div>

                </div>

                <!-- 03 Headless WordPress Solutions -->
                <div class="wp-service-item flex gap-5 lg:gap-8 items-start service-reveal" style="transition-delay: 0.15s;">

                    <div class="hidden lg:flex flex-shrink-0 w-[104px] h-[104px] rounded-[28px] bg-[#00b7ff]/10 border border-[#00b7ff]/20 items-center justify-center relative">
                        <span class="text-3xl font-black text-[#00b7ff]">03</span>
                        <div class="absolute inset-0 rounded-[28px] bg-[#00b7ff]/5 animate-pulse"></div>
                    </div>

                    <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-8 border border-white/[0.06] flex-1 group"
                         style="--accent: #00b7ff;">
                        <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                        <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                        <div class="services-card-glow-line"></div>

                        <div class="flex items-center gap-3 mb-4">
                            <div class="lg:hidden w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] text-sm font-bold">03</div>
                            <i class="fas fa-layer-group text-[#00b7ff] text-xl"></i>
                            <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Headless WordPress Solutions</h3>
                        </div>
                        <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                            Decoupled frontend setups leveraging modern frameworks for ultrafast performance and security. The future of WordPress — delivering content at the speed of light.
                        </p>
                    </div>

                </div>

                <!-- 04 Core Web Vitals & Speed -->
                <div class="wp-service-item flex gap-5 lg:gap-8 items-start service-reveal" style="transition-delay: 0.2s;">

                    <div class="hidden lg:flex flex-shrink-0 w-[104px] h-[104px] rounded-[28px] bg-[#00ffb3]/10 border border-[#00ffb3]/20 items-center justify-center relative">
                        <span class="text-3xl font-black text-[#00ffb3]">04</span>
                        <div class="absolute inset-0 rounded-[28px] bg-[#00ffb3]/5 animate-pulse"></div>
                    </div>

                    <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-8 border border-white/[0.06] flex-1 group"
                         style="--accent: #00ffb3;">
                        <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                        <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                        <div class="services-card-glow-line"></div>

                        <div class="flex items-center gap-3 mb-4">
                            <div class="lg:hidden w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] text-sm font-bold">04</div>
                            <i class="fas fa-bolt text-[#00ffb3] text-xl"></i>
                            <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Core Web Vitals & Speed Optimization</h3>
                        </div>
                        <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                            Performance-focused code, server caching, and image compression to maximize search rankings. We ensure your site passes every Google speed test with flying colors.
                        </p>
                    </div>

                </div>

                <!-- 05 Third-Party API Integrations -->
                <div class="wp-service-item flex gap-5 lg:gap-8 items-start service-reveal" style="transition-delay: 0.25s;">

                    <div class="hidden lg:flex flex-shrink-0 w-[104px] h-[104px] rounded-[28px] bg-[#00b7ff]/10 border border-[#00b7ff]/20 items-center justify-center relative">
                        <span class="text-3xl font-black text-[#00b7ff]">05</span>
                        <div class="absolute inset-0 rounded-[28px] bg-[#00b7ff]/5 animate-pulse"></div>
                    </div>

                    <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-8 border border-white/[0.06] flex-1 group"
                         style="--accent: #00b7ff;">
                        <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                        <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                        <div class="services-card-glow-line"></div>

                        <div class="flex items-center gap-3 mb-4">
                            <div class="lg:hidden w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] text-sm font-bold">05</div>
                            <i class="fas fa-plug text-[#00b7ff] text-xl"></i>
                            <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Third-Party API Integrations</h3>
                        </div>
                        <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                            Connecting your WordPress CMS seamlessly with CRMs, payment gateways, and automation tools. Your website becomes the central hub of your business operations.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY PARTNER - TWO COLUMN LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: FEATURE GRID -->
            <div class="grid grid-cols-2 gap-4 md:gap-5 service-reveal">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-3">
                        <i class="fas fa-expand-arrows-alt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Scalable</h4>
                    <p class="text-gray-500 text-xs leading-5">Grows with your business needs</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-3">
                        <i class="fas fa-mobile-alt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Responsive</h4>
                    <p class="text-gray-500 text-xs leading-5">Mobile-first design approach</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-3">
                        <i class="fas fa-search text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">SEO-Ready</h4>
                    <p class="text-gray-500 text-xs leading-5">Clean code & best practices</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-3">
                        <i class="fas fa-shield-alt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Secure</h4>
                    <p class="text-gray-500 text-xs leading-5">Hardened & protected</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group sm:col-span-2"
                     style="--accent: #00ffb3; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-bolt text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold group-hover:text-[#00ffb3] transition-colors">Future-Proof Architecture</h4>
                            <p class="text-gray-500 text-xs leading-5">Built to evolve with emerging technologies</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: TEXT -->
            <div class="service-reveal" style="transition-delay: 0.1s;">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    Why Partner With Us
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Selecting an experienced
                    <span class="services-heading-gradient block sm:inline"> WordPress Website Development</span>
                    <span class="block sm:inline"> Company</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Selecting an experienced WordPress website development company ensures your site is built to scale smoothly as your business grows. When you choose our WordPress website development services, you receive a future-proof, mobile-responsive, and accessible web solution built around clean code and best SEO practices.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    Powering over 40% of all websites globally, WordPress offers unparalleled flexibility, scalability, and content management tools for businesses of all sizes.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your WordPress Project
                </a>

            </div>

        </div>

    </div>
</section>

<!-- BENEFITS OF WORDPRESS -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <!-- HEADING -->
        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">Why WordPress</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">BENEFITS OF </span>
                <span class="services-heading-gradient">WordPress</span>
            </h2>

            <p class="max-w-2xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                These advantages make WordPress one of the most popular platforms for businesses across Ahmedabad and India.
            </p>

        </div>

        <!-- BENEFITS GRID - 4 COLUMN -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6" id="benefits-grid">

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00ffb3;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">01</span>
                <div class="benefit-icon-wrap bg-[#00ffb3]/10" style="--accent: #00ffb3;">
                    <i class="fas fa-edit text-[#00ffb3] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Easy Content Management</h3>
                    <p class="text-gray-500 text-sm leading-6">Update your website without coding knowledge required</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00b7ff;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">02</span>
                <div class="benefit-icon-wrap bg-[#00b7ff]/10" style="--accent: #00b7ff;">
                    <i class="fas fa-search text-[#00b7ff] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">SEO-Friendly Structure</h3>
                    <p class="text-gray-500 text-sm leading-6">Built for search engine visibility and higher rankings</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00b7ff;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">03</span>
                <div class="benefit-icon-wrap bg-[#00b7ff]/10" style="--accent: #00b7ff;">
                    <i class="fas fa-mobile-alt text-[#00b7ff] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Mobile Responsiveness</h3>
                    <p class="text-gray-500 text-sm leading-6">Perfect experience on every device and screen size</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00ffb3;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">04</span>
                <div class="benefit-icon-wrap bg-[#00ffb3]/10" style="--accent: #00ffb3;">
                    <i class="fas fa-expand-arrows-alt text-[#00ffb3] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">High Scalability</h3>
                    <p class="text-gray-500 text-sm leading-6">Grows seamlessly as your business expands</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00b7ff;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">05</span>
                <div class="benefit-icon-wrap bg-[#00b7ff]/10" style="--accent: #00b7ff;">
                    <i class="fas fa-shield-alt text-[#00b7ff] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Strong Security</h3>
                    <p class="text-gray-500 text-sm leading-6">Industry-standard protection for your website</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00ffb3;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">06</span>
                <div class="benefit-icon-wrap bg-[#00ffb3]/10" style="--accent: #00ffb3;">
                    <i class="fas fa-bolt text-[#00ffb3] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Faster Performance</h3>
                    <p class="text-gray-500 text-sm leading-6">Optimized loading speed for better user experience</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00b7ff;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">07</span>
                <div class="benefit-icon-wrap bg-[#00b7ff]/10" style="--accent: #00b7ff;">
                    <i class="fas fa-smile text-[#00b7ff] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Better User Experience</h3>
                    <p class="text-gray-500 text-sm leading-6">Engaging and intuitive design for visitors</p>
                </div>
            </div>

            <div class="benefit-card glass-card rounded-[20px] md:rounded-[24px] p-6 md:p-7 border border-white/[0.06] group text-center"
                 style="--accent: #00ffb3;">
                <div class="benefit-ring rounded-[20px] md:rounded-[24px]"></div>
                <div class="benefit-accent-line"></div>
                <span class="benefit-number">08</span>
                <div class="benefit-icon-wrap bg-[#00ffb3]/10" style="--accent: #00ffb3;">
                    <i class="fas fa-dollar-sign text-[#00ffb3] text-xl"></i>
                </div>
                <div class="benefit-content">
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Cost-Effective</h3>
                    <p class="text-gray-500 text-sm leading-6">Affordable management and maintenance</p>
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
                    BUILD A SCALABLE WEB PRESENCE
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Transform<br class="hidden sm:block"> Your Digital Strategy?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Ready to transform your digital strategy with a tailored WordPress platform? Contact our expert team today to discuss your project requirements and receive a free quote!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Discuss Your Project
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Get Free Quote
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
