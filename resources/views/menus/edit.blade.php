@extends('layouts.app')

@section('content')
    <h2>Editar Menú</h2>

    <form action="{{ route('menus.update', $menu->id_menu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Plato</label>
            <select name="id_plato" class="form-select" required>
                @foreach($platos as $plato)
                    <option value="{{ $plato->id_plato }}" {{ $menu->id_plato == $plato->id_plato ? 'selected' : '' }}>
                        {{ $plato->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ingrediente</label>
            <select name="id_ingrediente" class="form-select" required>
                @foreach($ingredientes as $ingrediente)
                    <option value="{{ $ingrediente->id_ingrediente }}" {{ $menu->id_ingrediente == $ingrediente->id_ingrediente ? 'selected' : '' }}>
                        {{ $ingrediente->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection