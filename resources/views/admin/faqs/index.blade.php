@extends('admin.layouts.app')

@section('title', 'FAQs')
@section('header', 'FAQs')

@section('content')
<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $faqs->count() }} FAQs total</p>
    <a href="{{ route('admin.faqs.create') }}" class="bg-[#00ffb3] text-black font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">
        <i class="fas fa-plus mr-1"></i> Add FAQ
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table id="faqs-table" class="w-full text-sm datatable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Question</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Page</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Sort</th>
                    <th class="text-right px-6 py-3 font-medium text-gray-500 no-sort">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($faqs as $faq)
                <tr>
                    <td class="px-6 py-4 font-medium text-gray-800 max-w-md truncate">{{ $faq->question }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $faq->page ?? '-' }}</td>
                    <td class="px-6 py-4">
                        @if($faq->is_active)
                            <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Active</span>
                        @else
                            <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-500">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $faq->sort_order }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Delete this FAQ?"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-6 py-8 text-center text-gray-400">No FAQs found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if(method_exists($faqs, 'links'))
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $faqs->links() }}
    </div>
    @endif
</div>
@endsection
