@extends('components.layout')

@section('title', $seo['title'] ?? $post->title)

@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? $post->excerpt }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ config('anprix.url') . ($seo['canonical'] ?? '/blog/' . $post->slug) }}">
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

            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-400">
                @if($post->author)
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-[#00ffb3]/20 flex items-center justify-center text-[#00ffb3] text-xs font-bold">
                        {{ strtoupper(substr($post->author, 0, 1)) }}
                    </div>
                    <span>{{ $post->author }}</span>
                </div>
                @endif
                @if($post->published_at)
                <span><i class="fas fa-calendar-alt mr-1"></i> {{ $post->published_at->format('M d, Y') }}</span>
                @endif
                @if($post->views_count)
                <span><i class="fas fa-eye mr-1"></i> {{ number_format($post->views_count) }} views</span>
                @endif
            </div>
        </header>

        @if($post->featured_image)
        <div class="mb-10 rounded-[24px] overflow-hidden border border-white/10">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover">
        </div>
        @endif

        <div class="prose prose-lg prose-invert max-w-none mb-12 text-gray-300 leading-8">
            {!! $post->body !!}
        </div>

        <div class="flex items-center gap-3 mb-12">
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

        <div class="border-t border-white/10 pt-10">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-[#00ffb3] hover:text-white transition border border-[#00ffb3]/30 hover:border-[#00ffb3] px-6 py-3 rounded-2xl text-sm font-semibold">
                <i class="fas fa-arrow-left"></i> Back to Blog
            </a>
        </div>

    </div>
</article>
@endsection
