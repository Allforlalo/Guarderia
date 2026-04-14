@extends('layouts.app')

@section('content')
    <h2 class="text-white mb-3">Nuevo Centro</h2>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <form action="{{ route('centros.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nom" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Costo</label>
                    <input type="number" step="0.01" name="costo" class="form-control" required>
                </div>
                <a href="{{ route('centros.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection