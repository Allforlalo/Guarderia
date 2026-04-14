@extends('layouts.app')

@section('content')
    <h2>Detalle de Familiar</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>DNI:</strong> {{ $familiar->DNI }}</p>
            <p><strong>Dirección:</strong> {{ $familiar->dir }}</p>
            <p><strong>Persona:</strong> {{ $familiar->id_persona }}</p>
            <p><strong>Parentezco:</strong> {{ $familiar->id_parentezco }}</p>
            <p><strong>Niño:</strong> {{ $familiar->id_ninio }}</p>
        </div>
    </div>

    <a href="{{ route('familiares.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection