<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abono;
use App\Models\RegistroCuenta;

class AbonoController extends Controller
{
    public function index()
    {
        $abonos = Abono::all();
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
