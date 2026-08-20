<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Anprix Solutions', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => 'Digital Experiences For Growing Businesses', 'group' => 'general'],
            ['key' => 'site_description', 'value' => 'Anprix Solutions is a digital marketing agency in Ahmedabad offering SEO, Google Ads, social media marketing, website development, Shopify solutions, and growth-focused digital marketing services.', 'group' => 'general'],
            ['key' => 'site_email', 'value' => 'info@anprix.com', 'group' => 'general'],
            ['key' => 'site_email_support', 'value' => 'support@anprix.com', 'group' => 'general'],
            ['key' => 'site_phone', 'value' => '+91 6355035217', 'group' => 'general'],
            ['key' => 'site_phone_alt', 'value' => '+91 9106807914', 'group' => 'general'],
            ['key' => 'site_address', 'value' => 'A-304, Shubh city height, Gandhinagar, Gujarat 382421', 'group' => 'general'],
            ['key' => 'site_country', 'value' => 'India', 'group' => 'general'],
            ['key' => 'site_og_image', 'value' => '/assets/images/anprix-logo.webp', 'group' => 'general'],
            ['key' => 'site_twitter_handle', 'value' => '@anprix', 'group' => 'general'],
            ['key' => 'whatsapp_number', 'value' => '916355035217', 'group' => 'general'],
            ['key' => 'gtm_id', 'value' => 'GTM-WKMK3999', 'group' => 'general'],
            ['key' => 'office_hours_weekday', 'value' => '9:00 AM - 6:00 PM', 'group' => 'general'],
            ['key' => 'office_hours_saturday', 'value' => '10:00 AM - 4:00 PM', 'group' => 'general'],
            ['key' => 'office_hours_sunday', 'value' => 'Closed', 'group' => 'general'],

            ['key' => 'social_facebook', 'value' => 'https://www.facebook.com/AnprixSolutions', 'group' => 'social'],
            ['key' => 'social_twitter', 'value' => 'https://twitter.com/anprix', 'group' => 'social'],
            ['key' => 'social_linkedin', 'value' => 'https://www.linkedin.com/company/anprixsolutions/', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => 'https://www.instagram.com/anprixsolutions', 'group' => 'social'],
            ['key' => 'social_github', 'value' => 'https://github.com/anprix', 'group' => 'social'],
            ['key' => 'social_youtube', 'value' => 'https://www.youtube.com/@AnprixSolutions', 'group' => 'social'],

            ['key' => 'mail_host', 'value' => 'smtp.hostinger.com', 'group' => 'mail'],
            ['key' => 'mail_port', 'value' => '587', 'group' => 'mail'],
            ['key' => 'mail_username', 'value' => 'info@anprix.com', 'group' => 'mail'],
            ['key' => 'mail_password', 'value' => '', 'group' => 'mail'],
            ['key' => 'mail_encryption', 'value' => 'tls', 'group' => 'mail'],
            ['key' => 'mail_from_address', 'value' => 'info@anprix.com', 'group' => 'mail'],
            ['key' => 'mail_from_name', 'value' => 'Anprix Solutions', 'group' => 'mail'],
            ['key' => 'admin_email', 'value' => 'purvesh151@gmail.com', 'group' => 'mail'],
        ];

        foreach ($settings as $data) {
            Setting::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
