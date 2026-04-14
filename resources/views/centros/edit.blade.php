@extends('layouts.app')

@section('content')
    <h2>Editar Centro</h2>

    <form action="{{ route('centros.update', $centro->id_centro) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nom" class="form-control" value="{{ $centro->nom }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Costo</label>
            <input type="number" step="0.01" name="costo" class="form-control" value="{{ $centro->costo }}" required>
        </div>
        <a href="{{ route('centros.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection