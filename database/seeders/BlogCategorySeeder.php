<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development', 'slug' => 'web-development', 'description' => 'Articles about web development technologies and best practices.'],
            ['name' => 'SEO', 'slug' => 'seo', 'description' => 'Search engine optimization tips and strategies.'],
            ['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'description' => 'Digital marketing strategies and insights.'],
            ['name' => 'Branding', 'slug' => 'branding', 'description' => 'Branding and creative design articles.'],
            ['name' => 'General', 'slug' => 'general', 'description' => 'General technology and business articles.'],
        ];

        foreach ($categories as $data) {
            BlogCategory::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
