@extends('layouts.app')

@section('content')
    <h2>Nuevo Niño</h2>

    <form action="{{ route('ninios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Ingreso</label>
            <input type="date" name="fecha_i" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Persona</label>
            <select name="id_persona" class="form-select" required>
                @foreach($personas as $persona)
                    <option value="{{ $persona->id_persona }}">{{ $persona->nom }} {{ $persona->ap }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Centro</label>
            <select name="id_centro" class="form-select" required>
                @foreach($centros as $centro)
                    <option value="{{ $centro->id_centro }}">{{ $centro->nom }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('ninios.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection