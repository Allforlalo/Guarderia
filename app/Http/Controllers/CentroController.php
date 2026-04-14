<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return view('centros.index', compact('centros'));
    }

    public function create()
    {
        return view('centros.create');
    }

    public function store(Request $request)
    {
        Centro::create($request->all());
        return redirect()->route('centros.index')->with('success', 'Centro creado correctamente');
    }

    public function show(string $id)
    {
        $centro = Centro::findOrFail($id);
        return view('centros.show', compact('centro'));
    }

    public function edit(string $id)
    {
        $centro = Centro::findOrFail($id);
        return view('centros.edit', compact('centro'));
    }

    public function update(Request $request, string $id)
    {
        $centro = Centro::findOrFail($id);
        $centro->update($request->all());
        return redirect()->route('centros.index')->with('success', 'Centro actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $centro = Centro::findOrFail($id);
        $centro->delete();
        return redirect()->route('centros.index')->with('success', 'Centro eliminado correctamente');
    }
}
