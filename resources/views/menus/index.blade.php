@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Menús</h2>
        <a href="{{ route('menus.create') }}" class="btn btn-primary">Nuevo Menú</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Plato</th>
                <th>Ingrediente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->nombre_plato }}</td>
                <td>{{ $menu->nombre_ingrediente }}</td>
                <td>
                    <a href="{{ route('menus.edit', $menu->id_menu) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('menus.destroy', $menu->id_menu) }}" method="POST" style="display:inline">
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