@extends('admin.layouts.app')

@section('title', 'Subscribers')
@section('header', 'Newsletter Subscribers')

@section('content')
<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $subscribers->count() }} subscribers total</p>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Email</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Subscribed Date</th>
                    <th class="text-right px-6 py-3 font-medium text-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($subscribers as $subscriber)
                <tr>
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $subscriber->email }}</td>
                    <td class="px-6 py-4">
                        @if($subscriber->is_active ?? $subscriber->status === 'active')
                            <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Active</span>
                        @else
                            <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-500">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $subscriber->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <form action="{{ route('admin.subscribers.destroy', $subscriber) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Remove this subscriber?"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-6 py-8 text-center text-gray-400">No subscribers found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if(method_exists($subscribers, 'links'))
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $subscribers->links() }}
    </div>
    @endif
</div>
@endsection
