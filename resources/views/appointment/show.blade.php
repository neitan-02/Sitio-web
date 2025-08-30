@extends('adminlte::page')

@section('title', 'Mostrar Cita')

@section('content_header')
    <h1>Mostrar Cita</h1>
@stop


@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Appointment</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('appointments.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body bg-white">
                    
                    <div class="form-group mb-2 mb20">
                        <strong>First Name:</strong>
                        {{ $appointment->first_name }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Last Name Father:</strong>
                        {{ $appointment->last_name_father }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Last Name Mother:</strong>
                        {{ $appointment->last_name_mother }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Address:</strong>
                        {{ $appointment->address }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Phone:</strong>
                        {{ $appointment->phone }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Family Phone:</strong>
                        {{ $appointment->family_phone }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Consultation Reason:</strong>
                        {{ $appointment->consultation_reason }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Age:</strong>
                        {{ $appointment->age }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Consulting Room Id:</strong>
                        {{ $appointment->consulting_room_id }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Service:</strong>
                        {{ $appointment->service }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Doctor:</strong>
                        {{ $appointment->doctor }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Appointment Date:</strong>
                        {{ $appointment->appointment_date }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Appointment Time:</strong>
                        {{ $appointment->appointment_time }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Sex:</strong>
                        {{ $appointment->sex }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Pathology:</strong>
                        {{ $appointment->pathology }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Invoice:</strong>
                        {{ $appointment->invoice }}
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

