@extends('layouts.app')

@section('content')
    <h2>Nueva Cuenta</h2>

    <form action="{{ route('registro_cuentas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Cuenta</label>
            <input type="text" name="cuenta" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Familiar</label>
            <select name="id_fam" class="form-select" required>
                @foreach($familiares as $familiar)
                    <option value="{{ $familiar->id_fam }}">{{ $familiar->DNI }}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('registro_cuentas.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection