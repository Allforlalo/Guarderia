<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PedidoBebida;
use App\Models\Venta;

class PedidoBebidaController extends Controller
{
    public function index()
    {
        $pedidosBebidas = PedidoBebida::all();
        return view('glamping.pedidos_bebidas.index', compact('pedidosBebidas'));
    }
    public function create()
    {
        $ventas = Venta::all();
        return view('glamping.pedidos_bebidas.create', compact('ventas'));
    }
    public function store(Request $request)
    {
        PedidoBebida::create($request->all());
        return redirect()->route('pedidos_bebidas.index')->with('success', 'Pedido creado correctamente');
    }
    public function show(string $id)
    {
        $pedidoBebida = PedidoBebida::findOrFail($id);
        return view('glamping.pedidos_bebidas.show', compact('pedidoBebida'));
    }
    public function edit(string $id)
    {
        $pedidoBebida = PedidoBebida::findOrFail($id);
        $ventas = Venta::all();
        return view('glamping.pedidos_bebidas.edit', compact('pedidoBebida', 'ventas'));
    }
    public function update(Request $request, string $id)
    {
        $pedidoBebida = PedidoBebida::findOrFail($id);
        $pedidoBebida->update($request->all());
        return redirect()->route('pedidos_bebidas.index')->with('success', 'Pedido actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $pedidoBebida = PedidoBebida::findOrFail($id);
        $pedidoBebida->delete();
        return redirect()->route('pedidos_bebidas.index')->with('success', 'Pedido eliminado correctamente');
    }
}
