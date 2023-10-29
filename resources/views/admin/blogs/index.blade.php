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
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Blogs - Aquí puedes ver tus blogs </h2>

                    <a href="{{ route('blog.create') }}" class="btn btn-verde" style="float: right;">
                        <span> <i class="fa fa-plus-square"></i> Registrar</span></a>
                </div>

                <div class="body">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    <div class="table-responsive" style="padding-top:20px;">
                        <table id="basic-datatable" class="table table-striped  nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $i => $blog)
                                <tr>
                                <td>{{$i + 1 }}</td>
                                    <td>{{ $blog->titulo }}</td>
                                    <td><img src="{{asset('./img_blogs/'.$blog->primera_imagen)}}" width="60" height="60"></td>
                                    
                                    <td class="text-nowrap">
                                        <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-info"
                                           title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </a>&nbsp;
                                        <a href="{{route('blog.delete', $blog->id)}}" class="btn btn-danger js-sweetalert button"
                                           data-id="{{ $blog->id }}"
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