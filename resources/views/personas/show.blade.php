@extends('layouts.app')

@section('content')
    <h2>Detalle de Persona</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $persona->nom }}</p>
            <p><strong>Apellido Paterno:</strong> {{ $persona->ap }}</p>
            <p><strong>Apellido Materno:</strong> {{ $persona->am }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $persona->fecha_nac }}</p>
        </div>
    </div>

    <a href="{{ route('personas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection