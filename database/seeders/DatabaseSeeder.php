<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            BlogCategorySeeder::class,
            SettingSeeder::class,
        ]);
    }
}
