<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abono;
use App\Models\RegistroCuenta;

class AbonoController extends Controller
{
    public function index()
    {
    $abonos = Abono::join('registro_cuentas', 'abonos.id_regcuenta', 'registro_cuentas.id_regcuenta')
        ->join('familiares', 'registro_cuentas.id_fam', 'familiares.id_fam')
        ->join('ninios', 'familiares.id_ninio', 'ninios.id_ninio')
        ->join('personas', 'ninios.id_persona', 'personas.id_persona')
        ->join('personas as personas_familiar', 'familiares.id_persona', 'personas_familiar.id_persona')
        ->select('abonos.id_abono', 'abonos.cantidad', 'abonos.fecha', 'personas.nom AS nombre_ninio', 'personas_familiar.nom AS nombre_familiar', 'registro_cuentas.cuenta')
        ->get();
        return view('abonos.index', compact('abonos'));
    }
    public function create()
    {
        $registroCuentas = RegistroCuenta::all();
        return view('abonos.create', compact('registroCuentas'));
    }
    public function store(Request $request)
    {
        Abono::create($request->all());
        return redirect()->route('abonos.index')->with('success', 'Abono creado correctamente');
    }
    public function show(string $id)
    {
        $abono = Abono::findOrFail($id);
        return view('abonos.show', compact('abono'));
    }
    public function edit(string $id)
    {
        $abono = Abono::findOrFail($id);
        $registroCuentas = RegistroCuenta::all();
        return view('abonos.edit', compact('abono', 'registroCuentas'));
    }
    public function update(Request $request, string $id)
    {
        $abono = Abono::findOrFail($id);
        $abono->update($request->all());
        return redirect()->route('abonos.index')->with('success', 'Abono actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $abono = Abono::findOrFail($id);
        $abono->delete();
        return redirect()->route('abonos.index')->with('success', 'Abono eliminado correctamente');
    }
}
