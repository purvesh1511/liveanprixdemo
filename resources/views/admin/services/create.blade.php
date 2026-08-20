@extends('admin.layouts.app')

@section('title', 'Create Service')
@section('header', 'Create Service')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf
        @include('admin.services._form')
        <div class="flex items-center gap-3 mt-6">
            <button type="submit" class="bg-[#00ffb3] text-black font-bold px-6 py-2.5 rounded-xl text-sm hover:bg-[#00e6a0] transition">Create Service</button>
            <a href="{{ route('admin.services.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Cancel</a>
        </div>
    </form>
</div>
@endsection
