@extends('layouts.app')

@section('content')
    <h2>Detalle de Cuenta</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Cuenta:</strong> {{ $registroCuenta->cuenta }}</p>
            <p><strong>Familiar:</strong> {{ $registroCuenta->id_fam }}</p>
        </div>
    </div>

    <a href="{{ route('registro_cuentas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection