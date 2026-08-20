@extends('components.layout')

@section('title', $seo['title'] ?? 'Blog')

@section('seo')
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ config('anprix.url') . ($seo['canonical'] ?? '/blog') }}">
@endsection

@section('content')
<section class="py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14 md:mb-20">
            <p class="green-text font-semibold tracking-[0.25em] uppercase mb-4 text-sm">OUR BLOG</p>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">Blog</h1>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Insights, tips, and updates on web development, SEO, digital marketing, and branding from the Anprix team.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8">
                    @forelse($posts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="glass-card rounded-[24px] md:rounded-3xl border border-white/10 overflow-hidden hover:-translate-y-1 transition-all duration-300 block group">
                        @if($post->featured_image)
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        @endif
                        <div class="p-6">
                            @if($post->category)
                            <span class="inline-block text-xs font-bold px-3 py-1 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3] mb-3">
                                {{ $post->category->name }}
                            </span>
                            @endif
                            <h2 class="text-lg font-bold mb-3 group-hover:text-[#00ffb3] transition-colors line-clamp-2">{{ $post->title }}</h2>
                            <p class="text-gray-400 text-sm leading-6 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <div class="flex items-center gap-2">
                                    <span>{{ $post->author }}</span>
                                    <span>&middot;</span>
                                    <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                                </div>
                                <span class="text-[#00ffb3] font-semibold text-xs">Read More <i class="fas fa-arrow-right ml-1"></i></span>
                            </div>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-full text-center py-16">
                        <i class="fas fa-newspaper text-4xl text-gray-600 mb-4"></i>
                        <p class="text-gray-400 text-lg">No blog posts found.</p>
                    </div>
                    @endforelse
                </div>

                <div class="mt-10">
                    {{ $posts->links() }}
                </div>
            </div>

            <aside class="lg:col-span-1 space-y-8">
                <div class="glass-card rounded-[24px] p-6 border border-white/10">
                    <h3 class="text-lg font-bold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('blog.index') }}?category={{ $category->slug }}" class="flex items-center justify-between px-4 py-2.5 rounded-xl text-sm {{ request('category') == $category->slug ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }} transition-colors">
                                <span>{{ $category->name }}</span>
                                <span class="text-xs bg-white/5 px-2 py-0.5 rounded-full">{{ $category->posts_count ?? $category->blog_posts_count ?? 0 }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="glass-card rounded-[24px] p-6 border border-white/10">
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <p class="text-gray-400 text-sm mb-4">Stay updated with our latest insights and tips.</p>
                    <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="email" name="email" placeholder="Your email address" required
                            class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3]">
                        <button type="submit" class="w-full bg-[#00ffb3] text-black font-bold py-3 rounded-xl text-sm hover:bg-[#00e6a0] transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
