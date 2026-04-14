@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Registro de Cuentas</h2>
        <a href="{{ route('registro_cuentas.create') }}" class="btn btn-primary">Nueva Cuenta</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th>Cuenta</th>
                <th>Familiar</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registroCuentas as $registroCuenta)
            <tr>
                <td>{{ $registroCuenta->cuenta }}</td>
                <td>{{ $registroCuenta->id_fam }}</td>
                <td>
                    <a href="{{ route('registro_cuentas.edit', $registroCuenta->id_regcuenta) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('registro_cuentas.destroy', $registroCuenta->id_regcuenta) }}" method="POST" style="display:inline">
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