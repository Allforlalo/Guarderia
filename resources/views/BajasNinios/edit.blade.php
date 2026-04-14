@extends('layouts.app')

@section('content')
    <h2>Editar Baja de Niño</h2>

    <form action="{{ route('bajas_ninios.update', $bajaNinio->id_baja) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}" {{ $bajaNinio->id_ninio == $ninio->id_ninio ? 'selected' : '' }}>
                        {{ $ninio->matricula }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Motivo</label>
            <input type="text" name="motivo" class="form-control" value="{{ $bajaNinio->motivo }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $bajaNinio->fecha }}" required>
        </div>
        <a href="{{ route('BajasNinios.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection