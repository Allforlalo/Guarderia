@extends('layouts.app')

@section('content')
    <h2>Detalle de Ingrediente</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $ingrediente->nombre }}</p>
        </div>
    </div>

    <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection