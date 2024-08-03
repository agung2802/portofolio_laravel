<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index()
    {
        $skill = Skill::all();

        return view('skill.index', compact('skill'));
    }

    public function create()
    {
        
        return view('skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required',
            'skill_category' => 'required',
            'id_user' => 'required',
        ]);
        Skill::create($request->all());
        return redirect()->route('skill.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function show($id)
    {
        $skill = Skill::find($id);
        return view('skill.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_name' => 'required',
            'skill_category' => 'required',
            'id_user' => 'required',
        ]);
        Skill::find($id)->update($request->all());
        return redirect()->route('skill.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect()->route('skill.index')->with('success', 'Data berhasil dihapus');
    }
}
