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
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/hire') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="hero-gradient min-h-[85vh] flex items-center pt-28 sm:pt-32 md:pt-40 pb-16 sm:pb-20 md:pb-28 overflow-hidden relative">

    <div class="absolute top-[-80px] left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left fade-in-up">

                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2 justify-center lg:justify-start">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    HIRE US
                </p>

                <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-6 sm:mb-8">
                    Let's Build Something
                    <span class="hero-heading-accent green-text">Amazing Together</span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl mx-auto lg:mx-0">
                    Ready to take your digital presence to the next level?
                    <span class="text-white font-medium">Fill out the form</span> and our team will
                    <span class="text-white font-medium">get back to you within 24 hours</span>.
                </p>

                <!-- Service Tags -->
                <div class="flex flex-wrap gap-3 mt-8 justify-center lg:justify-start">
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00ffb3]/10 hover:border-[#00ffb3]/30 transition-all duration-300">
                        <i class="fas fa-code text-[#00ffb3]"></i>
                        Web Development
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00b7ff]/10 hover:border-[#00b7ff]/30 transition-all duration-300">
                        <i class="fas fa-search text-[#00b7ff]"></i>
                        SEO Services
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00ffb3]/10 hover:border-[#00ffb3]/30 transition-all duration-300">
                        <i class="fas fa-bullhorn text-[#00ffb3]"></i>
                        Marketing
                    </div>
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[#00b7ff]/10 hover:border-[#00b7ff]/30 transition-all duration-300">
                        <i class="fas fa-palette text-[#00b7ff]"></i>
                        Branding
                    </div>
                </div>

                <!-- Mini Stats -->
                <div class="grid grid-cols-3 gap-2 sm:flex sm:flex-wrap sm:items-center sm:gap-x-6 sm:gap-y-3 mt-8 sm:mt-10 pt-6 border-t border-white/5 text-center sm:text-left justify-center lg:justify-start max-w-sm mx-auto sm:max-w-none lg:mx-0">
                    <div class="hero-mini-stat flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-1 sm:gap-2">
                        <span class="text-lg sm:text-xl md:text-2xl font-black green-text counter" data-target="100">
                            <span>100</span>+
                        </span>
                        <p class="text-[10px] sm:text-[11px] text-gray-500 leading-tight">Projects Done</p>
                    </div>
                    <div class="hidden sm:block w-px h-8 bg-white/5"></div>
                    <div class="hero-mini-stat flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-1 sm:gap-2">
                        <span class="text-lg sm:text-xl md:text-2xl font-black blue-text counter" data-target="50">
                            <span>50</span>+
                        </span>
                        <p class="text-[10px] sm:text-[11px] text-gray-500 leading-tight">Happy Clients</p>
                    </div>
                    <div class="hidden sm:block w-px h-8 bg-white/5"></div>
                    <div class="hero-mini-stat flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-1 sm:gap-2">
                        <span class="text-lg sm:text-xl md:text-2xl font-black green-text counter" data-target="24">
                            <span>24</span>/7
                        </span>
                        <p class="text-[10px] sm:text-[11px] text-gray-500 leading-tight">Support</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="relative mt-6 lg:mt-0 flex items-center justify-center fade-in-up delay-200">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-sm lg:max-w-md mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/hire.webp') }}"
                             alt="Hire Anprix Solutions"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[75%] sm:max-w-[70%] md:max-w-[65%] lg:max-w-[80%] xl:max-w-[420px] mx-auto animate-float">
                    </div>

                    <!-- Floating Badge: Available -->
                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-rocket text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Status</p>
                                <p class="text-sm font-semibold text-[#00ffb3]">Available</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge: Response Time -->
                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-clock text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Response</p>
                                <p class="text-sm font-semibold">Within 24h</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>

<!-- CONTACT & INFO SECTION -->
<section class="py-16 sm:py-20 lg:py-24 section-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

            <!-- CONTACT FORM -->
            <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-40 h-40 bg-[#00ffb3]/5 blur-[80px] rounded-full"></div>

                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fa-solid fa-pen-ruler text-sm text-[#00ffb3]"></i>
                        </div>
                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Get Started</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl font-black mb-4">
                        Tell Us About Your Project
                    </h2>
                    <div class="w-16 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>
                    <p class="text-gray-400 text-sm sm:text-base mb-8">
                        Fill out the form and we'll get back to you within 24 hours.
                    </p>
                </div>

                <form class="ajax-form space-y-5 sm:space-y-6 relative z-10" method="POST" id="hireForm">
                    @csrf
                    <input type="hidden" name="form_type" value="hire">

                    <!-- NAME + PHONE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-user text-[#00ffb3] text-xs"></i>
                                Full Name *
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-user text-sm"></i>
                                </span>
                                <input type="text" name="name" placeholder="Enter your full name" required minlength="3"
                                    maxlength="80"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-phone text-[#00b7ff] text-xs"></i>
                                Phone Number
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-phone text-sm"></i>
                                </span>
                                <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="15"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                            </div>
                        </div>
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-[#00ffb3] text-xs"></i>
                            Email Address *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </span>
                            <input type="email" name="email" placeholder="Enter your email address" required maxlength="120"
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] focus:ring-1 focus:ring-[#00ffb3]">
                        </div>
                    </div>

                    <!-- SERVICE -->
                    <div>
                        <label for="hire-service" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-briefcase text-[#00b7ff] text-xs"></i>
                            Select Service *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                <i class="fa-solid fa-tag text-sm"></i>
                            </span>
                            <select id="hire-service" name="service" required
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                <option value="">Select a Service</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Advertising Services">Advertising Services</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Branding & Creative Services">Branding & Creative Services</option>
                            </select>
                        </div>
                    </div>

                    <!-- BUDGET + TIMELINE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="hire-budget" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-coins text-[#00ffb3] text-xs"></i>
                                Estimated Budget
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-dollar-sign text-sm"></i>
                                </span>
                                <select id="hire-budget" name="budget"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                    style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                    <option value="">Select Budget Range</option>
                                    <option value="0_5000">Less than $5,000</option>
                                    <option value="5000_10000">$5,000 - $10,000</option>
                                    <option value="10000_25000">$10,000 - $25,000</option>
                                    <option value="25000_plus">$25,000+</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="hire-timeline" class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-clock text-[#00b7ff] text-xs"></i>
                                Project Timeline
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                    <i class="fa-solid fa-calendar text-sm"></i>
                                </span>
                                <select id="hire-timeline" name="timeline"
                                    class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white focus:outline-none focus:border-[#00ffb3] appearance-none"
                                    style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path fill=%22%23666%22 d=%22M6 8L1 3h10z%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                    <option value="">Select Timeline</option>
                                    <option value="15">ASAP (Within 2 weeks)</option>
                                    <option value="30">Within 1 month</option>
                                    <option value="90">1-3 months</option>
                                    <option value="90_plus">3+ months</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- DETAILS -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2 sm:mb-3 flex items-center gap-2">
                            <i class="fa-solid fa-file-lines text-[#00ffb3] text-xs"></i>
                            Project Details *
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 text-gray-500">
                                <i class="fa-solid fa-align-left text-sm"></i>
                            </span>
                            <textarea name="details" rows="5" required minlength="10" maxlength="2000"
                                placeholder="Tell us about your project..."
                                class="w-full bg-black/40 border border-white/10 rounded-2xl pl-11 pr-5 py-3 sm:py-4 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3] resize-none"></textarea>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full btn-primary py-4 sm:py-5 rounded-2xl text-base sm:text-lg font-semibold transition hover:scale-[1.02] active:scale-[0.98] shadow-lg shadow-[#00ffb3]/20">
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Submit Request
                    </button>

                    <p class="text-center text-gray-500 text-xs mt-4">
                        <i class="fa-solid fa-shield mr-1 icon-hover"></i>
                        Your information is secure. We'll never share your data.
                    </p>

                </form>
            </div>

            <!-- INFO SIDE -->
            <div class="space-y-6 lg:space-y-8">

                <!-- CONTACT INFO -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute top-[-40px] right-[-40px] w-32 h-32 bg-[#00ffb3]/5 blur-[60px] rounded-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                                <i class="fa-solid fa-address-card text-sm text-[#00ffb3]"></i>
                            </div>
                            <h3 class="text-xl sm:text-xl font-black">
                                Contact Information
                            </h3>
                        </div>
                        <div class="w-12 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>

                        <div class="space-y-5">
                            <!-- EMAIL -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        {{ config('anprix.email') }}
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        {{ config('anprix.email_support') }}
                                    </p>
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00b7ff]/10 flex items-center justify-center text-[#00b7ff] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        {{ config('anprix.phone') }}
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        Mon-Fri, 9am-6pm
                                    </p>
                                </div>
                            </div>

                            <!-- ADDRESS -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-2xl bg-[#00ffb3]/10 flex items-center justify-center text-[#00ffb3] group-hover:scale-110 transition-transform">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-sm sm:text-base font-medium">
                                        {{ config('anprix.address') }}
                                    </p>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        {{ config('anprix.city_state_zip') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OFFICE HOURS -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute bottom-[-30px] left-[-30px] w-28 h-28 bg-[#00b7ff]/5 blur-[60px] rounded-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00b7ff]/20 to-[#00ffb3]/10 flex items-center justify-center">
                                <i class="fa-solid fa-clock text-sm text-[#00b7ff]"></i>
                            </div>
                            <h3 class="text-xl sm:text-xl font-black">
                                Office Hours
                            </h3>
                        </div>
                        <div class="w-12 h-0.5 bg-gradient-to-r from-[#00b7ff] to-[#00ffb3] rounded-full mb-6"></div>

                        <div class="space-y-4 text-sm sm:text-base">
                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Mon-Fri</span>
                                <span class="text-white font-semibold">{{ config('anprix.office_hours.weekday') }}</span>
                            </div>
                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Saturday</span>
                                <span class="text-white font-semibold">{{ config('anprix.office_hours.saturday') }}</span>
                            </div>
                            <div class="flex justify-between items-center p-3 rounded-xl bg-white/5">
                                <span class="text-gray-400">Sunday</span>
                                <span class="text-white font-semibold">{{ config('anprix.office_hours.sunday') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SOCIAL -->
                <div class="glass-card rounded-[30px] sm:rounded-[40px] p-6 sm:p-8 lg:p-10">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#00ffb3]/20 to-[#00b7ff]/10 flex items-center justify-center">
                            <i class="fa-solid fa-share-nodes text-sm text-[#00ffb3]"></i>
                        </div>
                        <h3 class="text-xl sm:text-xl font-black">
                            Connect With Us
                        </h3>
                    </div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-[#00ffb3] to-[#00b7ff] rounded-full mb-6"></div>

                    <div class="flex flex-wrap gap-3 sm:gap-4">
                        <a href="{{ config('anprix.social.facebook') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-facebook-f social-icon"></i>
                        </a>
                        <a href="{{ config('anprix.social.twitter') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00b7ff]/20 hover:text-[#00b7ff] transition-all hover:scale-110">
                            <i class="fa-brands fa-x-twitter social-icon"></i>
                        </a>
                        <a href="{{ config('anprix.social.linkedin') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-linkedin-in social-icon"></i>
                        </a>
                        <a href="{{ config('anprix.social.instagram') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-instagram social-icon"></i>
                        </a>
                        <a href="{{ config('anprix.social.github') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 hover:text-white transition-all hover:scale-110">
                            <i class="fab fa-github social-icon"></i>
                        </a>
                        <a href="{{ config('anprix.social.youtube') }}" target="_blank" rel="noopener noreferrer"
                           class="w-11 sm:w-12 h-11 sm:h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#00ffb3]/20 hover:text-[#00ffb3] transition-all hover:scale-110">
                            <i class="fab fa-youtube social-icon"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="py-16 sm:py-20 lg:py-24 section-border">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="text-center mb-12 sm:mb-16">
            <p class="green-text uppercase tracking-[4px] font-semibold mb-4 sm:mb-5 text-sm sm:text-base flex items-center justify-center gap-2">
                <i class="fa-solid fa-circle-question icon-float"></i>
                FAQ
            </p>
            <h2 class="text-xl sm:text-3xl lg:text-4xl font-black mb-4 sm:mb-6">
                Frequently Asked Questions
            </h2>
            <p class="text-gray-400 text-sm sm:text-base lg:text-lg max-w-3xl mx-auto leading-7 sm:leading-8">
                Got questions? We've got answers. Here are some of the most common questions we receive.
            </p>
        </div>

        <!-- FAQ ITEMS -->
        <div class="space-y-4 sm:space-y-6">
            @foreach($faqs as $faq)
            <div class="glass-card rounded-2xl sm:rounded-3xl overflow-hidden">
                <details class="group">
                    <summary class="cursor-pointer list-none p-5 sm:p-8 flex justify-between items-center">
                        <h4 class="text-base sm:text-lg lg:text-xl font-bold pr-4 flex items-center gap-3">
                            <i class="fa-solid {{ $faq->icon ?? 'fa-circle-question' }} text-[{{ $faq->icon_color ?? '#00ffb3' }}]"></i>
                            {{ $faq->question }}
                        </h4>
                        <i class="fa-solid fa-chevron-down text-[#00ffb3] transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <div class="px-5 sm:px-8 pb-5 sm:pb-8">
                        <p class="text-gray-400 text-sm sm:text-base leading-7 sm:leading-8">
                            {{ $faq->answer }}
                        </p>
                    </div>
                </details>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "{{'@'}}context":"https://schema.org",
  "{{'@'}}type":"FAQPage",
  "mainEntity":[
    @foreach($faqs as $index => $faq)
    {
      "{{'@'}}type":"Question",
      "name":"{{ $faq->question }}",
      "acceptedAnswer":{"{{'@'}}type":"Answer","text":"{{ $faq->answer }}"}
    }{{ $index < $faqs->count() - 1 ? ',' : '' }}
    @endforeach
  ]
}
</script>
@endsection
