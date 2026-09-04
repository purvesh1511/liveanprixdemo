<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Settings table keys mapped to config keys they override at runtime.
     * Config file values act as fallbacks when a setting is empty/missing.
     */
    protected array $settingMap = [
        'site_name'            => 'anprix.name',
        'site_tagline'         => 'anprix.tagline',
        'site_description'     => 'anprix.description',
        'site_email'           => 'anprix.email',
        'site_email_support'   => 'anprix.email_support',
        'site_phone'           => 'anprix.phone',
        'site_phone_alt'       => 'anprix.phone_alt',
        'site_address'         => 'anprix.address',
        'site_country'         => 'anprix.country',
        'whatsapp_number'      => 'anprix.whatsapp_number',
        'gtm_id'               => 'anprix.gtm_id',
        'site_og_image'        => 'anprix.og_image',
        'site_twitter_handle'  => 'anprix.twitter_handle',
        'office_hours_weekday' => 'anprix.office_hours.weekday',
        'office_hours_saturday'=> 'anprix.office_hours.saturday',
        'office_hours_sunday'  => 'anprix.office_hours.sunday',
        'social_facebook'      => 'anprix.social.facebook',
        'social_twitter'       => 'anprix.social.twitter',
        'social_linkedin'      => 'anprix.social.linkedin',
        'social_instagram'     => 'anprix.social.instagram',
        'social_github'        => 'anprix.social.github',
        'social_youtube'       => 'anprix.social.youtube',
        'mail_host'            => 'anprix.mail.host',
        'mail_port'            => 'anprix.mail.port',
        'mail_username'        => 'anprix.mail.username',
        'mail_password'        => 'anprix.mail.password',
        'mail_encryption'      => 'anprix.mail.encryption',
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadDynamicSettings();
    }

    protected function loadDynamicSettings(): void
    {
        try {
            if (! Schema::hasTable('settings')) {
                return;
            }

            foreach (Setting::all(['key', 'value']) as $setting) {
                $configKey = $this->settingMap[$setting->key] ?? null;

                if ($configKey !== null && filled($setting->value)) {
                    config([$configKey => $setting->value]);
                }
            }
        } catch (\Throwable $e) {
            report($e);
        }
    }
}
