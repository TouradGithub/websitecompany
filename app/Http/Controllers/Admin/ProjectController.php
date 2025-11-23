<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::latest()->paginate(12);
        return view('admin.pages.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.pages.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        \App\Models\Project::create($data);
    return redirect()->route('admin.admin.projects.index')->with('success', 'Project created successfully');
    }

    public function edit(\App\Models\Project $project)
    {
        return view('admin.pages.projects.edit', compact('project'));
    }

    public function update(Request $request, \App\Models\Project $project)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        $project->update($data);
        return redirect()->route('admin.admin.projects.index')->with('success', 'Project updated successfully');
    }

    public function show(\App\Models\Project $project)
    {
        return view('admin.pages.projects.show', compact('project'));
    }

    // public function destroy(\App\Models\Project $project)
    // {
    //     $project->delete();
    //     return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully');
    // }

    //         $path = $request->file('image')->store('projects', 'public');
    //         $validated['image'] = $path;
    //     }

    //     $project->update($validated);

    //     return redirect()->route('admin.projects.index')
    //         ->with('success', 'Projet mis à jour avec succès');
    // }

    public function destroy(Project $project)
    {
        // Delete project image
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.admin.projects.index')
            ->with('success', 'Projet supprimé avec succès');

    }
}
