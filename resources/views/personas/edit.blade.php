@extends('layouts.app')

@section('content')
    <h2>Editar Persona</h2>

    <form action="{{ route('personas.update', $persona->id_persona) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nom" class="form-control" value="{{ $persona->nom }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" name="ap" class="form-control" value="{{ $persona->ap }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Materno</label>
            <input type="text" name="am" class="form-control" value="{{ $persona->am }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac" class="form-control" value="{{ $persona->fecha_nac }}" required>
        </div>
        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection