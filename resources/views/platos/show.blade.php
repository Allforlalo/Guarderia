@extends('layouts.app')

@section('content')
    <h2>Detalle de Plato</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $plato->nombre }}</p>
            <p><strong>Precio:</strong> {{ $plato->precio }}</p>
        </div>
    </div>

    <a href="{{ route('platos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection