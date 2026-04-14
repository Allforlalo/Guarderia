@extends('layouts.app')

@section('content')
    <h2>Detalle de Parentezco</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $parentezco->nombre }}</p>
        </div>
    </div>

    <a href="{{ route('parentezcos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection