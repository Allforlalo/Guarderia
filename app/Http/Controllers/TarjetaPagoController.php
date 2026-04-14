<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TarjetaPago;

class TarjetaPagoController extends Controller
{
    public function index()
    {
        $tarjetas = TarjetaPago::all();
        return view('glamping.tarjetas_pago.index', compact('tarjetas'));
    }
    public function create()
    {
        return view('glamping.tarjetas_pago.create');
    }
    public function store(Request $request)
    {
        TarjetaPago::create($request->all());
        return redirect()->route('tarjetas_pago.index')->with('success', 'Tarjeta creada correctamente');
    }
    public function show(string $id)
    {
        $tarjeta = TarjetaPago::findOrFail($id);
        return view('glamping.tarjetas_pago.show', compact('tarjeta'));
    }
    public function edit(string $id)
    {
        $tarjeta = TarjetaPago::findOrFail($id);
        return view('glamping.tarjetas_pago.edit', compact('tarjeta'));
    }
    public function update(Request $request, string $id)
    {
        $tarjeta = TarjetaPago::findOrFail($id);
        $tarjeta->update($request->all());
        return redirect()->route('tarjetas_pago.index')->with('success', 'Tarjeta actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $tarjeta = TarjetaPago::findOrFail($id);
        $tarjeta->delete();
        return redirect()->route('tarjetas_pago.index')->with('success', 'Tarjeta eliminada correctamente');
    }
}
