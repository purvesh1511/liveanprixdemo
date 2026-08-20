<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            ['question' => 'How much does website development cost in Ahmedabad?', 'answer' => 'Website development costs in Ahmedabad typically range from ₹15,000 for a basic static website to ₹1,50,000+ for a custom Laravel or Shopify eCommerce store. The final cost depends on complexity, features, design requirements, and SEO optimization. We provide a free consultation and detailed quote after understanding your project needs.', 'page' => 'index', 'icon' => 'fa-rupee-sign', 'icon_color' => '#00ffb3', 'sort_order' => 1],
            ['question' => 'How long does a website project typically take?', 'answer' => 'A standard business website takes 2-4 weeks from design to launch. eCommerce stores and custom web applications typically take 4-8 weeks depending on features and functionality. We follow a structured 4-step process — Discovery, Design, Develop, and Launch — to ensure timely delivery without compromising quality.', 'page' => 'index', 'icon' => 'fa-clock', 'icon_color' => '#00b7ff', 'sort_order' => 2],
            ['question' => 'Do you provide SEO services after the website is built?', 'answer' => 'Yes. We offer comprehensive SEO services including technical SEO, on-page optimization, keyword research, content strategy, link building, and monthly performance reporting. Our SEO packages are designed to improve Google rankings, increase organic traffic, and generate quality leads for your business.', 'page' => 'index', 'icon' => 'fa-search', 'icon_color' => '#00ffb3', 'sort_order' => 3],
            ['question' => 'Can you redesign my existing website?', 'answer' => 'Absolutely. We specialize in website redesign and modernization. Whether your site is outdated, slow, or not generating leads, we can rebuild it with modern UI/UX, faster performance, SEO optimization, and mobile responsiveness — without losing your existing search rankings.', 'page' => 'index', 'icon' => 'fa-palette', 'icon_color' => '#00b7ff', 'sort_order' => 4],
            ['question' => 'What digital marketing services do you offer?', 'answer' => 'We offer a full range of digital marketing services including Google Ads management, social media marketing (Facebook, Instagram, LinkedIn), search engine optimization (SEO), content marketing, email marketing, and conversion rate optimization. Each campaign is data-driven and tailored to your business goals.', 'page' => 'index', 'icon' => 'fa-rocket', 'icon_color' => '#00ffb3', 'sort_order' => 5],
            ['question' => 'How quickly can you start my project?', 'answer' => 'We typically begin projects within 3-5 business days after contract signing and initial deposit.', 'page' => 'hire', 'icon' => 'fa-rocket', 'icon_color' => '#00ffb3', 'sort_order' => 6],
            ['question' => 'Do you offer ongoing support?', 'answer' => 'Yes! We offer monthly maintenance packages and ongoing support for all our clients.', 'page' => 'hire', 'icon' => 'fa-headset', 'icon_color' => '#00b7ff', 'sort_order' => 7],
            ['question' => 'What is your pricing model?', 'answer' => 'We offer fixed-price packages and custom quotes based on your specific project requirements.', 'page' => 'hire', 'icon' => 'fa-tags', 'icon_color' => '#00ffb3', 'sort_order' => 8],
            ['question' => 'Do you sign NDAs?', 'answer' => 'Absolutely. We are happy to sign NDAs to protect your confidential information and ideas.', 'page' => 'hire', 'icon' => 'fa-user-shield', 'icon_color' => '#00ffb3', 'sort_order' => 9],
        ];

        foreach ($faqs as $data) {
            Faq::updateOrCreate(['question' => $data['question']], $data);
        }
    }
}
