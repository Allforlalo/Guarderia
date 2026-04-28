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
    $familiares = Familiar::join('personas', 'familiares.id_persona', 'personas.id_persona')
    ->join('parentezcos', 'familiares.id_parentezco', 'parentezcos.id_parentezco')
    ->join('ninios', 'familiares.id_ninio', 'ninios.id_ninio')
    ->join('personas as personas_ninio', 'ninios.id_persona', 'personas_ninio.id_persona')
    ->select('familiares.id_fam', 'familiares.DNI', 'familiares.dir', 'personas.nom AS nombre_persona', 'personas.ap AS apellido_paterno_persona', 'personas.am AS apellido_materno_persona', 'parentezcos.nombre AS nombre_parentezco', 'personas_ninio.nom AS nombre_ninio')
    ->get();
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
