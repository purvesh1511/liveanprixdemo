<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:portfolios,slug',
            'category' => 'required|in:web,shopify,seo,marketing',
            'type' => 'nullable|string|max:100',
            'type_color' => 'nullable|string|max:20',
            'subtitle' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'technology' => 'nullable|string|max:100',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:5048',
            'link' => 'nullable|string|max:500',
            'features' => 'nullable|array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }
        $validated['is_active'] = $request->boolean('is_active');
        $validated['features'] = $request->input('features');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portfolios', 'public');
        } else {
            unset($validated['image']);
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:portfolios,slug,' . $portfolio->id,
            'category' => 'required|in:web,shopify,seo,marketing',
            'type' => 'nullable|string|max:100',
            'type_color' => 'nullable|string|max:20',
            'subtitle' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'technology' => 'nullable|string|max:100',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:5048',
            'link' => 'nullable|string|max:500',
            'features' => 'nullable|array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }
        $validated['is_active'] = $request->boolean('is_active');
        $validated['features'] = $request->input('features');

        if ($request->hasFile('image')) {
            if ($portfolio->image && !str_starts_with($portfolio->image, 'http') && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $validated['image'] = $request->file('image')->store('portfolios', 'public');
        } else {
            unset($validated['image']);
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item deleted.');
    }
}
