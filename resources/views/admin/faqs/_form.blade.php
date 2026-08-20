@php $f = $faq ?? null; @endphp

<div class="space-y-6">
    @if($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
        </ul>
    </div>
    @endif

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Question *</label>
        <input type="text" name="question" value="{{ old('question', $f->question ?? '') }}" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Answer *</label>
        <textarea name="answer" rows="6" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ old('answer', $f->answer ?? '') }}</textarea>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Page</label>
            <input type="text" name="page" value="{{ old('page', $f->page ?? '') }}" placeholder="home, services, etc." class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Icon (FontAwesome)</label>
            <input type="text" name="icon" value="{{ old('icon', $f->icon ?? '') }}" placeholder="fas fa-question-circle" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Icon Color</label>
            <input type="text" name="icon_color" value="{{ old('icon_color', $f->icon_color ?? '') }}" placeholder="#00ffb3" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="flex items-end pb-1">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $f->is_active ?? 1) ? 'checked' : '' }} class="rounded border-gray-300 text-[#00ffb3] focus:ring-[#00ffb3]">
                <span class="text-sm font-medium text-gray-700">Active</span>
            </label>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $f->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>
</div>
