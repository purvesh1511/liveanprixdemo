@extends('admin.layouts.app')

@section('title', 'Inquiries')
@section('header', 'Inquiries')

@section('content')
<div x-data="{ activeTab: 'contact' }">
    <div class="flex gap-1 mb-6 bg-gray-200 rounded-xl p-1 w-fit">
        <button @click="activeTab = 'contact'" :class="activeTab === 'contact' ? 'bg-white shadow-sm text-gray-800' : 'text-gray-500 hover:text-gray-700'" class="px-5 py-2 rounded-lg text-sm font-medium transition">
            Contact Inquiries <span class="ml-1 text-xs bg-gray-100 px-2 py-0.5 rounded-full">{{ $contactInquiries->count() }}</span>
        </button>
        <button @click="activeTab = 'hire'" :class="activeTab === 'hire' ? 'bg-white shadow-sm text-gray-800' : 'text-gray-500 hover:text-gray-700'" class="px-5 py-2 rounded-lg text-sm font-medium transition">
            Hire Inquiries <span class="ml-1 text-xs bg-gray-100 px-2 py-0.5 rounded-full">{{ $hireInquiries->count() }}</span>
        </button>
    </div>

    <div x-show="activeTab === 'contact'" x-cloak>
        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Name</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Email</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Phone</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Message</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                            <th class="text-right px-6 py-3 font-medium text-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($contactInquiries as $inquiry)
                        <tr class="{{ !$inquiry->is_read ? 'bg-blue-50/30' : '' }}">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $inquiry->name }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->email }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->phone ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-500 max-w-xs truncate">{{ Str::limit($inquiry->message, 50) }}</td>
                            <td class="px-6 py-4">
                                @if($inquiry->is_read)
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                                @else
                                    <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-eye"></i> View</a>
                                @if(!$inquiry->is_read)
                                <form action="{{ route('admin.inquiries.mark-read', $inquiry) }}" method="POST" class="inline">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="text-green-500 hover:text-green-700 text-sm mr-3"><i class="fas fa-check"></i> Mark Read</button>
                                </form>
                                @endif
                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Delete this inquiry?"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7" class="px-6 py-8 text-center text-gray-400">No contact inquiries found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($contactInquiries, 'links'))
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $contactInquiries->links() }}
            </div>
            @endif
        </div>
    </div>

    <div x-show="activeTab === 'hire'" x-cloak>
        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Name</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Email</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Phone</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Message</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                            <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                            <th class="text-right px-6 py-3 font-medium text-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($hireInquiries as $inquiry)
                        <tr class="{{ !$inquiry->is_read ? 'bg-blue-50/30' : '' }}">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $inquiry->name }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->email }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->phone ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-500 max-w-xs truncate">{{ Str::limit($inquiry->details ?? $inquiry->message ?? '', 50) }}</td>
                            <td class="px-6 py-4">
                                @if($inquiry->is_read)
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                                @else
                                    <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $inquiry->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-eye"></i> View</a>
                                @if(!$inquiry->is_read)
                                <form action="{{ route('admin.inquiries.mark-read', $inquiry) }}" method="POST" class="inline">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="text-green-500 hover:text-green-700 text-sm mr-3"><i class="fas fa-check"></i> Mark Read</button>
                                </form>
                                @endif
                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Delete this inquiry?"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7" class="px-6 py-8 text-center text-gray-400">No hire inquiries found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($hireInquiries, 'links'))
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $hireInquiries->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
