@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Trabajadores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $usuario->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $usuario->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $usuario->profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $usuario->contacto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
