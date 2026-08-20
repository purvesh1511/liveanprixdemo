<?php
namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index()
    {
        $seo = config('seo.pages.index');
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order')->get();
        $faqs = Faq::where('is_active', true)->where('page', 'index')->orderBy('sort_order')->get();

        return view('pages.home', compact('seo', 'testimonials', 'faqs'));
    }
}
