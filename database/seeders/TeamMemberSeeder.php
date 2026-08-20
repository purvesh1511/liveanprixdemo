<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Bharat Patel', 'role' => 'Project Manager/Team Lead', 'role_color' => 'green', 'bio' => 'Leading project delivery with strong technical expertise and team coordination for successful digital solutions.', 'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1200', 'experience' => '10+ years', 'skills' => ['Project Management', 'Team Leadership', 'Web Development'], 'social' => ['linkedin' => 'https://linkedin.com/in/bharat-patel', 'twitter' => 'https://twitter.com/bharatpatel', 'facebook' => 'https://facebook.com/bharatpatel'], 'sort_order' => 1],
            ['name' => 'Mohmad Ali', 'role' => 'Business Developer', 'role_color' => 'blue', 'bio' => 'Driving business growth through strategic partnerships, client relationships, and innovative sales approaches.', 'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1200', 'experience' => '8+ years', 'skills' => ['Business Strategy', 'Client Relations', 'Sales'], 'social' => ['linkedin' => 'https://linkedin.com/in/mohmad-ali', 'twitter' => 'https://twitter.com/mohmadali', 'facebook' => 'https://facebook.com/mohmadali'], 'sort_order' => 2],
            ['name' => 'Bhargav Ravaya', 'role' => 'Sr Software Developer', 'role_color' => 'green', 'bio' => 'Building scalable web applications with clean code, modern frameworks, and a focus on performance.', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1200', 'experience' => '6+ years', 'skills' => ['PHP', 'Laravel', 'JavaScript', 'API Design'], 'social' => ['linkedin' => 'https://linkedin.com/in/bhargav-ravaya', 'github' => 'https://github.com/bhargavravaya', 'twitter' => 'https://twitter.com/bhargavravaya'], 'sort_order' => 3],
            ['name' => 'Biren Malvi', 'role' => 'Ads Manager', 'role_color' => 'blue', 'bio' => 'Managing paid advertising campaigns across Google Ads and social media to drive targeted traffic and ROI.', 'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=1200', 'experience' => '5+ years', 'skills' => ['Google Ads', 'Social Media Ads', 'Analytics', 'ROI Optimization'], 'social' => ['linkedin' => 'https://linkedin.com/in/biren-malvi', 'twitter' => 'https://twitter.com/birenmalvi', 'facebook' => 'https://facebook.com/birenmalvi'], 'sort_order' => 4],
        ];

        foreach ($members as $data) {
            TeamMember::updateOrCreate(['name' => $data['name']], $data);
        }
    }
}
