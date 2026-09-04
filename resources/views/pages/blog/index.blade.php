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
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black mb-6 leading-tight">
                @if($activeCategory)
                {{ $activeCategory->name }}
                @else
                Blog
                @endif
            </h1>
            <p class="max-w-3xl mx-auto text-gray-400 text-base md:text-lg leading-8">
                Insights, tips, and updates on web development, SEO, digital marketing, and branding from the Anprix team.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <div class="lg:col-span-3">
                <p id="blog-results-count" class="text-sm text-gray-500 mb-6">
                    @if($posts->firstItem())
                    Showing <span class="text-[#00ffb3] font-bold">{{ $posts->firstItem() }}&ndash;{{ $posts->lastItem() }}</span>
                        of <span class="text-white font-bold">{{ number_format($posts->total()) }}</span> {{ Str::plural('article', $posts->total()) }}@if($activeCategory) in &ldquo;{{ $activeCategory->name }}&rdquo;@endif
                    @else
                    No articles found.
                    @endif
                </p>

                {{-- Posts + pagination are swapped via AJAX --}}
                <div id="blog-list-wrapper" class="relative">
                    {{-- Loading overlay --}}
                    <div id="blog-loading" class="hidden absolute inset-0 z-10 flex items-start justify-center pt-24 bg-anprix-dark/60 backdrop-blur-sm rounded-3xl">
                        <div class="flex flex-col items-center gap-3">
                            <i class="fas fa-circle-notch fa-spin text-3xl text-[#00ffb3]"></i>
                            <span class="text-gray-400 text-sm tracking-widest uppercase">Loading</span>
                        </div>
                    </div>

                    <div id="blog-posts">
                        @include('pages.blog._posts', ['posts' => $posts])
                    </div>

                    <div id="blog-pagination" class="mt-10">
                        {!! $posts->links('pages.blog._pagination') !!}
                    </div>
                </div>
            </div>

            <aside class="lg:col-span-1 space-y-8">
                <div class="glass-card rounded-[24px] p-6 border border-white/10">
                    <h3 class="text-lg font-bold mb-4">Categories</h3>
                    <ul class="space-y-2" id="blog-categories">
                        <li>
                            <a href="{{ route('blog.index') }}" data-category=""
                                class="flex items-center justify-between px-4 py-2.5 rounded-xl text-sm transition-colors
                                {{ !$activeCategory ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                                <span>All Posts</span>
                                <span class="text-xs bg-white/5 px-2 py-0.5 rounded-full">{{ $categories->sum('posts_count') }}</span>
                            </a>
                        </li>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" data-category="{{ $category->slug }}"
                                class="flex items-center justify-between px-4 py-2.5 rounded-xl text-sm transition-colors
                                {{ ($activeCategory?->slug === $category->slug) ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                                <span>{{ $category->name }}</span>
                                <span class="text-xs bg-white/5 px-2 py-0.5 rounded-full">{{ $category->posts_count }}</span>
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

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var wrapper = document.getElementById('blog-list-wrapper');
    var postsEl = document.getElementById('blog-posts');
    var paginationEl = document.getElementById('blog-pagination');
    var loadingEl = document.getElementById('blog-loading');
    var countEl = document.getElementById('blog-results-count');
    var categoriesEl = document.getElementById('blog-categories');

    var state = {
        page: {{ $posts->currentPage() }},
        category: '{{ request('category', '') }}',
        loading: false
    };

    function updateCount(data) {
        var active = state.category ? ' in &ldquo;' + state.category.replace(/-/g, ' ') + '&rdquo;' : '';
        var noun = data.total === 1 ? 'article' : 'articles';
        if (data.total === 0) {
            countEl.innerHTML = '<span>No articles found' + (state.category ? ' in this category.' : '.') + '</span>';
            return;
        }
        countEl.innerHTML = '<span>Showing <span class="text-[#00ffb3] font-bold">' + data.from +
            '\u2013' + data.to + '</span> of <span class="text-white font-bold">' + data.total.toLocaleString() +
            '</span> ' + noun + active + '</span>';
    }

    function setActiveCategory(slug) {
        categoriesEl.querySelectorAll('[data-category]').forEach(function (link) {
            var isActive = link.getAttribute('data-category') === slug;
            link.classList.toggle('bg-[#00ffb3]/10', isActive);
            link.classList.toggle('text-[#00ffb3]', isActive);
            link.classList.toggle('text-gray-400', !isActive);
        });
    }

    function loadPosts(page, category, pushState) {
        if (state.loading) return;
        state.loading = true;

        var params = new URLSearchParams();
        if (page > 1) params.set('page', page);
        if (category) params.set('category', category);

        loadingEl.classList.remove('hidden');
        postsEl.style.transition = 'opacity .2s ease';
        postsEl.style.opacity = '0.35';

        fetch('{{ route('blog.index') }}' + (params.toString() ? '?' + params.toString() : ''), {
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
        })
        .then(function (response) {
            if (!response.ok) throw new Error('Network error');
            return response.json();
        })
        .then(function (data) {
            if (!data.success) throw new Error(data.message || 'Failed to load posts');

            state.page = data.current_page;
            state.category = category;

            postsEl.innerHTML = data.html;
            paginationEl.innerHTML = data.pagination;
            updateCount(data);
            setActiveCategory(category);

            if (pushState) {
                var url = '{{ route('blog.index') }}';
                if (params.toString()) url += '?' + params.toString();
                window.history.pushState({ page: page, category: category }, '', url);
            }

            postsEl.style.opacity = '1';
            wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
        })
        .catch(function () {
            postsEl.style.opacity = '1';
            if (window.showToast) showToast('Could not load posts. Please try again.', 'error');
        })
        .finally(function () {
            loadingEl.classList.add('hidden');
            state.loading = false;
        });
    }

    // Pagination clicks -> AJAX
    document.addEventListener('click', function (e) {
        var pageLink = e.target.closest('#blog-pagination [data-page]');
        if (pageLink && pageLink.tagName === 'A') {
            e.preventDefault();
            loadPosts(parseInt(pageLink.getAttribute('data-page'), 10), state.category, true);
            return;
        }

        var catLink = e.target.closest('#blog-categories [data-category]');
        if (catLink) {
            e.preventDefault();
            loadPosts(1, catLink.getAttribute('data-category'), true);
        }
    });

    // Back/forward buttons
    window.addEventListener('popstate', function () {
        var params = new URLSearchParams(window.location.search);
        loadPosts(parseInt(params.get('page') || '1', 10), params.get('category') || '', false);
    });
});
</script>
@endsection
