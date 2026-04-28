<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alergia;
use App\Models\Ingrediente;
use App\Models\Ninio;

class AlergiaController extends Controller
{
    public function index()
    {
    $alergias = Alergia::join('ninios', 'alergias.id_ninio', 'ninios.id_ninio')
    ->join('personas', 'ninios.id_persona', 'personas.id_persona')
    ->join('ingredientes', 'alergias.id_ingrediente', 'ingredientes.id_ingrediente')
    ->select('alergias.id_alergia', 'personas.nom AS nombre_ninio', 'ingredientes.nombre AS nombre_ingrediente')
    ->get();
    return view('alergias.index', compact('alergias'));
    }
    public function create()
    {
        $ingredientes = Ingrediente::all();
        $ninios = Ninio::all();
        return view('alergias.create', compact('ingredientes', 'ninios'));
    }
    public function store(Request $request)
    {
        Alergia::create($request->all());
        return redirect()->route('alergias.index')->with('success', 'Alergia creada correctamente');
    }
    public function show(string $id)
    {
        $alergia = Alergia::findOrFail($id);
        return view('alergias.show', compact('alergia'));
    }
    public function edit(string $id)
    {
        $alergia = Alergia::findOrFail($id);
        $ingredientes = Ingrediente::all();
        $ninios = Ninio::all();
        return view('alergias.edit', compact('alergia', 'ingredientes', 'ninios'));
    }
    public function update(Request $request, string $id)
    {
        $alergia = Alergia::findOrFail($id);
        $alergia->update($request->all());
        return redirect()->route('alergias.index')->with('success', 'Alergia actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $alergia = Alergia::findOrFail($id);
        $alergia->delete();
        return redirect()->route('alergias.index')->with('success', 'Alergia eliminada correctamente');
    }
}
