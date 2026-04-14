<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Empleado;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('glamping.ventas.index', compact('ventas'));
    }
    public function create()
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        return view('glamping.ventas.create', compact('clientes', 'empleados'));
    }
    public function store(Request $request)
    {
        Venta::create($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta creada correctamente');
    }
    public function show(string $id)
    {
        $venta = Venta::findOrFail($id);
        return view('glamping.ventas.show', compact('venta'));
    }
    public function edit(string $id)
    {
        $venta = Venta::findOrFail($id);
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        return view('glamping.ventas.edit', compact('venta', 'clientes', 'empleados'));
    }
    public function update(Request $request, string $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->update($request->all());
        return redirect()->route('ventas.index')->with('success', 'Venta actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();
        return redirect()->route('ventas.index')->with('success', 'Venta eliminada correctamente');
    }
}