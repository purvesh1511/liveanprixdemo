@extends('components.layout')

@section('title', $seo['title'] ?? $post->title)

@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? $post->excerpt }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ config('anprix.url') . ($seo['canonical'] ?? '/blog/' . $post->slug) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit($post->excerpt ?? strip_tags($post->body), 160) }}">
    <meta property="og:url" content="{{ request()->url() }}">
    @if($post->featured_image)
    <meta property="og:image" content="{{ asset('storage/' . $post->featured_image) }}">
    @endif
    @if($post->published_at)
    <meta property="article:published_time" content="{{ $post->published_at->toIso8601String() }}">
    @endif
    @if($post->author)
    <meta property="article:author" content="{{ $post->author }}">
    @endif

    <script type="application/ld+json">
        @php
            $articleSchema = [
                '@context'     => 'https://schema.org',
                '@type'        => 'BlogPosting',
                'headline'     => $post->title,
                'description'  => Str::limit($post->excerpt ?? strip_tags((string) $post->body), 200),
                'url'          => request()->url(),
                'publisher'    => ['@type' => 'Organization', 'name' => config('anprix.name')],
            ];
            if ($post->featured_image) { $articleSchema['image'] = asset('storage/' . $post->featured_image); }
            if ($post->author) { $articleSchema['author'] = ['@type' => 'Person', 'name' => $post->author]; }
            if ($post->published_at) { $articleSchema['datePublished'] = $post->published_at->toIso8601String(); }
        @endphp
        @json($articleSchema)
    </script>
@endsection

@section('content')
<article class="py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#00ffb3] transition-colors text-sm mb-8">
            <i class="fas fa-arrow-left"></i> Back to Blog
        </a>

        <header class="mb-10">
            @if($post->category)
            <span class="inline-block text-xs font-bold px-3 py-1 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3] mb-4">
                {{ $post->category->name }}
            </span>
            @endif

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black leading-tight mb-6">{{ $post->title }}</h1>

            <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-gray-400">
                @if($post->author)
                <div class="flex items-center gap-2">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-[#00ffb3] to-[#00b7ff] flex items-center justify-center text-black text-sm font-black">
                        {{ strtoupper(substr($post->author, 0, 1)) }}
                    </div>
                    <div class="leading-tight">
                        <p class="text-white font-semibold">{{ $post->author }}</p>
                        @if($post->published_at)
                        <p class="text-gray-500 text-xs"><i class="fas fa-calendar-alt mr-1"></i>{{ $post->published_at->format('M d, Y') }}</p>
                        @endif
                    </div>
                </div>
                @endif
                @if($readingTime)
                <span><i class="far fa-clock mr-1"></i> {{ $readingTime }} min read</span>
                @endif
                @if($post->views > 0)
                <span><i class="fas fa-eye mr-1"></i> {{ number_format($post->views) }} views</span>
                @endif
            </div>
        </header>

        @if($post->featured_image)
        <figure class="mb-10 rounded-[24px] overflow-hidden border border-white/10">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover max-h-[480px]">
        </figure>
        @endif

        <div class="prose prose-lg prose-invert max-w-none mb-12 text-gray-300 leading-8">
            {!! $post->body !!}
        </div>

        <div class="flex items-center gap-3 mb-12 flex-wrap">
            <span class="text-sm text-gray-400 font-medium">Share:</span>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-400 hover:bg-blue-400/10 transition-all">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-sky-400 hover:bg-sky-400/10 transition-all">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-blue-500 hover:bg-blue-500/10 transition-all">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . request()->url()) }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-green-400 hover:bg-green-400/10 transition-all">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <div class="border-t border-white/10 pt-10 mb-16">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-[#00ffb3] hover:text-white transition border border-[#00ffb3]/30 hover:border-[#00ffb3] px-6 py-3 rounded-2xl text-sm font-semibold">
                <i class="fas fa-arrow-left"></i> Back to Blog
            </a>
        </div>

        @if($relatedPosts->isNotEmpty())
        <section aria-label="Related posts" class="border-t border-white/10 pt-12">
            <h2 class="text-xl sm:text-2xl font-black mb-8">Related <span class="green-text">Articles</span></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedPosts as $related)
                <a href="{{ route('blog.show', $related->slug) }}" class="glass-card rounded-[24px] border border-white/10 overflow-hidden hover:-translate-y-1 transition-all duration-300 block group">
                    @if($related->featured_image)
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" loading="lazy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    @else
                    <div class="relative h-40 bg-gradient-to-br from-[#00ffb3]/10 to-[#00b7ff]/5 flex items-center justify-center">
                        <i class="fas fa-feather-pointed text-3xl text-[#00ffb3]/30"></i>
                    </div>
                    @endif
                    <div class="p-5">
                        @if($related->category)
                        <span class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3] mb-2">
                            {{ $related->category->name }}
                        </span>
                        @endif
                        <h3 class="text-base font-bold mb-2 group-hover:text-[#00ffb3] transition-colors line-clamp-2">{{ $related->title }}</h3>
                        <div class="text-xs text-gray-500">
                            <span>{{ $related->published_at ? $related->published_at->format('M d, Y') : '' }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
        @endif

    </div>
</article>
@endsection
