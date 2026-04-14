@extends('layouts.app')

@section('content')
    <h2>Detalle de Abono</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Cantidad:</strong> {{ $abono->cantidad }}</p>
            <p><strong>Fecha:</strong> {{ $abono->fecha }}</p>
            <p><strong>Cuenta:</strong> {{ $abono->id_regcuenta }}</p>
        </div>
    </div>

    <a href="{{ route('abonos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection