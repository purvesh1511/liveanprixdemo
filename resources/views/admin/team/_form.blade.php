@php $m = $teamMember ?? null; @endphp

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
            <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
            <input type="text" name="name" value="{{ old('name', $m->name ?? '') }}" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Role *</label>
            <input type="text" name="role" value="{{ old('role', $m->role ?? '') }}" required class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Role Color</label>
        <input type="text" name="role_color" value="{{ old('role_color', $m->role_color ?? '') }}" placeholder="#00ffb3" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
        <textarea name="bio" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ old('bio', $m->bio ?? '') }}</textarea>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
            <input type="file" name="image" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
            @if(!empty($m->image))
            <p class="text-xs text-gray-400 mt-1">Current: {{ $m->image }}</p>
            @endif
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Experience</label>
            <input type="text" name="experience" value="{{ old('experience', $m->experience ?? '') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Skills (one per line)</label>
        <textarea name="skills[]" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">{{ is_array(old('skills', $m->skills ?? [])) ? implode("\n", old('skills', $m->skills ?? [])) : old('skills', $m->skills ?? '') }}</textarea>
        <p class="text-xs text-gray-400 mt-1">Enter one skill per line.</p>
    </div>

    <div class="border-t border-gray-200 pt-6">
        <h4 class="text-sm font-bold text-gray-700 mb-4">Social Links</h4>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                <input type="url" name="social[linkedin]" value="{{ old('social.linkedin', $m->social['linkedin'] ?? ($m->social_linkedin ?? '')) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Twitter</label>
                <input type="url" name="social[twitter]" value="{{ old('social.twitter', $m->social['twitter'] ?? ($m->social_twitter ?? '')) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">GitHub</label>
                <input type="url" name="social[github]" value="{{ old('social.github', $m->social['github'] ?? ($m->social_github ?? '')) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="flex items-end pb-1">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $m->is_active ?? 1) ? 'checked' : '' }} class="rounded border-gray-300 text-[#00ffb3] focus:ring-[#00ffb3]">
                <span class="text-sm font-medium text-gray-700">Active</span>
            </label>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $m->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#00ffb3]/50 focus:border-[#00ffb3]">
        </div>
    </div>
</div>
