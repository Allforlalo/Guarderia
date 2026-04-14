<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PedidoPlatillo;
use App\Models\Venta;

class PedidoPlatilloController extends Controller
{
    public function index()
    {
        $pedidosPlatillos = PedidoPlatillo::all();
        return view('glamping.pedidos_platillos.index', compact('pedidosPlatillos'));
    }
    public function create()
    {
        $ventas = Venta::all();
        return view('glamping.pedidos_platillos.create', compact('ventas'));
    }
    public function store(Request $request)
    {
        PedidoPlatillo::create($request->all());
        return redirect()->route('pedidos_platillos.index')->with('success', 'Pedido creado correctamente');
    }
    public function show(string $id)
    {
        $pedidoPlatillo = PedidoPlatillo::findOrFail($id);
        return view('glamping.pedidos_platillos.show', compact('pedidoPlatillo'));
    }
    public function edit(string $id)
    {
        $pedidoPlatillo = PedidoPlatillo::findOrFail($id);
        $ventas = Venta::all();
        return view('glamping.pedidos_platillos.edit', compact('pedidoPlatillo', 'ventas'));
    }
    public function update(Request $request, string $id)
    {
        $pedidoPlatillo = PedidoPlatillo::findOrFail($id);
        $pedidoPlatillo->update($request->all());
        return redirect()->route('pedidos_platillos.index')->with('success', 'Pedido actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $pedidoPlatillo = PedidoPlatillo::findOrFail($id);
        $pedidoPlatillo->delete();
        return redirect()->route('pedidos_platillos.index')->with('success', 'Pedido eliminado correctamente');
    }
    public function menuPublico()
{
    $platillos = PedidoPlatillo::all();
    $bebidas = \App\Models\PedidoBebida::all();
    return view('glamping.menu', compact('platillos', 'bebidas'));
}
}