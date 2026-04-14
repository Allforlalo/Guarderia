@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Abonos</h2>
        <a href="{{ route('abonos.create') }}" class="btn btn-primary">Nuevo Abono</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Cuenta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abonos as $abono)
            <tr>
                <td>{{ $abono->cantidad }}</td>
                <td>{{ $abono->fecha }}</td>
                <td>{{ $abono->id_regcuenta }}</td>
                <td>
                    <a href="{{ route('abonos.edit', $abono->id_abono) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('abonos.destroy', $abono->id_abono) }}" method="POST" style="display:inline">
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