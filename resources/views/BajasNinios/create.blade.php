@extends('layouts.app')

@section('content')
    <h2>Nueva Baja de Niño</h2>

    <form action="{{ route('bajas_ninios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Niño</label>
            <select name="id_ninio" class="form-select" required>
                @foreach($ninios as $ninio)
                    <option value="{{ $ninio->id_ninio }}">{{ $ninio->matricula }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Motivo</label>
            <input type="text" name="motivo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <a href="{{ route('BajasNinios.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection