<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BajaNinio;
use App\Models\Ninio;

class BajaNinioController extends Controller
{
    public function index()
    {
        $bajasNinios = BajaNinio::all();
        return view('BajasNinios.index', compact('bajasNinios'));
    }
    public function create()
    {
        $ninios = Ninio::all();
        return view('BajasNinios.create', compact('ninios'));
    }
    public function store(Request $request)
    {
        BajaNinio::create($request->all());
        return redirect()->route('BajasNinios.index')->with('success', 'Baja registrada correctamente');
    }
    public function show(string $id)
    {
        $bajaNinio = BajaNinio::findOrFail($id);
        return view('BajasNinios.show', compact('bajaNinio'));
    }
    public function edit(string $id)
    {
        $bajaNinio = BajaNinio::findOrFail($id);
        $ninios = Ninio::all();
        return view('BajasNinios.edit', compact('bajaNinio', 'ninios'));
    }
    public function update(Request $request, string $id)
    {
        $bajaNinio = BajaNinio::findOrFail($id);
        $bajaNinio->update($request->all());
        return redirect()->route('BajasNinios.index')->with('success', 'Baja actualizada correctamente');
    }
    public function destroy(string $id)
    {
        $bajaNinio = BajaNinio::findOrFail($id);
        $bajaNinio->delete();
        return redirect()->route('BajasNinios.index')->with('success', 'Baja eliminada correctamente');
    }
}
