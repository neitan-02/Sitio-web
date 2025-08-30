@extends('adminlte::page')

@section('title', 'Testimonios')

@section('content_header')
    <h1>Tabla de Testimonios</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Testimonio') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('testimonios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Create New') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Acciones</th>
                                    <th>Nombre</th>
                                    <th>No</th>
                                    <th>Titulo</th>
                                    <th>Contenido</th>
                                    <th>Calificacion</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Imagen</th>
                                    <th>Video</th>
                                    <th>Producto Servicio</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonios as $testimonio)
                                    <tr>
                                        <td>
                                            <form action="{{ route('testimonios.destroy',$testimonio->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('testimonios.show',$testimonio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('testimonios.edit',$testimonio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                        <td>{{ $testimonio->nombre }}</td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $testimonio->titulo }}</td>
                                        <td>{{ $testimonio->contenido }}</td>
                                        <td>{{ $testimonio->calificacion }}</td>
                                        <td>{{ $testimonio->fecha }}</td>
                                        <td>{{ $testimonio->estado }}</td>
                                        <td>{{ $testimonio->imagen }}</td>
                                        <td>{{ $testimonio->video }}</td>
                                        <td>{{ $testimonio->producto_servicio }}</td>

                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $testimonios->links() !!}
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