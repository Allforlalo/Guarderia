<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Instalacion;

class InstalacionController extends Controller
{
    public function index()
    {
        $instalaciones = Instalacion::all();
        return view('glamping.instalaciones.index', compact('instalaciones'));
    }
    public function create()
    {
        return view('glamping.instalaciones.create');
    }
    public function store(Request $request)
    {
        Instalacion::create($request->all());
        return redirect()->route('instalaciones.index')->with('success', 'Instalación creada correctamente');
    }
    public function show(string $id)
    {
        $instalacion = Instalacion::findOrFail($id);
        return view('glamping.instalaciones.show', compact('instalacion'));
    }
    public function edit(string $id)
    {
        $instalacion = Instalacion::findOrFail($id);
        return view('glamping.instalaciones.edit', compact('instalacion'));
    }
    public function update(Request $request, string $id)
    {
        $instalacion = Instalacion::findOrFail($id);
        $instalacion->update($request->all());
        return redirect()->route('instalaciones.index')->with('success', 'Instalación actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $instalacion = Instalacion::findOrFail($id);
        $instalacion->delete();
        return redirect()->route('instalaciones.index')->with('success', 'Instalación eliminada correctamente');
    }
    public function instalacionesPublicas()
    {
    $instalaciones = Instalacion::all();
    return view('glamping.instalaciones_publicas', compact('instalaciones'));
    }
}
