@extends('layouts.app')

@section('content')
    <h2>Editar Parentezco</h2>

    <form action="{{ route('parentezcos.update', $parentezco->id_parentezco) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $parentezco->nombre }}" required>
        </div>
        <a href="{{ route('parentezcos.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection