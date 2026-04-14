@extends('layouts.app')

@section('content')
    <h2>Detalle de Niño</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Matrícula:</strong> {{ $ninio->matricula }}</p>
            <p><strong>Fecha de Ingreso:</strong> {{ $ninio->fecha_i }}</p>
            <p><strong>Persona:</strong> {{ $ninio->id_persona }}</p>
            <p><strong>Centro:</strong> {{ $ninio->id_centro }}</p>
        </div>
    </div>

    <a href="{{ route('ninios.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection