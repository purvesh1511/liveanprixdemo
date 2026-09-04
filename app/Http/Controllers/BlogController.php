<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->query('category');
        $page = max(1, (int) $request->query('page', 1));

        $baseQuery = BlogPost::where('is_published', true)
            ->when($categorySlug, function ($query) use ($categorySlug) {
                $query->whereHas('category', fn ($q) => $q->where('slug', $categorySlug));
            })
            ->with('category')
            ->orderBy('published_at', 'desc');

        $posts = (clone $baseQuery)->paginate(9, ['*'], 'page', $page);

        // Clamp out-of-range pages (e.g. switching to a category with fewer pages)
        if ($posts->lastPage() > 0 && $posts->currentPage() > $posts->lastPage()) {
            $posts = $baseQuery->paginate(9, ['*'], 'page', $posts->lastPage());
        }

        $posts->appends($request->query());

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'html' => view('pages.blog._posts', ['posts' => $posts])->render(),
                'pagination' => $posts->links('pages.blog._pagination')->render(),
                'total' => $posts->total(),
                'from' => $posts->firstItem() ?? 0,
                'to' => $posts->lastItem() ?? 0,
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
            ]);
        }

        $categories = BlogCategory::where('is_active', true)
            ->withCount(['posts' => fn ($q) => $q->where('is_published', true)])
            ->orderBy('name')
            ->get();

        $activeCategory = $categorySlug ? $categories->firstWhere('slug', $categorySlug) : null;

        return view('pages.blog.index', [
            'seo' => [
                'title' => 'Blog - Web Development & Digital Marketing Tips | Anprix Solutions',
                'description' => 'Read the latest insights on web development, SEO, digital marketing, and branding from Anprix Solutions.',
                'keywords' => 'web development blog, seo tips, digital marketing blog, anprix blog',
                'canonical' => '/blog',
            ],
            'posts' => $posts,
            'categories' => $categories,
            'activeCategory' => $activeCategory,
        ]);
    }

    public function show(string $slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->with('category')->firstOrFail();
        $post->incrementViews();

        $related = collect();
        if ($post->category_id) {
            $related = BlogPost::where('is_published', true)
                ->where('id', '!=', $post->id)
                ->where('category_id', $post->category_id)
                ->with('category')
                ->orderBy('published_at', 'desc')
                ->take(3)
                ->get();
        }

        if ($related->count() < 3) {
            $fillerIds = $related->pluck('id')->merge([$post->id]);
            $extra = BlogPost::where('is_published', true)
                ->whereNotIn('id', $fillerIds)
                ->with('category')
                ->orderBy('published_at', 'desc')
                ->take(3 - $related->count())
                ->get();

            $related = $related->merge($extra);
        }

        $readingTime = max(1, (int) ceil(str_word_count(strip_tags((string) $post->body)) / 200));

        return view('pages.blog.show', [
            'seo' => [
                'title' => ($post->meta_title ?? $post->title).' | Anprix Solutions',
                'description' => $post->meta_description ?? $post->excerpt,
                'keywords' => $post->meta_keywords ?? '',
                'canonical' => '/blog/'.$slug,
            ],
            'post' => $post,
            'relatedPosts' => $related,
            'readingTime' => $readingTime,
        ]);
    }
}
