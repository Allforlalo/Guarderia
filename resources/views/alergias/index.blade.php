@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Alergias</h2>
        <a href="{{ route('alergias.create') }}" class="btn btn-primary">Nueva Alergia</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Niño</th>
                <th>Ingrediente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alergias as $alergia)
            <tr>
                <td>{{ $alergia->id_ninio }}</td>
                <td>{{ $alergia->id_ingrediente }}</td>
                <td>
                    <a href="{{ route('alergias.edit', $alergia->id_alergia) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('alergias.destroy', $alergia->id_alergia) }}" method="POST" style="display:inline">
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