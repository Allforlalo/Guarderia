@extends('layouts.app')

@section('content')
    <h2>Editar Alergia</h2>

    <form action="{{ route('alergias.update', $alergia->id_alergia) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}" {{ $alergia->id_ninio == $ninio->id_ninio ? 'selected' : '' }}>
                        {{ $ninio->matricula }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ingrediente</label>
            <select name="id_ingrediente" class="form-select" required>
                @foreach($ingredientes as $ingrediente)
                    <option value="{{ $ingrediente->id_ingrediente }}" {{ $alergia->id_ingrediente == $ingrediente->id_ingrediente ? 'selected' : '' }}>
                        {{ $ingrediente->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('alergias.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection