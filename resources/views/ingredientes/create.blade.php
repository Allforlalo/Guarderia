@extends('layouts.app')

@section('content')
    <h2>Nuevo Ingrediente</h2>

    <form action="{{ route('ingredientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection