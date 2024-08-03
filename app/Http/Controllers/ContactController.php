<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();

        return view('contact.index', compact('contact'));
    }

    public function create()
    {
        
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_type' => 'required',
            'contact_value' => 'required',
            'id_user' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('contact.index')->with('success', 'Data berhasil ditambahkan');

    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'contact_type' => 'required',
            'contact_value' => 'required',
            'id_user' => 'required',
        ]);
        Contact::find($id)->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact.index')->with('success', 'Data berhasil dihapus');
    }
}
