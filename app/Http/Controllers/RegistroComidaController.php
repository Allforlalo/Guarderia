<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroComida;
use App\Models\Ninio;
use App\Models\Plato;

class RegistroComidaController extends Controller
{
    public function index()
    {
        $registroComidas = RegistroComida::all();
        return view('registro_comidas.index', compact('registroComidas'));
    }
    public function create()
    {
        $ninios = Ninio::all();
        $platos = Plato::all();
        return view('registro_comidas.create', compact('ninios', 'platos'));
    }
    public function store(Request $request)
    {
        RegistroComida::create($request->all());
        return redirect()->route('registro_comidas.index')->with('success', 'Registro creado correctamente');
    }
    public function show(string $id)
    {
        $registroComida = RegistroComida::findOrFail($id);
        return view('registro_comidas.show', compact('registroComida'));
    }
    public function edit(string $id)
    {
        $registroComida = RegistroComida::findOrFail($id);
        $ninios = Ninio::all();
        $platos = Plato::all();
        return view('registro_comidas.edit', compact('registroComida', 'ninios', 'platos'));
    }
    public function update(Request $request, string $id)
    {
        $registroComida = RegistroComida::findOrFail($id);
        $registroComida->update($request->all());
        return redirect()->route('registro_comidas.index')->with('success', 'Registro actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $registroComida = RegistroComida::findOrFail($id);
        $registroComida->delete();
        return redirect()->route('registro_comidas.index')->with('success', 'Registro eliminado correctamente');
    }
}
