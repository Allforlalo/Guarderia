@extends('layouts.app')

@section('content')
    <h2>Detalle de Baja de Niño</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Niño:</strong> {{ $bajaNinio->id_ninio }}</p>
            <p><strong>Motivo:</strong> {{ $bajaNinio->motivo }}</p>
            <p><strong>Fecha:</strong> {{ $bajaNinio->fecha }}</p>
        </div>
    </div>

    <a href="{{ route('BajasNinios.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection