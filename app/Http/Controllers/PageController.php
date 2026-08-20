<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\TeamMember;
use App\Models\Faq;

class PageController extends Controller
{
    private function getSeo(string $key): array
    {
        return config("seo.pages.{$key}", []);
    }

    public function about()
    {
        return view('pages.about', ['seo' => $this->getSeo('about')]);
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.services', ['seo' => $this->getSeo('services'), 'services' => $services]);
    }

    public function websiteDevelopment()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'website-development')->orderBy('sort_order')->get();
        return view('pages.website-development', ['seo' => $this->getSeo('website-development'), 'faqs' => $faqs]);
    }

    public function wordpressDevelopment()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'wordpress-development')->orderBy('sort_order')->get();
        return view('pages.wordpress-development', ['seo' => $this->getSeo('wordpress-development'), 'faqs' => $faqs]);
    }

    public function ecommerceDevelopment()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'ecommerce-development')->orderBy('sort_order')->get();
        return view('pages.ecommerce-development', ['seo' => $this->getSeo('ecommerce-development'), 'faqs' => $faqs]);
    }

    public function websiteRedesign()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'website-redesign')->orderBy('sort_order')->get();
        return view('pages.website-redesign', ['seo' => $this->getSeo('website-redesign'), 'faqs' => $faqs]);
    }

    public function cmsDevelopment()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'cms-development')->orderBy('sort_order')->get();
        return view('pages.cms-development', ['seo' => $this->getSeo('cms-development'), 'faqs' => $faqs]);
    }

    public function seo()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'seo')->orderBy('sort_order')->get();
        return view('pages.seo', ['seo' => $this->getSeo('seo'), 'faqs' => $faqs]);
    }

    public function digitalMarketing()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'digital-marketing')->orderBy('sort_order')->get();
        return view('pages.digital-marketing', ['seo' => $this->getSeo('digital-marketing'), 'faqs' => $faqs]);
    }

    public function socialMediaMarketing()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'social-media-marketing')->orderBy('sort_order')->get();
        return view('pages.social-media-marketing', ['seo' => $this->getSeo('social-media-marketing'), 'faqs' => $faqs]);
    }

    public function advertising()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'advertising')->orderBy('sort_order')->get();
        return view('pages.advertising', ['seo' => $this->getSeo('advertising'), 'faqs' => $faqs]);
    }

    public function brandingCreative()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'branding-creative')->orderBy('sort_order')->get();
        return view('pages.branding-creative', ['seo' => $this->getSeo('branding-creative'), 'faqs' => $faqs]);
    }

    public function portfolio()
    {
        $portfolioItems = Portfolio::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.portfolio', ['seo' => $this->getSeo('portfolio'), 'portfolioItems' => $portfolioItems]);
    }

    public function team()
    {
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.team', ['seo' => $this->getSeo('team'), 'teamMembers' => $teamMembers]);
    }

    public function contact()
    {
        return view('pages.contact', ['seo' => $this->getSeo('contact')]);
    }

    public function hire()
    {
        $faqs = Faq::where('is_active', true)->where('page', 'hire')->orderBy('sort_order')->get();
        return view('pages.hire', ['seo' => $this->getSeo('hire'), 'faqs' => $faqs]);
    }
}
