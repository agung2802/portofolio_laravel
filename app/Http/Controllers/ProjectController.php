<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('project.index', compact('project'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'project_desc' => 'required',
            'job_desc' => 'required',
            'technology' => 'required',
            'other' => 'required',
        ]);
        Project::create($request->all());
        return redirect()->route('project.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function show($project_id)
    {
        $project = Project::find($project_id);
        return view('project.show', compact('project'));
    }

    public function edit($project_id)
    {
        $project = Project::find($project_id);
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $project_id)
    {
        $request->validate([
            'project_name' => 'required',
            'project_desc' => 'required',
            'job_desc' => 'required',
            'technology' => 'required',
            'other' => 'required',
        ]);
        Project::find($project_id)->update($request->all());
        return redirect()->route('project.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($project_id)
    {
        Project::find($project_id)->delete();
        return redirect()->route('project.index')->with('success', 'Data berhasil dihapus');
    }
}
