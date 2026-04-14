@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Parentezcos</h2>
        <a href="{{ route('parentezcos.create') }}" class="btn btn-primary">Nuevo Parentezco</a>
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
            @foreach($parentezcos as $parentezco)
            <tr>
                <td>{{ $parentezco->nombre }}</td>
                <td>
                    <a href="{{ route('parentezcos.edit', $parentezco->id_parentezco) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('parentezcos.destroy', $parentezco->id_parentezco) }}" method="POST" style="display:inline">
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