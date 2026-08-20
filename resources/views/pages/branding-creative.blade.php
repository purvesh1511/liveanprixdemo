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

        <div class="max-w-4xl">

            <p class="uppercase tracking-[4px] md:tracking-[5px] text-[#00ffb3] font-semibold mb-5 md:mb-6 text-xs sm:text-sm">
                Branding & Creative
            </p>

            <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                Build an
                <span class="green-text block sm:inline">
                    Unforgettable Brand
                </span>

            </h1>

            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">

                Anprix offers comprehensive branding and creative services — logo design, brand identity, visual storytelling, packaging, and creative strategy — to help your business stand out and connect with your audience.

            </p>

        </div>

    </div>

</section>

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden service-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- Logo & Brand Identity -->
        <div id="logo" class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-pen-nib text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Logo Design</h3>
                        <p class="text-gray-500 text-sm">Custom, memorable logos</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-palette text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Color Palette</h3>
                        <p class="text-gray-500 text-sm">Strategic color selection</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-font text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Typography</h3>
                        <p class="text-gray-500 text-sm">Font pairing & hierarchy</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-book text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Brand Guidelines</h3>
                        <p class="text-gray-500 text-sm">Complete brand book</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Logo & Brand Identity
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Your Brand <span class="green-text">Identity</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We craft distinctive brand identities — logos, color schemes, typography, and guidelines — that communicate your values and leave a lasting impression.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('hire') }}" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Build Your Brand Identity
                    </a>

                </div>

            </div>

        </div>

        <!-- Visual Storytelling -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Visual Storytelling
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Tell Your Story <span class="green-text">Visually</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We create compelling visual narratives through photography, videography, motion graphics, and illustration that capture your brand's essence and engage your audience.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-video"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Brand Videos</h3>
                            <p class="text-gray-500 text-sm">Explainer, promo & corporate videos</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Photography</h3>
                            <p class="text-gray-500 text-sm">Product & brand photography</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Motion Graphics</h3>
                            <p class="text-gray-500 text-sm">Animated content & explainers</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-video text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Video Production</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-camera text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Photography</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-film text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Animation</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-edit text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Post Production</p>
                </div>

            </div>

        </div>

        <!-- Packaging & Print Design -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-box text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Product Packaging</h3>
                        <p class="text-gray-500 text-sm">Box, label & wrapper design</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-tag text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Label Design</h3>
                        <p class="text-gray-500 text-sm">Custom product labels</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-shopping-bag text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Bag & Merch Design</h3>
                        <p class="text-gray-500 text-sm">Branded merchandise</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-print text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Print Collateral</h3>
                        <p class="text-gray-500 text-sm">Business cards, brochures & flyers</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Packaging & Print Design
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Design That <span class="green-text">Stands Out</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    From product packaging and labels to business cards and brochures, we design print materials that capture attention and reinforce your brand at every touchpoint.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('hire') }}" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Design Your Packaging
                    </a>

                </div>

            </div>

        </div>

        <!-- Creative Strategy -->
        <div id="strategy" class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Creative Strategy
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Strategy-Driven <span class="green-text">Creativity</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We develop creative strategies that align your brand identity with business goals — from brand positioning and messaging to campaign creative direction.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Brand Positioning</h3>
                            <p class="text-gray-500 text-sm">Define your market position</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Messaging Framework</h3>
                            <p class="text-gray-500 text-sm">Voice, tone & key messages</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Campaign Creative</h3>
                            <p class="text-gray-500 text-sm">Visual direction for ads & content</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-bullseye text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Brand Strategy</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-lightbulb text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Creative Direction</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-clipboard-list text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>Brand Audit</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-sync-alt text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Rebranding</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY BRANDING -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE BRANDING
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                Benefits of Strong Branding
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                A strong brand differentiates you from competitors, builds trust with customers, and creates lasting emotional connections.
            </p>

        </div>

        <div class="flex flex-col lg:flex-row items-stretch gap-0 relative">

            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black green-text">01</div>
                        <i class="fas fa-heart text-3xl text-[#00ffb3] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Brand Loyalty</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Customers connect emotionally with strong brands.
                    </p>
                </div>
            </div>

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

            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black blue-text">02</div>
                        <i class="fas fa-star text-3xl text-[#00b7ff] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Stand Out</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Differentiate from competitors in your market.
                    </p>
                </div>
            </div>

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

            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black green-text">03</div>
                        <i class="fas fa-shield-alt text-3xl text-[#00ffb3] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Trust & Credibility</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Professional branding builds instant trust.
                    </p>
                </div>
            </div>

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

            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00b7ff]/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black blue-text">04</div>
                        <i class="fas fa-chart-line text-3xl text-[#00b7ff] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Higher Value</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Strong brands command premium pricing.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-[28px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <div class="absolute top-[-80px] left-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[120px] rounded-full">
            </div>

            <div class="absolute bottom-[-80px] right-[-80px] w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[120px] rounded-full">
            </div>

            <div class="relative z-10">

                <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                    BUILD YOUR BRAND
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Build Your Brand?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with Anprix and get a complete branding strategy with logo design, visual identity, and creative direction tailored to your business.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('hire') }}"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Brand
                    </a>

                    <a href="{{ route('contact') }}"
                        class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
