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
                    <h2 style="width: 70%;float: left;">Propiedades </h2>

                    <a href="{{ route('propiedades.create') }}" class="btn btn-verde" style="float: right;">
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
                        <table id="only-bodytable" class="table table-striped">
                            <thead>
                                <tr>
                                <th>Movie Title</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <th>Gross</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>Star Wars</td>
                                <td>Adventure, Sci-fi</td>
                                <td>1977</td>
                                <td>$460,935,665</td>
                            </tr>
                            <tr>
                                <td>Howard The Duck</td>
                                <td>"Comedy"</td>
                                <td>1986</td>
                                <td>$16,295,774</td>
                            </tr>
                            <tr>
                                <td>American Graffiti</td>
                                <td>Comedy, Drama</td>
                                <td>1973</td>
                                <td>$115,000,000</td>
                            </tr>
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