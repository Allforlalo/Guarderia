@extends('layouts.app')

@section('content')
    <h2>Editar Plato</h2>

    <form action="{{ route('platos.update', $plato->id_plato) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $plato->nombre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $plato->precio }}" required>
        </div>
        <a href="{{ route('platos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection