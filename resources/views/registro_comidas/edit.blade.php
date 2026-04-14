@extends('layouts.app')

@section('content')
    <h2>Editar Registro de Comida</h2>

    <form action="{{ route('registro_comidas.update', $registroComida->id_registrocomida) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}" {{ $registroComida->id_ninio == $ninio->id_ninio ? 'selected' : '' }}>
                        {{ $ninio->matricula }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Plato</label>
            <select name="id_plato" class="form-select" required>
                @foreach($platos as $plato)
                    <option value="{{ $plato->id_plato }}" {{ $registroComida->id_plato == $plato->id_plato ? 'selected' : '' }}>
                        {{ $plato->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $registroComida->cantidad }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $registroComida->fecha }}" required>
        </div>
        <a href="{{ route('registro_comidas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection