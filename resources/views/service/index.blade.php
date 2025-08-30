@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Tabla de servicios</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Service') }}
                        </span>
                        @can('services.create')
                            <div class="float-right">
                                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                                </a>
                            </div>
                        @endcan
                        
                    </div>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="services-table">
                            <thead class="thead">
                                <tr>
                                    <th>Acciones</th>
                                    <th>Nombre</th>
                                    <th>No</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Foto</th>
                                    <th>Porcentaje Descuento</th>
                                    <th>Inicio Dinámica</th>
                                    <th>FIn Dinámica</th>
                                    <th>Razón</th>
                                    <th>Función</th>
                                    <th>Complementos</th>
                                    <th>Efectos</th>
                                    <th>Proceso</th>
                                    <th>Objetivo</th>
                                    <th>Duración</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr><td>
                                        @can('services.create')

                                        <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                            <a class="btn btn-sm btn-success" href="{{ route('services.edit',$service->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                        @endcan
                                        @can('services.index')
                                            <a class="btn btn-sm btn-primary " href="{{ route('services.show',$service->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            @endcan
                                        
                                    </td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $service->status }}</td>
                                        <td>{{ $service->photo }}</td>
                                        <td>{{ $service->discount_percentage }}</td>
                                        <td>{{ $service->date_one }}</td>
                                        <td>{{ $service->date_two }}</td>
                                        <td>{{ $service->reason }}</td>
                                        <td>{{ $service->function }}</td>
                                        <td>{{ $service->complement }}</td>
                                        <td>{{ $service->effects }}</td>
                                        <td>{{ $service->procces }}</td>
                                        <td>{{ $service->goal }}</td>
                                        <td>{{ $service->duration }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $services->links() !!}
        </div>
    </div>
</div>
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
    <link rel="stylesheet" href="{{ secure_asset('css/styles-crud.css') }}">
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
    
    {{-- Script para inicializar DataTables y SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        $(document).ready(function() {
            $('#services-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                    "info": "_START_ / _END_ de un total de _TOTAL_",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron resultados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": activar para ordenar la columna de manera descendente"
                    }
                }
            });
            
            @if ($message = Session::get('success'))
                Swal.fire({
                    title: '¡Éxito!',
                    text: '{{ $message }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
@stop
