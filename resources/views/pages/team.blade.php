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
    <meta property="og:url" content="{{ config('anprix.url') . ($seo['canonical'] ?? '/team') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('anprix.og_image') }}">
@endsection

@section('content')
<style>
@php
$teamCount = $teamMembers->count();
@endphp
@foreach($teamMembers as $index => $member)
.team-card[data-id="{{ $member->id }}"] {
    animation-delay: {{ $index * 0.1 }}s;
}
@endforeach

.timeline-glow-line {
    box-shadow: 0 0 8px rgba(0, 255, 179, 0.3), 0 0 20px rgba(0, 183, 255, 0.15);
    animation: lineGlow 3s ease-in-out infinite;
}

@keyframes lineGlow {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
}

.timeline-dot {
    transition: all 0.4s ease;
}

.timeline-dot:hover {
    transform: translateX(-50%) scale(1.15) !important;
    box-shadow: 0 0 20px rgba(0, 255, 179, 0.3), 0 0 40px rgba(0, 183, 255, 0.15);
}
</style>

<!-- HERO -->
<section class="hero-gradient min-h-[85vh] flex items-center pt-28 sm:pt-32 md:pt-40 pb-16 sm:pb-20 md:pb-28 overflow-hidden relative">

    <div class="absolute top-[-80px] left-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00ffb3]/10 blur-[120px] md:blur-[150px] rounded-full"></div>
    <div class="absolute bottom-[-80px] right-[-120px] w-72 sm:w-80 md:w-96 h-72 sm:h-80 md:h-96 bg-[#00b7ff]/10 blur-[120px] md:blur-[150px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left fade-in-up">

                <p class="uppercase tracking-[4px] sm:tracking-[5px] text-[#00ffb3] font-semibold mb-4 sm:mb-6 text-xs sm:text-sm flex items-center gap-2 justify-center lg:justify-start">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#00ffb3] animate-pulse"></span>
                    OUR TEAM
                </p>

                <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-6 sm:mb-8">
                    Meet The
                    <span class="hero-heading-accent green-text">Creative Minds</span>
                    Behind Anprix
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-gray-400 leading-8 sm:leading-9 md:leading-10 max-w-3xl mx-auto lg:mx-0">
                    Our team of
                    <span class="text-white font-medium">developers</span>,
                    <span class="text-white font-medium">designers</span>,
                    <span class="text-white font-medium">SEO experts</span>,
                    and <span class="text-white font-medium">marketing specialists</span> work together to create premium digital experiences.
                </p>

                <!-- Team Tags -->
                <div class="flex flex-wrap gap-3 mt-8 justify-center lg:justify-start">
                    @php
                    $teamTags = [
                        ['icon' => 'fa-code', 'color' => '#00ffb3', 'label' => 'Developers'],
                        ['icon' => 'fa-paint-brush', 'color' => '#00b7ff', 'label' => 'Designers'],
                        ['icon' => 'fa-bullhorn', 'color' => '#00ffb3', 'label' => 'Marketers'],
                        ['icon' => 'fa-search', 'color' => '#00b7ff', 'label' => 'SEO Experts'],
                    ];
                    @endphp
                    @foreach($teamTags as $t)
                    <div class="flex items-center gap-2 text-xs sm:text-sm px-4 py-2 rounded-full glass-card border border-[{{ $t['color'] }}/10] hover:border-[{{ $t['color'] }}/30] transition-all duration-300">
                        <i class="fas {{ $t['icon'] }} text-[{{ $t['color'] }}]"></i>
                        {{ $t['label'] }}
                    </div>
                    @endforeach
                </div>

                <!-- Mini Stats -->
                <div class="grid grid-cols-3 gap-2 sm:flex sm:flex-wrap sm:items-center sm:gap-x-6 sm:gap-y-3 mt-8 sm:mt-10 pt-6 border-t border-white/5 text-center sm:text-left justify-center lg:justify-start max-w-sm mx-auto sm:max-w-none lg:mx-0">
                    @php
                    $teamHeroStats = [
                        ['value' => '10+', 'class' => 'green-text', 'label' => 'Years Experience'],
                        ['value' => '4', 'class' => 'blue-text', 'label' => 'Team Members'],
                        ['value' => '100+', 'class' => 'green-text', 'label' => 'Projects Done'],
                    ];
                    @endphp
                    @foreach($teamHeroStats as $i => $s)
                    @php
                    $val = $s['value'];
                    $target = (int) $val;
                    $suffix = str_replace((string) $target, '', $val);
                    @endphp
                    <div class="hero-mini-stat flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-1 sm:gap-2">
                        <span class="text-lg sm:text-xl md:text-2xl font-black {{ $s['class'] }} counter" data-target="{{ $target }}">
                            <span>{{ $target }}</span>{{ $suffix }}
                        </span>
                        <p class="text-[10px] sm:text-[11px] text-gray-500 leading-tight">{{ $s['label'] }}</p>
                    </div>
                    @if($i < count($teamHeroStats) - 1)
                    <div class="hidden sm:block w-px h-8 bg-white/5"></div>
                    @endif
                    @endforeach
                </div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="relative mt-6 lg:mt-0 flex items-center justify-center fade-in-up delay-200">

                <div class="absolute -top-10 -left-10 w-48 sm:w-72 h-48 sm:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-48 sm:w-72 h-48 sm:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full"></div>

                <div class="relative w-full max-w-sm lg:max-w-md mx-auto">
                    <div class="glass-card rounded-[22px] sm:rounded-[30px] p-1 sm:p-2 hero-image-glow pulse-ring text-center">
                        <img src="{{ asset('assets/images/team.png') }}"
                             alt="Anprix Solutions Team - Web Development & Digital Marketing Experts"
                             width="680" height="500" fetchpriority="high"
                             class="w-full max-w-[75%] sm:max-w-[70%] md:max-w-[65%] lg:max-w-[80%] xl:max-w-[420px] mx-auto animate-float">
                    </div>

                    <!-- Floating Badge: Team -->
                    <div class="floating-badge absolute -top-3 right-1 sm:-top-6 sm:-right-4 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3]">
                                <i class="fas fa-users text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Team Size</p>
                                <p class="text-sm font-semibold">4 Experts</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge: Projects -->
                    <div class="floating-badge absolute -bottom-2 left-1 sm:-bottom-5 sm:-left-5 rounded-2xl px-3 py-2 sm:px-4 sm:py-3 animate-float-delayed">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#00b7ff]/20 flex items-center justify-center text-[#00b7ff]">
                                <i class="fas fa-project-diagram text-sm icon-float"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wide">Delivered</p>
                                <p class="text-sm font-semibold">100+ Projects</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>

