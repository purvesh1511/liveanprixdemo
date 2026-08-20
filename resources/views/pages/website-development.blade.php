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
                    Professional Website Development Services
                </p>

                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="txt-split">Leading Website Development Company </span>
                    <span class="txt-split green-text" style="display:block;">in Ahmedabad</span>
                    <span class="txt-split block sm:inline" style="font-size:0.65em; opacity:0.85;">| Custom Web Solutions</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 word-reveal">
                    In today's digital-first economy, your website serves as the primary digital storefront for your business. As a premier website development company in Ahmedabad, we build fast, responsive, and conversion-focused websites that turn casual visitors into loyal customers.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex items-center justify-center">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/web-developments.png') }}"
                             alt="Anprix Solutions - Website Development Company"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[85%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-[85%] xl:max-w-[680px] mx-auto animate-float">
                    </div>

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

                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-chart-line text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Results</p>
                                <p class="text-sm font-semibold">Conversion-Driven</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- COMPREHENSIVE SERVICES -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#00b7ff]/5 blur-[200px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <!-- HEADING -->
        <div class="text-center mb-16 md:mb-24 service-reveal">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/[0.02] mb-6 md:mb-8">
                <span class="w-2 h-2 rounded-full bg-[#00ffb3] animate-pulse"></span>
                <span class="text-xs sm:text-sm font-medium text-gray-400 tracking-wider uppercase">What We Build</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-[1.1]">
                <span class="txt-split">Comprehensive </span>
                <span class="services-heading-gradient block sm:inline"> Website Development</span>
                <span class="txt-split block sm:inline"> Services</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-relaxed word-reveal">
                Building a high-performing web application requires both technical precision and visual elegance. As a trusted web developer company in Ahmedabad, we deliver end-to-end solutions engineered to support your unique business goals.
            </p>

        </div>

        <!-- SERVICES GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6" id="wd-services-grid">

            <!-- Custom Web Engineering -->
            <div class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.05s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">01</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-code text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        Custom Web Engineering
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Tailor-made web platforms crafted for speed, scalable architecture, and ironclad security. From complex SaaS dashboards to enterprise portals, we engineer solutions that grow with your business.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Explore Solutions</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </div>

            <!-- E-Commerce Platforms -->
            <div class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.1s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">02</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-shopping-cart text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        E-Commerce Platforms
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Feature-rich online stores built on modern technologies like Shopify, WooCommerce, and custom frameworks. Optimized checkout flows, inventory management, and payment gateway integration.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Explore Solutions</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </div>

            <!-- Responsive UI/UX Layouts -->
            <div class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00b7ff; transition-delay: 0.15s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">03</span>

                <div class="services-icon-wrap bg-[#00b7ff]/10 mb-6" style="--accent: #00b7ff;">
                    <i class="fas fa-mobile-alt text-[#00b7ff] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00b7ff] transition-colors">
                        Responsive UI/UX Layouts
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Mobile-first designs crafted by skilled website designers in Ahmedabad to optimize engagement across every screen size. Pixel-perfect interfaces that convert visitors into customers.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00b7ff]">
                        <span>Explore Solutions</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </div>

            <!-- CMS & Business Portals -->
            <div class="services-magnetic-card glass-card rounded-[24px] md:rounded-[28px] p-7 md:p-8 border border-white/[0.06] service-reveal group"
                 style="--accent: #00ffb3; transition-delay: 0.2s;">

                <div class="card-border-glow rounded-[24px] md:rounded-[28px]"></div>
                <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                <div class="services-card-glow-line"></div>

                <span class="services-card-number">04</span>

                <div class="services-icon-wrap bg-[#00ffb3]/10 mb-6" style="--accent: #00ffb3;">
                    <i class="fas fa-cogs text-[#00ffb3] text-xl"></i>
                </div>

                <div class="services-card-content">
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-[#00ffb3] transition-colors">
                        CMS & Business Portals
                    </h3>
                    <p class="text-gray-400 text-sm md:text-[15px] leading-7 mb-5">
                        Intuitive content management systems built with clean, search-engine-friendly code from day one. Easy to update, easy to scale, and built to perform.
                    </p>
                    <div class="flex items-center gap-2 text-sm font-medium text-[#00ffb3]">
                        <span>Explore Solutions</span>
                        <span class="services-card-arrow"><i class="fas fa-arrow-right text-xs"></i></span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE SECTION -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <!-- LEFT: TEXT -->
            <div class="service-reveal">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    Why Choose Anprix
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Your Trusted
                    <span class="services-heading-gradient block sm:inline"> Website Design Company</span>
                    <span class="block sm:inline"> Ahmedabad Team</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8">
                    Partnering with the right agency means collaborating with specialists who prioritize speed, performance, and lead generation. As a full-service website design company Ahmedabad brands rely on, we focus heavily on Core Web Vitals, intuitive site architecture, and seamless conversion paths.
                </p>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-10">
                    Our custom website development services in Ahmedabad ensure your online portal loads quickly, ranks well on search engines, and converts traffic into measurable revenue. From initial wireframing to launch and ongoing maintenance, we handle every detail.
                </p>

                <a href="{{ route('hire') }}"
                   class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-rocket"></i>
                    Start Your Website
                </a>

            </div>

            <!-- RIGHT: FEATURE CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5">

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00ffb3]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00ffb3;">
                        <i class="fas fa-bolt text-[#00ffb3] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Lightning Fast</h3>
                    <p class="text-gray-500 text-sm leading-6">Optimized for Core Web Vitals and sub-second load times.</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00b7ff]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00b7ff;">
                        <i class="fas fa-search text-[#00b7ff] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">SEO-First Code</h3>
                    <p class="text-gray-500 text-sm leading-6">Clean, semantic markup that search engines love to index.</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00b7ff]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00b7ff;">
                        <i class="fas fa-mobile-alt text-[#00b7ff] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Fully Responsive</h3>
                    <p class="text-gray-500 text-sm leading-6">Pixel-perfect on mobile, tablet, and desktop screens.</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00ffb3]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00ffb3;">
                        <i class="fas fa-chart-line text-[#00ffb3] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Conversion Focused</h3>
                    <p class="text-gray-500 text-sm leading-6">Strategic CTAs and user flows designed to generate leads.</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00ffb3]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00ffb3;">
                        <i class="fas fa-expand-arrows-alt text-[#00ffb3] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors">Scalable Architecture</h3>
                    <p class="text-gray-500 text-sm leading-6">Built to handle growth from startup to enterprise level.</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[20px] md:rounded-[24px] p-6 border border-white/[0.06] service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[20px] md:rounded-[24px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <div class="services-card-glow-line"></div>
                    <div class="services-icon-wrap bg-[#00b7ff]/10 mb-4 w-12 h-12 min-w-[48px] rounded-xl" style="--accent: #00b7ff;">
                        <i class="fas fa-headset text-[#00b7ff] text-base"></i>
                    </div>
                    <h3 class="text-base font-bold mb-2 group-hover:text-[#00b7ff] transition-colors">Ongoing Support</h3>
                    <p class="text-gray-500 text-sm leading-6">Launch to maintenance, we handle every detail for you.</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- TECH STACK -->
<section class="py-20 md:py-32 section-border overflow-hidden relative">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div class="service-reveal">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    OUR TECH STACK
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Build With The
                    <span class="services-heading-gradient block sm:inline"> Best Technologies</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From Laravel and WordPress to React and Tailwind CSS, we use modern, battle-tested technologies to deliver websites that perform, scale, and impress.
                </p>

            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-5">

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.05s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <i class="fab fa-laravel text-3xl md:text-4xl mb-3 text-[#00ffb3]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00ffb3] transition-colors">Laravel</h3>
                    <p class="text-gray-500 text-xs mt-1">PHP framework</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.1s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <i class="fab fa-wordpress text-3xl md:text-4xl mb-3 text-[#00b7ff]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00b7ff] transition-colors">WordPress</h3>
                    <p class="text-gray-500 text-xs mt-1">CMS & blogs</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.15s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <i class="fab fa-shopify text-3xl md:text-4xl mb-3 text-[#00ffb3]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00ffb3] transition-colors">Shopify</h3>
                    <p class="text-gray-500 text-xs mt-1">eCommerce</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.2s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <i class="fab fa-react text-3xl md:text-4xl mb-3 text-[#00b7ff]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00b7ff] transition-colors">React</h3>
                    <p class="text-gray-500 text-xs mt-1">Frontend</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00ffb3; transition-delay: 0.25s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00ffb3]/8 blur-[80px] rounded-full"></div>
                    <i class="fab fa-js text-3xl md:text-4xl mb-3 text-[#00ffb3]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00ffb3] transition-colors">JavaScript</h3>
                    <p class="text-gray-500 text-xs mt-1">Interactive UIs</p>
                </div>

                <div class="services-magnetic-card glass-card rounded-[18px] md:rounded-[22px] p-5 md:p-6 text-center service-reveal group"
                     style="--accent: #00b7ff; transition-delay: 0.3s;">
                    <div class="card-border-glow rounded-[18px] md:rounded-[22px]"></div>
                    <div class="card-glow-spot bg-[#00b7ff]/8 blur-[80px] rounded-full"></div>
                    <i class="fas fa-wind text-3xl md:text-4xl mb-3 text-[#00b7ff]"></i>
                    <h3 class="text-sm md:text-base font-bold group-hover:text-[#00b7ff] transition-colors">Tailwind CSS</h3>
                    <p class="text-gray-500 text-xs mt-1">Utility-first</p>
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
                    BUILD YOUR WEBSITE
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Transform<br class="hidden sm:block"> Your Online Presence?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Outshine your competition with a sleek, high-performing website built to scale. Contact our development team today to schedule a free discovery call and request a custom quote!
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('contact') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-phone"></i>
                        Schedule Free Discovery Call
                    </a>

                    <a href="{{ route('hire') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Request Custom Quote
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
