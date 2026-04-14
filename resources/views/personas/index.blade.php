@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Personas</h2>
        <a href="{{ route('personas.create') }}" class="btn btn-primary">Nueva Persona</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->nom }}</td>
                <td>{{ $persona->ap }}</td>
                <td>{{ $persona->am }}</td>
                <td>{{ $persona->fecha_nac }}</td>
                <td>
                    <a href="{{ route('personas.edit', $persona->id_persona) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id_persona) }}" method="POST" style="display:inline">
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