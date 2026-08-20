<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('is_published', true)
            ->with('category')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $categories = BlogCategory::where('is_active', true)->get();

        return view('pages.blog.index', [
            'seo' => [
                'title' => 'Blog - Web Development & Digital Marketing Tips | Anprix Solutions',
                'description' => 'Read the latest insights on web development, SEO, digital marketing, and branding from Anprix Solutions.',
                'keywords' => 'web development blog, seo tips, digital marketing blog, anprix blog',
                'canonical' => '/blog',
            ],
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function show(string $slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->with('category')->firstOrFail();
        $post->incrementViews();

        return view('pages.blog.show', [
            'seo' => [
                'title' => $post->meta_title ?? $post->title . ' | Anprix Solutions',
                'description' => $post->meta_description ?? $post->excerpt,
                'keywords' => $post->meta_keywords ?? '',
                'canonical' => '/blog/' . $slug,
            ],
            'post' => $post,
        ]);
    }
}
