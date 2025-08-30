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
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Employee Rating</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('employee-ratings.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body bg-white">
                    
                    <div class="form-group mb-2 mb20">
                        <strong>Service Employee:</strong>
                        {{ $employeeRating->service_employee }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Counter Employee:</strong>
                        {{ $employeeRating->counter_employee }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Customer:</strong>
                        {{ $employeeRating->customer }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Service Rating:</strong>
                        {{ $employeeRating->service_rating }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Counter Rating:</strong>
                        {{ $employeeRating->counter_rating }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Service Feedback:</strong>
                        {{ $employeeRating->service_feedback }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Counter Feedback:</strong>
                        {{ $employeeRating->counter_feedback }}
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
