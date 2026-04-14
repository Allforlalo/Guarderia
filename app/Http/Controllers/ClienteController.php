<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TarjetaPago;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('glamping.clientes.index', compact('clientes'));
    }
    public function create()
    {
        $tarjetas = TarjetaPago::all();
        return view('glamping.clientes.create', compact('tarjetas'));
    }
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
    }
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('glamping.clientes.show', compact('cliente'));
    }
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $tarjetas = TarjetaPago::all();
        return view('glamping.clientes.edit', compact('cliente', 'tarjetas'));
    }
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
    }
}
