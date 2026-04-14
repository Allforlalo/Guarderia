@extends('layouts.app')

@section('content')
    <h2>Detalle de Menú</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Plato:</strong> {{ $menu->id_plato }}</p>
            <p><strong>Ingrediente:</strong> {{ $menu->id_ingrediente }}</p>
        </div>
    </div>

    <a href="{{ route('menus.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection