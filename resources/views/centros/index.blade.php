@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Centros</h2>
        <a href="{{ route('centros.create') }}" class="btn btn-primary">Nuevo Centro</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($centros as $centro)
            <tr>
                <td>{{ $centro->nom }}</td>
                <td>{{ $centro->costo }}</td>
                <td>
                    <a href="{{ route('centros.edit', $centro->id_centro) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('centros.destroy', $centro->id_centro) }}" method="POST" style="display:inline">
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

