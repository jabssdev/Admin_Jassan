@extends('admin.layouts.permisos')
@section('styles')
    <style>
    .input-orden{
        width:50px;
        margin:5px;
    }
    </style>
    <link href="{{asset('admin/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" id="botonmenu" class="btn btn-xs btn-link btn-toggle-fullwidth"><i id="otroboton"
                                class="fa fa-arrow-left"></i></a> Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Testimonios</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Testimonios </h2>

                    <a href="{{ route('testimonio.create') }}" class="btn btn-verde" style="float: right;">
                        <span> <i class="fa fa-plus-square"></i> Registrar</span></a>
                </div>

                <div class="body">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    <div class="table-responsive">
                        <table id="basic-datatable" class="table table-striped  nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Testimonio</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonios as $i => $testimonio)
                                <tr>
                                <td>{{$i + 1 }}</td>
                                    <td>{{ $testimonio->titulo }}</td>
                                    <td>{{ $testimonio->autor }}</td>
                                    <td style="max-width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{!! $testimonio->testimonio !!}</td>
                                    <td><img src="{{asset('./img_testimonios/'.$testimonio->imagen)}}" width="60" height="60"></td>
                                    
                                    <td class="text-nowrap">
                                        <a href="{{route('testimonio.edit',$testimonio->id)}}" class="btn btn-info"
                                           title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </a>&nbsp;
                                        <a href="{{route('testimonio.delete', $testimonio->id)}}" class="btn btn-danger js-sweetalert button"
                                           data-id="{{ $testimonio->id }}"
                                           title="Eliminar">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    
@endsection