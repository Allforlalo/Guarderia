<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Plato;
use App\Models\Ingrediente;

class MenuController extends Controller
{
    public function index()
    {
    $menus = Menu::join('platos', 'menus.id_plato', 'platos.id_plato')
    ->join('ingredientes', 'menus.id_ingrediente', 'ingredientes.id_ingrediente')
    ->select('menus.id_menu', 'platos.nombre AS nombre_plato', 'ingredientes.nombre AS nombre_ingrediente')
    ->get();
    return view('menus.index', compact('menus'));
    }
    public function create()
    {
        $platos = Plato::all();
        $ingredientes = Ingrediente::all();
        return view('menus.create', compact('platos', 'ingredientes'));
    }
    public function store(Request $request)
    {
        Menu::create($request->all());
        return redirect()->route('menus.index')->with('success', 'Menú creado correctamente');
    }
    public function show(string $id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.show', compact('menu'));
    }
    public function edit(string $id)
    {
        $menu = Menu::findOrFail($id);
        $platos = Plato::all();
        $ingredientes = Ingrediente::all();
        return view('menus.edit', compact('menu', 'platos', 'ingredientes'));
    }
    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return redirect()->route('menus.index')->with('success', 'Menú actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menú eliminado correctamente');
    }
}
