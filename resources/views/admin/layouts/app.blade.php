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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <style>
        body{font-family:'Inter',sans-serif;}

        /* ── DataTables blended with Tailwind admin theme ── */
        table.dataTable thead th {
            text-align: left;
            padding: 12px 24px;
            font-weight: 500;
            color: #6b7280;
            background-color: #f9fafb;
            white-space: nowrap;
        }
        table.dataTable tbody td { padding: 16px 24px; vertical-align: middle; }
        table.dataTable tbody tr:hover { background-color: #f3f4f6 !important; }
        table.dataTable.no-footer { border-bottom: none; }
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #d1d5db; border-radius: 12px;
            padding: 8px 14px; margin-left: 8px; outline: none; font-size: 13px;
        }
        .dataTables_wrapper .dataTables_filter input:focus { border-color: #00ffb3; box-shadow: 0 0 0 3px rgba(0,255,179,.25); }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #d1d5db; border-radius: 10px; padding: 6px 10px; font-size: 13px;
        }
        .dataTables_wrapper .dataTables_info { color: #6b7280; font-size: 13px; padding-top: 14px !important; }
        .dataTables_wrapper .dataTables_paginate { padding-top: 14px !important; }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 10px !important; margin: 0 2px !important; border: 1px solid transparent !important;
            padding: 6px 12px !important; font-size: 13px !important; color: #374151 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #e5e7eb !important; border-color: transparent !important; color: #111 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #00ffb3 !important; border-color: #00ffb3 !important; color: #000 !important; font-weight: 700;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            color: #9ca3af !important; background: transparent !important;
        }
        th.no-sort::after { display: none !important; }
        .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
            padding: 15px;
        }
    </style>
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
                <a href="{{ route('admin.contact-inquiries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.contact-inquiries.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-envelope w-5"></i> Contact Inquiries
                </a>
                <a href="{{ route('admin.hire-inquiries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.hire-inquiries.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-briefcase w-5"></i> Hire Inquiries
                </a>
                <a href="{{ route('admin.subscribers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.subscribers.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-users w-5"></i> Subscribers
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.settings.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-cog w-5"></i> Settings
                </a>
                <a href="{{ route('admin.password.edit') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm {{ request()->routeIs('admin.password.*') ? 'bg-[#00ffb3]/10 text-[#00ffb3]' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                    <i class="fas fa-key w-5"></i> Change Password
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-confirm]').forEach(function(el) {
            el.addEventListener('click', function(e) {
                if (!confirm(this.dataset.confirm)) e.preventDefault();
            });
        });

        // ── DataTables: auto-init every table marked .datatable ──
        if (window.jQuery && jQuery.fn.DataTable) {
            window.adminTables = {};
            jQuery('table.datatable').each(function() {
                var table = jQuery(this);
                var id = table.attr('id') || table.data('table-key');
                if (!id) return;
                window.adminTables[id] = table.DataTable({
                    pageLength: 10,
                    lengthMenu: [10, 25, 50, 100],
                    ordering: true,
                    searching: true,
                    order: table.data('order') || [],
                    columnDefs: [{ targets: 'no-sort', orderable: false }]
                });
            });

            // Re-measure tables revealed inside hidden tabs (e.g. Alpine x-show)
            document.addEventListener('datatable:adjust', function() {
                Object.values(window.adminTables).forEach(function(dt) {
                    dt.columns.adjust();
                });
            });
        }
    });
    </script>
    @yield('scripts')
    @stack('scripts')
</body>
</html>
