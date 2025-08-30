@extends('layouts.app')

@section('template_title')
    {{ $community->name ?? __('Show') . " " . __('Community') }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles-show.css') }}">
    
@endsection




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
                        <span class="card-title">{{ __('Mostrar') }} Servicio Comunitario</span>
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="form-group mb-2">
                        <strong>Beneficiario:</strong>
                        {{ $community->beneficiary }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Razón:</strong>
                        {{ $community->reason }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Foto:</strong>
                        {{ $community->photo }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Inicio de Dinámica:</strong>
                        {{ $community->date_one }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Final de Dinámica:</strong>
                        {{ $community->date_two }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Contribución:</strong>
                        {{ $community->gift }}
                    </div>
                    <div class="card-header header-flex">
                        <div class="header-action">
                            <a class="btn btn-primary btn-sm" href="{{ route('communities.index') }}"> {{ __('Regresar') }}</a>
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