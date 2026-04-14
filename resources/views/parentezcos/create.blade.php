@extends('layouts.app')

@section('content')
    <h2>Nuevo Parentezco</h2>

    <form action="{{ route('parentezcos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <a href="{{ route('parentezcos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection