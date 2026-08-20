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
                    CMS & eCommerce
                </p>
                <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">
                    <span class="green-text block sm:inline">
                        CMS & eCommerce
                    </span>
                    Solutions For Your Business
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10">
                    Anprix specializes in WordPress, Shopify, WooCommerce, and custom CMS
                    development to help you manage content and sell online with ease.
                </p>
            </div>

            <div class="relative flex items-center justify-center">
                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-full lg:max-w-2xl mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/cms.png') }}"
                             alt="Anprix Solutions - CMS & eCommerce Development"
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
                                <p class="text-sm font-semibold">CMS & eCommerce</p>
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

<section class="py-16 md:py-24 section-border overflow-hidden service-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">WordPress Development</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">Custom WordPress <span class="green-text">Websites</span></h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We build fast, secure, and scalable WordPress websites with custom themes,
                    plugins, and optimized performance for businesses of all sizes.
                </p>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fab fa-wordpress"></i></div>
                        <div><h3 class="font-bold text-lg">Custom Theme Development</h3><p class="text-gray-500 text-sm">Tailor-made designs that match your brand</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fas fa-plug"></i></div>
                        <div><h3 class="font-bold text-lg">Plugin Integration</h3><p class="text-gray-500 text-sm">WooCommerce, SEO, forms, and more</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fas fa-tachometer-alt"></i></div>
                        <div><h3 class="font-bold text-lg">Performance Optimization</h3><p class="text-gray-500 text-sm">Speed, caching, and SEO optimized</p></div>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fab fa-wordpress text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">WordPress</h3><p class="text-gray-500 text-sm">Custom themes & plugins</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-shopping-cart text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">WooCommerce</h3><p class="text-gray-500 text-sm">eCommerce stores</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-bolt text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Performance</h3><p class="text-gray-500 text-sm">Fast loading speed</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-shield-alt text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Security</h3><p class="text-gray-500 text-sm">Hardened & protected</p></div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-shopify text-[#00ffb3] text-2xl"></i>
                    <div><h3 class="font-bold text-lg">Custom Shopify Stores</h3><p class="text-gray-500 text-sm">Premium theme development</p></div>
                </div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-credit-card text-[#00b7ff] text-2xl"></i>
                    <div><h3 class="font-bold text-lg">Payment Integration</h3><p class="text-gray-500 text-sm">Multiple gateways supported</p></div>
                </div>
                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-chart-line text-[#00ffb3] text-2xl"></i>
                    <div><h3 class="font-bold text-lg">SEO & Marketing</h3><p class="text-gray-500 text-sm">Built-in conversion optimization</p></div>
                </div>
            </div>
            <div class="space-y-6 order-1 lg:order-2">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Shopify Development</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black">Scale Your <span class="green-text">eCommerce</span> Store</h2>
                <p class="text-gray-400 text-base md:text-lg">
                    Launch and grow your online store with custom Shopify development,
                    theme customization, and powerful app integrations.
                </p>
                <a href="{{ route('hire') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Start Your Store</a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">eCommerce Development</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">Sell More With <span class="green-text">Online Stores</span></h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Launch high-converting eCommerce stores on Shopify, WooCommerce, or custom
                    platforms built to maximize sales and scale your business.
                </p>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fab fa-shopify"></i></div>
                        <div><h3 class="font-bold text-lg">Shopify Stores</h3><p class="text-gray-500 text-sm">Custom themes, apps & checkout optimization</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]"><i class="fab fa-wordpress"></i></div>
                        <div><h3 class="font-bold text-lg">WooCommerce</h3><p class="text-gray-500 text-sm">WordPress-powered eCommerce solutions</p></div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]"><i class="fas fa-credit-card"></i></div>
                        <div><h3 class="font-bold text-lg">Payment & Shipping</h3><p class="text-gray-500 text-sm">Secure gateways, tax & shipping automation</p></div>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fab fa-shopify text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Shopify</h3><p class="text-gray-500 text-sm">Premium eCommerce</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-shopping-cart text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">WooCommerce</h3><p class="text-gray-500 text-sm">WordPress eCommerce</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-chart-line text-3xl mb-4 text-[#00ffb3]"></i><h3 class="font-bold text-lg">Conversion</h3><p class="text-gray-500 text-sm">Optimized for sales</p></div>
                <div class="bg-black/40 rounded-2xl p-6 md:p-8"><i class="fas fa-mobile-alt text-3xl mb-4 text-[#00b7ff]"></i><h3 class="font-bold text-lg">Mobile Ready</h3><p class="text-gray-500 text-sm">Shopping on any device</p></div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            <div class="space-y-6">
                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">Custom CMS Development</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black">Built For Your <span class="green-text">Unique Needs</span></h2>
                <p class="text-gray-400">
                    Tailor-made content management systems built from the ground up
                    for businesses with specific requirements.
                </p>
                <a href="{{ route('hire') }}" class="btn-primary inline-block w-full sm:w-auto px-6 py-4 rounded-2xl text-center">Discuss Your Project</a>
            </div>
            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-code text-3xl mb-3 text-[#00ffb3]"></i><p>Laravel CMS</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-database text-3xl mb-3 text-[#00b7ff]"></i><p>Custom Admin</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-cogs text-3xl mb-3 text-[#00ffb3]"></i><p>API Ready</p></div>
                <div class="bg-black/40 p-6 rounded-2xl text-center"><i class="fas fa-mobile-alt text-3xl mb-3 text-[#00b7ff]"></i><p>Headless CMS</p></div>
            </div>
        </div>

    </div>
</section>

<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14 md:mb-20">
            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">WHY CHOOSE CMS & eCommerce</p>
            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">Benefits of CMS & eCommerce</h2>
            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                A powerful CMS combined with eCommerce capabilities lets you manage content
                and sell products from a single platform.
            </p>
        </div>
        <div class="flex flex-col lg:flex-row items-stretch gap-0 relative">
            @php
            $benefits = [
                ['num' => '01', 'numClass' => 'green-text', 'icon' => 'fa-pencil-alt', 'iconColor' => '[#00ffb3]', 'borderColor' => '[#00ffb3]', 'title' => 'Easy Content Management', 'desc' => 'Update text, images, and pages without any coding knowledge.'],
                ['num' => '02', 'numClass' => 'blue-text', 'icon' => 'fa-search', 'iconColor' => '[#00b7ff]', 'borderColor' => '[#00b7ff]', 'title' => 'SEO Friendly', 'desc' => 'Built-in SEO tools to help your content rank higher on Google.'],
                ['num' => '03', 'numClass' => 'green-text', 'icon' => 'fa-expand-arrows-alt', 'iconColor' => '[#00ffb3]', 'borderColor' => '[#00ffb3]', 'title' => 'Scalable & Flexible', 'desc' => 'Start small and expand with plugins, features, and integrations.'],
                ['num' => '04', 'numClass' => 'blue-text', 'icon' => 'fa-shopping-cart', 'iconColor' => '[#00b7ff]', 'borderColor' => '[#00b7ff]', 'title' => 'eCommerce Ready', 'desc' => 'Built-in product management, payments, and inventory control.'],
            ];
            @endphp
            @foreach($benefits as $b)
            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-{{ $b['borderColor'] }}/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black {{ $b['numClass'] }}">{{ $b['num'] }}</div>
                        <i class="fas {{ $b['icon'] }} text-3xl text-{{ $b['iconColor'] }} icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">{{ $b['title'] }}</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">{{ $b['desc'] }}</p>
                </div>
            </div>
            @if(!$loop->last)
            <div class="chain-link hidden lg:flex">
                <div class="chain-line"></div>
                <i class="fas fa-link text-[#00ffb3] chain-icon"></i>
                <div class="chain-line"></div>
            </div>
            <div class="chain-vertical lg:hidden">
                <div class="chain-line-v"></div>
                <i class="fas fa-link text-[#00ffb3] chain-icon-v"></i>
                <div class="chain-line-v"></div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 md:py-24 section-border overflow-hidden service-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">
            <div>
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">CMS & eCommerce PLATFORMS</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Work With Leading
                    <span class="green-text block sm:inline">CMS & eCommerce Platforms</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    From WordPress and WooCommerce to Shopify and custom-built solutions, we have
                    expertise across the most popular CMS and eCommerce platforms.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 min-w-0">
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-wordpress text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">WordPress</h3>
                    <p class="text-gray-500 text-sm mt-2">The world's leading CMS</p>
                </div>
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-shopify text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Shopify</h3>
                    <p class="text-gray-500 text-sm mt-2">Premium eCommerce platform</p>
                </div>
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-shopping-cart text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold break-words">WooCommerce</h3>
                    <p class="text-gray-500 text-sm mt-2">WordPress eCommerce</p>
                </div>
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-laravel text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Laravel</h3>
                    <p class="text-gray-500 text-sm mt-2">Custom CMS applications</p>
                </div>
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-code text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Headless CMS</h3>
                    <p class="text-gray-500 text-sm mt-2">API-first architecture</p>
                </div>
                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-cogs text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Custom Solutions</h3>
                    <p class="text-gray-500 text-sm mt-2">Built for your needs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 section-border overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">
            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full"></div>

            <div class="relative z-10">
                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">LET'S BUILD YOUR CMS & eCommerce</p>
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">Ready To Build Your CMS or eCommerce Site?</h2>
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Start your project with Anprix and get a powerful, easy-to-manage website
                    or online store that helps your business grow.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">
                    <a href="{{ route('hire') }}"
                       class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>Start Your Project
                    </a>
                    <a href="{{ route('contact') }}"
                       class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition">
                        <i class="fas fa-envelope mr-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
