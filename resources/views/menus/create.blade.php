@extends('layouts.app')

@section('content')
    <h2>Nuevo Menú</h2>

    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Plato</label>
            <select name="id_plato" class="form-select" required>
                @foreach($platos as $plato)
                    <option value="{{ $plato->id_plato }}">{{ $plato->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ingrediente</label>
            <select name="id_ingrediente" class="form-select" required>
                @foreach($ingredientes as $ingrediente)
                    <option value="{{ $ingrediente->id_ingrediente }}">{{ $ingrediente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection