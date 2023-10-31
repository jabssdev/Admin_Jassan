@extends('admin.layouts.permisos')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Agrega jQuery UI desde CDN -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <form action="{{ route('propiedades.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="accordion">
                        <div class="accordion-item ">
                            <div class="accordion-header">
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Datos Básicos
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Nombre<span style="color:red;"> *</span></label>
                                            <input type="text" name="nombre" value="{{$propiedad->nombre}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Descripcion<span style="color:red;"> *</span></label>
                                            <textarea name="descripcion" cols="30" rows="2" class="form-control">{{$propiedad->descripcion}}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Describe quién puede ser el cliente que compre o alquile esta propiedad<span style="color:red;"> *</span></label>
                                            <textarea name="descripcion_cliente" cols="30" rows="2" class="form-control">{{$propiedad->descripcion_cliente}}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Tipo de propiedad<span style="color:red;"> *</span></label>
                                            <select name="tipo_casa"  class="form-control">
                                                @if(isset($propiedad->tipo_casa)){
                                                    <option value="{{$propiedad->tipo_casa}}">{{$propiedad->tipo_casa}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                                
                                                <option value="Departamenteo">Departamento</option>
                                                <option value="Casa">Casa</option>
                                                <option value="Terreno">Terreno</option>
                                                <option value="Casa en Condominio">Casa en Condominio</option>
                                                <option value="Casa como Terreno">Casa como Terreno</option>
                                                <option value="Casa para Oficina">Casa para Oficina</option>
                                                <option value="Casa de Playa">Casa de Playa</option>
                                                <option value="Casa de Playa en Condominio">Casa de Playa en Condominio</option>
                                                <option value="Casa de Campo">Casa de Campo</option>
                                                <option value="Depa para Oficina">Depa para Oficina</option>
                                                <option value="Depa en Playa">Depa en Playa</option>
                                                <option value="Depa en Playa en Condominio">Depa en Playa en Condominio</option>
                                                <option value="Mini Dpto.">Mini Dpto.</option>
                                                <option value="Loft">Loft</option>
                                                <option value="Habitacion">Habitacion</option>
                                                <option value="Oficina">Oficina</option>
                                                <option value="Tienda">Tienda</option>
                                                <option value="Edificio (Dptos. en Proyecto)">Edificio (Dptos. en Proyecto)</option>
                                                <option value="Local Comercial">Local Comercial</option>
                                                <option value="Local Industrial">Local Industrial</option>
                                                <option value="Terreno Rustico">Terreno Rustico</option>
                                                <option value="Terreno de Playa">Terreno de Playa</option>
                                                <option value="Terreno Agricola">Terreno Agricola</option>
                                                <option value="Terreno Industrial">Terreno Industrial</option>
                                                <option value="Terreno Comercial">Terreno Comercial</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Hotel de Playa">Hotel de Playa</option>
                                                <option value="Hotel de Pasajeros">Hotel de Pasajeros</option>
                                                <option value="Posada">Posada</option>
                                                <option value="Hostal">Hostal</option>
                                                <option value="Cochera">Cochera</option>
                                                <option value="Otros">Otros</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tipo de operación<span style="color:red;"> *</span></label>
                                            <select name="tipo_operacion"  class="form-control">
                                                @if(isset($propiedad->tipo_operacion)){
                                                    <option value="{{$propiedad->tipo_operacion}}">{{$propiedad->tipo_operacion}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                                <option value="Alquiler">Alquiler</option>
                                                <option value="En venta">En venta</option>
                                                <option value="Alquiler - Venta">Alquiler - Venta</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Habitaciones<span style="color:red;"> *</span></label>
                                            <input type="number" name="habitaciones" value="{{$propiedad->habitaciones}}" class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Cocheras<span style="color:red;"> *</span></label>
                                            <input type="number" name="cocheras" value="{{$propiedad->cocheras}}"  class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Baños<span style="color:red;"> *</span></label>
                                            <input type="number" name="banios" value="{{$propiedad->banios}}"  class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Baños de visita<span style="color:red;"> *</span></label>
                                            <input type="number" name="banios_visita" value="{{$propiedad->banios_visita}}"  class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Área de terreno (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_terreno"  value="{{$propiedad->area_terreno}}" class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Área construido (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_construido" value="{{$propiedad->area_construido}}"  class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Área ocupado (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_ocupado" value="{{$propiedad->area_ocupado}}" class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Nº Piso<span style="color:red;"> *</span></label>
                                            <input type="number" name="n_piso" value="{{$propiedad->n_piso}}"  class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Precio Alquiler ($)<span style="color:red;"> *</span></label>
                                            <input type="number" name="precio_alquiler_d"  value="{{$propiedad->precio_alquiler_d}}" class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Precio Alquiler (S/.)<span style="color:red;"> *</span></label>
                                            <input type="number" name="precio_alquiler_s" value="{{$propiedad->precio_alquiler_s}}"  class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Año de construcción<span style="color:red;"> *</span></label>
                                            <input type="number" name="anio_construccion" value="{{$propiedad->anio_construccion}}" class="form-control" >
                                            
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Ubicación
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>País<span style="color:red;"> *</span></label>
                                            <select id="country" name="pais" class="form-control">
                                                @if(isset($propiedad->pais)){
                                                    <option value="{{$propiedad->pais}}">{{$propiedad->pais}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Departamento<span style="color:red;"> *</span></label>
                                            <select  id="department" name="departamento" class="form-control">
                                                @if(isset($propiedad->departamento)){
                                                    <option value="{{$propiedad->departamento}}">{{$propiedad->departamento}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Provincia<span style="color:red;"> *</span></label>
                                            <select name="provincia" id="provincia" class="form-control">
                                                @if(isset($propiedad->provincia)){
                                                    <option value="{{$propiedad->provincia}}">{{$propiedad->provincia}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Distrito<span style="color:red;"> *</span></label>
                                            <select  name="distrito" id="distrito" class="form-control" >
                                                @if(isset($propiedad->distrito)){
                                                    <option value="{{$propiedad->distrito}}">{{$propiedad->distrito}}</option>
                                                }@else{
                                                    <option value="">--- Seleccionar ---</option>
                                                
                                                }
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dirección<span style="color:red;"> *</span></label>
                                            <input type="text" name="direccion" value="{{$propiedad->direccion}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Urbanización<span style="color:red;"> *</span></label>
                                            <input type="text" name="urbanizacion" value="{{$propiedad->urbanizacion}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Referencia<span style="color:red;"> *</span></label>
                                            <input type="text" name="referencia" value="{{$propiedad->referencia}}" class="form-control" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            * Recuerda ingresar Mz, Lt o numeración de la propiedad en el campo Dirección para una mayor precisión al ubicar el predio en el mapa.<br>
                                            * Si la ubicación en el mapa no es precisa, puede darle clic al icono y moverlo a la ubicación que considere.
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        
                                        <div class="col-md-12">
                                            <input class="form-control" type="hidden" name="latitud" value="{{$propiedad->latitud}}" id="latitud" >
                                            <input class="form-control" type="hidden" name="longitud" value="{{$propiedad->longitud}}" id="longitud" >
                                            <div id="mapa" style="width:100%; height:400px; padding:10px;border-radius:10px;"></div>
                                            
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Lo que incluye
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="comedor" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox"  {{ $incluye->comedor == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/dinning-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Comedor</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="salon_juegos" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->salon_juegos == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/playroom.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Salón de juegos</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="area_parrillas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->area_parrillas == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/grill-area.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Área de parrillas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="comedor_diario" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->comedor_diario == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/daily-dining-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Comedor de diario</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="lavanderia" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->lavanderia == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/laundromat.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Lavandería</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="patio_trasero" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->patio_trasero == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/backyard.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Patio trasero</p>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="cocina" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->cocina == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/kitchen.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Cocina</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="dor_servicio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->dor_servicio == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/service-bedroom.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Dormitorio de servicio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="alma_alimentos" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->alma_alimentos == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/food-store.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Almacén de alimentos</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="bar" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->bar == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/bar.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Bar</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sala_estar" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->sala_estar == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/living-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sala de estar</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="piscina" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->piscina == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/pool.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Piscina</p>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="alma_general" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->alma_general == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/general-storehouse.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Almacén General</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="hall_ingreso" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->hall_ingreso == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/hall.svg')}}" width="40"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Hall ingreso</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="salas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->salas == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/living-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Salas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="escritorio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->escritorio == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/desk.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;">Escritorio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="cuarto_servicio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->cuarto_servicio == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/service-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Cuarto de Servicio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jardin_interior" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->jardin_interior == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/interior-garden.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Jardín interior</p>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="patio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->patio == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/patio.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Patio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sotano" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->sotano == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/basement.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sótano</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="closet" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->closet == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/walk-in-closet.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Walk-in Closet</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="aire_acondicionado" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->aire_acondicionado == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/air-conditioner.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Aire acond.</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="terraza" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->terraza == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/terrace.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Terraza</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jardin" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->jardin == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/garden.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Jardín</p>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="chimenea" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->chimenea == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/chimney.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Chimenea</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jacuzzi" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->jacuzzi == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/jacuzzi.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Jacuzzi</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sauna" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->sauna == 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/sauna.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sauna</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="gimnasio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->gimnasio== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/gym.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Gimnasio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="guardiania" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->guardiania== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/guardianship.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Guardianía</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="permi_mascotas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->permi_mascotas== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/allows-pets.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Permite mascotas</p>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="no_mascotas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->no_mascotas== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/no-pets.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> No mascotas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="club_playa" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->club_playa== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/club-or-beach.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Club o Playa</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="club_house" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->club_house== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/club-house.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Club house</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="area_deportiva" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->area_deportiva== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/sports-area.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Área deportiva</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="ascensor" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->ascensor== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/lift.svg')}}" width="40"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Ascensor</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="banio_visita" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $incluye->banio_visita== 'SI' ? 'checked' : '' }}>
                                                <span><img src="{{ asset('admin/iconos/guest-bathroom.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Baño de visita</p>
                                            </label>
                                            
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Zonificación
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Zonificación<span style="color:red;"> *</span></label>
                                            <input type="text" name="zonificacion" value="{{$propiedad->zonificacion}}" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <h5>Linderos</h5>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Frente (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="frente" value="{{$propiedad->frente}}" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Lateral derecho (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="lat_derecho" value="{{$propiedad->lat_derecho}}"  class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Lateral izquierdo (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="lat_izquierdo" value="{{$propiedad->lat_izquierdo}}" class="form-control" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Fondo (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="fondo" value="{{$propiedad->fondo}}" class="form-control" >
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Información adicional
                            </div>
                            <div class="accordion-content">
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12" style="margin-bottom:20px;">
                                            <h5>Servicios</h5>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="agua" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->agua== 'SI' ? 'checked' : '' }}>
                                                <span>Agua</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="desague" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->desague== 'SI' ? 'checked' : '' }}>
                                                <span>Desagüe</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="gas" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->gas== 'SI' ? 'checked' : '' }}>
                                                <span>Gas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="fibra" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->fibra== 'SI' ? 'checked' : '' }}>
                                                <span>Fibra óptica</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="energia" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->energia== 'SI' ? 'checked' : '' }}>
                                                <span>Energía eléctrica</span>
                                            </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12" style="margin-bottom:20px;">
                                            <h5>Documentación</h5>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="inscrito" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->inscrito== 'SI' ? 'checked' : '' }}>
                                                <span>Inscrito e independizado en Registros Públicos</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="libre" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->libre== 'SI' ? 'checked' : '' }}>
                                                <span>Libre de cargas y gravámenes</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="listo" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->listo== 'SI' ? 'checked' : '' }}>
                                                <span>Listo para ser financiado con el banco</span>
                                            </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12" style="margin-bottom:20px;">
                                            <h5>Otros</h5>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="oficina" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->oficina== 'SI' ? 'checked' : '' }}>
                                                <span>Oficina</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="empresas" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->empresas== 'SI' ? 'checked' : '' }}>
                                                <span>Empresas cercanas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="financiamiento" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->financiamiento== 'SI' ? 'checked' : '' }}>
                                                <span>Financiamiento</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="patio" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->patio== 'SI' ? 'checked' : '' }}>
                                                <span>Patio de maniobras</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="loza" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->loza== 'SI' ? 'checked' : '' }}>
                                                <span>Loza de concreto armado</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="portones" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->portones== 'SI' ? 'checked' : '' }}>
                                                <span>Portones de ingreso y salida</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="vias" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" {{ $adicional->vias== 'SI' ? 'checked' : '' }}>
                                                <span>Vías de concreto armado diseñado para el tránsito pesado</span>
                                            </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Distribución por pisos
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Zonificación<span style="color:red;"> *</span></label>
                                            <input type="text" name="zonificacion" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <h5>Linderos</h5>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Frente (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="frente" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Lateral derecho (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="lat_derecho" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label>Lateral izquierdo (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="lat_izquierdo" class="form-control" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Fondo (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="fondo" class="form-control" >
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Fotografías de la propiedad*
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($fotos as $foto )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <img src="{{asset('./propiedad/fotos/'.$foto->foto)}}" width="170" height="130" alt="" style="border-radius:10px;">
                                                            <label class="fancy-radio custom-color-green" style="margin-top:20px;"><input id="destacado{{$foto->id}}" onclick="Destacado({{ $foto->id }})" name="destacado{{$foto->id}}" type="radio"  {{ $foto->destacado == 'SI' ? 'checked' : '' }}><span><i></i>Destacado</span></label>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$foto->foto}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/fotos/' . $foto->foto));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/fotos/' . $foto->foto) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarFoto({{ $foto->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                        <div class="row" align="center" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col-md-12">
                                                                
                                                                <a href="" style="color:#000;" data-toggle="modal" data-target="#FotoInfo{{$foto->id}}">Editar información adicional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-pencil" style="color:#50d38a;"></i></a>
                                                                    
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <!-- Modal para agregar info de fotos -->
                                            <div class="modal fade" id="FotoInfo{{$foto->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel">Datos Adicionales</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-12">
                                                                        <label for="titulo">Titulo<span style="color:red;"> *</span></label>
                                                                        <input type="text" id="titulo{{$foto->id}}" placeholder="Titulo" class="form-control" >
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                                        <label for="descripcion">Descripción<span style="color:red;"> *</span></label>
                                                                        <textarea  id="descripcion{{$foto->id}}" cols="30" rows="2" class="form-control"></textarea>
                                                                        
                                                                    </div>

                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary" onclick="agregar({{$foto->id}})">Agregar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11">

                                        </div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="foto" id="foto" data-allowed-file-extensions='jpg png'>
                                                <label for="foto" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Videos de la propiedad
                            </div>
                            <div class="accordion-content">
                                
                                *Recuerda que el tamaño de los videos no debe exceder los 100MB. Ingresa a esta <a href="https://www.videosmaller.com/es/" target="_blank" rel="noreferrer" class="font-bold underline">página</a> subir el video y seleccionar el escalar ancho de vídeo 720 para reducir el peso
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($videos as $video )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            
                                                            <video src="{{asset('./propiedad/videos/'.$video->video)}}" controls controlslist="nodownload" width="170" height="130" poster></video>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 30px;">
                                                        <div class="row" align="center">
                                                            <div class="col-md-12">
                                                                <div class="input-group" style="margin-left:90px;">
                                                                    <input type="file" class="hidden" name="miniatura" id="miniatura{{ $video->id }}" onchange="miniaturaVideo({{ $video->id }})" data-allowed-file-extensions='jpg png'>
                                                                    <label for="miniatura{{ $video->id }}" class="btn btn-warning" >
                                                                        Subir Miniatura
                                                                    </label>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$video->video}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/videos/' . $video->video));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/videos/' . $video->video) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarVideo({{ $video->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11"></div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="video" id="video" data-allowed-file-extensions='video/mp4'>
                                                <label for="video" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Fotografías de las áreas comunes
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($fotos_areas as $foto_ar )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <img src="{{asset('./propiedad/areas/'.$foto_ar->foto)}}" width="170" height="130" alt="" style="border-radius:10px;">
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$foto_ar->foto}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/areas/' . $foto_ar->foto));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/areas/' . $foto_ar->foto) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarFotoAr({{ $foto_ar->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                        <div class="row" align="center" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col-md-12">
                                                                
                                                                <a href="" style="color:#000;" data-toggle="modal" data-target="#FotoAlInfo{{$foto_ar->id}}">Editar información adicional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-pencil" style="color:#50d38a;"></i></a>
                                                                    
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <!-- Modal para agregar info de fotos areas -->
                                            <div class="modal fade" id="FotoAlInfo{{$foto_ar->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel">Datos Adicionales</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-12">
                                                                        <label for="titulo_ar">Titulo<span style="color:red;"> *</span></label>
                                                                        <input type="text" id="titulo_ar{{$foto_ar->id}}" placeholder="Titulo" class="form-control" >
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                                        <label for="descripcion_ar">Descripción<span style="color:red;"> *</span></label>
                                                                        <textarea  id="descripcion_ar{{$foto_ar->id}}" cols="30" rows="2" class="form-control"></textarea>
                                                                        
                                                                    </div>

                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary" onclick="agregarAr({{$foto_ar->id}})">Agregar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11">

                                        </div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="foto_area" id="foto_area" data-allowed-file-extensions='jpg png'>
                                                <label for="foto_area" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Videos de las áreas comunes
                            </div>
                            <div class="accordion-content">
                                
                                
                                *Recuerda que el tamaño de los videos no debe exceder los 100MB. Ingresa a esta <a href="https://www.videosmaller.com/es/" target="_blank" rel="noreferrer" class="font-bold underline">página</a> subir el video y seleccionar el escalar ancho de vídeo 720 para reducir el peso
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($videos_areas as $video_ar )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            
                                                            <video src="{{asset('./propiedad/areas/'.$video_ar->video)}}" controls controlslist="nodownload" width="170" height="130" poster></video>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 30px;">
                                                        <div class="row" align="center">
                                                            <div class="col-md-12">
                                                                <div class="input-group" style="margin-left:90px;">
                                                                    <input type="file" class="hidden" name="miniatura_ar" id="miniatura_ar{{ $video_ar->id }}" onchange="miniaturaVideoAr({{ $video_ar->id }})" data-allowed-file-extensions='jpg png'>
                                                                    <label for="miniatura_ar{{ $video_ar->id }}" class="btn btn-warning" >
                                                                        Subir Miniatura
                                                                    </label>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$video_ar->video}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/areas/' . $video_ar->video));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/areas/' . $video_ar->video) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarVideoAr({{ $video_ar->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11"></div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="video_area" id="video_area" data-allowed-file-extensions='video/mp4'>
                                                <label for="video_area" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Fotografías de los alrededores
                            </div>
                            <div class="accordion-content">
                                
                                
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($fotos_alrededor as $foto_al )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <img src="{{asset('./propiedad/alrededores/'.$foto_al->foto)}}" width="170" height="130" alt="" style="border-radius:10px;">
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$foto_al->foto}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/alrededores/' . $foto_al->foto));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/alrededores/' . $foto_al->foto) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarFotoAl({{ $foto_al->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                        <div class="row" align="center" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col-md-12">
                                                                
                                                                <a href="" style="color:#000;" data-toggle="modal" data-target="#FotoAlInfo{{$foto_al->id}}">Editar información adicional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-pencil" style="color:#50d38a;"></i></a>
                                                                    
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <!-- Modal para agregar info de fotos alrededores -->
                                            <div class="modal fade" id="FotoAlInfo{{$foto_al->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel">Datos Adicionales</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-12">
                                                                        <label for="titulo_al">Titulo<span style="color:red;"> *</span></label>
                                                                        <input type="text" id="titulo_al{{$foto_al->id}}" placeholder="Titulo" class="form-control" >
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                                        <label for="descripcion_al">Descripción<span style="color:red;"> *</span></label>
                                                                        <textarea  id="descripcion_al{{$foto_al->id}}" cols="30" rows="2" class="form-control"></textarea>
                                                                        
                                                                    </div>

                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary" onclick="agregarAl({{$foto_al->id}})">Agregar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11">

                                        </div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="foto_alrededor" id="foto_alrededor" data-allowed-file-extensions='jpg png'>
                                                <label for="foto_alrededor" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
                                <i class="fa fa-check-circle" style="color:#50d38a;margin-right:10px;"></i>Videos de los alrededores
                            </div>
                            <div class="accordion-content">
                                *Recuerda que el tamaño de los videos no debe exceder los 100MB. Ingresa a esta <a href="https://www.videosmaller.com/es/" target="_blank" rel="noreferrer" class="font-bold underline">página</a> subir el video y seleccionar el escalar ancho de vídeo 720 para reducir el peso
                                <div class="form-group">
                                    <div class="row clearfix"  style="margin-top:20px;">
                                    
                                        @foreach ($videos_alrededor as $video_al )
                                            <div class="col-md-6" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            
                                                            <video src="{{asset('./propiedad/alrededores/'.$video_al->video)}}" controls controlslist="nodownload" width="170" height="130" poster></video>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8" style="padding-top: 30px;">
                                                        <div class="row" align="center">
                                                            <div class="col-md-12">
                                                                <div class="input-group" style="margin-left:90px;">
                                                                    <input type="file" class="hidden" name="miniatura_al" id="miniatura_al{{ $video_al->id }}" onchange="miniaturaVideoAl({{ $video_al->id }})" data-allowed-file-extensions='jpg png'>
                                                                    <label for="miniatura_al{{ $video_al->id }}" class="btn btn-warning" >
                                                                        Subir Miniatura
                                                                    </label>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="file-info row" style="border: 2px dotted #50d38a; margin:10px; border-radius:10px; padding:5px;">
                                                            <div class="col"><p style="max-width: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$video_al->video}}</p></div>
                                                            <div class="col-4">
                                                                
                                                                <p >
                                                                @php
                                                                    $bytes = filesize(public_path('propiedad/alrededores/' . $video_al->video));

                                                                    if ($bytes >= 1073741824) {
                                                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                                                    } elseif ($bytes >= 1048576) {
                                                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                                                    } elseif ($bytes >= 1024) {
                                                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                                                    } elseif ($bytes > 1) {
                                                                        $bytes = $bytes . ' bytes';
                                                                    } elseif ($bytes == 1) {
                                                                        $bytes = $bytes . ' byte';
                                                                    } else {
                                                                        $bytes = '0 bytes';
                                                                    }

                                                                    echo $bytes;
                                                                @endphp
                                                                </p>
                                                            </div>
                                                            <div class="col-1"><a class="file-download" href="{{ asset('./propiedad/alrededores/' . $video_al->video) }}" download><i class="fa fa-download" style="color: #50d38a;"></i></a></div>
                                                            <div class="col-1"><a href="javascript:void(0);" onclick="EliminarVideoAl({{ $video_al->id }})"><i class="fa fa-times-circle" style="color: #50d38a;"></i></a></div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        @endforeach
                                    
                                        
                                        
                                          
                                    </div>
                                    <div class="row clearfix" style="margin-top:30px;" align="right">
                                        <div class="col-md-11"><input type="hidden" id="propiedad_id" value="{{$propiedad->id}}"></div>
                                        <div class="col-md-1" >

                                            <div class="input-group">
                                                <input type="file" class="hidden" name="video_alrededor" id="video_alrededor" data-allowed-file-extensions='video/mp4'>
                                                <label for="video_alrededor" class="btn btn-primary" style="border-radius:50%;">
                                                    <i class="fa fa-plus"></i> 
                                                </label>
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
<script src="{{asset('js/ubigeo.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyCShqlh7VDQb7M5k2y5KgdzAAjfN8Fdv3E&amp;&callback=iniciarMapa"></script>
<script>
    var ubigeo = window.ubigeo

    var departamentos = ubigeo.departamentos
    var distritos     = ubigeo.distritos
    var provincias    = ubigeo.provincias
    $(document).ready(function() {
        $('.accordion-header').click(function() {
            $(this).next('.accordion-content').slideToggle();
        });
        
    });
    fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
        // Procesar los datos y llenar el select con los nombres de los países
        fillCountrySelect(data);
    })
    .catch(error => {
        console.error('Error al obtener la lista de países:', error);
    });
    
    function fillCountrySelect(countryData) {
    // Ordenar la lista de países alfabéticamente por nombre
        const countries = countryData.sort((a, b) => a.name.common.localeCompare(b.name.common));

        // Obtener el elemento select del país
        const countrySelect = document.getElementById('country');

        // Llenar el select con los nombres de los países
        for (const country of countries) {
            const option = document.createElement('option');
            option.value = country.name.common; // Usar el código de país como valor (puedes cambiarlo según tus necesidades)
            option.text = country.name.common; // Nombre común del país
            countrySelect.appendChild(option);
        }
    }
    function fillDepartments(selectId, data) {
        const select = document.getElementById(selectId);

        // Limpia el select
        select.innerHTML = '<option value="">Selecciona un departamento</option>';

        data.forEach(item => {
            
            const option = document.createElement('option');
            option.value = item.nombre_ubigeo; // Utiliza el ID del departamento
            option.textContent = item.nombre_ubigeo; // Utiliza el nombre del departamento
            select.appendChild(option);
            
            
        });
    }
    function fillProvincia(selectId, data) {
        const select = document.getElementById(selectId);

        // Limpia el select
        select.innerHTML = '<option value="">Selecciona una provincia</option>';
        
       
        data.forEach(item => {
           
            const option = document.createElement('option');
            option.value = item.nombre_ubigeo; 
            option.textContent = item.nombre_ubigeo; 
            select.appendChild(option);
            
            
            
            
        });
    }
    function fillDistrito(selectId, data) {
        const select = document.getElementById(selectId);

        // Limpia el select
        select.innerHTML = '<option value="">Selecciona un distrito</option>';
        
       
        data.forEach(item => {
           
            const option = document.createElement('option');
            option.value = item.nombre_ubigeo; 
            option.textContent = item.nombre_ubigeo; 
            select.appendChild(option);
            
            
            
            
        });
    }
    document.getElementById('country').addEventListener('change', function() {
        const selectedCountryId = this.value;
        if (selectedCountryId=='Peru') {
            
            fillDepartments('department', departamentos);
         
        } else {
            const departmentSelect = document.getElementById('department');
            departmentSelect.innerHTML = '<option value="">Selecciona un departamento</option>';
        }
    });
    document.getElementById('department').addEventListener('change', function() {
        const selectedDepartamento = this.value;
        const departamentoEncontrado = departamentos.find(departamento => departamento.nombre_ubigeo === selectedDepartamento);
        const provinciasPertenecientes = provincias[departamentoEncontrado.id_ubigeo];
            fillProvincia('provincia', provinciasPertenecientes);
        
        
    });
    document.getElementById('provincia').addEventListener('change', function() {
        const selectedDepartamento=document.getElementById('department').value;
        const departamentoEncontrado = departamentos.find(departamento => departamento.nombre_ubigeo === selectedDepartamento);
        const provinciasPertenecientes = provincias[departamentoEncontrado.id_ubigeo];
        const selectedProvincia = this.value;
        const provinciaEncontrada = provinciasPertenecientes.find(provincia => provincia.nombre_ubigeo === selectedProvincia);
        const distritosPertenecientes = distritos[provinciaEncontrada.id_ubigeo];
            fillDistrito('distrito', distritosPertenecientes);
        
        
    });
    function iniciarMapa(){
        
        
        generarMapa();
    }
    function generarMapa(){
        
        
        google.maps.event.addDomListener(window, 'load', function() {

            if(document.getElementById("latitud").value==''|| document.getElementById("longitud").value==''){
                var latitud =-8.11173879433607;
                var longitud =-79.02869051222532;
            }else{
                var latitud =parseFloat(document.getElementById("latitud").value);
                var longitud =parseFloat(document.getElementById("longitud").value);
            }
            
            const myLatLng = { lat: latitud, lng: longitud };
            
            const  mapa = new google.maps.Map(document.getElementById('mapa'),
            {
                zoom: 15,
                center: myLatLng
            });

            const marcador = new google.maps.Marker({
                map: mapa,
                draggable:true,
                position: myLatLng
            });

            marcador.addListener('dragend',function(event){
                
                document.getElementById("latitud").value = this.getPosition().lat();
                document.getElementById("longitud").value = this.getPosition().lng();
                var geocoder = new google.maps.Geocoder();
                var nuevaPosicion = marcador.getPosition();

                geocoder.geocode({ location: nuevaPosicion }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                    
                    var place = results[0];

                    
                    lugar = {
                        place_id: place.place_id,
                        name: place.name,
                        formatted_address: place.formatted_address,
                        website: place.website
                    };

                    
                    } else {
                    console.log('No se encontraron resultados de geocodificación');
                    }
                } else {
                    console.log('Error de geocodificación: ' + status);
                }
                });

                


                var informacion = new google.maps.InfoWindow();
                
                marcador.addListener('click', function() {
                
                    var request = {
                        placeId: lugar.place_id,
                        fields: ['name', 'formatted_address', 'website']
                    };

                    
                });
                
                
            });
            var geocoder = new google.maps.Geocoder();
            var nuevaPosicion = marcador.getPosition();

            geocoder.geocode({ location: nuevaPosicion }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                
                var place = results[0];

                
                lugar = {
                    place_id: place.place_id,
                    name: place.name,
                    formatted_address: place.formatted_address,
                    website: place.website
                };

                
                } else {
                console.log('No se encontraron resultados de geocodificación');
                }
            } else {
                console.log('Error de geocodificación: ' + status);
            }
            });
                
            var informacion = new google.maps.InfoWindow();

            marcador.addListener('click', function() {
            
                var request = {
                    placeId: lugar.place_id,
                    fields: ['name', 'formatted_address', 'website']
                };

                
            });
            
            
        });
        
    }
    //------------ fotos y videos alrededores---------------//
    document.getElementById('foto_alrededor').addEventListener('change', function () {
        var foto = document.getElementById('foto_alrededor').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (foto) {
            var formData = new FormData();
            formData.append('foto', foto);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("foto-al") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function agregarAl(id){
        var id_foto_al = id;
        var titulo_al = document.getElementById('titulo_al'+id).value;
        var descripcion_al = document.getElementById('descripcion_al'+id).value;
        
        var formData = new FormData();
        formData.append('id_foto_al', id_foto_al);
        formData.append('titulo_al', titulo_al);
        formData.append('descripcion_al', descripcion_al);
        axios.post('{{ route("adicional.foto-al") }}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            
            location.reload();
        })
        .catch(error => {
            console.error(error);
        });
    }
    function EliminarFotoAl(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("foto-alrededores.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }
    document.getElementById('video_alrededor').addEventListener('change', function () {
        var video = document.getElementById('video_alrededor').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (video) {
            var formData = new FormData();
            formData.append('video', video);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("propiedades.video-al") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function miniaturaVideoAl(id){
        var miniatura = document.getElementById('miniatura_al'+id).files[0];
        if (id) {
            var formData = new FormData();
            formData.append('miniatura', miniatura);
            formData.append('id_video_al', id);
            axios.post('{{ route("miniatura.video-al") }}', formData)
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }


    function EliminarVideoAl(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("video-alrededores.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }
    //------------ fotos y videos areas comunes---------------//
    document.getElementById('foto_area').addEventListener('change', function () {
        var foto = document.getElementById('foto_area').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (foto) {
            var formData = new FormData();
            formData.append('foto', foto);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("foto-ar") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function agregarAr(id){
        var id_foto_ar = id;
        var titulo_ar = document.getElementById('titulo_ar'+id).value;
        var descripcion_ar = document.getElementById('descripcion_ar'+id).value;
        
        var formData = new FormData();
        formData.append('id_foto_ar', id_foto_ar);
        formData.append('titulo_ar', titulo_ar);
        formData.append('descripcion_ar', descripcion_ar);
        axios.post('{{ route("adicional.foto-ar") }}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            
            location.reload();
        })
        .catch(error => {
            console.error(error);
        });
    }
    function EliminarFotoAr(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("foto-areas.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }
    document.getElementById('video_area').addEventListener('change', function () {
        var video = document.getElementById('video_area').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (video) {
            var formData = new FormData();
            formData.append('video', video);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("propiedades.video-ar") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function miniaturaVideoAr(id){
        console.log(id);
        var miniatura = document.getElementById('miniatura_ar'+id).files[0];
        if (id) {
            var formData = new FormData();
            formData.append('miniatura', miniatura);
            formData.append('id_video_ar', id);
            axios.post('{{ route("miniatura.video-ar") }}', formData)
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }


    function EliminarVideoAr(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("video-areas.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }

    //------------ fotos y videos---------------//
    document.getElementById('foto').addEventListener('change', function () {
        var foto = document.getElementById('foto').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (foto) {
            var formData = new FormData();
            formData.append('foto', foto);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("foto-propiedades") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function agregar(id){
        var id_foto = id;
        var titulo = document.getElementById('titulo'+id).value;
        var descripcion = document.getElementById('descripcion'+id).value;
        
        var formData = new FormData();
        formData.append('id_foto', id_foto);
        formData.append('titulo', titulo);
        formData.append('descripcion', descripcion);
        axios.post('{{ route("adicional.foto-propiedades") }}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            
            location.reload();
        })
        .catch(error => {
            console.error(error);
        });
    }
    function EliminarFoto(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("foto-propiedades.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }
    document.getElementById('video').addEventListener('change', function () {
        var video = document.getElementById('video').files[0];
        var id_propiedad = document.getElementById('propiedad_id').value;
        if (video) {
            var formData = new FormData();
            formData.append('video', video);
            formData.append('id_propiedad', id_propiedad);
            axios.post('{{ route("propiedades.video") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                
                location.reload();
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    });
    function miniaturaVideo(id){
        var miniatura = document.getElementById('miniatura'+id).files[0];
        if (id) {
            var formData = new FormData();
            formData.append('miniatura', miniatura);
            formData.append('id_video', id);
            axios.post('{{ route("miniatura.video") }}', formData)
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }


    function EliminarVideo(id){
        console.log(id);
        if (id) {
            
            axios.post('{{ route("video.delete") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
        
    }
    function Destacado(id){
        if (id) {
            
            axios.post('{{ route("foto-propiedades.destacar") }}', { id: id })
            .then(response => {
                location.reload();
                
            })
            .catch(error => {
                console.error(error);
            });
        }
    }
</script>    
@endsection