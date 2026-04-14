@extends('layouts.app')

@section('content')
    <h2>Editar Cuenta</h2>

    <form action="{{ route('registro_cuentas.update', $registroCuenta->id_regcuenta) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Cuenta</label>
            <input type="text" name="cuenta" class="form-control" value="{{ $registroCuenta->cuenta }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Familiar</label>
            <select name="id_fam" class="form-select" required>
                @foreach($familiares as $familiar)
                    <option value="{{ $familiar->id_fam }}" {{ $registroCuenta->id_fam == $familiar->id_fam ? 'selected' : '' }}>
                        {{ $familiar->DNI }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('registro_cuentas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection