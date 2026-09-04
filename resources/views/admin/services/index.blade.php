@extends('admin.layouts.app')

@section('title', 'Services')
@section('header', 'Services')

@section('content')
<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $services->count() }} services total</p>
    <a href="{{ route('admin.services.create') }}" class="bg-[#00ffb3] text-black font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">
        <i class="fas fa-plus mr-1"></i> Add Service
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table id="services-table" class="w-full text-sm datatable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Title</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Slug</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Category</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Sort</th>
                    <th class="text-right px-6 py-3 font-medium text-gray-500 no-sort">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($services as $service)
                <tr>
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $service->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $service->slug }}</td>
                    <td class="px-6 py-4 text-gray-500 capitalize">{{ $service->category }}</td>
                    <td class="px-6 py-4">
                        @if($service->is_active)
                            <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Active</span>
                        @else
                            <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-500">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $service->sort_order }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Delete this service?"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="px-6 py-8 text-center text-gray-400">No services found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if(method_exists($services, 'links'))
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $services->links() }}
    </div>
    @endif
</div>
@endsection
