<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8" data-blog-grid>
    @forelse($posts as $post)
    <a href="{{ route('blog.show', $post->slug) }}" class="glass-card rounded-[24px] md:rounded-3xl border border-white/10 overflow-hidden hover:-translate-y-1 transition-all duration-300 block group">
        @if($post->featured_image)
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        @else
        <div class="relative h-48 bg-gradient-to-br from-[#00ffb3]/10 to-[#00b7ff]/5 flex items-center justify-center">
            <i class="fas fa-feather-pointed text-4xl text-[#00ffb3]/30"></i>
        </div>
        @endif
        <div class="p-6">
            @if($post->category)
            <span class="inline-block text-xs font-bold px-3 py-1 rounded-full bg-[#00ffb3]/10 border border-[#00ffb3]/20 text-[#00ffb3] mb-3">
                {{ $post->category->name }}
            </span>
            @endif
            <h2 class="text-lg font-bold mb-3 group-hover:text-[#00ffb3] transition-colors line-clamp-2">{{ $post->title }}</h2>
            <p class="text-gray-400 text-sm leading-6 mb-4 line-clamp-3">{{ Str::limit($post->excerpt ?? strip_tags($post->body), 120) }}</p>
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
    <div class="col-span-full text-center py-16 glass-card rounded-[24px] border border-white/10">
        <i class="fas fa-newspaper text-4xl text-gray-600 mb-4"></i>
        <p class="text-gray-400 text-lg">No blog posts found.</p>
        <p class="text-gray-500 text-sm mt-2">Check back soon for fresh insights.</p>
    </div>
    @endforelse
</div>
