@extends('admin.layouts.app')

@section('title', 'Settings')
@section('header', 'Settings')

@section('content')
<div x-data="{ activeTab: '{{ request('tab', 'general') }}' }">
    <div class="flex gap-1 mb-6 bg-gray-200 rounded-xl p-1 w-fit">
        <button @click="activeTab = 'general'" :class="activeTab === 'general' ? 'bg-white shadow-sm text-gray-800' : 'text-gray-500 hover:text-gray-700'" class="px-5 py-2 rounded-lg text-sm font-medium transition">
            <i class="fas fa-globe mr-1"></i> General
        </button>
        <button @click="activeTab = 'social'" :class="activeTab === 'social' ? 'bg-white shadow-sm text-gray-800' : 'text-gray-500 hover:text-gray-700'" class="px-5 py-2 rounded-lg text-sm font-medium transition">
            <i class="fas fa-share-alt mr-1"></i> Social
        </button>
        <button @click="activeTab = 'mail'" :class="activeTab === 'mail' ? 'bg-white shadow-sm text-gray-800' : 'text-gray-500 hover:text-gray-700'" class="px-5 py-2 rounded-lg text-sm font-medium transition">
            <i class="fas fa-envelope mr-1"></i> Mail
        </button>
    </div>

    {{-- General Settings --}}
    <div x-show="activeTab === 'general'" x-cloak>
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" name="group" value="general">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                        <input type="text" name="site_name" value="{{ $general->where('key', 'site_name')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Tagline</label>
                        <input type="text" name="site_tagline" value="{{ $general->where('key', 'site_tagline')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Description</label>
                        <textarea name="site_description" rows="2" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ $general->where('key', 'site_description')->first()->value ?? '' }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Email</label>
                        <input type="email" name="site_email" value="{{ $general->where('key', 'site_email')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Support Email</label>
                        <input type="email" name="site_email_support" value="{{ $general->where('key', 'site_email_support')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="text" name="site_phone" value="{{ $general->where('key', 'site_phone')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Alt Phone</label>
                        <input type="text" name="site_phone_alt" value="{{ $general->where('key', 'site_phone_alt')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <textarea name="site_address" rows="2" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ $general->where('key', 'site_address')->first()->value ?? '' }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                        <input type="text" name="site_country" value="{{ $general->where('key', 'site_country')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">WhatsApp Number</label>
                        <input type="text" name="whatsapp_number" value="{{ $general->where('key', 'whatsapp_number')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">GTM ID</label>
                        <input type="text" name="gtm_id" value="{{ $general->where('key', 'gtm_id')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">OG Image URL</label>
                        <input type="text" name="site_og_image" value="{{ $general->where('key', 'site_og_image')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Twitter Handle</label>
                        <input type="text" name="site_twitter_handle" value="{{ $general->where('key', 'site_twitter_handle')->first()->value ?? '' }}" placeholder="@handle" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Office Hours (Weekday)</label>
                        <input type="text" name="office_hours_weekday" value="{{ $general->where('key', 'office_hours_weekday')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Office Hours (Saturday)</label>
                        <input type="text" name="office_hours_saturday" value="{{ $general->where('key', 'office_hours_saturday')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Office Hours (Sunday)</label>
                        <input type="text" name="office_hours_sunday" value="{{ $general->where('key', 'office_hours_sunday')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-[#00ffb3] text-black font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">Save General Settings</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Social Settings --}}
    <div x-show="activeTab === 'social'" x-cloak>
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" name="group" value="social">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-facebook mr-1 text-blue-600"></i> Facebook URL</label>
                        <input type="url" name="social_facebook" value="{{ $social->where('key', 'social_facebook')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-twitter mr-1 text-sky-500"></i> Twitter URL</label>
                        <input type="url" name="social_twitter" value="{{ $social->where('key', 'social_twitter')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-linkedin mr-1 text-blue-700"></i> LinkedIn URL</label>
                        <input type="url" name="social_linkedin" value="{{ $social->where('key', 'social_linkedin')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-instagram mr-1 text-pink-500"></i> Instagram URL</label>
                        <input type="url" name="social_instagram" value="{{ $social->where('key', 'social_instagram')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-github mr-1 text-gray-800"></i> GitHub URL</label>
                        <input type="url" name="social_github" value="{{ $social->where('key', 'social_github')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-youtube mr-1 text-red-500"></i> YouTube URL</label>
                        <input type="url" name="social_youtube" value="{{ $social->where('key', 'social_youtube')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-[#00ffb3] text-black font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">Save Social Settings</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Mail Settings --}}
    <div x-show="activeTab === 'mail'" x-cloak>
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" name="group" value="mail">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">SMTP Host</label>
                        <input type="text" name="mail_host" value="{{ $mail->where('key', 'mail_host')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">SMTP Port</label>
                        <input type="text" name="mail_port" value="{{ $mail->where('key', 'mail_port')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input type="text" name="mail_username" value="{{ $mail->where('key', 'mail_username')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="mail_password" value="{{ $mail->where('key', 'mail_password')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Encryption</label>
                        <input type="text" name="mail_encryption" value="{{ $mail->where('key', 'mail_encryption')->first()->value ?? '' }}" placeholder="tls" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">From Address</label>
                        <input type="email" name="mail_from_address" value="{{ $mail->where('key', 'mail_from_address')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">From Name</label>
                        <input type="text" name="mail_from_name" value="{{ $mail->where('key', 'mail_from_name')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Admin Email</label>
                        <input type="email" name="admin_email" value="{{ $mail->where('key', 'admin_email')->first()->value ?? '' }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-[#00ffb3] text-black font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">Save Mail Settings</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
