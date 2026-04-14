@extends('layouts.app')

@section('content')
    <h2>Editar Familiar</h2>

    <form action="{{ route('familiares.update', $familiar->id_fam) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" name="DNI" class="form-control" value="{{ $familiar->DNI }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="dir" class="form-control" value="{{ $familiar->dir }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Persona</label>
            <select name="id_persona" class="form-select" required>
                @foreach($personas as $persona)
                    <option value="{{ $persona->id_persona }}" {{ $familiar->id_persona == $persona->id_persona ? 'selected' : '' }}>
                        {{ $persona->nom }} {{ $persona->ap }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Parentezco</label>
            <select name="id_parentezco" class="form-select" required>
                @foreach($parentezcos as $parentezco)
                    <option value="{{ $parentezco->id_parentezco }}" {{ $familiar->id_parentezco == $parentezco->id_parentezco ? 'selected' : '' }}>
                        {{ $parentezco->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}" {{ $familiar->id_ninio == $ninio->id_ninio ? 'selected' : '' }}>
                        {{ $ninio->matricula }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('familiares.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection