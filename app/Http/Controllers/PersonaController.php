<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }
    public function create()
    {
        return view('personas.create');
    }
    public function store(Request $request)
    {
        Persona::create($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente');
    }
    public function show(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }
    public function edit(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }
    public function update(Request $request, string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente');
    }
}
