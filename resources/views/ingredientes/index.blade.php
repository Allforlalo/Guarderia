@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Ingredientes</h2>
        <a href="{{ route('ingredientes.create') }}" class="btn btn-primary">Nuevo Ingrediente</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->nombre }}</td>
                <td>
                    <a href="{{ route('ingredientes.edit', $ingrediente->id_ingrediente) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('ingredientes.destroy', $ingrediente->id_ingrediente) }}" method="POST" style="display:inline">
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