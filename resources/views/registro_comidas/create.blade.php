@extends('layouts.app')

@section('content')
    <h2>Nuevo Registro de Comida</h2>

    <form action="{{ route('registro_comidas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}">{{ $ninio->matricula }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Plato</label>
            <select name="id_plato" class="form-select" required>
                @foreach($platos as $plato)
                    <option value="{{ $plato->id_plato }}">{{ $plato->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <a href="{{ route('registro_comidas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection