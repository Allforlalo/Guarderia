@extends('layouts.app')

@section('content')
    <h2>Detalle de Registro de Comida</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Niño:</strong> {{ $registroComida->id_ninio }}</p>
            <p><strong>Plato:</strong> {{ $registroComida->id_plato }}</p>
            <p><strong>Cantidad:</strong> {{ $registroComida->cantidad }}</p>
            <p><strong>Fecha:</strong> {{ $registroComida->fecha }}</p>
        </div>
    </div>

    <a href="{{ route('registro_comidas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection