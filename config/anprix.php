<?php

return [
    'name' => env('ANPRIX_NAME', 'Anprix Solutions'),
    'url' => env('APP_URL', 'https://anprix.com'),
    'tagline' => 'Digital Experiences For Growing Businesses',
    'description' => 'Anprix Solutions is a digital marketing agency in Ahmedabad offering SEO, Google Ads, social media marketing, website development, Shopify solutions, and growth-focused digital marketing services.',
    'email' => env('ANPRIX_EMAIL', 'info@anprix.com'),
    'email_support' => 'support@anprix.com',
    'phone' => env('ANPRIX_PHONE', '+91 6355035217'),
    'phone_alt' => '+91 9106807914',
    'address' => 'A-304, Shubh city height, Gandhinagar, Gujarat 382421',
    'city_state_zip' => 'Gandhinagar, Gujarat 382421',
    'og_image' => env('APP_URL', 'https://anprix.com') . '/assets/images/anprix-logo.webp',
    'twitter_handle' => '@anprix',
    'country' => 'India',
    'whatsapp_number' => '916355035217',
    'whatsapp_message' => "Hi Anprix! I'd like to discuss a project.",

    'office_hours' => [
        'weekday' => '9:00 AM - 6:00 PM',
        'saturday' => '10:00 AM - 4:00 PM',
        'sunday' => 'Closed',
    ],

    'social' => [
        'facebook' => 'https://www.facebook.com/AnprixSolutions',
        'twitter' => 'https://twitter.com/anprix',
        'linkedin' => 'https://www.linkedin.com/company/anprixsolutions/',
        'instagram' => 'https://www.instagram.com/anprixsolutions',
        'github' => 'https://github.com/anprix',
        'youtube' => 'https://www.youtube.com/@AnprixSolutions',
    ],

    'mail' => [
        'host' => env('MAIL_HOST', 'smtp.hostinger.com'),
        'port' => env('MAIL_PORT', 587),
        'username' => env('MAIL_USERNAME', 'info@anprix.com'),
        'password' => env('MAIL_PASSWORD', ''),
        'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    ],

    'gtm_id' => 'GTM-WKMK3999',
];
