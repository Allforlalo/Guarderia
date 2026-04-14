<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ponteglamping;
use App\Models\Venta;

class PonteglampingController extends Controller
{
    public function index()
    {
        $ponteglamping = Ponteglamping::all();
        return view('glamping.ponteglamping.index', compact('ponteglamping'));
    }
    public function create()
    {
        $ventas = Venta::all();
        return view('glamping.ponteglamping.create', compact('ventas'));
    }
    public function store(Request $request)
    {
        Ponteglamping::create($request->all());
        return redirect()->route('ponteglamping.index')->with('success', 'Registro creado correctamente');
    }
    public function show(string $id)
    {
        $ponteglamping = Ponteglamping::findOrFail($id);
        return view('glamping.ponteglamping.show', compact('ponteglamping'));
    }
    public function edit(string $id)
    {
        $ponteglamping = Ponteglamping::findOrFail($id);
        $ventas = Venta::all();
        return view('glamping.ponteglamping.edit', compact('ponteglamping', 'ventas'));
    }
    public function update(Request $request, string $id)
    {
        $ponteglamping = Ponteglamping::findOrFail($id);
        $ponteglamping->update($request->all());
        return redirect()->route('ponteglamping.index')->with('success', 'Registro actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $ponteglamping = Ponteglamping::findOrFail($id);
        $ponteglamping->delete();
        return redirect()->route('ponteglamping.index')->with('success', 'Registro eliminado correctamente');
    }
}
