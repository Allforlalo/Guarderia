<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninio;
use App\Models\Centro;
use App\Models\Persona;

class NinioController extends Controller
{
    public function index()
    {
    $ninios = Ninio::join('personas', 'ninios.id_persona', 'personas.id_persona')
    ->join('centros', 'ninios.id_centro', 'centros.id_centro')
    ->select('ninios.id_ninio', 'ninios.matricula', 'ninios.fecha_i', 'personas.nom AS nombre_child', 'personas.ap AS apellido_paterno_child', 'personas.am AS apellido_materno_child', 'centros.nom AS nombre_centro')
    ->get();
    return view('ninios.index', compact('ninios'));
    }
    public function create()
    {
        $centros = Centro::all();
        $personas = Persona::all();
        return view('ninios.create', compact('centros', 'personas'));
    }
    public function store(Request $request)
    {
        Ninio::create($request->all());
        return redirect()->route('ninios.index')->with('success', 'Niño creado correctamente');
    }
    public function show(string $id)
    {
        $ninio = Ninio::findOrFail($id);
        return view('ninios.show', compact('ninio'));
    }
    public function edit(string $id)
    {
        $ninio = Ninio::findOrFail($id);
        $centros = Centro::all();
        $personas = Persona::all();
        return view('ninios.edit', compact('ninio', 'centros', 'personas'));
    }
    public function update(Request $request, string $id)
    {
        $ninio = Ninio::findOrFail($id);
        $ninio->update($request->all());
        return redirect()->route('ninios.index')->with('success', 'Niño actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $ninio = Ninio::findOrFail($id);
        $ninio->delete();
        return redirect()->route('ninios.index')->with('success', 'Niño eliminado correctamente');
    }
}
