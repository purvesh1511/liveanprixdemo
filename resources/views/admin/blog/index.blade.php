@extends('admin.layouts.app')

@section('title', 'Blog Posts')
@section('header', 'Blog Posts')

@section('content')
<div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $posts->count() }} posts total</p>
    <a href="{{ route('admin.blog.create') }}" class="bg-[#00ffb3] text-black font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">
        <i class="fas fa-plus mr-1"></i> Add Post
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table id="blog-table" class="w-full text-sm datatable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Title</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Category</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Author</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Status</th>
                    <th class="text-left px-6 py-3 font-medium text-gray-500">Date</th>
                    <th class="text-right px-6 py-3 font-medium text-gray-500 no-sort">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($posts as $post)
                <tr>
                    <td class="px-6 py-4 font-medium text-gray-800 max-w-xs truncate">{{ $post->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $post->category->name ?? '-' }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $post->author }}</td>
                    <td class="px-6 py-4">
                        @if($post->is_published)
                            <span class="px-2 py-1 text-xs rounded-full bg-green-50 text-green-600">Published</span>
                        @else
                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-50 text-yellow-600">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $post->published_at ? $post->published_at->format('M d, Y') : '-' }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.blog.edit', $post) }}" class="text-blue-500 hover:text-blue-700 text-sm mr-3"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm" data-confirm="Delete this post?"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="px-6 py-8 text-center text-gray-400">No blog posts found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if(method_exists($posts, 'links'))
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $posts->links() }}
    </div>
    @endif
</div>
@endsection
