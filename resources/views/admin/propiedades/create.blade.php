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
                    <h2 style="width: 70%;float: left;">Propiedades - Recuerda que las imagenes y videos se podrán agregar luego de guardar la propiedad </h2>

                    
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
    <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" name="nombre"class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Descripcion<span style="color:red;"> *</span></label>
                                            <textarea name="descripcion" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label>Describe quién puede ser el cliente que compre o alquile esta propiedad<span style="color:red;"> *</span></label>
                                            <textarea name="descripcion_cliente" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Tipo de propiedad<span style="color:red;"> *</span></label>
                                            <select name="tipo_casa"  class="form-control">
                                                <option value="">--- Seleccionar ---</option>
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
                                                <option value="">--- Seleccionar ---</option>
                                                <option value="Alquiler">Alquiler</option>
                                                <option value="En venta">En venta</option>
                                                <option value="Alquiler - Venta">Alquiler - Venta</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Habitaciones<span style="color:red;"> *</span></label>
                                            <input type="number" name="habitaciones"class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Cocheras<span style="color:red;"> *</span></label>
                                            <input type="number" name="cocheras"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Baños<span style="color:red;"> *</span></label>
                                            <input type="number" name="banios"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Baños de visita<span style="color:red;"> *</span></label>
                                            <input type="number" name="banios_visista"class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Área de terreno (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_terreno"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Área construido (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_construido"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Área ocupado (m2)<span style="color:red;"> *</span></label>
                                            <input type="number" name="area_ocupado"class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Nº Piso<span style="color:red;"> *</span></label>
                                            <input type="number" name="n_piso"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Precio Alquiler ($)<span style="color:red;"> *</span></label>
                                            <input type="number" name="precio_alquiler_d"class="form-control" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label>Precio Alquiler (S/.)<span style="color:red;"> *</span></label>
                                            <input type="number" name="precio_alquiler_s"class="form-control" >
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Año de construcción<span style="color:red;"> *</span></label>
                                            <input type="number" name="anio_construccion"class="form-control" >
                                            
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
                                                <option value="">Selecciona un país</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Departamento<span style="color:red;"> *</span></label>
                                            <select  id="department" name="departamento" class="form-control">
                                                <option value="">Selecciona un departamento</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Provincia<span style="color:red;"> *</span></label>
                                            <select name="provincia" id="provincia" class="form-control">
                                                <option value="">Selecciona una provincia</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Distrito<span style="color:red;"> *</span></label>
                                            <select  name="distrito" id="distrito" class="form-control" >
                                                <option value="">Selecciona un distrito</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dirección<span style="color:red;"> *</span></label>
                                            <input type="text" name="direccion" class="form-control" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Urbanización<span style="color:red;"> *</span></label>
                                            <input type="text" name="urbanizacion" class="form-control" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Referencia<span style="color:red;"> *</span></label>
                                            <input type="text" name="referencia" class="form-control" >
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
                                            <input class="form-control" type="hidden" name="latitud" id="latitud" >
                                            <input class="form-control" type="hidden" name="longitud" id="longitud" >
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
                                                <input type="checkbox" name="comedor" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/dinning-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Comedor</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="salon_juegos" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/playroom.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Salón de juegos</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="area_parrillas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/grill-area.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Área de parrillas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="comedor_diario" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/daily-dining-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Comedor de diario</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="lavanderia" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/laundromat.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Lavandería</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="patio_trasero" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="cocina" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/kitchen.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Cocina</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="dor_servicio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/service-bedroom.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Dormitorio de servicio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="alma_alimentos" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/food-store.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Almacén de alimentos</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="bar" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/bar.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Bar</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sala_estar" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/living-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sala de estar</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="piscina" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="alma_general" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/general-storehouse.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Almacén General</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="hall_ingreso" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/hall.svg')}}" width="40"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Hall ingreso</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="salas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/living-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Salas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="escritorio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/desk.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;">Escritorio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="cuarto_servicio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
                                                <span><img src="{{ asset('admin/iconos/service-room.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Cuarto de Servicio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jardin_interior" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="patio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/patio.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Patio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sotano" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/basement.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sótano</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="closet" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/walk-in-closet.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Walk-in Closet</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="aire_acondicionado" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/air-conditioner.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Aire acond.</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="terraza" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/terrace.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Terraza</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jardin" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="chimenea" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/chimney.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Chimenea</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="jacuzzi" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/jacuzzi.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Jacuzzi</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="sauna" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/sauna.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Sauna</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="gimnasio" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/gym.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Gimnasio</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="guardiania" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/guardianship.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Guardianía</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="permi_mascotas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
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
                                                <input type="checkbox" name="no_mascotas" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/no-pets.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> No mascotas</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="club_playa" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/club-or-beach.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Club o Playa</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="club-house" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/club-house.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Club house</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="area_deportiva" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/sports-area.svg')}}"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Área deportiva</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="ascensor" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span><img src="{{ asset('admin/iconos/lift.svg')}}" width="40"></span> <br>
                                                <p style="width: 100px;text-align: center;"> Ascensor</p>
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="banio_visita" value="SI"  data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox" checked>
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
                                                <input type="checkbox" name="agua" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Agua</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="desague" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Desagüe</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="gas" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Gas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="fibra" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Fibra óptica</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="energia" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="inscrito" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Inscrito e independizado en Registros Públicos</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="libre" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Libre de cargas y gravámenes</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="listo" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                                                <input type="checkbox" name="oficina" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Oficina</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="empresas" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Empresas cercanas</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="financiamiento" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Financiamiento</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="patio" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Patio de maniobras</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="loza" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Loza de concreto armado</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="portones" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
                                                <span>Portones de ingreso y salida</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="vias" value="SI" data-parsley-errors-container="#error-checkbox" data-parsley-multiple="checkbox">
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
                    <div class="header">
                        <h6>*Recuerda que las imagenes y videos se podrán agregar luego de guardar la propiedad</h6>
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
    
</script>    
@endsection