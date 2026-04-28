@extends('layouts.template')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Dashboard</h2>
                <p class="text-muted mb-0">Bienvenido al sistema de gestión de guardería</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100 centro-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="fw-bold mb-1">Centros</h5>
                                <span class="badge bg-primary-subtle text-primary">Activos</span>
                            </div>
                            <div class="centro-icon">🏫</div>
                        </div>
                        <a href="{{ url('/centros') }}" class="btn btn-primary btn-sm w-100">Ver centros</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100 centro-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="fw-bold mb-1">Niños</h5>
                                <span class="badge bg-success-subtle text-success">Inscritos</span>
                            </div>
                            <div class="centro-icon">🧒</div>
                        </div>
                        <a href="{{ url('/ninios') }}" class="btn btn-success btn-sm w-100">Ver niños</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm h-100 centro-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="fw-bold mb-1">Familiares</h5>
                                <span class="badge bg-warning-subtle text-warning">Registrados</span>
                            </div>
                            <div class="centro-icon">👨‍👩‍👧</div>
                        </div>
                        <a href="{{ url('/familiares') }}" class="btn btn-warning btn-sm w-100">Ver familiares</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection