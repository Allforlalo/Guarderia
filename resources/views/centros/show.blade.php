@extends('layouts.app')

@section('content')
    <h2>Detalle del Centro</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $centro->nom }}</p>
            <p><strong>Costo:</strong> {{ $centro->costo }}</p>
        </div>
    </div>

    <a href="{{ route('centros.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection