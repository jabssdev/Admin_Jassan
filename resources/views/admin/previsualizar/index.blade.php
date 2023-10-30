@extends('admin.layouts.permisos')
@section('styles')
    <style>
        .w-full{
            width:100%;
        }
        .w-380{
            width: 380px;
        }
        .h-full{
            height:800px;
        }
        iframe{
            display:block;
        }
        .oculto{
            display:none;
        }
    </style>
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
                    <li class="breadcrumb-item active">Prisualizar</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                <div class="row" align="center">
                    <div class="col-5">

                    </div>
                    <div class="col-1">
                        <a href="javascript:void(0);" onclick="Movil()" class="btn btn-outline-dark">
                            <span> Movil</span>
                        </a>
                    </div>
                    <div class="col-1 ">
                        <a href="javascript:void(0);" onclick="Web()" class="btn btn-outline-dark">
                            <span> Web</span>
                        </a>
                    </div>
                    <div class="col-5">

                    </div>
                </div>
                    
                </div>

                <div class="body" align="center">
                    <!-- WEB -->
                    <iframe id="fram-web" title="Inline Frame Example" src="{{ route('web.index') }}" class="w-full h-full"></iframe>
                    <!-- MOVIL -->
                    <iframe id="frame-movil" title="Inline Frame Example" src="{{ route('web.index') }}" class="w-380 h-full oculto" ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    function Web() {
        
        $('#frame-movil').addClass("oculto");
        $('#fram-web').removeClass("oculto");
        
    }
    function Movil() {
        
        $('#fram-web').addClass("oculto");
        $('#frame-movil').removeClass("oculto");
        
    }
</script>
@endsection