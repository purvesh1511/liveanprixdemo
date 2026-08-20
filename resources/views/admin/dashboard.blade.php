@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Inquiries</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['total_inquiries'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-500"><i class="fas fa-envelope"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Unread Inquiries</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['unread_inquiries'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-500"><i class="fas fa-envelope-open"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Subscribers</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['subscribers'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-500"><i class="fas fa-users"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Services</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['services'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-500"><i class="fas fa-cogs"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Portfolios</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['portfolios'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center text-yellow-500"><i class="fas fa-briefcase"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Team Members</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['team'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-500"><i class="fas fa-users"></i></div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Blog Posts</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $stats['blog_posts'] ?? 0 }}</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-pink-50 flex items-center justify-center text-pink-500"><i class="fas fa-newspaper"></i></div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl border border-gray-200">
        <div class="p-6 border-b border-gray-100">
            <h3 class="font-bold text-gray-800">Recent Contact Inquiries</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Name</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Email</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recentInquiries as $inquiry)
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $inquiry->name }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $inquiry->email }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $inquiry->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4">
                            @if($inquiry->is_read)
                                <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-gray-400">No recent inquiries.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200">
        <div class="p-6 border-b border-gray-100">
            <h3 class="font-bold text-gray-800">Recent Hire Inquiries</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Name</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Service</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                        <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recentHires as $hire)
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $hire->name }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $hire->service ?? '-' }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $hire->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4">
                            @if($hire->is_read)
                                <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-gray-400">No recent hire inquiries.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
