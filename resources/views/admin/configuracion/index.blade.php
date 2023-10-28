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
                    <li class="breadcrumb-item active">Configuración</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="width: 70%;float: left;">Configuración - Aquí puedes editar tus configuraciones </h2>

                    
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
    <form action="{{ route('configuracion.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Información general
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Título web (aparecerá en la pestaña del navegador)<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_web" value="{{$con_informacion->titulo_web}}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Título del footer (título al final de la página)<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_footer" value="{{$con_informacion->titulo_footer}}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Footer (texto al final de la página)<span style="color:red;"> *</span></label>
                                            <textarea name="texto_footer" class="form-control" cols="30" rows="2" >{{$con_informacion->texto_footer}}</textarea>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>  Google tags / Facebook Pixel
                            </div>
                            <div class="accordion-content">
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Facebook pixel (Pixel id)<span style="color:red;"> *</span></label>
                                            <input type="text" name="face_pixel" value="{{$con_google->face_pixel}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Google Tag (id) - global<span style="color:red;"> *</span></label>
                                            <input type="text" name="google_tag_global" value="{{$con_google->google_tag_global}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Google Tag (id) - Fragmento de evento<span style="color:red;"> *</span></label>
                                            <input type="text" name="google_tag_fragmento" value="{{$con_google->google_tag_fragmento}}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Facebook Verificación<span style="color:red;"> *</span></label>
                                            <input type="text" name="face_verificacion" value="{{$con_google->face_verificacion}}" placeholder="4f63232423fds443f43"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Token facebook conversión<span style="color:red;"> *</span></label>
                                            <input type="text" name="face_token" value="{{$con_google->face_token}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <a href="javascript:;" class="btn btn-verde" data-toggle="modal" data-target="#agregarFilaModal" style="float: left; margin-top:25px;">
                                            <span> <i class="fa fa-plus-square"></i> Añadir evento</span></a>
                                        </div>
                                        <div class="col-md-12" style="margin-top:30px;">
                                            <table id="miTabla" class="table table-striped  nowrap">
                                                <thead>
                                                    <tr style="background-color:#50d38a; color:#fff;">
                                                        <th>Nombre</th>
                                                        <th>Tipo de Evento</th>
                                                        <th>URL</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Filas se agregarán aquí dinámicamente -->
                                                </tbody>
                                            </table>
                                            <input type="hidden" name="datosTabla" id="datosTabla" value="{{$detalle_google}}">
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Videos de youtube
                            </div>
                            <div class="accordion-content">
                                *Pegar los link de youtube en los campos. <br>
                                *Las urls deben incluir <b>'https://'</b>. Ejemplo: https://https://www.youtube.com/watch?v=5qm8PH4xAss <br><br>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Url 1<span style="color:red;"> *</span></label>
                                            <input type="text" name="primer_url" value="{{$con_video->primer_url}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Url 2<span style="color:red;"> *</span></label>
                                            <input type="text" name="segundo_url" value="{{$con_video->segundo_url}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Url 3<span style="color:red;"> *</span></label>
                                            <input type="text" name="tercer_url" value="{{$con_video->tercer_url}}" class="form-control" >
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>   Logo / Favicon
                            </div>
                            <div class="accordion-content">
                                Es recomendable agregar un logo para que su web este mejor visible. Además, el favicon ayuda identificar fácilmente tu web en el navegador. <br>
                                *Recomendamos agregar logo con las dimensiones de 80 x 50 px <br><br>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Logo<span style="color:red;"> *</span></label>
                                            <input type="file" name="logo" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_configuracion/'.$con_logo->logo ) }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Favicon<span style="color:red;"> *</span></label>
                                            <input type="file" name="favicon" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_configuracion/'.$con_logo->favicon ) }}">
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Página web

                            </div>
                            <div class="accordion-content">
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Titulo para formulario de contacto principal<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_principal" value="{{$con_pagina->titulo_principal}}" class="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <label>Titulo para formulario en el apartado de propiedades<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_propiedades" value="{{$con_pagina->titulo_propiedades}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Posición de formulario de contacto principal<span style="color:red;"> *</span></label>
                                            <select class="form-control show-tick ms " name="f_contacto_principal"  data-placeholder="Select" >
                                                @if(isset($con_pagina->f_contacto_principal)){
                                                    <option value="{{$con_pagina->f_contacto_principal}}">{{$con_pagina->f_contacto_principal}}</option>
                                                }@else{
                                                    <option value="">---- Seleccionar ----</option>
                                                
                                                }
                                                @endif
                                                <option value="Izquierda">Izquierda</option>
                                                <option value="Centrado">Centrado</option>
                                                <option value="Derecha">Derecha</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Posición de formulario principal de la página detalle de propiedad<span style="color:red;"> *</span></label>
                                            <select class="form-control show-tick ms select2" name="f_principal_pagina" data-placeholder="Select">
                                                @if(isset($con_pagina->f_principal_pagina)){
                                                    <option value="{{$con_pagina->f_principal_pagina}}">{{$con_pagina->f_principal_pagina}}</option>
                                                }@else{
                                                    <option value="">---- Seleccionar ----</option>
                                                
                                                }
                                                @endif
                                                <option value="Izquierda">Izquierda</option>
                                                <option value="Centrado">Centrado</option>
                                                <option value="Derecha">Derecha</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Posición de formulario secundario de la página detalle de propiedad<span style="color:red;"> *</span></label>
                                            <select class="form-control show-tick ms " name="f_secundario" data-placeholder="Select" >
                                                @if(isset($con_pagina->f_secundario)){
                                                    <option value="{{$con_pagina->f_secundario}}">{{$con_pagina->f_secundario}}</option>
                                                }@else{
                                                    <option value="">---- Seleccionar ----</option>
                                                
                                                }
                                                @endif
                                                <option value="Izquierda">Izquierda</option>
                                                <option value="Centrado">Centrado</option>
                                                <option value="Derecha">Derecha</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Titulo para sección quien soy<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_quiensoy" value="{{$con_pagina->titulo_quiensoy}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Subtitulo para sección subtitle<span style="color:red;"> *</span></label>
                                            <input type="text" name="subtitulo" value="{{$con_pagina->subtitulo}}" class="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <label>Editar titulo "ASÍ VENDO MIS PROPIEDADES"<span style="color:red;"> *</span></label>
                                            <input type="text" name="titulo_asivendo" value="{{$con_pagina->titulo_asivendo}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Mostrar sección de beneficios<span style="color:red;"> *</span></label> <br>
                                            <label class="fancy-radio custom-color-green"><input name="beneficio" value="Activo" type="radio" <?php echo ($con_pagina->beneficio === 'Activo') ? 'checked' : ''; ?>><span><i></i>Activo</span></label>
                                            <label class="fancy-radio custom-color-green"><input name="beneficio" value="Desactivado" type="radio" <?php echo ($con_pagina->beneficio === 'Desactivado') ? 'checked' : ''; ?>><span><i></i>Desactivado</span></label> <br>
                                            <label style="margin-top:40px;">Mostrar formulario principal<span style="color:red;"> *</span></label> <br>
                                            <label class="fancy-radio custom-color-green"><input name="formulario" value="Activo" type="radio" <?php echo ($con_pagina->formulario === 'Activo') ? 'checked' : ''; ?>><span><i></i>Activo</span></label>
                                            <label class="fancy-radio custom-color-green"><input name="formulario" value="Desactivado" type="radio" <?php echo ($con_pagina->formulario === 'Desactivado') ? 'checked' : ''; ?>><span><i></i>Desactivado</span></label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Imagen de te comparto<span style="color:red;"> *</span></label>
                                            <input type="file" name="imagen_comparto" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_configuracion/'.$con_pagina->imagen_comparto ) }}">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Imagen de Quíen soy<span style="color:red;"> *</span></label>
                                            <input type="file" name="imagen_quien" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_configuracion/'.$con_pagina->imagen_quien ) }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Imagen de formulario de propiedades<span style="color:red;"> *</span></label>
                                            <input type="file" name="imagen_formulario" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png' data-default-file="{{ asset( 'img_configuracion/'.$con_pagina->imagen_formulario ) }}">
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
    <!-- Modal para agregar filas -->
    <div class="modal fade" id="agregarFilaModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Agregar Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <label for="nombre">Nombre del evento<span style="color:red;"> *</span></label>
                                <input type="text" id="nombre" placeholder="Nombre" class="form-control" >
                            </div>
                            
                            <div class="col-md-12" style="margin-top: 20px;">
                                <label for="url">URL<span style="color:red;"> *</span></label>
                                <input type="text" id="url" placeholder="URL" class="form-control" >
                            </div>

                            <div class="col-md-12" style="margin-top: 20px;">
                                <label for="tipoEvento">Tipo de Evento<span style="color:red;"> *</span></label>
                                <select id="tipoEvento" class="form-control">
                                    <option value="">--- Seleccionar ---</option>
                                    <option value="Subscribe">Subscribe</option>
                                    <option value="ViewContent">ViewContent</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="agregarFilaModalBtn">Agregar Fila</button>
                </div>
            </div>
        </div>
    </div>

    
        
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
        var datosTabla = [];

        function agregarFila() {
            var nombre = document.getElementById('nombre').value;
            var tipoEvento = document.getElementById('tipoEvento').value;
            var url = document.getElementById('url').value;

            datosTabla.push({
                nombre: nombre,
                tipoEvento: tipoEvento,
                url: url
            });

            actualizarTabla();
        }

        function eliminarFila(index) {
            datosTabla.splice(index, 1);
            actualizarTabla();
        }

        function actualizarTabla() {
            var tabla = document.getElementById('miTabla').getElementsByTagName('tbody')[0];
            tabla.innerHTML = '';

            datosTabla.forEach(function (fila, index) {
                var nuevaFila = tabla.insertRow(tabla.rows.length);
                var cell1 = nuevaFila.insertCell(0);
                var cell2 = nuevaFila.insertCell(1);
                var cell3 = nuevaFila.insertCell(2);
                var cell4 = nuevaFila.insertCell(3);

                cell1.innerHTML = fila.nombre;
                cell2.innerHTML = fila.tipoEvento;
                cell3.innerHTML = fila.url;

                var eliminarBtn = document.createElement('button');
                eliminarBtn.type = 'button';
                eliminarBtn.className = 'btn btn-danger js-sweetalert button';
                eliminarBtn.innerHTML = '<i class="fa fa-trash-o"></i>';
                eliminarBtn.onclick = function () {
                    eliminarFila(index);
                };
                cell4.appendChild(eliminarBtn);
            });

            document.getElementById('nombre').value = '';
            document.getElementById('tipoEvento').value = '';
            document.getElementById('url').value = '';

            document.getElementById('datosTabla').value = JSON.stringify(datosTabla);
        }

        document.getElementById('agregarFilaModalBtn').addEventListener('click', agregarFila);

        // Llena la tabla con los datos existentes (por ejemplo, cuando se edita el formulario)
        actualizarTabla();
   
</script>
@endsection