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
                Advertising Services
            </p>

            <h1 class="text-xl sm:text-4xl lg:text-5xl font-black leading-tight lg:leading-[1.05] mb-8 md:mb-10">

                Data-Driven
                <span class="green-text block sm:inline">
                    Ad Campaigns
                </span>
                That Deliver ROI

            </h1>

            <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 md:leading-10 max-w-3xl">

                Anprix manages high-converting Google Ads, social media ads, display campaigns, and retargeting strategies to drive qualified traffic and maximize your ad spend.

            </p>

        </div>

    </div>

</section>

<!-- SERVICES DETAIL -->
<section class="py-16 md:py-24 section-border overflow-hidden service-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20 md:space-y-32">

        <!-- Google Ads -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fab fa-google text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Search Ads</h3>
                        <p class="text-gray-500 text-sm">Keyword-targeted text ads on Google</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-shopping-cart text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Shopping Ads</h3>
                        <p class="text-gray-500 text-sm">Product listing ads for eCommerce</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-image text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Display Ads</h3>
                        <p class="text-gray-500 text-sm">Visual banners across the web</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-video text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">YouTube Ads</h3>
                        <p class="text-gray-500 text-sm">Video advertising campaigns</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Google Ads
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Dominate Search With <span class="green-text">Google Ads</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Get in front of customers actively searching for your products and services with strategically managed Google Ads campaigns optimized for conversions.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('hire') }}" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Launch Google Ads
                    </a>

                </div>

            </div>

        </div>

        <!-- Social Media Ads -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Social Media Ads
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Reach Audiences On <span class="green-text">Social Platforms</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Targeted advertising on Facebook, Instagram, LinkedIn, and Twitter to reach your ideal customers with precision targeting and engaging creatives.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Facebook & Instagram Ads</h3>
                            <p class="text-gray-500 text-sm">Visual campaigns with audience targeting</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">LinkedIn Ads</h3>
                            <p class="text-gray-500 text-sm">B2B lead generation campaigns</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Twitter Ads</h3>
                            <p class="text-gray-500 text-sm">Trend-based ad placements</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-facebook text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">Facebook</h3>
                    <p class="text-gray-500 text-sm">Audience targeting</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-instagram text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Instagram</h3>
                    <p class="text-gray-500 text-sm">Visual storytelling</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-linkedin-in text-3xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="font-bold text-lg">LinkedIn</h3>
                    <p class="text-gray-500 text-sm">B2B advertising</p>
                </div>

                <div class="bg-black/40 rounded-2xl p-6 md:p-8">
                    <i class="fab fa-twitter text-3xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="font-bold text-lg">Twitter (X)</h3>
                    <p class="text-gray-500 text-sm">Real-time promotion</p>
                </div>

            </div>

        </div>

        <!-- Retargeting -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="glass-card rounded-3xl p-6 md:p-10 space-y-5 order-2 lg:order-1">

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-user-friends text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Website Retargeting</h3>
                        <p class="text-gray-500 text-sm">Re-engage past visitors</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-sync-alt text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Dynamic Retargeting</h3>
                        <p class="text-gray-500 text-sm">Show relevant products viewed</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-envelope text-[#00ffb3] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Email Retargeting</h3>
                        <p class="text-gray-500 text-sm">Re-engage email subscribers</p>
                    </div>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl flex gap-4 items-center">
                    <i class="fas fa-crosshairs text-[#00b7ff] text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-lg">Lookalike Audiences</h3>
                        <p class="text-gray-500 text-sm">Find new customers like your best ones</p>
                    </div>
                </div>

            </div>

            <div class="space-y-6 order-1 lg:order-2">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Retargeting
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Convert Lost <span class="green-text">Visitors</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    Bring back visitors who left without converting with strategic retargeting campaigns across Google, Facebook, and email channels.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('hire') }}" class="btn-primary px-6 py-4 rounded-2xl text-center">
                        Start Retargeting
                    </a>

                </div>

            </div>

        </div>

        <!-- Analytics & Optimization -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <div class="space-y-6">

                <p class="green-text uppercase tracking-[4px] font-semibold text-sm">
                    Analytics & Optimization
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight">
                    Measure & Improve <span class="green-text">Performance</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9">
                    We track every metric that matters — CTR, CPA, ROAS, and conversion rates — and continuously optimize your campaigns for maximum return on ad spend.
                </p>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Conversion Tracking</h3>
                            <p class="text-gray-500 text-sm">Track leads, sales & form submissions</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff]">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">A/B Testing</h3>
                            <p class="text-gray-500 text-sm">Test creatives, audiences & landing pages</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 min-w-[48px] rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3]">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Monthly Reporting</h3>
                            <p class="text-gray-500 text-sm">Detailed performance reports & insights</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-6 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-chart-pie text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>CTR Tracking</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-dollar-sign text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>ROAS Analysis</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-bullseye text-3xl mb-3 text-[#00ffb3]"></i>
                    <p>CPA Optimization</p>
                </div>

                <div class="bg-black/40 p-6 rounded-2xl text-center">
                    <i class="fas fa-robot text-3xl mb-3 text-[#00b7ff]"></i>
                    <p>Automated Bidding</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- WHY ADVERTISING -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14 md:mb-20">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-5 text-sm">
                WHY CHOOSE PAID ADVERTISING
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8 leading-tight">
                Benefits of Paid Advertising
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                Paid advertising delivers fast, measurable results and puts your brand in front of high-intent audiences ready to take action.
            </p>

        </div>

        <div class="flex flex-col lg:flex-row items-stretch gap-0 relative">

            <div class="flex-1 relative group">
                <div class="glass-card rounded-3xl p-6 md:p-10 border border-white/10 hover:border-[#00ffb3]/30 transition-all duration-300 h-full hover:-translate-y-1 relative z-10">
                    <div class="flex items-start justify-between mb-4">
                        <div class="text-4xl font-black green-text">01</div>
                        <i class="fas fa-rocket text-3xl text-[#00ffb3] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Instant Traffic</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Get visitors to your site the moment your campaign launches.
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
                        <i class="fas fa-crosshairs text-3xl text-[#00b7ff] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Precision Targeting</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Reach the right audience by demographics, interests & behavior.
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
                        <i class="fas fa-coins text-3xl text-[#00ffb3] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Budget Control</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Set your budget and only pay when someone clicks or converts.
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
                        <i class="fas fa-chart-bar text-3xl text-[#00b7ff] icon-hover"></i>
                    </div>
                    <h3 class="text-xl md:text-xl font-bold mb-3">Measurable ROI</h3>
                    <p class="text-gray-500 leading-7 text-sm md:text-base">
                        Track every dollar with detailed analytics and reporting.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- AD PLATFORMS -->
<section class="py-16 md:py-24 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 lg:gap-20 items-center">

            <div>

                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-xs sm:text-sm">
                    ADVERTISING PLATFORMS
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    We Manage Ads On
                    <span class="green-text block sm:inline">Top Platforms</span>
                </h2>

                <p class="text-gray-400 text-base md:text-lg leading-8 md:leading-9 mb-8 md:mb-10">
                    Certified expertise across Google Ads, Meta Ads (Facebook & Instagram), LinkedIn, and Twitter to run campaigns that deliver real business results.
                </p>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-google text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">Google Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">Search, Display & Shopping</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-facebook text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Meta Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">Facebook & Instagram</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-linkedin-in text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">LinkedIn Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">B2B targeting</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-twitter text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Twitter Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">Trend-based ads</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fab fa-youtube text-5xl mb-4 text-[#00ffb3]"></i>
                    <h3 class="text-xl font-bold">YouTube Ads</h3>
                    <p class="text-gray-500 text-sm mt-2">Video advertising</p>
                </div>

                <div class="glass-card rounded-2xl p-6 md:p-8 text-center hover:-translate-y-1 transition">
                    <i class="fas fa-chart-line text-5xl mb-4 text-[#00b7ff]"></i>
                    <h3 class="text-xl font-bold">Analytics</h3>
                    <p class="text-gray-500 text-sm mt-2">Tracking & reporting</p>
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
                    LAUNCH YOUR CAMPAIGN
                </p>

                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Ready To Launch Your Ad Campaign?
                </h2>

                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Partner with Anprix and get a complete paid advertising strategy with expert management, creative development, and transparent reporting.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">

                    <a href="{{ route('hire') }}"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center transition-transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Launch Your Campaign
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
