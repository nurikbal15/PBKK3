<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:penulis,email',
            'address' => 'nullable',
        ]);

        Penulis::create($request->all());

        return redirect()->route('penulis.index')->with('success', 'Penulis created successfully.');
    }

    public function edit($id)
    {
        $penulis = Penulis::find($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:penulis,email,' . $id,
            'address' => 'nullable',
        ]);

        $penulis = Penulis::find($id);
        $penulis->update($request->all());

        return redirect()->route('penulis.index')->with('success', 'Penulis updated successfully.');
    }

    public function destroy($id)
    {
        Penulis::find($id)->delete();
        return redirect()->route('penulis.index')->with('success', 'Penulis deleted successfully.');
    }
}
