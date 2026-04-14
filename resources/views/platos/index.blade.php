@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Platos</h2>
        <a href="{{ route('platos.create') }}" class="btn btn-primary">Nuevo Plato</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platos as $plato)
            <tr>
                <td>{{ $plato->nombre }}</td>
                <td>{{ $plato->precio }}</td>
                <td>
                    <a href="{{ route('platos.edit', $plato->id_plato) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('platos.destroy', $plato->id_plato) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection