@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')
@section('header', 'Edit Blog Post')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.blog._form')
        <div class="flex items-center gap-3 mt-6">
            <button type="submit" class="bg-[#00ffb3] text-black font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">Update Post</button>
            <a href="{{ route('admin.blog.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Cancel</a>
        </div>
    </form>
</div>
@endsection
