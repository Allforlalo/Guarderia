@extends('layouts.app')

@section('content')
    <h2>Nuevo Familiar</h2>

    <form action="{{ route('familiares.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="text" name="DNI" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="dir" class="form-control" required>
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
            <label class="form-label">Parentezco</label>
            <select name="id_parentezco" class="form-select" required>
                @foreach($parentezcos as $parentezco)
                    <option value="{{ $parentezco->id_parentezco }}">{{ $parentezco->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}">{{ $ninio->matricula }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('familiares.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection