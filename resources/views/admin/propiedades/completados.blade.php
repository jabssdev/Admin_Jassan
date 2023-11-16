@extends('admin.layouts.permisos')
@section('styles')
    <style>
    .input-orden{
        width:50px;
        margin:5px;
    }
    </style>
    <link rel="stylesheet" href="{{asset('admin/vendor/table-dragger/table-dragger.min.css')}}">
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
                    <li class="breadcrumb-item active">Propiedades</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Propiedades Completados</h2>

                    
                </div>

                <div class="body">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    <div class="table-responsive" style="padding-top:20px;">
                        <table id="only-bodytable" class="table table-striped">
                            <thead>
                                <tr>
                                <th>Nombre</th>
                                <th>T.Propiedad</th>
                                <th>T.Operación</th>
                                <th>Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($propiedades as $item )
                                @if ($item->destacado=='SI')
                                    <tr style="background-color:#50d38a">
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->tipo_casa}}</td>
                                        <td>{{$item->tipo_operacion}}</td>
                                        <td>
                                            
                                            <a href="{{route('propiedades.delete', $item->id)}}" class="btn btn-danger js-sweetalert button"
                                            data-id="{{ $item->id }}"
                                            title="Eliminar">
                                                <i class="fa fa-trash-o"></i>
                                            </a>&nbsp;
                                            
                                            <a href="{{route('propiedades.activar',$item->id)}}" class="btn btn-warning"
                                            title="Activar">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->tipo_casa}}</td>
                                        <td>{{$item->tipo_operacion}}</td>
                                        <td>
                                            
                                            <a href="{{route('propiedades.delete', $item->id)}}" class="btn btn-danger js-sweetalert button"
                                            data-id="{{ $item->id }}"
                                            title="Eliminar">
                                                <i class="fa fa-trash-o"></i>
                                            </a>&nbsp;
                                            
                                            <a href="{{route('propiedades.activar',$item->id)}}" class="btn btn-warning"
                                            title="Activar">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                
                            @endforeach
                            
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('admin/vendor/table-dragger/table-dragger.min.js')}}"></script>
<script>
    

    // Only Body
    tableDragger(document.querySelector("#only-bodytable"), { mode: "row", onlyBody: true });
</script>
@endsection