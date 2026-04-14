@extends('layouts.app')

@section('content')
    <h2>Detalle de Alergia</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Niño:</strong> {{ $alergia->id_ninio }}</p>
            <p><strong>Ingrediente:</strong> {{ $alergia->id_ingrediente }}</p>
        </div>
    </div>

    <a href="{{ route('alergias.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection