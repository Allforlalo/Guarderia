<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller
{
    public function index()
    {
        $platos = Plato::all();
        return view('platos.index', compact('platos'));
    }
    public function create()
    {
        return view('platos.create');
    }
    public function store(Request $request)
    {
        Plato::create($request->all());
        return redirect()->route('platos.index')->with('success', 'Plato creado correctamente');
    }
    public function show(string $id)
    {
        $plato = Plato::findOrFail($id);
        return view('platos.show', compact('plato'));
    }
    public function edit(string $id)
    {
        $plato = Plato::findOrFail($id);
        return view('platos.edit', compact('plato'));
    }
    public function update(Request $request, string $id)
    {
        $plato = Plato::findOrFail($id);
        $plato->update($request->all());
        return redirect()->route('platos.index')->with('success', 'Plato actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $plato = Plato::findOrFail($id);
        $plato->delete();
        return redirect()->route('platos.index')->with('success', 'Plato eliminado correctamente');
    }
}
