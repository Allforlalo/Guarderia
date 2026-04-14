<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::all();
        return view('glamping.horarios.index', compact('horarios'));
    }
    public function create()
    {
        return view('glamping.horarios.create');
    }
    public function store(Request $request)
    {
        Horario::create($request->all());
        return redirect()->route('horarios.index')->with('success', 'Horario creado correctamente');
    }
    public function show(string $id)
    {
        $horario = Horario::findOrFail($id);
        return view('glamping.horarios.show', compact('horario'));
    }
    public function edit(string $id)
    {
        $horario = Horario::findOrFail($id);
        return view('glamping.horarios.edit', compact('horario'));
    }
    public function update(Request $request, string $id)
    {
        $horario = Horario::findOrFail($id);
        $horario->update($request->all());
        return redirect()->route('horarios.index')->with('success', 'Horario actualizado correctamente');
    }
    public function destroy(string $id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();
        return redirect()->route('horarios.index')->with('success', 'Horario eliminado correctamente');
    }
}
