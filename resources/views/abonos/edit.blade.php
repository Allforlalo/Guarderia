@extends('layouts.app')

@section('content')
    <h2>Editar Abono</h2>

    <form action="{{ route('abonos.update', $abono->id_abono) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $abono->cantidad }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $abono->fecha }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Cuenta</label>
            <select name="id_regcuenta" class="form-select" required>
                @foreach($registroCuentas as $registroCuenta)
                    <option value="{{ $registroCuenta->id_regcuenta }}" {{ $abono->id_regcuenta == $registroCuenta->id_regcuenta ? 'selected' : '' }}>
                        {{ $registroCuenta->cuenta }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('abonos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection