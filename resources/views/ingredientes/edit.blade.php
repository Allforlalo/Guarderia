@extends('layouts.app')

@section('content')
    <h2>Editar Ingrediente</h2>

    <form action="{{ route('ingredientes.update', $ingrediente->id_ingrediente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $ingrediente->nombre }}" required>
        </div>
        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection