<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Cargo;
use App\Models\Horario;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('glamping.empleados.index', compact('empleados'));
    }
    public function create()
    {
        $cargos = Cargo::all();
        $horarios = Horario::all();
        return view('glamping.empleados.create', compact('cargos', 'horarios'));
    }
    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente');
    }
    public function show(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('glamping.empleados.show', compact('empleado'));
    }
    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $cargos = Cargo::all();
        $horarios = Horario::all();
        return view('glamping.empleados.edit', compact('empleado', 'cargos', 'horarios'));
    }
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente');
    }
}
