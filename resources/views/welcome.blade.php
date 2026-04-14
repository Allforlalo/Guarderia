@extends('layouts.app')

@section('content')

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Centros</h5>
                    <p class="card-text">Gestión de centros de guardería</p>
                    <a href="{{ route('centros.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Personas</h5>
                    <p class="card-text">Gestión de personas registradas</p>
                    <a href="{{ route('personas.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Niños</h5>
                    <p class="card-text">Gestión de niños inscritos</p>
                    <a href="{{ route('ninios.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Familiares</h5>
                    <p class="card-text">Gestión de familiares</p>
                    <a href="{{ route('familiares.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Parentezcos</h5>
                    <p class="card-text">Tipos de parentezco</p>
                    <a href="{{ route('parentezcos.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Ingredientes</h5>
                    <p class="card-text">Gestión de ingredientes</p>
                    <a href="{{ route('ingredientes.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Platos</h5>
                    <p class="card-text">Gestión de platos</p>
                    <a href="{{ route('platos.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Menús</h5>
                    <p class="card-text">Gestión de menús</p>
                    <a href="{{ route('menus.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Alergias</h5>
                    <p class="card-text">Registro de alergias</p>
                    <a href="{{ route('alergias.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Bajas de Niños</h5>
                    <p class="card-text">Registro de bajas</p>
                    <a href="{{ route('BajasNinios.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Registro de Comidas</h5>
                    <p class="card-text">Control de comidas diarias</p>
                    <a href="{{ route('registro_comidas.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Registro de Cuentas</h5>
                    <p class="card-text">Gestión de cuentas</p>
                    <a href="{{ route('registro_cuentas.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Abonos</h5>
                    <p class="card-text">Gestión de abonos y pagos</p>
                    <a href="{{ route('abonos.index') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

    </div>
@endsection