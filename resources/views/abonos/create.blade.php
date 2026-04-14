@extends('layouts.app')

@section('content')
    <h2>Nuevo Abono</h2>

    <form action="{{ route('abonos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Cuenta</label>
            <select name="id_regcuenta" class="form-select" required>
                @foreach($registroCuentas as $registroCuenta)
                    <option value="{{ $registroCuenta->id_regcuenta }}">{{ $registroCuenta->cuenta }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('abonos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection