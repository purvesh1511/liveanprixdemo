@extends('admin.layouts.app')

@section('title', 'Hire Inquiries')
@section('header', 'Hire Inquiries')

@section('content')
<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table id="hire-inquiries-table" class="w-full text-sm datatable" data-order='[[5, "desc"]]'>
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Name</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Email</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Phone</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Service</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                    <th class="text-right px-6 py-3 font-medium text-gray-500 no-sort">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($inquiries as $inquiry)
                <tr class="{{ !$inquiry->is_read ? 'bg-blue-50/30' : '' }}">
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $inquiry->name }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $inquiry->email }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $inquiry->phone ?? '-' }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $inquiry->service_type ?? '-' }}</td>
                    <td class="px-6 py-4">
                        @if($inquiry->is_read)
                            <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                        @else
                            <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $inquiry->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 text-right whitespace-nowrap">
                        <a href="{{ route('admin.hire-inquiries.show', $inquiry) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-eye"></i> View</a>
                        @if(!$inquiry->is_read)
                        <form action="{{ route('admin.hire-inquiries.read', $inquiry) }}" method="POST" class="inline">
                            @csrf @method('PATCH')
                            <button type="submit" class="text-green-500 hover:text-green-700 text-sm mr-3"><i class="fas fa-check"></i> Mark Read</button>
                        </form>
                        @endif
                        <form action="{{ route('admin.hire-inquiries.destroy', $inquiry) }}" method="POST" class="inline">
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
</div>
@endsection
