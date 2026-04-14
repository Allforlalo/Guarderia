@extends('layouts.app')

@section('content')
    <h2>Editar Niño</h2>

    <form action="{{ route('ninios.update', $ninio->id_ninio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control" value="{{ $ninio->matricula }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Ingreso</label>
            <input type="date" name="fecha_i" class="form-control" value="{{ $ninio->fecha_i }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Persona</label>
            <select name="id_persona" class="form-select" required>
                @foreach($personas as $persona)
                    <option value="{{ $persona->id_persona }}" {{ $ninio->id_persona == $persona->id_persona ? 'selected' : '' }}>
                        {{ $persona->nom }} {{ $persona->ap }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Centro</label>
            <select name="id_centro" class="form-select" required>
                @foreach($centros as $centro)
                    <option value="{{ $centro->id_centro }}" {{ $ninio->id_centro == $centro->id_centro ? 'selected' : '' }}>
                        {{ $centro->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('ninios.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection