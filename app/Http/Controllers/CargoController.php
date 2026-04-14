<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return view('glamping.cargos.index', compact('cargos'));
    }
    public function create()
    {
        return view('glamping.cargos.create');
    }
    public function store(Request $request)
    {
        Cargo::create($request->all());
        return redirect()->route('cargos.index')->with('success', 'Cargo creado correctamente');
    }
    public function show(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('glamping.cargos.show', compact('cargo'));
    }
    public function edit(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('glamping.cargos.edit', compact('cargo'));
    }
    public function update(Request $request, string $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->update($request->all());
        return redirect()->route('cargos.index')->with('success', 'Cargo actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
        return redirect()->route('cargos.index')->with('success', 'Cargo eliminado correctamente');
    }
}
