@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Niños</h2>
        <a href="{{ route('ninios.create') }}" class="btn btn-primary">Nuevo Niño</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Fecha Ingreso</th>
                <th>Persona</th>
                <th>Centro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ninios as $ninio)
            <tr>
                <td>{{ $ninio->matricula }}</td>
                <td>{{ $ninio->fecha_i }}</td>
                <td>{{ $ninio->id_persona }}</td>
                <td>{{ $ninio->id_centro }}</td>
                <td>
                    <a href="{{ route('ninios.edit', $ninio->id_ninio) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('ninios.destroy', $ninio->id_ninio) }}" method="POST" style="display:inline">
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