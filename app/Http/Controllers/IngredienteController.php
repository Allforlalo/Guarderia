<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.index', compact('ingredientes'));
    }
    public function create()
    {
        return view('ingredientes.create');
    }
    public function store(Request $request)
    {
        Ingrediente::create($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente creado correctamente');
    }
    public function show(string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        return view('ingredientes.show', compact('ingrediente'));
    }
    public function edit(string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        return view('ingredientes.edit', compact('ingrediente'));
    }
    public function update(Request $request, string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->update($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->delete();
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente eliminado correctamente');
    }
}
