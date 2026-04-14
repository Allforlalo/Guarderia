@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Bajas de Niños</h2>
        <a href="{{ route('BajasNinios.create') }}" class="btn btn-primary">Nueva Baja</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Niño</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bajasNinios as $bajaNinio)
            <tr>
                <td>{{ $bajaNinio->id_ninio }}</td>
                <td>{{ $bajaNinio->motivo }}</td>
                <td>{{ $bajaNinio->fecha }}</td>
                <td>
                    <a href="{{ route('BajasNinios.edit', $bajaNinio->id_baja) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('BajasNinios.destroy', $bajaNinio->id_baja) }}" method="POST" style="display:inline">
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