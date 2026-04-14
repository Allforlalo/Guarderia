<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroCuenta;
use App\Models\Familiar;

class RegistroCuentaController extends Controller
{
    public function index()
    {
        $registroCuentas = RegistroCuenta::all();
        return view('registro_cuentas.index', compact('registroCuentas'));
    }
    public function create()
    {
        $familiares = Familiar::all();
        return view('registro_cuentas.create', compact('familiares'));
    }
    public function store(Request $request)
    {
        RegistroCuenta::create($request->all());
        return redirect()->route('registro_cuentas.index')->with('success', 'Cuenta creada correctamente');
    }
    public function show(string $id)
    {
        $registroCuenta = RegistroCuenta::findOrFail($id);
        return view('registro_cuentas.show', compact('registroCuenta'));
    }
    public function edit(string $id)
    {
        $registroCuenta = RegistroCuenta::findOrFail($id);
        $familiares = Familiar::all();
        return view('registro_cuentas.edit', compact('registroCuenta', 'familiares'));
    }
    public function update(Request $request, string $id)
    {
        $registroCuenta = RegistroCuenta::findOrFail($id);
        $registroCuenta->update($request->all());
        return redirect()->route('registro_cuentas.index')->with('success', 'Cuenta actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $registroCuenta = RegistroCuenta::findOrFail($id);
        $registroCuenta->delete();
        return redirect()->route('registro_cuentas.index')->with('success', 'Cuenta eliminada correctamente');
    }
}
