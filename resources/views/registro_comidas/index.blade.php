@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Registro de Comidas</h2>
        <a href="{{ route('registro_comidas.create') }}" class="btn btn-primary">Nuevo Registro</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Niño</th>
                <th>Plato</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registroComidas as $registroComida)
            <tr>
                <td>{{ $registroComida->nombre_ninio }}</td>
                <td>{{ $registroComida->nombre_plato }}</td>
                <td>{{ $registroComida->cantidad }}</td>
                <td>{{ $registroComida->fecha }}</td>
                <td>
                    <a href="{{ route('registro_comidas.edit', $registroComida->id_registrocomida) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('registro_comidas.destroy', $registroComida->id_registrocomida) }}" method="POST" style="display:inline">
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