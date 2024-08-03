<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = Dashboard::all();
        return view('dashboard.index', compact('dashboard'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'self_objective' => 'required',
            'address' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->file('photo')->isValid()) {
            $path = $request->file('photo')->store('photos', 'public');
            $dashboard = new Dashboard();
            $dashboard->full_name = $request->full_name;
            $dashboard->self_objective = $request->self_objective;
            $dashboard->address = $request->address;
            $dashboard->photo = $path;
            $dashboard->save();

            return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
        }

    }

    public function show($id)
    {
        $dashboard = Dashboard::find($id);
        return view('dashboard.show', compact('dashboard'));
    }

    public function edit($id)
    {
        $dashboard = Dashboard::find($id);
        return view('dashboard.edit', compact('dashboard'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required',
            'self_objective' => 'required',
            'address' => 'required',
            'photo' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dashboard = Dashboard::findOrFail($id);

        log($dashboard->photo);
        // Check if a new file is uploaded
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            // Delete the old file if it exists
            log($request->photo);
            if ($dashboard->photo) {
                Storage::disk('public')->delete($dashboard->photo);
            }

            // Store the new file
            $path = $request->file('photo')->store('photos', 'public');
            $dashboard->photo = $path;
        }

        $dashboard->save();

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Dashboard::find($id)->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus');
    }
}
