<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $general = Setting::getGroup('general');
        $social = Setting::getGroup('social');
        $mail = Setting::getGroup('mail');
        return view('admin.settings.index', compact('general', 'social', 'mail'));
    }

    public function update(Request $request)
    {
        $group = $request->input('group', 'general');

        if ($group === 'general') {
            $keys = ['site_name', 'site_tagline', 'site_description', 'site_email', 'site_email_support', 'site_phone', 'site_phone_alt', 'site_address', 'site_country', 'whatsapp_number', 'gtm_id', 'office_hours_weekday', 'office_hours_saturday', 'office_hours_sunday', 'site_og_image', 'site_twitter_handle'];
        } elseif ($group === 'social') {
            $keys = ['social_facebook', 'social_twitter', 'social_linkedin', 'social_instagram', 'social_github', 'social_youtube'];
        } elseif ($group === 'mail') {
            $keys = ['mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption', 'mail_from_address', 'mail_from_name', 'admin_email'];
        } else {
            return back()->with('error', 'Invalid settings group.');
        }

        foreach ($keys as $key) {
            if ($request->has($key)) {
                Setting::set($key, $request->input($key, ''), $group);
            }
        }

        return back()->with('success', ucfirst($group) . ' settings updated successfully.');
    }
}
