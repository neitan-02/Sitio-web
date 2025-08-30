
@extends('adminlte::page')

@section('title', 'Mostrar registro')

@section('content_header')
    <h1>Mostrar registro</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-flex">
                    <div class="header-title">
                        <span class="card-title">{{ __('Mostrar') }} Servicio</span>
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="form-group mb-2">
                        <strong>Nombre:</strong>
                        {{ $service->name }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Descripción:</strong>
                        {{ $service->description }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Estado:</strong>
                        {{ $service->status }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Foto:</strong>
                        {{ $service->photo }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Porcentaje de descuento:</strong>
                        {{ $service->discount_percentage }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Inicio de promoción:</strong>
                        {{ $service->date_one }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Fin de promoción:</strong>
                        {{ $service->date_two }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Razón:</strong>
                        {{ $service->reason }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Funcion:</strong>
                        {{ $service->function }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Complemento:</strong>
                        {{ $service->complement }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Posibles efectos:</strong>
                        {{ $service->effects }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Proceso:</strong>
                        {{ $service->procces }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Objetivo:</strong>
                        {{ $service->goal }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Duración:</strong>
                        {{ $service->duration }}
                    </div>
                    <div class="card-header header-flex">
                        <div class="header-action">
                            <a class="btn btn-primary btn-sm" href="{{ route('services.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    {{-- Incluir estilos de DataTables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
     {{-- Add here extra stylesheets --}}
     <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
    
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    {{-- Incluir scripts de DataTables y otros --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    
    {{-- Script de DataTables --}}
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@stop
