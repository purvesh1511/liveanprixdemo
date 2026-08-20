<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            ['name' => 'Arjun Singh', 'role' => 'Software Engineer', 'initials' => 'AS', 'message' => 'High-quality work with a strong focus on performance and scalability. I would definitely recommend them.', 'stars' => 5, 'color' => 'from-[#00ffb3] to-[#00b7ff]', 'star_color' => '#00ffb3', 'sort_order' => 1],
            ['name' => 'Sripani', 'role' => 'Laravel Developer', 'initials' => 'SP', 'message' => 'Very professional approach and strong technical skills. The project was completed on time with great attention to detail.', 'stars' => 5, 'color' => 'from-[#00b7ff] to-[#00ffb3]', 'star_color' => '#00b7ff', 'sort_order' => 2],
            ['name' => 'Sagar Mehta', 'role' => 'Wordpress Developer', 'initials' => 'SG', 'message' => 'Working with this team was a pleasure. They understood our requirements clearly and delivered beyond expectations.', 'stars' => 5, 'color' => 'from-[#00b7ff] to-[#00ffb3]', 'star_color' => '#00b7ff', 'sort_order' => 3],
        ];

        foreach ($testimonials as $data) {
            Testimonial::updateOrCreate(['name' => $data['name']], $data);
        }
    }
}