<!-- TEAM MEMBERS SECTION -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- TITLE -->
        <div class="text-center mb-14 md:mb-20 lg:mb-24">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-xs sm:text-sm">
                PROFESSIONAL TEAM
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8">
                Experts In Digital Innovation
            </h2>

            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto leading-8 md:leading-9">
                We combine creativity, strategy, and technology to deliver world-class
                website development and digital marketing solutions.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

            @foreach($teamMembers as $member)
            <div class="group glass-card rounded-[24px] md:rounded-[35px] overflow-hidden relative
                        hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-2xl"
                data-id="{{ $member->id }}">

                <!-- IMAGE -->
                <div class="relative overflow-hidden">

                    <img src="{{ $member->image ? (str_starts_with($member->image, 'http') ? $member->image : asset('storage/' . $member->image)) : asset('assets/images/team.png') }}"
                        class="w-full h-[260px] sm:h-[300px] md:h-[340px] object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="{{ $member->name }}">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <!-- EXPERIENCE BADGE -->
                    <div class="absolute top-4 right-4 bg-black/60 backdrop-blur-md px-3 py-1 rounded-full text-[10px] sm:text-xs z-10 border border-white/10">
                        <i class="fas fa-briefcase mr-1 text-[#00ffb3] icon-hover"></i>
                        {{ $member->experience }}
                    </div>

                    <!-- SKILLS OVERLAY -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 md:p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex flex-wrap gap-2">
                            @foreach($member->skills as $skill)
                            <span class="text-[10px] sm:text-xs px-2 py-1 rounded-full bg-white/10 backdrop-blur-sm text-white border border-white/10">
                                {{ $skill }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-5 sm:p-6 md:p-8">

                    <p class="{{ $member->role_color === 'green' ? 'green-text' : 'blue-text' }}
                              text-xs uppercase tracking-[3px] mb-2 md:mb-3 font-semibold">
                        {{ $member->role }}
                    </p>

                    <h3 class="text-xl sm:text-xl font-black mb-2 md:mb-3
                               group-hover:text-[#00ffb3] transition-colors duration-300">
                        {{ $member->name }}
                    </h3>

                    <p class="text-gray-400 text-sm leading-7 mb-5 md:mb-6">
                        {{ $member->bio }}
                    </p>

                    <!-- SOCIAL -->
                    <div class="flex flex-wrap gap-3">
                        @php
                        $socials = [
                            'linkedin' => ['fab fa-linkedin-in', '#00ffb3'],
                            'twitter' => ['fab fa-twitter', '#00b7ff'],
                            'github' => ['fab fa-github', 'white'],
                            'dribbble' => ['fab fa-dribbble', '#ff5c93'],
                            'behance' => ['fab fa-behance', '#0057ff'],
                            'instagram' => ['fab fa-instagram', 'pink']
                        ];
                        @endphp
                        @foreach($socials as $key => $iconData)
                        @if(!empty($member->social[$key]))
                        <a href="{{ $member->social[$key] }}" target="_blank"
                            rel="noopener noreferrer" class="w-11 h-11 flex items-center justify-center rounded-full
                                          bg-white/5 hover:bg-white/10 transition border border-white/10">
                            <i class="{{ $iconData[0] }}"></i>
                        </a>
                        @endif
                        @endforeach
                    </div>

                </div>

            </div>
            @endforeach

        </div>

    </div>

</section>

<!-- WHY CHOOSE ANPRIX SOLUTIONS -->
<section class="py-16 md:py-24 lg:py-28 section-border overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="text-center mb-14 md:mb-20 lg:mb-24">

            <p class="green-text uppercase tracking-[4px] font-semibold mb-4 md:mb-5 text-xs sm:text-sm">
                WHY CHOOSE ANPRIX SOLUTIONS
            </p>

            <h2 class="text-xl sm:text-3xl md:text-4xl font-black mb-6 md:mb-8">
                Your Trusted
                <span class="green-text">Digital Marketing Agency</span>
            </h2>

        </div>

        <!-- TIMELINE -->
        @php
        $timelineSteps = [
            ['icon' => 'fa-compass', 'color' => '#00ffb3', 'title' => 'Discover', 'desc' => 'Understanding your business, goals, and target audience to build a clear roadmap.'],
            ['icon' => 'fa-search', 'color' => '#00b7ff', 'title' => 'Research', 'desc' => 'Analyzing market trends, competitors, and opportunities for maximum impact.'],
            ['icon' => 'fa-chess', 'color' => '#00ffb3', 'title' => 'Strategy', 'desc' => 'Crafting a custom digital strategy tailored to your business objectives.'],
            ['icon' => 'fa-code', 'color' => '#00b7ff', 'title' => 'Development', 'desc' => 'Building high-performance websites and campaigns using modern technologies.'],
            ['icon' => 'fa-rocket', 'color' => '#00ffb3', 'title' => 'Optimization', 'desc' => 'Refining every element for SEO, speed, and maximum conversions.'],
            ['icon' => 'fa-chart-line', 'color' => '#00b7ff', 'title' => 'Growth', 'desc' => 'Scaling your success with data-driven marketing and continuous improvements.'],
        ];
        @endphp

        <div class="relative max-w-4xl mx-auto">

            <!-- Glowing Vertical Line -->
            <div class="absolute left-6 sm:left-8 md:left-1/2 md:-translate-x-1/2 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#00ffb3]/60 via-[#00b7ff]/40 to-[#00ffb3]/60 timeline-glow-line"></div>

            @foreach($timelineSteps as $index => $step)
            @php
            $isLeft = ($index % 2 === 0);
            @endphp

            <!-- STEP -->
            <div class="relative flex items-start gap-6 sm:gap-8 md:gap-0 mb-12 md:mb-16 last:mb-0 fade-in-up" style="animation-delay: {{ $index * 0.15 }}s;">

                <!-- DOT -->
                <div class="absolute left-[25px] sm:left-[33px] md:left-1/2 -translate-x-1/2 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shrink-0 z-10 timeline-dot"
                     style="background: {{ $step['color'] }}15; border: 2px solid {{ $step['color'] }}40;">
                    <i class="fas {{ $step['icon'] }} text-lg sm:text-xl md:text-2xl" style="color: {{ $step['color'] }};"></i>
                </div>

                <!-- CONTENT -->
                <div class="ml-16 sm:ml-20 md:ml-0 md:w-[calc(50%-40px)] {{ $isLeft ? 'md:pr-16 md:text-right' : 'md:ml-auto md:pl-16 md:text-left' }}">

                    <!-- Step Number -->
                    <span class="text-[11px] font-bold tracking-widest uppercase mb-2 inline-block px-3 py-1 rounded-full"
                          style="color: {{ $step['color'] }}; background: {{ $step['color'] }}10; border: 1px solid {{ $step['color'] }}20;">
                        Step {{ $index + 1 }}
                    </span>

                    <h3 class="text-xl sm:text-2xl md:text-3xl font-black mt-2 mb-3 hover:text-[#00ffb3] transition-colors duration-300">
                        {{ $step['title'] }}
                    </h3>

                    <p class="text-gray-400 text-sm sm:text-base leading-7 md:leading-8">
                        {{ $step['desc'] }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- CTA SECTION - TEAM -->
<section class="py-16 md:py-28 section-border overflow-hidden">

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        <div class="glass-card rounded-[28px] sm:rounded-[40px] md:rounded-[50px] p-8 sm:p-12 md:p-16 text-center relative overflow-hidden">

            <!-- BACKGROUND EFFECTS -->
            <div class="absolute top-[-60px] left-[-60px] sm:top-0 sm:left-0 w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00ffb3]/10 blur-[100px] rounded-full">
            </div>
            <div class="absolute bottom-[-60px] right-[-60px] sm:bottom-0 sm:right-0 w-56 sm:w-64 md:w-72 h-56 sm:h-64 md:h-72 bg-[#00b7ff]/10 blur-[100px] rounded-full">
            </div>

            <!-- CONTENT -->
            <div class="relative z-10">

                <!-- LABEL -->
                <p class="green-text uppercase tracking-[4px] font-semibold mb-4 text-sm">
                        <i class="fas fa-users mr-2 icon-hover"></i>
                    JOIN OUR JOURNEY
                </p>

                <!-- TITLE -->
                <h2 class="text-xl sm:text-3xl md:text-4xl font-black leading-tight mb-6 md:mb-8">
                    Let's Create Something Amazing Together
                </h2>

                <!-- DESCRIPTION -->
                <p class="text-gray-400 text-base sm:text-lg md:text-xl leading-8 md:leading-9 max-w-3xl mx-auto mb-10">
                    Work with a passionate team of developers, designers, and marketing experts
                    focused on building high-performance digital products that grow your business.
                </p>

                <!-- FEATURES -->
                <div class="flex flex-col sm:flex-row justify-center gap-6 mb-10 text-sm text-gray-300">
                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-code text-[#00ffb3] icon-float"></i>
                        Developers
                    </div>
                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-paint-brush text-[#00b7ff] icon-float"></i>
                        Designers
                    </div>
                    <div class="flex items-center justify-center gap-2">
                        <i class="fas fa-bullhorn text-[#00ffb3] icon-float"></i>
                        Marketers
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4 sm:gap-5">
                    <a href="{{ route('hire') }}"
                        class="btn-primary px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition hover:scale-105">
                        <i class="fas fa-rocket"></i>
                        Hire Our Team
                    </a>
                    <a href="{{ route('contact') }}"
                        class="border border-white/10 hover:border-[#00ffb3] hover:text-[#00ffb3] px-8 md:px-10 py-3.5 md:py-4 rounded-2xl text-base md:text-lg inline-flex items-center justify-center gap-2 transition">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
@endsection
