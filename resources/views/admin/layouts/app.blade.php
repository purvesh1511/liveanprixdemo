<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - {{ config('anprix.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>body{font-family:'Inter',sans-serif;}</style>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-900 text-white flex-shrink-0 transition-all duration-300">
            <div class="p-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#00ffb3] flex items-center justify-center text-black font-black text-sm">A</div>
                    <div>
                        <p class="font-bold text-sm">Anprix Admin</p>
                        <p class="text-gray-400 text-xs">Dashboard</p>
                    </div>
                </a>
            </div>
            <nav class="px-4 pb-6 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.dashboard') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-tachometer-alt w-5"></i> Dashboard
                </a>
                <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.services.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-cogs w-5"></i> Services
                </a>
                <a href="{{ route('admin.portfolios.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.portfolios.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-briefcase w-5"></i> Portfolios
                </a>
                <a href="{{ route('admin.team.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.team.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-users w-5"></i> Team
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.testimonials.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-quote-right w-5"></i> Testimonials
                </a>
                <a href="{{ route('admin.faqs.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.faqs.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-question-circle w-5"></i> FAQs
                </a>
                <div class="pt-4 pb-2"><p class="text-xs text-gray-600 uppercase tracking-wider px-4">Blog</p></div>
                <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.blog.*') ? 'bg-[#00b7ff]/10 text-[#00b7ff]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-newspaper w-5"></i> Posts
                </a>
                <a href="{{ route('admin.blog-categories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.blog-categories.*') ? 'bg-[#00b7ff]/10 text-[#00b7ff]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-folder w-5"></i> Categories
                </a>
                <div class="pt-4 pb-2"><p class="text-xs text-gray-600 uppercase tracking-wider px-4">Management</p></div>
                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.inquiries.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-envelope w-5"></i> Inquiries
                </a>
                <a href="{{ route('admin.subscribers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.subscribers.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-users w-5"></i> Subscribers
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.settings.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-cog w-5"></i> Settings
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b px-6 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-lg font-bold text-gray-800">@yield('header', 'Dashboard')</h1>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/') }}" target="_blank" class="text-sm text-gray-500 hover:text-[#00ffb3]"><i class="fas fa-external-link-alt mr-1"></i>View Site</a>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-[#00ffb3] flex items-center justify-center text-black text-xs font-bold">{{ substr(auth()->user()->name, 0, 1) }}</div>
                        <span class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</span>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-500 hover:text-red-700"><i class="fas fa-sign-out-alt mr-1"></i>Logout</button>
                    </form>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-6">
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                        {{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-confirm]').forEach(function(el) {
            el.addEventListener('click', function(e) {
                if (!confirm(this.dataset.confirm)) e.preventDefault();
            });
        });
    });
    </script>
    @yield('scripts')
</body>
</html>
