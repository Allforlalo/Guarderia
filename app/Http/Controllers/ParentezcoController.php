<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parentezco;

class ParentezcoController extends Controller
{
    public function index()
    {
        $parentezcos = Parentezco::all();
        return view('parentezcos.index', compact('parentezcos'));
    }
    public function create()
    {
        return view('parentezcos.create');
    }
    public function store(Request $request)
    {
        Parentezco::create($request->all());
        return redirect()->route('parentezcos.index')->with('success', 'Parentezco creado correctamente');
    }
    public function show(string $id)
    {
        $parentezco = Parentezco::findOrFail($id);
        return view('parentezcos.show', compact('parentezco'));
    }
    public function edit(string $id)
    {
        $parentezco = Parentezco::findOrFail($id);
        return view('parentezcos.edit', compact('parentezco'));
    }
    public function update(Request $request, string $id)
    {
        $parentezco = Parentezco::findOrFail($id);
        $parentezco->update($request->all());
        return redirect()->route('parentezcos.index')->with('success', 'Parentezco actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $parentezco = Parentezco::findOrFail($id);
        $parentezco->delete();
        return redirect()->route('parentezcos.index')->with('success', 'Parentezco eliminado correctamente');
    }
}
