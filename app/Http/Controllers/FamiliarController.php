<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familiar;
use App\Models\Persona;
use App\Models\Parentezco;
use App\Models\Ninio;

class FamiliarController extends Controller
{
    public function index()
    {
        $familiares = Familiar::all();
        return view('familiares.index', compact('familiares'));
    }
    public function create()
    {
        $personas = Persona::all();
        $parentezcos = Parentezco::all();
        $ninios = Ninio::all();
        return view('familiares.create', compact('personas', 'parentezcos', 'ninios'));
    }
    public function store(Request $request)
    {
        Familiar::create($request->all());
        return redirect()->route('familiares.index')->with('success', 'Familiar creado correctamente');
    }
    public function show(string $id)
    {
        $familiar = Familiar::findOrFail($id);
        return view('familiares.show', compact('familiar'));
    }
    public function edit(string $id)
    {
        $familiar = Familiar::findOrFail($id);
        $personas = Persona::all();
        $parentezcos = Parentezco::all();
        $ninios = Ninio::all();
        return view('familiares.edit', compact('familiar', 'personas', 'parentezcos', 'ninios'));
    }
    public function update(Request $request, string $id)
    {
        $familiar = Familiar::findOrFail($id);
        $familiar->update($request->all());
        return redirect()->route('familiares.index')->with('success', 'Familiar actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $familiar = Familiar::findOrFail($id);
        $familiar->delete();
        return redirect()->route('familiares.index')->with('success', 'Familiar eliminado correctamente');
    }
}
