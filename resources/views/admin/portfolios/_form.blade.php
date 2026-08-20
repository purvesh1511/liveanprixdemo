@php $p = $portfolio ?? null; @endphp

<div class="space-y-6">
    @if($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
        </ul>
    </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
            <input type="text" name="title" value="{{ old('title', $p->title ?? '') }}" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Slug *</label>
            <input type="text" name="slug" value="{{ old('slug', $p->slug ?? '') }}" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select name="category" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
                @foreach(['web', 'shopify', 'seo', 'marketing'] as $cat)
                <option value="{{ $cat }}" {{ old('category', $p->category ?? '') == $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
            <input type="text" name="type" value="{{ old('type', $p->type ?? '') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Type Color</label>
            <input type="text" name="type_color" value="{{ old('type_color', $p->type_color ?? '') }}" placeholder="#00ffb3" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
        <input type="text" name="subtitle" value="{{ old('subtitle', $p->subtitle ?? '') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ old('description', $p->description ?? '') }}</textarea>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Technology</label>
            <input type="text" name="technology" value="{{ old('technology', $p->technology ?? '') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Link</label>
            <input type="url" name="link" value="{{ old('link', $p->link ?? '') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
        <input type="file" name="image" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        @if(!empty($p->image))
        <p class="text-xs text-gray-400 mt-1">Current: {{ $p->image }}</p>
        @endif
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Features (one per line)</label>
        <textarea name="features[]" rows="5" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ is_array(old('features', $p->features ?? [])) ? implode("\n", old('features', $p->features ?? [])) : old('features', $p->features ?? '') }}</textarea>
        <p class="text-xs text-gray-400 mt-1">Enter one feature per line.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="flex items-end pb-1">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $p->is_active ?? 1) ? 'checked' : '' }} class="rounded border-gray-300 text-[#00ffb3] focus:ring-[#00ffb3]">
                <span class="text-sm font-medium text-gray-700">Active</span>
            </label>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $p->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>
</div>
