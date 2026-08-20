<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('admin.team.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'role' => 'required|string|max:200',
            'role_color' => 'nullable|string|max:20',
            'bio' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:5048',
            'experience' => 'nullable|string|max:50',
            'skills' => 'nullable|array',
            'social' => 'nullable|array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['skills'] = $request->input('skills');
        $validated['social'] = $request->input('social', []);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('team', 'public');
        } else {
            unset($validated['image']);
        }

        TeamMember::create($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team member created successfully.');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', ['teamMember' => $team]);
    }

    public function update(Request $request, TeamMember $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'role' => 'required|string|max:200',
            'role_color' => 'nullable|string|max:20',
            'bio' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:5048',
            'experience' => 'nullable|string|max:50',
            'skills' => 'nullable|array',
            'social' => 'nullable|array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['skills'] = $request->input('skills');
        $validated['social'] = $request->input('social', []);

        if ($request->hasFile('image')) {
            if ($team->image && !str_starts_with($team->image, 'http') && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }
            $validated['image'] = $request->file('image')->store('team', 'public');
        } else {
            unset($validated['image']);
        }

        $team->update($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted.');
    }
}
