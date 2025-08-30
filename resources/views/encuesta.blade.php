@extends('adminlte::page')

@section('title', 'Encuesta de Satisfacción')

@section('content_header')
    <h1>Encuesta de Satisfacción</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Por favor, danos tu opinión</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="service_employee_id">Servicio id:</label>
                        <select class="form-control" id="service_employee_id" name="service_employee_id">
                            <option value="1">1 - Pedro</option>
                            <option value="2">2 - Maria</option>
                            <option value="3">3 - Alberto</option>
                            <option value="4">4 - Juan</option>
                            <option value="5">5 - Ana</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="counter_employee_id">Servicio id:</label>
                        <select class="form-control" id="counter_employee_id" name="counter_employee_id">
                            <option value="1">1 - Pedro</option>
                            <option value="2">2 - Maria</option>
                            <option value="3">3 - Alberto</option>
                            <option value="4">4 - Juan</option>
                            <option value="5">5 - Ana</option>
                        </select>
                    </div>

                    <form action="{{ route('employee-ratings.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="service_rating">Calificación del servicio:</label>
                            <select class="form-control" id="service_rating" name="service_rating">
                                <option value="1">1 - Muy insatisfecho</option>
                                <option value="2">2 - Insatisfecho</option>
                                <option value="3">3 - Neutral</option>
                                <option value="4">4 - Satisfecho</option>
                                <option value="5">5 - Muy satisfecho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="counter_rating">Calificación del empleado de mostrador:</label>
                            <select class="form-control" id="counter_rating" name="counter_rating">
                                <option value="1">1 - Muy insatisfecho</option>
                                <option value="2">2 - Insatisfecho</option>
                                <option value="3">3 - Neutral</option>
                                <option value="4">4 - Satisfecho</option>
                                <option value="5">5 - Muy satisfecho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service_feedback">Comentarios adicionales sobre el servicio:</label>
                            <textarea class="form-control" id="service_feedback" name="service_feedback" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="counter_feedback">Comentarios adicionales sobre el empleado de mostrador:</label>
                            <textarea class="form-control" id="counter_feedback" name="counter_feedback" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="customer_id">CUrtomer id:</label>
                            <select class="form-control" id="customer_id" name="customer_id">
                                <option value="1">1 - Pedro</option>
                                <option value="2">2 - Maria</option>
                                <option value="3">3 - Alberto</option>
                                <option value="4">4 - Juan</option>
                                <option value="5">5 - Ana</option>
                            </select>
                        </div>
                        Service Employee Id
                        <button type="submit" class="btn btn-primary">Enviar Encuesta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Incluir estilos de SweetAlert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8">

    {{-- Estilos adicionales de AdminLTE y otros --}}
    <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
@stop

@section('js')
    {{-- Incluir script de SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    {{-- Scripts adicionales de jQuery, Bootstrap, OverlayScrollbars y AdminLTE --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

    {{-- Script de DataTables (si es necesario) --}}
    {{-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}

    {{-- Script para mostrar alerta después de enviar la encuesta --}}
    @if(session('success'))
        <script>
            Swal.fire({
                title: '¡Encuesta enviada!',
                text: '{{ session('success') }}',
                type: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@stop
