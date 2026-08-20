@extends('admin.layouts.app')

@section('title', 'Inquiry Detail')
@section('header', 'Inquiry Detail')

@section('content')
<div class="max-w-3xl">
    <div class="mb-4">
        <a href="{{ route('admin.inquiries.index') }}" class="text-sm text-gray-500 hover:text-gray-700"><i class="fas fa-arrow-left mr-1"></i> Back to Inquiries</a>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-bold text-gray-800">
                @if($inquiry instanceof App\Models\ContactInquiry)
                    Contact Inquiry
                @else
                    Hire Inquiry
                @endif
            </h3>
            @if(!$inquiry->is_read)
            <form action="{{ route('admin.inquiries.mark-read', $inquiry) }}" method="POST">
                @csrf @method('PATCH')
                <button type="submit" class="bg-green-50 text-green-600 px-4 py-2 rounded-xl text-sm font-medium hover:bg-green-100 transition">
                    <i class="fas fa-check mr-1"></i> Mark as Read
                </button>
            </form>
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Name</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->name }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Email</label>
                <p class="text-gray-800 font-medium mt-1"><a href="mailto:{{ $inquiry->email }}" class="text-blue-500 hover:underline">{{ $inquiry->email }}</a></p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Phone</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->phone ?? '-' }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Date</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->created_at->format('M d, Y h:i A') }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Status</label>
                <p class="mt-1">
                    @if($inquiry->is_read)
                        <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Read</span>
                    @else
                        <span class="px-2 py-1 text-xs rounded-full bg-red-50 text-red-600">Unread</span>
                    @endif
                </p>
            </div>
        </div>

        @if($inquiry instanceof App\Models\HireInquiry)
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6 p-4 bg-gray-50 rounded-xl">
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Service</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->service ?? '-' }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Budget</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->budget ?? '-' }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-500 uppercase tracking-wider">Timeline</label>
                <p class="text-gray-800 font-medium mt-1">{{ $inquiry->timeline ?? '-' }}</p>
            </div>
        </div>
        @endif

        <div class="mb-6">
            <label class="text-xs text-gray-500 uppercase tracking-wider">Message</label>
            <div class="mt-2 p-4 bg-gray-50 rounded-xl text-gray-700 text-sm leading-7 whitespace-pre-wrap">{{ $inquiry->message ?? $inquiry->details ?? '-' }}</div>
        </div>

        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="bg-red-50 text-red-600 px-4 py-2 rounded-xl text-sm font-medium hover:bg-red-100 transition" data-confirm="Delete this inquiry?">
                    <i class="fas fa-trash mr-1"></i> Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
