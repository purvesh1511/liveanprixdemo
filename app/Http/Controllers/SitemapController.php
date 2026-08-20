<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $url = config('anprix.url', 'https://anprix.com');
        $pages = [
            ['loc' => '/', 'priority' => '1.0'],
            ['loc' => '/about', 'priority' => '0.9'],
            ['loc' => '/services', 'priority' => '0.9'],
            ['loc' => '/website-development', 'priority' => '0.8'],
            ['loc' => '/wordpress-development', 'priority' => '0.8'],
            ['loc' => '/ecommerce-development', 'priority' => '0.8'],
            ['loc' => '/website-redesign', 'priority' => '0.7'],
            ['loc' => '/cms-development', 'priority' => '0.7'],
            ['loc' => '/seo', 'priority' => '0.9'],
            ['loc' => '/digital-marketing', 'priority' => '0.9'],
            ['loc' => '/social-media-marketing', 'priority' => '0.8'],
            ['loc' => '/advertising', 'priority' => '0.8'],
            ['loc' => '/branding-creative', 'priority' => '0.8'],
            ['loc' => '/portfolio', 'priority' => '0.8'],
            ['loc' => '/team', 'priority' => '0.7'],
            ['loc' => '/contact', 'priority' => '0.9'],
            ['loc' => '/hire', 'priority' => '0.8'],
            ['loc' => '/blog', 'priority' => '0.8'],
        ];

        $posts = BlogPost::where('is_published', true)->select('slug', 'updated_at')->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($pages as $page) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url . $page['loc'] . '</loc>';
            $xml .= '<lastmod>' . now()->toIso8601String() . '</lastmod>';
            $xml .= '<priority>' . $page['priority'] . '</priority>';
            $xml .= '</url>';
        }

        foreach ($posts as $post) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url . '/blog/' . $post->slug . '</loc>';
            $xml .= '<lastmod>' . $post->updated_at->toIso8601String() . '</lastmod>';
            $xml .= '<priority>0.7</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
