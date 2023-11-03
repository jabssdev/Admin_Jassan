@extends('admin.layouts.permisos')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>


    <style>
    
    .input-orden{
        width:50px;
        margin:5px;
    }
    .accordion {
    width: 100%;
    }

    .accordion-item {
        margin-bottom: 10px;
    }

    .accordion-header {
        padding: 10px;
        cursor: pointer;
        font-weight: 600;
        font-size: 1rem;
    }

    .accordion-content {
        padding: 10px;
        display: none;
    }
    .modal-dialog {
        position: absolute;
        left: 35%;
        top: 30%;
        transform: translate(-10%, -10%);
        
    }
    .cuadro-input{
        padding:10px; 
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.5);
        border-radius: 10px !important;
        position: absolute; 
        width:250px;
        flex-direction: column;
        display: flex;
        z-index: 3; 
        top: 0px;
        right: 10px;
    }
    /* variables */
    :root {
        --bg-benefits: {{$tema->color_derechos}}; 
        --bg-menu: {{$tema->color_barra_superior}};
        --color-menu: {{$tema->color_texto_superior}};
        --fondo-general: {{$tema->color_fondo_general}};
        --color-general: {{$tema->color_texto_general}};
        --bg-principal: {{$tema->color_principal}};
        --bg-btn-principal: {{$tema->color_boton_primario}};
        --bg-btn-txt-principal: {{$tema->color_boton_texto_primario}};
        --bg-btn-sec: {{$tema->color_boton_sec}};
        --bg-btn-txt-sec: {{$tema->color_boton_texto_sec}};
        --bg-detalle-propiedad:{{$tema->color_fondo_d_prop}};
        --bg-d-texto-propiedad:{{$tema->color_texto_d_prop}};
        --bg-conoce-propiedad:{{$tema->color_fondo_conoce}};
        --bg-texto-conoce:{{$tema->color_texto_conoce}};
        --bg-videos-propiedad:{{$tema->color_fondo_videos}};
        --bg-texto-videos:{{$tema->color_texto_videos}};
        --bg-fotos-propiedad:{{$tema->color_fondo_fotos}};
        --bg-texto-fotos:{{$tema->color_texto_fotos}};
        --bg-detalles-propiedad:{{$tema->color_fondo_detalles}};
        --bg-texto-detalles:{{$tema->color_texto_detalles}};
        --bg-polga-propiedad:{{$tema->color_fondo_polga}};
        --bg-texto-polga:{{$tema->color_texto_polga}};
        --bg-destacadas-propiedad:{{$tema->color_fondo_destacadas}};
        --bg-texto-destacadas:{{$tema->color_texto_destacadas}};
        --bg-enventa-propiedad:{{$tema->color_fondo_enventa}};
        --bg-texto-enventa:{{$tema->color_texto_enventa}};
        --bg-alquiler-propiedad:{{$tema->color_fondo_alquiler}};
        --bg-texto-alquiler:{{$tema->color_texto_alquiler}};
        --bg-vendi-propiedad:{{$tema->color_fondo_vendi}};
        --bg-texto-vendi:{{$tema->color_texto_vendi}};
        --bg-experiencia-propiedad:{{$tema->color_fondo_experiencia}};
        --bg-texto-experiencia:{{$tema->color_texto_experiencia}};
        --bg-comparto-propiedad:{{$tema->color_fondo_comparto}};
        --bg-texto-comparto:{{$tema->color_texto_comparto}};
        --bg-solga-propiedad:{{$tema->color_fondo_solga}};
        --bg-texto-solga:{{$tema->color_texto_solga}};
        --bg-noticias-propiedad:{{$tema->color_fondo_noticias}};
        --bg-texto-noticias:{{$tema->color_texto_noticias}};
    }
    .bg-bgBenefits {
        background-color: var(--bg-benefits)
    }
    .bg-bgMenu {
        background-color: var(--bg-menu);
        color: var(--color-menu);
    }
    .bg-bgGeneral{
        background-color: var(--fondo-general);
        color: var(--color-general);
    }
    .bg-bgGeneral svg {
        fill: var(--color-general); 
    }
    .bg-bgPrincipal{
        background-color: var(--bg-principal);
    }
    .bg-btnPrincipal{
        background-color: var(--bg-btn-principal);
        color: var(--bg-btn-txt-principal);
    }
    .bg-btnSec{
        background-color: var(--bg-btn-sec);
        color: var(--bg-btn-txt-sec);
    }
    .bg-bgDpropiedad{
        background-color: var(--bg-detalle-propiedad);
        color: var(--bg-d-texto-propiedad);
    }
    .bg-bgConoce{
        background-color: var(--bg-conoce-propiedad);
        color: var(--bg-texto-conoce);
    }
    .bg-bgVideos{
        background-color: var(--bg-videos-propiedad);
        color: var(--bg-texto-videos);
    }
    .bg-bgFotos{
        background-color: var(--bg-fotos-propiedad);
        color: var(--bg-texto-fotos);
    }
    .bg-bgDetalles{
        background-color: var(--bg-detalles-propiedad);
        color: var(--bg-texto-detalles);
    }
    .bg-bgPolga{
        background-color: var(--bg-polga-propiedad);
        color: var(--bg-texto-polga);
    }
    .bg-bgDestacadas{
        background-color: var(--bg-destacadas-propiedad);
        color: var(--bg-texto-destacadas);
    }
    .bg-bgEnVenta{
        background-color: var(--bg-enventa-propiedad);
        color: var(--bg-texto-enventa);
    }
    .bg-bgAlquiler{
        background-color: var(--bg-alquiler-propiedad);
        color: var(--bg-texto-alquiler);
    }
    .bg-bgVendi{
        background-color: var(--bg-vendi-propiedad);
        color: var(--bg-texto-vendi);
    }
    .bg-bgExperiencia{
        background-color: var(--bg-experiencia-propiedad);
        color: var(--bg-texto-experiencia);
    }
    .bg-bgComparto{
        background-color: var(--bg-comparto-propiedad);
        color: var(--bg-texto-comparto);
    }
    .bg-bgSolga{
        background-color: var(--bg-solga-propiedad);
        color: var(--bg-texto-solga);
    }
    .bg-bgNoticias{
        background-color: var(--bg-noticias-propiedad);
        color: var(--bg-texto-noticias);
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
                    <li class="breadcrumb-item active">Tema</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Tema - Aquí puedes personalizar tu web </h2>

                    
                </div>

                <div class="body">
                @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('tema.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Módulos página principal *
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_destacadas" name="color_fondo_destacadas" value="{{$tema->color_fondo_destacadas}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_destacadas" name="color_texto_destacadas" value="{{$tema->color_texto_destacadas}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgDestacadas"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 90px;padding-top: 74px;position: relative; ">
                                                <h4 style="font-weight: 700;font-size: 2.5rem;line-height: 3.047rem;text-align: center;display: block;">DESTACADAS</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;text-align: center;display: block;margin-bottom: 2.25rem;">Conoce nuestros mejores espacios</p>
                                                <div style="display: flex;align-items: center;">
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 250px;width: 100%;height: 300px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 643px;width: 100%;height: 376px;display: flex;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 250px;width: 100%;height: 300px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_enventa" name="color_fondo_enventa" value="{{$tema->color_fondo_enventa}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_enventa" name="color_texto_enventa" value="{{$tema->color_texto_enventa}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgEnVenta"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 90px;padding-top: 74px;position: relative; ">
                                                <h4 style="font-weight: 700;font-size: 2.5rem;line-height: 3.047rem;text-align: center;display: block;">EN VENTA</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;text-align: center;display: block;margin-bottom: 2.25rem;">Aquí aparecerá tu propiedad</p>
                                                
                                                <div style="justify-content: space-between;gap: 10px;display: flex;">
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_alquiler" name="color_fondo_alquiler" value="{{$tema->color_fondo_alquiler}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_alquiler" name="color_texto_alquiler" value="{{$tema->color_texto_alquiler}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgAlquiler"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 90px;padding-top: 74px;position: relative; ">
                                                <h4 style="font-weight: 700;font-size: 2.5rem;line-height: 3.047rem;text-align: center;display: block;">EN ALQUILER</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;text-align: center;display: block;margin-bottom: 2.25rem;">Al mejor precio y en el mejor lugar</p>
                                                
                                                <div style="justify-content: space-between;gap: 10px;display: flex;">
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;width: 100%;height: 500px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Ver propiedad</button>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_vendi" name="color_fondo_vendi" value="{{$tema->color_fondo_vendi}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_vendi" name="color_texto_vendi" value="{{$tema->color_texto_vendi}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgVendi"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 90px;padding-top: 74px;position: relative; ">
                                                <h4 style="font-weight: 700;font-size: 2.5rem;line-height: 3.047rem;text-align: center;display: block;">LO QUE YA VENDÍ O ALQUILÉ</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;text-align: center;display: block;margin-bottom: 2.25rem;">En el menor tiempo posible</p>
                                                
                                                <div style="justify-content: center;display: flex;">
                                                    <div style="height: 488px;background-color: rgba(0,0,0,.2);border-bottom-left-radius: 10px;border-top-left-radius: 10px;max-width: 478px;width: 100%;">

                                                    </div>
                                                    <div style="height: 488px;display: block;background-color: rgba(0,0,0,.4);border-bottom-right-radius: 10px;border-top-right-radius: 10px;max-width: 478px;width: 100%;">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_experiencia" name="color_fondo_experiencia" value="{{$tema->color_fondo_experiencia}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_experiencia" name="color_texto_experiencia" value="{{$tema->color_texto_experiencia}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgExperiencia"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 62px;padding-top: 45px;position: relative; ">
                                                <h4 style="font-weight: 600;font-size: 1.875rem;line-height: 2.285rem;display: block;">Se parte de la experiencia</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;display: block;margin-bottom: 2.25rem;">Lo que opinan mis clientes sobre mi trabajo</p>
                                                
                                                <div style="column-gap: 100px;gap: 2.5rem;justify-content: center;flex-wrap: wrap;display: flex;">
                                                    <div style="--tw-bg-opacity: 0.9;background-color:#fff;border-radius: 10px;max-width: 400px;width: 100%;height: 273px;">

                                                    </div>
                                                    <div style="--tw-bg-opacity: 0.9;background-color:#fff;border-radius: 10px;max-width: 400px;width: 100%;height: 273px;margin-top: 3.75rem;">

                                                    </div>
                                                    <div style="--tw-bg-opacity: 0.9;background-color:#fff;border-radius: 10px;max-width: 400px;width: 100%;height: 273px;">

                                                    </div>
                                                    <div style="--tw-bg-opacity: 0.9;background-color:#fff;border-radius: 10px;max-width: 400px;width: 100%;height: 273px;margin-top: 3.75rem;">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_comparto" name="color_fondo_comparto" value="{{$tema->color_fondo_comparto}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_comparto" name="color_texto_comparto" value="{{$tema->color_texto_comparto}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgComparto"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 62px;padding-top: 3.75rem;position: relative; ">

                                                <div style="background: rgb(255, 237, 229); width: 100%;height: 300px;left: 0;top: 0;position: absolute;">

                                                </div>
                                                <h4 style="font-size: 1.875rem;line-height: 2.285rem;text-align: center;display: block;z-index: 2;position: relative;">Te comparto</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;text-align: center;display: block;margin-bottom: 3rem;z-index: 2;position: relative;">mi conocimiento y experiencia</p>
                                                
                                                <div style="flex-wrap: wrap; max-width: 967px;display: flex;margin-left: auto;margin-right: auto;z-index: 2;position: relative;">
                                                    <div style="height: 478px;background-color: rgba(0,0,0,.4);border-top-right-radius: 10px;border-top-left-radius: 10px;width: 100%;">

                                                    </div>
                                                    <div style="border-bottom-left-radius: 10px;width: 50%;height: 282px;background-color: rgba(0,0,0,.5);">

                                                    </div>
                                                    <div style="border-bottom-left-radius: 0;width: 50%;height: 282px;background-color: rgba(0,0,0,.6);border-bottom-right-radius: 10px;">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_solga" name="color_fondo_solga" value="{{$tema->color_fondo_solga}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_solga" name="color_texto_solga" value="{{$tema->color_texto_solga}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgSolga"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 68px;padding-top: 4rem;gap: 2.5rem;flex-direction: row;justify-content: space-between;align-items: center;display: flex;position: relative; ">
                                                <div style="max-width: 620px;width: 100%;">
                                                    <div style="background-color: rgba(0,0,0,.3);border-radius: 10px;width: 100%;height: 364px;margin-bottom: 30px;">

                                                    </div>
                                                    <h4 style="font-weight: 600;font-size: 1.875rem;line-height: 2.285rem;display: block;">Soy Olga Rey</h4>
                                                    <p style="font-size: .938rem;line-height: 1.143rem;display: block;margin-top: 0.5rem;">Te daré una asesoría, escríbeme ahora.</p>
                                                    <p style="font-size: .938rem;line-height: 1.143rem;display: block;margin-top: 18px;color: #1e1e1e !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cumque quas deleniti optio consequuntur, recusandae excepturi fugiat est odit corrupti repudiandae ipsam quod quia deserunt fuga iusto beatae libero sunt?</p>
                                                </div>
                                                <div style="width: 395px;height: 466px;background-color: rgba(0,0,0,.3);border-radius: 10px;">

                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:0px;">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_noticias" name="color_fondo_noticias" value="{{$tema->color_fondo_noticias}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_noticias" name="color_texto_noticias" value="{{$tema->color_texto_noticias}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgNoticias"   style="padding-left: 108px;padding-right: 108px;padding-bottom: 90px;padding-top: 74px;position: relative; ">
                                                <h4 style="font-weight: 600;font-size: 1.875rem;line-height: 2.285rem;display: block;">Noticias y novedades</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;display: block;margin-bottom: 2.25rem;">Lo que debes saber del sector y propiedades</p>
                                                
                                                <div style="justify-content: space-between;gap: 10px;display: flex;">
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 376px;width: 100%;height: 390px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Leer más</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 376px;width: 100%;height: 390px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Leer más</button>
                                                    </div>
                                                    <div style="display: flex;padding: 1.75rem;background-color: rgba(0,0,0,.4);border-radius: 10px;align-items: flex-end;max-width: 376px;width: 100%;height: 390px;">
                                                        <button style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);font-weight: 600;font-size: .75rem;line-height: .952rem;border-style: none;border-width: 1px;border-radius: 10px;width: 100%;height: 3rem;    text-transform: none;">Leer más</button>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Módulos detalle de la propiedad *
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_d_prop" name="color_fondo_d_prop" value="{{$tema->color_fondo_d_prop}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_d_prop" name="color_texto_d_prop" value="{{$tema->color_texto_d_prop}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgDpropiedad"  align="center" style="padding-bottom:10px;padding-left: 108px; padding-right: 108px;">
                                                
                                                <h4 style="padding-top: 50px;">Los alrededores</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;" >Lo más cercano a esta propiedad</p>   
                                                <div class="" style="background-color: rgba(0,0,0,.4);height: 620px; border-radius:10px;position: relative; z-index: 2;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="margin-top: -140px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_conoce" name="color_fondo_conoce" value="{{$tema->color_fondo_conoce}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_conoce" name="color_texto_conoce" value="{{$tema->color_texto_conoce}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgConoce"  align="center" style="padding-bottom:10px;padding-left: 108px; padding-right: 108px;margin-top: -140px;">
                                                
                                                <h4 style="padding-top: 140px;">Conoce esta propiedad</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;" >Encuentra el mejor espacio para tí</p>   
                                                <div style="flex-direction: row;gap: 1.25rem;justify-content: center;display: flex;z-index: 2;position: relative;padding-bottom: 2.5rem;padding-top: 10rem;">
                                                    <div style="height: 400px;border-radius: 10px;width: 100%;background:#fff;">

                                                    </div>
                                                    <div style="background: rgb(77, 5, 5);border-color: rgb(77, 5, 5);min-width: 304px;border-radius: 10px;height: 133px;">

                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="margin-top: -140px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_videos" name="color_fondo_videos" value="{{$tema->color_fondo_videos}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_videos" name="color_texto_videos" value="{{$tema->color_texto_videos}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgVideos"  align="center" style="padding-bottom:10px;padding-left: 108px; padding-right: 108px;margin-top: -140px;">
                                                
                                                <h4 style="padding-top: 140px;">Videos</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;" >Visita los diversos espacios de esta propiedad</p>   
                                                
                                                    
                                                <button class="btn" style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);width: 253px;height: 53px;border-radius:10px;margin-right: 20px;">Propiedad</button>
                                            
                                                <button class="btn" style="border-color: rgb(117, 15, 25);color: rgb(117, 15, 25);background-color: transparent;width: 253px;height: 53px;border-radius:10px;margin-right: 20px;">Áreas comunes</button>
                                            
                                                <button class="btn" style="border-color: rgb(117, 15, 25);color: rgb(117, 15, 25);background-color: transparent;width: 253px;height: 53px;border-radius:10px;">Alrededores</button>
                                                
                                                <div style="height: 595px;background-color: rgba(0,0,0,.4);border-radius: 10px;width: 100%;margin-top: 30px;margin-bottom: 1.25rem;">

                                                </div>
                                                <div style="border-radius: 10px;width: 100%;height: 292px;position: relative;background-color:#fff;z-index: 2;">

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="margin-top: -190px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_fotos" name="color_fondo_fotos" value="{{$tema->color_fondo_fotos}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_fotos" name="color_texto_fotos" value="{{$tema->color_texto_fotos}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgFotos"  align="center" style="padding-bottom:10px;padding-left: 108px; padding-right: 108px;margin-top: -190px;">
                                                
                                                <h4 style="padding-top: 210px;">Fotos</h4>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;" >Visita los diversos espacios de esta propiedad</p>   
                                                
                                                    
                                                <button class="btn" style="background: rgb(117, 15, 25);color: rgb(219, 152, 123);width: 253px;height: 53px;border-radius:10px;margin-right: 20px;">Propiedad</button>
                                            
                                                <button class="btn" style="border-color: rgb(117, 15, 25);color: rgb(117, 15, 25);background-color: transparent;width: 253px;height: 53px;border-radius:10px;margin-right: 20px;">Áreas comunes</button>
                                            
                                                <button class="btn" style="border-color: rgb(117, 15, 25);color: rgb(117, 15, 25);background-color: transparent;width: 253px;height: 53px;border-radius:10px;">Alrededores</button>
                                                
                                                <div style="height: 567px;background-color: rgba(0,0,0,.4);border-radius: 10px;width: 100%;margin-top: 30px;margin-bottom: 1.25rem;z-index: 2;position: relative;">

                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="margin-top: -190px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_detalles" name="color_fondo_detalles"  value="{{$tema->color_fondo_detalles}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_detalles" name="color_texto_detalles"  value="{{$tema->color_texto_detalles}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgDetalles"   style="padding-bottom:10px;padding-left: 108px; padding-right: 108px;margin-top: -190px;padding-top: 15rem;padding-bottom: 3.75rem;">
                                                
                                                
                                                <div style="padding: 1.75rem; border-width: 4px; border-radius: 10px; max-width: 1086px;margin-top: 0;margin-bottom: 0;margin-left: auto;margin-right: auto;box-sizing: border-box; border: 0 solid;border-color:#fff;--tw-border-opacity: 1; border: 4px solid #fff;">
                                                    <div style="padding: 2.25rem;height: 430px;box-sizing: border-box;border: 0 solid;background-color:#fff;--tw-bg-opacity: 1;">
                                                        <p style="font-size: 1.25rem; font-weight: 600;">Detalles de la propiedad</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="margin-top: -17px;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_polga" name="color_fondo_polga"  value="{{$tema->color_fondo_polga}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_polga" name="color_texto_polga"  value="{{$tema->color_texto_polga}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgPolga"   style="padding-bottom:10px;padding-left: 108px;margin-top: -17px; padding-right: 108px;padding-top: 58px;padding-bottom: 68px;flex-direction: row;display:flex;">
                                                
                                                
                                                <div style="width: 100%; max-width: 620px;">
                                                    <h4 style="font-weight: 600;font-size: 1.875rem;line-height: 2.285rem;">Olga Rey te presenta</h4>
                                                    <p style="font-size: 1.25rem;line-height: 1.523rem;margin-bottom: 2.25rem;">Su más reciente propiedad</p>
                                                    <div style="background-color: rgba(0,0,0,.3);border-radius: 10px;width: 90%;height: 364px;margin-bottom: 30px;">

                                                    </div>
                                                    
                                                </div>
                                                <div style="width: 395px;height: 466px;background-color: rgba(0,0,0,.3);border-radius: 10px;">

                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Configuración general *
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_fondo_general" name="color_fondo_general" value="{{$tema->color_fondo_general}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_general" name="color_texto_general" value="{{$tema->color_texto_general}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgGeneral"  align="center" style="padding-bottom:10px;">
                                                
                                                <h2 style="padding-top: 50px;">LOGO</h2>
                                                <p style="font-size: 1.25rem;line-height: 1.523rem;" >Agente Inmobiliario</p>   
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                                                <svg height="20" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg"><path d="M3.18605 4.376C4.39445 4.376 5.37405 3.3964 5.37405 2.188C5.37405 0.979601 4.39445 0 3.18605 0C1.97765 0 0.998047 0.979601 0.998047 2.188C0.998047 3.3964 1.97765 4.376 3.18605 4.376Z" ></path><path d="M7.44005 6.034V18.173H11.209V12.17C11.209 10.586 11.507 9.052 13.471 9.052C15.408 9.052 15.432 10.863 15.432 12.27V18.174H19.203V11.517C19.203 8.247 18.499 5.734 14.677 5.734C12.842 5.734 11.612 6.741 11.109 7.694H11.058V6.034H7.44005ZM1.29805 6.034H5.07305V18.173H1.29805V6.034Z" ></path></svg>
                                                <p style="margin-top:20px;font-size: .75rem;line-height: .952rem;">© 2022 Wi.ESTATE.com.pe Todos los derechos reservados por Winning & Co. SAC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" style="width:350px !important;">
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color principal :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_principal" name="color_principal" value="{{$tema->color_principal}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color fondo - botón primario :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_boton_primario" name="color_boton_primario" value="{{$tema->color_boton_primario}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto - botón primario :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_boton_texto_primario" name="color_boton_texto_primario" value="{{$tema->color_boton_texto_primario}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color fondo - botón secundario :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_boton_sec" name="color_boton_sec" value="{{$tema->color_boton_sec}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto - botón secundario :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_boton_texto_sec" name="color_boton_texto_sec" value="{{$tema->color_boton_texto_sec}}"  class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div  style="padding-left: 108px;padding-right: 108px; ">
                                                
                                                <h2 style="padding-top: 50px;color:#000;">Color principal</h2>
                                                <div class="bg-bgPrincipal" style="height:150px;border-radius:10px; width:300px;margin-bottom:30px;">

                                                </div>
                                                <div style="margin-bottom:30px;">
                                                    <button class="bg-btnPrincipal btn" style="border-radius:10px;width:350px;height:48px;">Botón primario</button>
                                                </div>
                                                <div style="margin-bottom:30px;">
                                                    <button class="bg-btnSec btn" style="border-radius:10px;width:350px;height:48px;">Botón secundario</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Configuración color barra superior *
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col-8">
                                                        Color fondo Menú :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_barra_superior" name="color_barra_superior" value="{{$tema->color_barra_superior}}" class="form-control" >
                                                    </div>
                                                    <div class="col-8">
                                                        Color texto menú :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_texto_superior" name="color_texto_superior" value="{{$tema->color_texto_superior}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgMenu" style="height: 80px;">
                                                
                                                <h5 style="padding-left: 30px; padding-top: 30px;">Menú</h5>
                                                    
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Configuración color sección derechos reservados *
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card cuadro-input" >
                                                <div class="row">
                                                    <div class="col">
                                                        Color fondo Menú :
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="color" id="color_derechos" name="color_derechos" value="{{$tema->color_derechos}}" class="form-control" >
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            
                                            <div class="bg-bgBenefits">
                                                <p class="p-2 text-center text-paragraph-04 md:text-paragraph-03 text-white">
                                                    © 2022 ciro.pe Todos los derechos reservados por Winning &amp; Co.
                                                    SAC
                                                    
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12" align="right" style="padding-bottom:20px;">
                
                <button type="submit" class="btn btn-primary">Guardar</button>
                
            </div>
        </div>
    </form>
    

    
        
@endsection
@section('scripts')
<script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>

<script>
    


    $(document).ready(function() {
        $('.accordion-header').click(function() {
            $(this).next('.accordion-content').slideToggle();
        });
       
    });
    document.getElementById('color_derechos').addEventListener('input', function () {
        var color_derechos = document.getElementById('color_derechos').value;
    
    
        document.documentElement.style.setProperty('--bg-benefits', color_derechos);
        
    }); 
    document.getElementById('color_barra_superior').addEventListener('input', function () {
        var color_barra_superior = document.getElementById('color_barra_superior').value;
    
    
        document.documentElement.style.setProperty('--bg-menu', color_barra_superior);
        
    });   
    document.getElementById('color_texto_superior').addEventListener('input', function () {
        var color_texto_superior = document.getElementById('color_texto_superior').value;
    
    
        document.documentElement.style.setProperty('--color-menu', color_texto_superior);
        
    });  
    document.getElementById('color_fondo_general').addEventListener('input', function () {
        var color_fondo_general = document.getElementById('color_fondo_general').value;
    
    
        document.documentElement.style.setProperty('--fondo-general', color_fondo_general);
        
    });  
    document.getElementById('color_texto_general').addEventListener('input', function () {
        var color_texto_general = document.getElementById('color_texto_general').value;
    
    
        document.documentElement.style.setProperty('--color-general', color_texto_general);
        
    });   
    document.getElementById('color_principal').addEventListener('input', function () {
        var color_principal = document.getElementById('color_principal').value;
    
    
        document.documentElement.style.setProperty('--bg-principal', color_principal);
        
    }); 
    document.getElementById('color_boton_primario').addEventListener('input', function () {
        var color_boton_primario = document.getElementById('color_boton_primario').value;
    
    
        document.documentElement.style.setProperty('--bg-btn-principal', color_boton_primario);
        
    }); 
    document.getElementById('color_boton_texto_primario').addEventListener('input', function () {
        var color_boton_texto_primario = document.getElementById('color_boton_texto_primario').value;
    
    
        document.documentElement.style.setProperty('--bg-btn-txt-principal', color_boton_texto_primario);
        
    });  
    document.getElementById('color_boton_sec').addEventListener('input', function () {
        var color_boton_sec = document.getElementById('color_boton_sec').value;
    
    
        document.documentElement.style.setProperty('--bg-btn-sec', color_boton_sec);
        
    }); 
    document.getElementById('color_boton_texto_sec').addEventListener('input', function () {
        var color_boton_texto_sec = document.getElementById('color_boton_texto_sec').value;
    
    
        document.documentElement.style.setProperty('--bg-btn-txt-sec', color_boton_texto_sec);
        
    });  
    document.getElementById('color_fondo_d_prop').addEventListener('input', function () {
        var color_fondo_d_prop = document.getElementById('color_fondo_d_prop').value;
    
    
        document.documentElement.style.setProperty('--bg-detalle-propiedad', color_fondo_d_prop);
        
    }); 
    document.getElementById('color_texto_d_prop').addEventListener('input', function () {
        var color_texto_d_prop = document.getElementById('color_texto_d_prop').value;
    
    
        document.documentElement.style.setProperty('--bg-d-texto-propiedad', color_texto_d_prop);
        
    });  
    document.getElementById('color_fondo_conoce').addEventListener('input', function () {
        var color_fondo_conoce = document.getElementById('color_fondo_conoce').value;
    
    
        document.documentElement.style.setProperty('--bg-conoce-propiedad', color_fondo_conoce);
        
    }); 
    document.getElementById('color_texto_conoce').addEventListener('input', function () {
        var color_texto_conoce = document.getElementById('color_texto_conoce').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-conoce', color_texto_conoce);
        
    });  
    document.getElementById('color_fondo_videos').addEventListener('input', function () {
        var color_fondo_videos = document.getElementById('color_fondo_videos').value;
    
    
        document.documentElement.style.setProperty('--bg-videos-propiedad', color_fondo_videos);
        
    }); 
    document.getElementById('color_texto_videos').addEventListener('input', function () {
        var color_texto_videos = document.getElementById('color_texto_videos').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-videos', color_texto_videos);
        
    });  
    document.getElementById('color_fondo_fotos').addEventListener('input', function () {
        var color_fondo_fotos = document.getElementById('color_fondo_fotos').value;
    
    
        document.documentElement.style.setProperty('--bg-fotos-propiedad', color_fondo_fotos);
        
    }); 
    document.getElementById('color_texto_fotos').addEventListener('input', function () {
        var color_texto_fotos = document.getElementById('color_texto_fotos').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-fotos', color_texto_fotos);
        
    }); 
    document.getElementById('color_fondo_detalles').addEventListener('input', function () {
        var color_fondo_detalles = document.getElementById('color_fondo_detalles').value;
    
    
        document.documentElement.style.setProperty('--bg-detalles-propiedad', color_fondo_detalles);
        
    }); 
    document.getElementById('color_texto_detalles').addEventListener('input', function () {
        var color_texto_detalles = document.getElementById('color_texto_detalles').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-detalles', color_texto_detalles);
        
    });  
    document.getElementById('color_fondo_polga').addEventListener('input', function () {
        var color_fondo_polga = document.getElementById('color_fondo_polga').value;
    
    
        document.documentElement.style.setProperty('--bg-polga-propiedad', color_fondo_polga);
        
    }); 
    document.getElementById('color_texto_polga').addEventListener('input', function () {
        var color_texto_polga = document.getElementById('color_texto_polga').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-polga', color_texto_polga);
        
    });  
    document.getElementById('color_fondo_destacadas').addEventListener('input', function () {
        var color_fondo_destacadas = document.getElementById('color_fondo_destacadas').value;
    
    
        document.documentElement.style.setProperty('--bg-destacadas-propiedad', color_fondo_destacadas);
        
    }); 
    document.getElementById('color_texto_destacadas').addEventListener('input', function () {
        var color_texto_destacadas = document.getElementById('color_texto_destacadas').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-destacadas', color_texto_destacadas);
        
    }); 
    document.getElementById('color_fondo_enventa').addEventListener('input', function () {
        var color_fondo_enventa = document.getElementById('color_fondo_enventa').value;
    
    
        document.documentElement.style.setProperty('--bg-enventa-propiedad', color_fondo_enventa);
        
    }); 
    document.getElementById('color_texto_enventa').addEventListener('input', function () {
        var color_texto_enventa = document.getElementById('color_texto_enventa').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-enventa', color_texto_enventa);
        
    }); 
    document.getElementById('color_fondo_alquiler').addEventListener('input', function () {
        var color_fondo_alquiler = document.getElementById('color_fondo_alquiler').value;
    
    
        document.documentElement.style.setProperty('--bg-alquiler-propiedad', color_fondo_alquiler);
        
    }); 
    document.getElementById('color_texto_alquiler').addEventListener('input', function () {
        var color_texto_alquiler = document.getElementById('color_texto_alquiler').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-alquiler', color_texto_alquiler);
        
    }); 
    document.getElementById('color_fondo_vendi').addEventListener('input', function () {
        var color_fondo_vendi = document.getElementById('color_fondo_vendi').value;
    
    
        document.documentElement.style.setProperty('--bg-vendi-propiedad', color_fondo_vendi);
        
    }); 
    document.getElementById('color_texto_vendi').addEventListener('input', function () {
        var color_texto_vendi = document.getElementById('color_texto_vendi').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-vendi', color_texto_vendi);
        
    });  
    document.getElementById('color_fondo_experiencia').addEventListener('input', function () {
        var color_fondo_experiencia = document.getElementById('color_fondo_experiencia').value;
    
    
        document.documentElement.style.setProperty('--bg-experiencia-propiedad', color_fondo_experiencia);
        
    }); 
    document.getElementById('color_texto_experiencia').addEventListener('input', function () {
        var color_texto_experiencia = document.getElementById('color_texto_experiencia').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-experiencia', color_texto_experiencia);
        
    }); 
    document.getElementById('color_fondo_comparto').addEventListener('input', function () {
        var color_fondo_comparto = document.getElementById('color_fondo_comparto').value;
    
    
        document.documentElement.style.setProperty('--bg-comparto-propiedad', color_fondo_comparto);
        
    }); 
    document.getElementById('color_texto_comparto').addEventListener('input', function () {
        var color_texto_comparto = document.getElementById('color_texto_comparto').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-comparto', color_texto_comparto);
        
    }); 
    document.getElementById('color_fondo_solga').addEventListener('input', function () {
        var color_fondo_solga = document.getElementById('color_fondo_solga').value;
    
    
        document.documentElement.style.setProperty('--bg-solga-propiedad', color_fondo_solga);
        
    }); 
    document.getElementById('color_texto_solga').addEventListener('input', function () {
        var color_texto_solga = document.getElementById('color_texto_solga').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-solga', color_texto_solga);
        
    }); 
    
    document.getElementById('color_fondo_noticias').addEventListener('input', function () {
        var color_fondo_noticias = document.getElementById('color_fondo_noticias').value;
    
    
        document.documentElement.style.setProperty('--bg-noticias-propiedad', color_fondo_noticias);
        
    }); 
    document.getElementById('color_texto_noticias').addEventListener('input', function () {
        var color_texto_noticias = document.getElementById('color_texto_noticias').value;
    
    
        document.documentElement.style.setProperty('--bg-texto-noticias', color_texto_noticias);
        
    }); 
    
   
</script>
@endsection