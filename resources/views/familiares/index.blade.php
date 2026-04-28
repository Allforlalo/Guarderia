@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Familiares</h2>
        <a href="{{ route('familiares.create') }}" class="btn btn-primary">Nuevo Familiar</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Dirección</th>
                <th>Persona nombre</th>
                <th>Persona apellido</th>
                <th>Persona apellido</th>
                <th>Parentezco</th>
                <th>Niño</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($familiares as $familiar)
            <tr>
                <td>{{ $familiar->DNI }}</td>
                <td>{{ $familiar->dir }}</td>
                <td>{{ $familiar->nombre_persona }}</td>
                <td>{{ $familiar->apellido_paterno_persona }}</td>
                <td>{{ $familiar->apellido_materno_persona }}</td>
                <td>{{ $familiar->nombre_parentezco }}</td>
                <td>{{ $familiar->nombre_ninio }}</td>
                <td>
                    <a href="{{ route('familiares.edit', $familiar->id_fam) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('familiares.destroy', $familiar->id_fam) }}" method="POST" style="display:inline">
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