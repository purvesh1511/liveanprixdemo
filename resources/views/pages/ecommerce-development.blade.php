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
                    eCommerce Development Agency
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Premier </span>
                    <span class="services-heading-gradient">E-Commerce Website Development</span>
                    <span class="txt-split block sm:inline"> Company</span>
                    <span class="txt-split block sm:inline" style="font-size:0.65em; opacity:0.85;">| Drive Revenue</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    In today's competitive online marketplace, a fast, secure, and intuitive digital storefront is essential for driving conversions and growing brand loyalty. We build high-performing digital shopping platforms engineered to scale.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/heroright1.webp') }}"
                             alt="Anprix Solutions - E-Commerce Website Development Company"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-shopping-cart text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Expert In</p>
                                <p class="text-sm font-semibold">eCommerce</p>
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
                                <p class="text-sm font-semibold">Revenue Growth</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- SERVICES - BENTO GRID LAYOUT -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#00ffb3]/5 blur-[200px] rounded-full pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <!-- HEADING -->
        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">What We Build</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Comprehensive </span>
                <span class="services-heading-gradient">E-Commerce</span>
                <span class="txt-split"> Website Development Services</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Building a successful online brand requires a seamless user experience, bulletproof transaction security, and scalable infrastructure. We provide custom solutions tailored to your unique sales goals.
            </p>

        </div>

        <!-- BENTO GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6" id="ecom-bento-grid">

            <!-- Custom Web Storefronts - LARGE -->
            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group sm:col-span-2"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-5">
                    <div class="services-icon-wrap bg-[#00ffb3]/10 w-14 h-14" style="--accent: #00ffb3;">
                        <i class="fas fa-store text-[#00ffb3] text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00ffb3] transition-colors">Custom Web Storefronts</h3>
                        <p class="text-gray-500 text-sm">Shopify, WooCommerce, Magento, Headless</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                    Purpose-built shopping experiences delivered through flexible eCommerce website development services using Shopify, WooCommerce, Magento, or custom headless stacks. Every storefront is crafted for your brand and optimized for conversions.
                </p>

                <div class="flex flex-wrap gap-3">
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">Shopify</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">WooCommerce</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">Magento</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">Headless</span>
                </div>
            </div>

            <!-- Mobile Commerce Apps -->
            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-5" style="--accent: #00b7ff;">
                    <i class="fas fa-mobile-alt text-[#00b7ff] text-xl"></i>
                </div>

                <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">Mobile Commerce Apps</h3>
                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Native & cross-platform mobile apps for iOS and Android. Tap into mobile commerce growth with tailored solutions from our eCommerce app development team.
                </p>
            </div>

            <!-- Conversion-Driven UI/UX -->
            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.15s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-5" style="--accent: #00ffb3;">
                    <i class="fas fa-bullseye text-[#00ffb3] text-xl"></i>
                </div>

                <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">Conversion-Driven UI/UX</h3>
                <p class="text-gray-400 text-sm md:text-[15px] leading-7">
                    Mobile-first design layouts crafted to simplify checkout, reduce cart abandonment, and increase average order value.
                </p>
            </div>

            <!-- Seamless Integrations - LARGE -->
            <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-7 md:p-8 border border-white/[0.06] service-reveal group sm:col-span-2"
                 style="--accent: #00b7ff; transition-delay: 0.2s;">
                <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <div class="flex items-center gap-4 mb-5">
                    <div class="services-icon-wrap bg-[#00b7ff]/10 w-14 h-14" style="--accent: #00b7ff;">
                        <i class="fas fa-plug text-[#00b7ff] text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold group-hover:text-[#00b7ff] transition-colors">Seamless Third-Party Integrations</h3>
                        <p class="text-gray-500 text-sm">Payment Gateways, ERPs, CRMs & More</p>
                    </div>
                </div>

                <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                    Robust connections with global payment gateways, ERPs, CRMs, real-time inventory management systems, and fulfillment providers. Your store becomes the central hub of your business operations.
                </p>

                <div class="flex flex-wrap gap-3">
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">Payment Gateways</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">ERP Systems</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">CRM Tools</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs text-gray-400">Inventory</span>
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
                        <i class="fas fa-bolt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">Lightning Fast</h4>
                    <p class="text-gray-500 text-xs leading-5">Core Web Vitals optimized</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-3">
                        <i class="fas fa-shield-alt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Enterprise Security</h4>
                    <p class="text-gray-500 text-xs leading-5">Grade-A protection protocols</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] mb-3">
                        <i class="fas fa-credit-card text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00b7ff] transition-colors">Frictionless Checkout</h4>
                    <p class="text-gray-500 text-xs leading-5">Zero-hassle payment flows</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="w-10 h-10 rounded-xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] mb-3">
                        <i class="fas fa-expand-arrows-alt text-sm"></i>
                    </div>
                    <h4 class="text-sm font-bold mb-1 group-hover:text-[#00ffb3] transition-colors">High-Volume Ready</h4>
                    <p class="text-gray-500 text-xs leading-5">Handles traffic spikes</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-5 md:p-6 border border-white/[0.06] group sm:col-span-2"
                     style="--accent: #00b7ff; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-plug text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold group-hover:text-[#00b7ff] transition-colors">Seamless Integrations</h4>
                            <p class="text-gray-500 text-xs leading-5">Payment, ERP, CRM & inventory systems</p>
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
                    Choosing the right
                    <span class="services-heading-gradient block sm:inline"> eCommerce Web Development Firm</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-6">
                    Choosing the right eCommerce web development firm means collaborating with engineering specialists who prioritize technical performance, speed, and measurable sales impact.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    Our team focuses on lightning-fast page loading, Core Web Vitals optimization, enterprise-grade security protocols, and frictionless checkout flows. We deliver future-proof web and mobile applications engineered to handle high-volume traffic without compromising performance or reliability.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Scale Your Store
                </a>

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
                    SCALE YOUR ONLINE STORE TODAY
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Maximize<br class="hidden sm:block"> Your Conversion Rate?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Elevate your brand with custom web and mobile platforms designed to maximize conversion rates and digital growth. Contact our eCommerce website design and development company today for a complimentary project consultation and free audit!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Free Project Consultation
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Free Store Audit
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
