<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Finance Business Platform', 'slug' => 'finance-business-platform', 'category' => 'web', 'type' => 'Website Design', 'type_color' => 'green', 'subtitle' => 'Corporate Website', 'description' => 'Modern responsive website with premium UI/UX and conversion-focused design.', 'technology' => 'Laravel Development', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200', 'features' => ['Responsive Design', 'Fast Loading', 'SEO Optimized'], 'sort_order' => 1],
            ['title' => 'Fashion Shopify Store', 'slug' => 'fashion-shopify-store', 'category' => 'shopify', 'type' => 'Shopify Store', 'type_color' => 'blue', 'subtitle' => 'eCommerce Project', 'description' => 'Custom Shopify development with advanced product and checkout optimization.', 'technology' => 'Shopify Development', 'image' => 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200', 'features' => ['Custom Theme', 'Payment Gateway', 'Inventory Management'], 'sort_order' => 2],
            ['title' => 'Organic Traffic Growth', 'slug' => 'organic-traffic-growth', 'category' => 'seo', 'type' => 'SEO Optimization', 'type_color' => 'green', 'subtitle' => 'SEO Project', 'description' => 'Improved rankings and organic traffic using technical SEO and content strategy.', 'technology' => 'SEO Marketing', 'image' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?q=80&w=1200', 'features' => ['Keyword Research', 'Backlink Building', 'Analytics'], 'sort_order' => 3],
            ['title' => 'Startup Brand Identity', 'slug' => 'startup-brand-identity', 'category' => 'marketing', 'type' => 'Branding', 'type_color' => 'blue', 'subtitle' => 'Digital Branding', 'description' => 'Complete branding and digital presence for startup businesses and enterprises.', 'technology' => 'Brand Strategy', 'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200', 'features' => ['Logo Design', 'Brand Guidelines', 'Social Media Kit'], 'sort_order' => 4],
            ['title' => 'Lead Generation Campaign', 'slug' => 'lead-generation-campaign', 'category' => 'marketing', 'type' => 'Google Ads', 'type_color' => 'green', 'subtitle' => 'PPC Marketing', 'description' => 'High-converting Google Ads campaigns designed for lead generation and sales growth.', 'technology' => 'Paid Advertising', 'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200', 'features' => ['Keyword Research', 'Ad Creation', 'Conversion Tracking'], 'sort_order' => 5],
            ['title' => 'Custom Business Dashboard', 'slug' => 'custom-business-dashboard', 'category' => 'web', 'type' => 'Development', 'type_color' => 'blue', 'subtitle' => 'Web Application', 'description' => 'Advanced dashboard system with analytics and business automation tools.', 'technology' => 'Custom Development', 'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200', 'features' => ['Real-time Analytics', 'User Management', 'API Integration'], 'sort_order' => 6],
            ['title' => 'Medical Clinic Portal', 'slug' => 'medical-clinic-portal', 'category' => 'web', 'type' => 'Website Design', 'type_color' => 'green', 'subtitle' => 'Healthcare Website', 'description' => 'Patient-centric healthcare website with appointment booking and telemedicine integration.', 'technology' => 'WordPress Development', 'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1200', 'features' => ['Appointment System', 'Patient Portal', 'HIPAA Compliant'], 'sort_order' => 7],
            ['title' => 'Electronics Shopify Store', 'slug' => 'electronics-shopify-store', 'category' => 'shopify', 'type' => 'Shopify Store', 'type_color' => 'blue', 'subtitle' => 'Dropshipping Store', 'description' => 'High-performance electronics store with automated dropshipping integration.', 'technology' => 'Shopify + Oberlo', 'image' => 'https://images.unsplash.com/photo-1556742031-c6961e8560b0?q=80&w=1200', 'features' => ['Dropshipping Setup', 'Automated Orders', 'Price Optimization'], 'sort_order' => 8],
            ['title' => 'Restaurant SEO Campaign', 'slug' => 'restaurant-seo-campaign', 'category' => 'seo', 'type' => 'Local SEO', 'type_color' => 'green', 'subtitle' => 'Local Business SEO', 'description' => 'Local SEO strategy that increased foot traffic and online orders by 150%.', 'technology' => 'Local SEO', 'image' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1200', 'features' => ['Google Maps Optimization', 'Review Management', 'Local Citations'], 'sort_order' => 9],
        ];

        foreach ($items as $data) {
            Portfolio::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
