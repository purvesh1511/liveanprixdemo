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
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/services') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
@endsection

@section('content')
<!-- HERO -->
<section class="py-24 sm:py-28 lg:py-32 relative overflow-hidden">
    <div class="absolute top-[-80px] sm:top-0 left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] sm:bottom-0 right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="max-w-4xl">
            <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                WHAT WE DO
            </p>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                We Build Modern
                <span class="green-text block sm:inline">Digital Experiences</span>
                For Growing Businesses
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">
                Anprix helps startups, brands, and enterprises build a strong digital presence through website
                development, SEO optimization, Shopify solutions, Google Ads, and digital marketing services.
            </p>
        </div>
    </div>
</section>

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- SERVICE 1: Website Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Website Development</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">High Performance Business Websites</h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">We build fast, responsive and conversion-focused websites.</p>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fas fa-palette"></i></div>
                        <div><h3 class="font-bold text-lg">Custom Website Design</h3><p class="text-gray-500 text-sm">Modern UI/UX layouts</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fab fa-shopify"></i></div>
                        <div><h3 class="font-bold text-lg">Shopify Development</h3><p class="text-gray-500 text-sm">eCommerce solutions</p></div>
                    </div>
                </div>
                <a href="{{ route('website-development') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Explore Web Dev Services</a>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-code text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Laravel</h3><p class="text-gray-500 text-sm">Custom apps</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-shopping-cart text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Shopify</h3><p class="text-gray-500 text-sm">eCommerce</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-bolt text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Performance</h3><p class="text-gray-500 text-sm">Fast loading</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-mobile-alt text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Responsive</h3><p class="text-gray-500 text-sm">Mobile ready</p></div>
            </div>
        </div>

        <!-- SERVICE 2: CMS Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">CMS Development</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight">Powerful <span class="green-text">CMS Solutions</span></h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">WordPress, Shopify, and custom CMS platforms built for easy content management, performance, and scalability.</p>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fab fa-wordpress"></i></div>
                        <div><h3 class="font-bold text-lg">WordPress Development</h3><p class="text-gray-500 text-sm">Custom themes, plugins & WooCommerce</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fab fa-shopify"></i></div>
                        <div><h3 class="font-bold text-lg">Shopify Development</h3><p class="text-gray-500 text-sm">eCommerce stores & custom themes</p></div>
                    </div>
                </div>
                <a href="{{ route('cms-development') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Explore CMS Services</a>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fab fa-wordpress text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">WordPress</h3><p class="text-gray-500 text-sm">Custom themes & plugins</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fab fa-shopify text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Shopify</h3><p class="text-gray-500 text-sm">eCommerce stores</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-bolt text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Performance</h3><p class="text-gray-500 text-sm">Fast loading speed</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-shield-alt text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Security</h3><p class="text-gray-500 text-sm">Hardened & protected</p></div>
            </div>
        </div>

        <!-- SERVICE 3: eCommerce -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-shopping-cart text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Shopify Stores</h3><p class="text-gray-500 text-sm">Custom themes & checkout optimization</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fab fa-wordpress text-[#00b7ff] text-2xl"></i><div><h3 class="font-bold text-lg">WooCommerce</h3><p class="text-gray-500 text-sm">WordPress eCommerce solutions</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-credit-card text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Payment Integration</h3><p class="text-gray-500 text-sm">Secure gateways & fraud protection</p></div></div>
            </div>
            <div class="space-y-6 order-1 lg:order-2">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">eCommerce Development</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black">Sell More With <span class="green-text">eCommerce</span></h2>
                <p class="text-gray-400 text-base md:text-lg">Launch high-converting online stores on Shopify, WooCommerce, or custom platforms built to maximize sales and scale your business.</p>
                <a href="{{ route('hire') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Start Your Store</a>
            </div>
        </div>

        <!-- SERVICE 4: SEO -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-search text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Technical SEO</h3><p class="text-gray-500 text-sm">Speed optimization</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-map-marker-alt text-[#00b7ff] text-2xl"></i><div><h3 class="font-bold text-lg">Local SEO</h3><p class="text-gray-500 text-sm">Google Maps ranking</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-pen-nib text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Content SEO</h3><p class="text-gray-500 text-sm">Keyword optimization</p></div></div>
            </div>
            <div class="space-y-6 order-1 lg:order-2">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">SEO Optimization</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black">Rank Higher on <span class="green-text">Google</span></h2>
                <p class="text-gray-400 text-base md:text-lg">Improve rankings and organic traffic.</p>
                <a href="{{ route('seo') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Explore SEO Services</a>
            </div>
        </div>

        <!-- SERVICE 5: Advertising -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Advertising Services</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black">Data Driven <span class="green-text">Ads Campaigns</span></h2>
                <p class="text-gray-400">Google Ads & Social Ads</p>
                <a href="{{ route('advertising') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Start Advertising</a>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-bullhorn text-3xl mb-3 text-[#00ffb3]"></i><p>Google Ads</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fab fa-facebook text-3xl mb-3 text-[#00b7ff]"></i><p>Social Ads</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-bullseye text-3xl mb-3 text-[#00ffb3]"></i><p>Retargeting</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-chart-line text-3xl mb-3 text-[#00b7ff]"></i><p>Analytics</p></div>
            </div>
        </div>

        <!-- SERVICE 6: Digital Marketing -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-file-alt text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Content Marketing</h3><p class="text-gray-500 text-sm">SEO blogs & articles</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-envelope text-[#00b7ff] text-2xl"></i><div><h3 class="font-bold text-lg">Email Marketing</h3><p class="text-gray-500 text-sm">Automation campaigns</p></div></div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center"><i class="fas fa-users text-[#00ffb3] text-2xl"></i><div><h3 class="font-bold text-lg">Social Media</h3><p class="text-gray-500 text-sm">Growth & engagement</p></div></div>
            </div>
            <div class="space-y-6 order-1 lg:order-2">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Digital Marketing</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black">Grow Your <span class="green-text">Brand</span></h2>
                <p class="text-gray-400">Complete marketing solutions</p>
                <a href="{{ route('digital-marketing') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Start Marketing</a>
            </div>
        </div>

    </div>
</section>

<!-- SERVICE 7: Branding & Creative -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Branding & Creative</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black">Build an <span class="green-text">Unforgettable Brand</span></h2>
                <p class="text-gray-400 text-base md:text-lg">Logo design, brand identity, visual storytelling, and creative strategy.</p>
                <a href="{{ route('branding-creative') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Explore Branding Services</a>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-pen-nib text-3xl mb-3 text-[#00ffb3]"></i><p>Logo Design</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-palette text-3xl mb-3 text-[#00b7ff]"></i><p>Brand Identity</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-video text-3xl mb-3 text-[#00ffb3]"></i><p>Visual Stories</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-print text-3xl mb-3 text-[#00b7ff]"></i><p>Packaging & Print</p></div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14 md:mb-20">
            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">OUR PROCESS</p>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 md:mb-8 leading-tight">How We Work</h2>
            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">We follow a strategic process to deliver scalable digital solutions.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl font-black green-text">01</div>
                    <div class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fas fa-lightbulb"></i></div>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Discovery</h3>
                <p class="text-gray-500 leading-7 md:leading-8 text-sm md:text-base">Understanding goals, audience, and project requirements.</p>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl font-black blue-text">02</div>
                    <div class="w-12 h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fas fa-sitemap"></i></div>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Strategy</h3>
                <p class="text-gray-500 leading-7 md:leading-8 text-sm md:text-base">Planning design, SEO, and marketing strategy.</p>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition hover:-translate-y-1">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl font-black green-text">03</div>
                    <div class="w-12 h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fas fa-code"></i></div>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Development</h3>
                <p class="text-gray-500 leading-7 md:leading-8 text-sm md:text-base">Building fast, scalable and optimized solutions.</p>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition hover:-translate-y-1">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl font-black blue-text">04</div>
                    <div class="w-12 h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fas fa-rocket"></i></div>
                </div>
                <h3 class="text-xl md:text-2xl font-bold mb-3">Growth</h3>
                <p class="text-gray-500 leading-7 md:leading-8 text-sm md:text-base">Scaling traffic, leads, and conversions.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">
            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>
            <div class="relative z-10">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">LET'S WORK TOGETHER</p>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6 md:mb-8">Ready To Build Your Next Project?</h2>
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Start your digital journey with Anprix and grow your business online with powerful website and marketing solutions.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">
                    <a href="{{ route('hire') }}" class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i> Hire Us
                    </a>
                    <a href="{{ route('contact') }}" class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition">
                        <i class="fas fa-envelope mr-2"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
