<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Jassan">
<meta name="description" content="Jassan">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('web/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
<!-- Title -->
<title>{{$con_informacion->titulo_web}}</title>
<!-- Favicon -->
<link href="{{asset('./img_configuracion/'.$con_logo->favicon)}}" rel="icon">
<link rel="stylesheet" href="{{asset('web/plugin/whatsapp-chat-support.css')}}">
<link rel="stylesheet" href="{{asset('web/plugin/components/Font Awesome/css/font-awesome.min.css')}}">

 <style>
    .btn-flotante {
    position: fixed;
    bottom: 90px;
    right: 20px;
    background-color: #fff; 
    color: #4d0505;
    border: none;
    border-radius: 50%;
    width: 56px;
    height: 56px;
    text-align: center;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    z-index: 999;
    padding: 6px;
    }
    .redes{
        display: flex;
        padding-top: 22px;
        padding-bottom: 22px;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        width: 54px;
        height: 171px;    
        margin-top: -85.5px;
        z-index: 10;
        right: 0;
        top: 50%;
        position: fixed;
        background-color: #fff; 
        box-shadow: 0 0 #0000,0 0 #0000, 0px 4px 11px rgba(0, 0, 0, .25);
        
    }
    .redes svg {
        fill: #4d0505; 
    }
	.mobile-columns {
       display: flex !important;
        flex-wrap: wrap !important;
        justify-content: space-between !important;
    }

    .mobile-columns > div {
        flex: calc(50% - 10px) !important;
        box-sizing: border-box !important;
        margin-bottom: 10px !important;
    } 
	.nombre{
		display:none;
	  }
	  .slider-movil{
		display:none;
		}
		.mostrar{
			display: block !important;
		}
		.text-subheading-03 {
			font-size: 1.125rem;
			line-height: 1.371rem;
		}
		.font-semibold {
			font-weight: 600;
		}
	@media screen and (max-width: 700px) {
      .customslider .item {
        min-width: 300px;
		opacity: 1;
		box-shadow: none;
		padding: 0px !important;
		margin: 0px;
      }
      .des{
        height: 130px !important;
      }
	  .oculto-movil{
		display:none !important;
		}
      .pro_img {
		width: 270px;
        height: 150px;
        min-height: 150px !important;
      }
	  .nombre{
		display:block !important;
	  }
      .slider-movil{
		display:block;
		background-color:#000;
		}
		.centro{
			text-align:center;
		}
		.text-subheading-01 {
			font-size: 1.375rem;
			line-height: 1.676rem;
		}
		.text-subheading-03 {
			font-size: 1.125rem;
			line-height: 1.371rem;
		}
		.font-semibold {
			font-weight: 600;
		}
		.font-extrabold {
			font-weight: 800;
		}
		.mostrar{
			display: none !important;
		}
		.text-heading-05 {
			font-size: 1.687rem;
			line-height: 2.062rem;
		}
		.font-black {
			font-weight: 900;
		}
		.boton-movil{
			width:90%;
			height: 4rem;
		}
		.text-subheading-02 {
			font-size: 1.25rem;
			line-height: 1.523rem;
		}
		.font-light {
			font-weight: 300;
		}
		.font-bold {
			font-weight: 700;
		}
		.text-subheading-02 {
			font-size: 1.25rem !important;
			line-height: 1.523rem !important;
		}
		.text-paragraph-01 {
			font-size: 1rem;
			line-height: 1.272rem;
		}
		.main-title{
			margin-bottom:0px;
		}
		.home5_bgi5{
			height:400px;
			
		}
    }
 </style>
 
</head>
<body>
<div class="wrapper">
	

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 home10 navbar-scrolltofixed stricky main-menu">
		<div class="container p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{asset('web/images/header-logo.png')}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="{{ route('web.index') }}" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{asset('web/images/header-logo.png')}}" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{asset('web/images/header-logo.png')}}" alt="header-logo.png">
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li style="margin-right:10px;margin-left:10px;">
		                <a href="#"><span class="title">Agente</span></a>
		                
		            </li>
		            <li style="margin-right:10px;margin-left:10px;">
		                <a href="proyectos.html"><span class="title">Propiedades</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="#destacados">Destacados</a>
		                         
		                    </li>
		                    <li>
		                        <a href="#enventa">Comprar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Alquilar</a>
		                        
		                    </li>
							<li>
		                        <a href="#vendido">Vendido / Alquilado</a>
		                        
		                    </li>
		                      
	                	</ul>
		            </li>
		            <li style="margin-right:10px;margin-left:10px;">
                    <a href="#testimonios"><span class="title">Testimonios</span></a>
		                <ul>
		                     
                            <li><a href="#presentacion">Presentaci&oacute;n</a></li>
                            <li><a href="#property-city">Gu&iacute;as</a></li>
		                </ul>
		            </li>
		            <li style="margin-right:10px;margin-left:10px;">
		                <a href="#blog"><span class="title">Blog</span></a>
		                
		            </li>
		         
		             
	                <li class="list-inline-item add_listing home2 style10 float-right" style="margin-right:10px;margin-left:10px;"><a href="{{ route('admin.login.get') }}"><span class="dn-lg"> Iniciar sesión</span></a></li>
	               
		        </ul>
		    </nav>
		</div>
	</header>
 
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="d-flex justify-content-between">
					<a class="mobile-menu-trigger" href="#menu">
					<svg width="28" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-50 cursor-pointer icon-color-inherit fill-white hover:opacity-100" alt="Menu"><g opacity="0.5" fill="#000"><path d="M0 2.5A1.75 1.75 0 0 1 1.75.75h24.5a1.75 1.75 0 1 1 0 3.5H1.75A1.75 1.75 0 0 1 0 2.5ZM0 23.5a1.75 1.75 0 0 1 1.75-1.75h24.5a1.75 1.75 0 1 1 0 3.5H1.75A1.75 1.75 0 0 1 0 23.5ZM12.25 11.25a1.75 1.75 0 0 0 0 3.5h14a1.75 1.75 0 1 0 0-3.5h-14Z"></path></g></svg>
					</a>
					<a class="nav_logo_img" href="index.html"><img class="img-fluid mt20" src="{{asset('web/images/header-logo2.png')}}" alt="header-logo2.png"></a>
					<a class="mobile-menu-reg-link" href="page-register.html"><span></span></a>
				</div>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<a href="#"><span class="title">Agente</span></a>
					
				</li>
				<li><span>Propiedades</span>
			  
						 
	                <ul>
		                    <li>
		                        <a href="#destacados">Destacados</a>
		                         
		                    </li>
		                    <li>
		                        <a href="#enventa">Comprar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Alquilar</a>
		                        
		                    </li>
							<li>
		                        <a href="#vendido">Vendido / Alquilado</a>
		                        
		                </li>
					</ul>
				</li>
				<li><a href="#testimonios"><span class="title">Testimonios</span></a>
					<ul>
						<li><a href="#presentacion">Presentaci&oacute;n</a></li>
						<li><a href="#property-city">Gu&iacute;as</a></li>
					</ul>
				</li>
				<li><a href="#blog"><span class="title">Blog</span></a>
					 
				</li>
				 
 				<li><a href="{{ route('admin.login.get') }}"><span class="flaticon-user"></span> Iniciar Sesion </a></li>
 			</ul>
		</nav>
	</div>
	 

	<!-- Slider -->
	<section class="home-one home5-overlay home5_bgi5 parallax" data-stellar-background-ratio="1.5">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-5">
					<div class="home_content home5 style2">
						<div class="home1-advnc-search home5">
							<div class="nombre" align="center" style="margin-top:20px;">
								<h1 class="color_principal text-subheading-01 font-extrabold" style="text-transform: uppercase;">{{$propiedad->tipo_casa}} {{$propiedad->tipo_operacion}}</h1>
								<p class="text-white text-subheading-03 font-semibold" style="text-transform: uppercase;">{{$propiedad->direccion}}</p>
							</div>
							
							<form class="home5_advanced_search_form oculto-movil">
								<div class="main-title text-center">
                                <h3 class="color_principal" style="font-weight: 800;font-size: 1.6rem;line-height: 2.062rem;">{{$con_pagina->titulo_principal}}</h3>
									<h3 class="color_principal" style="text-align: center;font-size: inherit;font-weight: 600;width: 100%;">OBT&Eacute;N UNA ASESOR&Iacute;A GRATIS</h3>
								</div>
							    <div class="form-group">
									<!-- <label for="exampleInputName1">Nombre Completo <span class="preferen">*</span></label> -->
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre Completo ">
							    </div>
								<div class="form-group">
									<!-- <label for="exampleInputName1">Celular<span class="preferen">*</span></label> -->
							    	<input type="text" class="form-control" id="exampleInputPhone" placeholder="Celular">
							    </div>
								 
								<div class="form-group">
									<!-- <label for="exampleInputName1">Dni<span class="preferen">*</span></label> -->
							    	<input type="text" class="form-control" id="exampleInputPhone" placeholder="Dni">
							    </div>

								<div class="search_option_button home5">
								    <button type="submit" class="btn btn-block">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					 
				</div>
				 
			</div>
			<div class="oculto-movil" style="position: absolute; top:13%">
				<h2 class="text-white">DESCUBRE COMO</h2>
				<h2 class="text-orange">VENDER TU PROPIEDAD M&Aacute;S R&Aacute;PIDO</h2>
			</div>
			<div class="d-flex oculto-movil mostrar" style="position: absolute; bottom: 4px; ">
				<h1 class="color_principal" style="text-transform: uppercase;">{{$propiedad->tipo_casa}} {{$propiedad->tipo_operacion}}</h1> 
				<p class="text-white text-subheading-03 font-semibold">{{$propiedad->direccion}}</p>
				<p class="text-white text-subheading-03 font-semibold">¿Para qui&eacute;n?</p>
			</div> 
		</div>
	</section>
	<!-- Slider  Movil-->
	<section class="our-blog bgc-f7 pb30 slider-movil" style="background: black !important;">
		<div class="container">
			 
			<div class="row">
				<div class="col-lg-6" align="center">
                     <h1 class="text-white text-heading-05 font-semibold">$ {{$propiedad->precio_alquiler_d}} - S/{{$propiedad->precio_alquiler_s}}</h1>
					 <button type="button" class="btn btn-lg btn-primary viewasesoria boton-movil">Contactar</button>
                </div>
				<div class="col-12">
					<form class="home5_advanced_search_form ">
						<div class="main-title text-center">
                        	<h3 class="color_principal text-subheading-02 font-semibold" style="line-height: 2.062rem;">{{$con_pagina->titulo_principal}}</h3>
							<h3 class="color_principal text-subheading-02 font-semibold" style="text-align: center;width: 100%;">OBT&Eacute;N UNA ASESOR&Iacute;A GRATIS</h3>
						</div>
					    <div class="form-group">
							<!-- <label for="exampleInputName1">Nombre Completo <span class="preferen">*</span></label> -->
					    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre Completo ">
					    </div>
						<div class="form-group">
							<!-- <label for="exampleInputName1">Celular<span class="preferen">*</span></label> -->
					    	<input type="text" class="form-control" id="exampleInputPhone" placeholder="Celular">
					    </div>
						 
						<div class="form-group">
							<!-- <label for="exampleInputName1">Dni<span class="preferen">*</span></label> -->
					    	<input type="text" class="form-control" id="exampleInputPhone" placeholder="Dni">
					    </div>

						<div class="search_option_button home5">
						    <button type="submit" class="btn btn-block">Enviar</button>
						</div>
					</form>
				</div>
				<div class="col-lg-6" style="background-color:rgb(36 36 36/1); border-radius: .75rem; margin:20px;">
					<div class="row" style="padding: 10px;">
						<div class="col-lg-4 col-6">
							<!-- Primera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="19" height="19" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">Área total {{$propiedad->area_terreno}} m2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-6">
							<!-- Segunda columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="19" height="19" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">Área construida {{$propiedad->area_construido}} m2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-6">
							<!-- Tercera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bedroom"><path d="M16.2 5.867V0h-1.8v1.79H3.6V0H1.8v5.867C.729 6.487 0 7.627 0 8.947v3.58c0 .494.403.894.9.894h.9V17h1.8v-3.579h10.8V17h1.8v-3.579h.9c.498 0 .9-.4.9-.895V8.947c0-1.32-.73-2.46-1.8-3.08Zm-1.8-2.288v1.79H9.9v-1.79h4.5Zm-10.8 0h4.5v1.79H3.6v-1.79Zm12.6 8.053H1.8V8.947c0-.987.807-1.79 1.8-1.79h10.8c.993 0 1.8.803 1.8 1.79v2.685Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">{{$propiedad->habitaciones}} dormitorios</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-6">
							<!-- Tercera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bathroom"><path d="M17.1 6.263H4.5V3.58c0-.987.807-1.79 1.8-1.79s1.8.803 1.8 1.79h1.8C9.9 1.605 8.285 0 6.3 0S2.7 1.605 2.7 3.579v2.684H.9c-.498 0-.9.4-.9.895v1.79c0 2.331 1.507 4.315 3.6 5.055V17h1.8v-2.684h7.2V17h1.8v-2.997c2.093-.74 3.6-2.724 3.6-5.056v-1.79a.897.897 0 0 0-.9-.894Zm-.9 2.684c0 1.974-1.615 3.58-3.6 3.58H5.4c-1.985 0-3.6-1.606-3.6-3.58v-.894h14.4v.894Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">{{$propiedad->banios}} baños</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
			   </div>
				
			</div>
		</div>
	</section>
	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7" style="padding: 0; display: none;">
		<div class="container dn db-992">
			<div class="row featured_row">
				<div class="col-lg-12">
					<div class="home1-advnc-search home2 mt20">
						<ul class="h1ads_1st_list mb0">
							<li class="list-inline-item">
							    <div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
							    </div>
							</li>
							<li class="list-inline-item">
								<div class="search_option_two home2">
									<div class="candidate_revew_select">
										 
									</div>
								</div>
							</li>
							<li class="list-inline-item">
							    <div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
							    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
							    </div>
							</li>
							<li class="list-inline-item">
								<div class="small_dropdown2 home10">
								    <div id="prncgs2" class="btn dd_btn">
								    	<span> </span>
								    	<label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
								    </div>
								  	<div class="dd_content2">
									    <div class="pricing_acontent">
									    	<span id="slider-range-value1"></span>
											<span id="slider-range-value2"></span>
										    <div id="slider"></div>
											<!-- <input type="text" class="amount" placeholder="$52,239"> 
											<input type="text" class="amount2" placeholder="$985,14">
											<div class="slider-range"></div> -->
									    </div>
								  	</div>
								</div>
							</li>
							<li class="custome_fields_520 list-inline-item">
								<div class="navbered">
								  	<div class="mega-dropdown">
									    <span id="show_advbtn" class="dropbtn">  <i class="flaticon-more pl10 flr-520"></i></span>
									    <div class="dropdown-content home2">
									      	<div class="row p15 pb0">
									      		<div class="col-lg-12">
									      			<h4 class="text-thm3"> </h4>
									      		</div>
										        <div class="col-xxs-6 col-sm col-lg col-xl">
									                <ul class="ui_kit_checkbox selectable-list">
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck1">
																<label class="custom-control-label" for="customCheck1"></label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck2">
																<label class="custom-control-label" for="customCheck2"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck3">
																<label class="custom-control-label" for="customCheck3"> </label>
															</div>
									                	</li>
									                </ul>
										        </div>
										        <div class="col-xxs-6 col-sm col-lg col-xl">
									                <ul class="ui_kit_checkbox selectable-list">
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck4">
																<label class="custom-control-label" for="customCheck4"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck5">
																<label class="custom-control-label" for="customCheck5"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck6">
																<label class="custom-control-label" for="customCheck6"> </label>
															</div>
									                	</li>
									                </ul>
										        </div>
										        <div class="col-xxs-6 col-sm col-lg col-xl">
									                <ul class="ui_kit_checkbox selectable-list">
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck7">
																<label class="custom-control-label" for="customCheck7"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck8">
																<label class="custom-control-label" for="customCheck8"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck9">
																<label class="custom-control-label" for="customCheck9"> </label>
															</div>
									                	</li>
									                </ul>
										        </div>
										        <div class="col-xxs-6 col-sm col-lg col-xl">
									                <ul class="ui_kit_checkbox selectable-list">
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck10">
																<label class="custom-control-label" for="customCheck10"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck11">
																<label class="custom-control-label" for="customCheck11"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck12">
																<label class="custom-control-label" for="customCheck12"> </label>
															</div>
									                	</li>
									                </ul>
										        </div>
										        <div class="col-xxs-6 col-sm col-lg col-xl">
									                <ul class="ui_kit_checkbox selectable-list">
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck13">
																<label class="custom-control-label" for="customCheck13"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck14">
																<label class="custom-control-label" for="customCheck14"> </label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck15">
																<label class="custom-control-label" for="customCheck15"> </label>
															</div>
									                	</li>
									                </ul>
										        </div>
									      	</div>
									      	<div class="row p15 pt0">
									      		<div class="col-lg-11 col-xl-10 pl0 pr0">
									      			<ul class="apeartment_area_list mb0">
									      				<li class="list-inline-item">
															<div class="candidate_revew_select">
																 
															</div>
									      				</li>
									      				<li class="list-inline-item">
															<div class="candidate_revew_select">
																 
															</div>
									      				</li>
									      				<li class="list-inline-item">
															<div class="candidate_revew_select">
																 
															</div>
									      				</li>
									      				<li class="list-inline-item">
															<div class="candidate_revew_select">
																 
															</div>
									      				</li>
									      			</ul>
									      		</div>
									      		<div class="col-lg-1 col-xl-2">
									      			<div class="mega_dropdown_content_closer">
										      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp"> </span></h5>
									      			</div>
									      		</div>
									      	</div>
									    </div>
									</div>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="search_option_button">
								    <button type="submit" class="btn btn-thm">   </button>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
 
	</section>

	 
	 
 
 
	<!-- boton bajo -->
	<section class="our-blog bgc-f7 pb30 oculto-movil" style="background: black !important;">
		<div class="container">
			 
			<div class="row">
				<div class="col-lg-6">
                     <h1 class="text-white">$ {{$propiedad->precio_alquiler_d}} - S/{{$propiedad->precio_alquiler_s}}</h1>
					 <button type="button" class="btn btn-lg btn-primary viewasesoria">Contactar</button>
                </div>
				<div class="col-lg-6" style="background-color:rgb(36 36 36/1); border-radius: .75rem;">
					<div class="row" style="padding: 10px;">
						<div class="col-lg-4">
							<!-- Primera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="19" height="19" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">Área total {{$propiedad->area_terreno}} m2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!-- Segunda columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="19" height="19" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">Área construida {{$propiedad->area_construido}} m2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!-- Tercera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bedroom"><path d="M16.2 5.867V0h-1.8v1.79H3.6V0H1.8v5.867C.729 6.487 0 7.627 0 8.947v3.58c0 .494.403.894.9.894h.9V17h1.8v-3.579h10.8V17h1.8v-3.579h.9c.498 0 .9-.4.9-.895V8.947c0-1.32-.73-2.46-1.8-3.08Zm-1.8-2.288v1.79H9.9v-1.79h4.5Zm-10.8 0h4.5v1.79H3.6v-1.79Zm12.6 8.053H1.8V8.947c0-.987.807-1.79 1.8-1.79h10.8c.993 0 1.8.803 1.8 1.79v2.685Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">{{$propiedad->habitaciones}} dormitorios</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<!-- Tercera columna -->
							<div class="column-content">
								<div class="row align-items-center">
									<div class="col-lg-2">
										<svg width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bathroom"><path d="M17.1 6.263H4.5V3.58c0-.987.807-1.79 1.8-1.79s1.8.803 1.8 1.79h1.8C9.9 1.605 8.285 0 6.3 0S2.7 1.605 2.7 3.579v2.684H.9c-.498 0-.9.4-.9.895v1.79c0 2.331 1.507 4.315 3.6 5.055V17h1.8v-2.684h7.2V17h1.8v-2.997c2.093-.74 3.6-2.724 3.6-5.056v-1.79a.897.897 0 0 0-.9-.894Zm-.9 2.684c0 1.974-1.615 3.58-3.6 3.58H5.4c-1.985 0-3.6-1.606-3.6-3.58v-.894h14.4v.894Z"></path></svg>
									</div>
									<div class="col-lg-10">
										<p class="text-white">{{$propiedad->banios}} baños</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			
			   </div>
				
			</div>
		</div>
	</section>

	
	<!-- DESCRIPCIÓN -->
	<section id="property-city" class="property-city pb30 bg_conoce">
		
		<div class="container">
			<div class="row" style="justify-content: center; align-items: center;">
				<div class="col-sm-6 col-lg-6 col-xl">
					 <h2 class="text-center color_principal text-heading-05 ">DESCRIPCIÓN</h2>
				</div>
				<div class="col-sm-6 col-lg-6 col-xl centro">
					 
                    <p class="text_conoce">{{$propiedad->descripcion}}</p>
					
                    

				</div>
				 
			</div>
		</div>
	</section>
	 
	<!-- Slider Grande -->
	<section class="our-team bg_fotos_p" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="text_fotos_p text-heading-05 font-semibold">CONOCE NUESTROS ESPACIOS</h2>
						<p class="text_fotos_p text-subheading-03  font-light">Visita los diversos espacios de esta propiedad</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" style="height: 600px;">
				<div class="col-lg-12">
					<div class="team_slider_custom">
                        @foreach ($fotos as $foto )
                        <div class="item">
							<img class="img-fluid" src="{{asset('./propiedad/fotos/'.$foto->foto)}}" alt="lsslider1.jpg" style="border-radius:10px;">
							 
						</div>
                        @endforeach
						
						
						 
						 
					</div>
				</div>
			</div>
			<!-- slier pequeño -->
			<div class="row justify-content-center" style="margin-top:20px;">
				<div class="col-lg-10">
					<div class="slider-three">
                        @php
                            $item=App\Models\Pro_Incluye::where('id_propiedad',$propiedad->id)->first();
                        @endphp
						<div class="item">
							<div class="feat_property list " style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
								<div class="row" style="padding:20px;width: 100%;" align="center">
									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">{{$propiedad->area_total}} m2</p>
									</div>

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg"  alt="Bathroom"><path d="M17.1 6.263H4.5V3.58c0-.987.807-1.79 1.8-1.79s1.8.803 1.8 1.79h1.8C9.9 1.605 8.285 0 6.3 0S2.7 1.605 2.7 3.579v2.684H.9c-.498 0-.9.4-.9.895v1.79c0 2.331 1.507 4.315 3.6 5.055V17h1.8v-2.684h7.2V17h1.8v-2.997c2.093-.74 3.6-2.724 3.6-5.056v-1.79a.897.897 0 0 0-.9-.894Zm-.9 2.684c0 1.974-1.615 3.58-3.6 3.58H5.4c-1.985 0-3.6-1.606-3.6-3.58v-.894h14.4v.894Z"></path></svg>
									
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">{{$propiedad->banios}} baños</p>
									</div>

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="26" height="37" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Dinning Room"><path d="M7.8 18.5h15.6c.718 0 1.33.255 1.838.764.508.51.762 1.136.762 1.879 0 .743-.257 1.37-.772 1.879-.515.51-1.124.764-1.828.764h-.975l.406 12.553a.573.573 0 0 1-.172.465.62.62 0 0 1-.457.196H20.8a.566.566 0 0 1-.427-.196.745.745 0 0 1-.203-.465l-.365-12.553H9.1L7.028 36.36c-.068.427-.277.64-.63.64H4.895a.62.62 0 0 1-.457-.196.548.548 0 0 1-.172-.444l1.93-12.574c-.055-.028-.353-.066-.894-.114-.542-.048-.992-.23-1.351-.547-.36-.317-.647-.867-.864-1.652-.216-.812-.396-1.844-.538-3.097a113.174 113.174 0 0 1-.406-4.573c-.129-1.797-.22-2.977-.274-3.541C1.8 9.49 1.473 8.276.884 6.617.294 4.96 0 3.634 0 2.643 0 2.01.213 1.41.64.847 1.066.282 1.72 0 2.6 0c.799 0 1.395.258 1.788.774.392.516.751 1.318 1.076 2.406C6.696 7.282 7.475 12.388 7.8 18.5Z"></path></svg>
									
									
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">Comedor</p>
									</div>
									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="24" height="26" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Washing Machine"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 2.6h16c.354 0 .693.137.943.38.25.245.39.575.39.92v3.9H2.667V3.9c0-.345.14-.675.39-.92.25-.243.59-.38.943-.38Zm17.333 19.5V10.4H2.667v11.7c0 .345.14.675.39.92.25.243.59.38.943.38h16c.354 0 .693-.137.943-.38.25-.245.39-.575.39-.92ZM0 3.9c0-1.034.421-2.026 1.172-2.758A4.053 4.053 0 0 1 4 0h16c1.06 0 2.078.41 2.828 1.142A3.851 3.851 0 0 1 24 3.9v18.2a3.851 3.851 0 0 1-1.172 2.758A4.052 4.052 0 0 1 20 26H4c-1.06 0-2.078-.41-2.828-1.142A3.851 3.851 0 0 1 0 22.1V3.9Zm5.333 0a1.35 1.35 0 0 0-.942.38C4.14 4.526 4 4.856 4 5.2c0 .345.14.675.39.92.25.243.59.38.943.38H8c.354 0 .693-.137.943-.38.25-.245.39-.575.39-.92 0-.345-.14-.675-.39-.92A1.35 1.35 0 0 0 8 3.9H5.333Zm9.334 2.6c.353 0 .692-.137.943-.38.25-.245.39-.575.39-.92 0-.345-.14-.675-.39-.92-.25-.243-.59-.38-.943-.38a1.35 1.35 0 0 0-.943.38c-.25.245-.39.575-.39.92 0 .345.14.675.39.92.25.243.589.38.943.38ZM20 5.2c0 .345-.14.675-.39.92-.25.243-.59.38-.943.38a1.35 1.35 0 0 1-.943-.38 1.284 1.284 0 0 1-.39-.92c0-.345.14-.675.39-.92.25-.243.589-.38.943-.38.353 0 .692.137.942.38.25.245.391.575.391.92Zm-5.333 11.7c0 .69-.281 1.35-.781 1.838S12.707 19.5 12 19.5a2.702 2.702 0 0 1-1.886-.762 2.567 2.567 0 0 1-.78-1.838c0-.69.28-1.35.78-1.838A2.702 2.702 0 0 1 12 14.3c.707 0 1.386.274 1.886.761.5.488.78 1.15.78 1.839Zm2.666 0c0 1.38-.562 2.702-1.562 3.677A5.404 5.404 0 0 1 12 22.1a5.404 5.404 0 0 1-3.771-1.523A5.135 5.135 0 0 1 6.667 16.9c0-1.38.562-2.702 1.562-3.677A5.404 5.404 0 0 1 12 11.7c1.415 0 2.771.548 3.771 1.523a5.135 5.135 0 0 1 1.562 3.677Z"></path></svg>
									
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">Lavandería</p>
									</div>
								</div>
								
                                
							</div>
						</div>
						<div class="item">
							<div align="center" class="feat_property list" style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
								<div class="row" style="padding:20px;width: 100%;" align="center">
									

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="20" height="25" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Kitchen"><path d="M17.5.013 2.5 0A2.5 2.5 0 0 0 0 2.5v20C0 23.875 1.125 25 2.5 25h15c1.375 0 2.5-1.125 2.5-2.5v-20A2.489 2.489 0 0 0 17.5.013Zm0 22.487h-15V11.225h15V22.5Zm0-13.75h-15V2.5h15v6.25ZM5 3.75h2.5V7.5H5V3.75Zm0 8.75h2.5v6.25H5V12.5Z"></path></svg>
									
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">Cocina</p>
									</div>

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bedroom"><path d="M16.2 5.867V0h-1.8v1.79H3.6V0H1.8v5.867C.729 6.487 0 7.627 0 8.947v3.58c0 .494.403.894.9.894h.9V17h1.8v-3.579h10.8V17h1.8v-3.579h.9c.498 0 .9-.4.9-.895V8.947c0-1.32-.73-2.46-1.8-3.08Zm-1.8-2.288v1.79H9.9v-1.79h4.5Zm-10.8 0h4.5v1.79H3.6v-1.79Zm12.6 8.053H1.8V8.947c0-.987.807-1.79 1.8-1.79h10.8c.993 0 1.8.803 1.8 1.79v2.685Z"></path></svg>
									
									</div>
									<div class="col-lg-2 col-4">
									<p class="pcard text-white">Dormitorio de Servicio</p>
									</div>
									<div class="col-lg-1 col-2" >
										<svg class="imgsvg" width="29" height="24" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Living Room"><path d="M26.1 8.45V2.94c0-.78-.307-1.526-.85-2.077A2.884 2.884 0 0 0 23.2 0H5.8c-.769 0-1.506.31-2.05.862a2.962 2.962 0 0 0-.85 2.077V8.45A3.87 3.87 0 0 0 .811 9.846 3.96 3.96 0 0 0 0 12.245v6.857c0 .52.204 1.017.567 1.385.362.367.854.574 1.366.574H2.9V24h1.933v-2.939h19.334V24H26.1v-2.939h.967c.512 0 1.004-.207 1.366-.574.363-.367.566-.865.567-1.385v-6.857a3.96 3.96 0 0 0-.811-2.399A3.87 3.87 0 0 0 26.1 8.451ZM5.8 19.103H1.933v-6.857c0-.52.204-1.018.567-1.385a1.92 1.92 0 0 1 1.367-.574 1.92 1.92 0 0 1 1.367.574c.362.367.566.865.566 1.385v6.857Zm15.467 0H7.733v-5.877h13.534v5.877Zm.122-7.837H7.611A3.947 3.947 0 0 0 6.6 9.475a3.87 3.87 0 0 0-1.767-1.024V2.939c0-.26.103-.509.284-.693A.961.961 0 0 1 5.8 1.96h17.4c.256 0 .502.104.683.287a.988.988 0 0 1 .284.693V8.45A3.87 3.87 0 0 0 22.4 9.476a3.947 3.947 0 0 0-1.011 1.79Zm1.811 7.837v-6.857c0-.52.204-1.018.566-1.385a1.92 1.92 0 0 1 1.367-.574 1.92 1.92 0 0 1 1.367.574c.363.367.567.865.567 1.385v6.857H23.2Z"></path></svg>
									
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Sala de estar</p>
									</div>

									<div class="col-lg-1 col-2">
										<svg class="imgsvg" width="30" height="27" viewBox="0 0 44 27" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Rooms"><path d="M21.994 2.37c.816-.98 1.798-1.37 2.976-1.363 3.865.02 7.73.006 11.596.006 2.043 0 3.533 1.584 3.54 3.752v3h.625c1.32.012 2.258.999 2.264 2.395.007 2.194.007 4.394 0 6.588-.006 2.675-1.791 4.661-4.313 4.817-.055.006-.116.013-.214.026.196.558.38 1.097.57 1.63.178.499.184.999-.012 1.486-.32.779-.884 1.233-1.7 1.278-.368.02-.736.013-1.104.007-.632-.02-1.135-.312-1.515-.844-.798-1.11-1.596-2.22-2.38-3.343a.493.493 0 0 0-.455-.24c-6.57.006-13.148.006-19.719 0-.22 0-.35.078-.478.26-.773 1.103-1.565 2.187-2.344 3.29-.417.585-.963.89-1.656.883-.32 0-.632.007-.951-.006-1.326-.052-2.203-1.409-1.761-2.733.184-.545.38-1.09.576-1.662-.306-.039-.576-.058-.846-.104-2.098-.383-3.663-2.297-3.681-4.543a509.508 509.508 0 0 1 0-6.849c.006-1.318.95-2.31 2.196-2.343.22-.007.442 0 .7 0 0-.805-.007-1.571 0-2.337.006-.474-.013-.954.06-1.422.252-1.635 1.584-2.882 3.154-2.98.227-.012.448-.006.675-.006 3.632 0 7.258.026 10.89-.013 1.289-.013 2.43.247 3.307 1.37Zm-.012 17.578h16.443c1.803 0 3.043-1.317 3.049-3.226.006-2.155 0-4.303 0-6.459 0-.63-.246-.889-.835-.895-.963-.007-1.92 0-2.883 0-.614 0-.86.253-.86.902v5.226c0 .74-.263 1.025-.962 1.025H8.018c-.632 0-.908-.299-.908-.98v-5.258c0-.65-.24-.909-.847-.909H3.411c-.645 0-.878.247-.878.909v6.491c0 .214.006.435.05.643.281 1.525 1.46 2.525 2.987 2.525 5.467.013 10.94.006 16.412.006ZM38.578 7.764v-2.98c0-1.297-.81-2.16-2.037-2.16H24.823c-1.264 0-2.062.856-2.062 2.193V10.77c.976-.805 2.025-.987 3.154-.98 3.024.026 6.05.006 9.08.006h.362c.025-.071.043-.123.055-.175.3-1.182 1.123-1.857 2.276-1.863.283 0 .571.006.89.006Zm-17.35 2.98c.005-.123.018-.175.018-.227v-5.81c0-.195-.025-.39-.074-.578-.24-.928-.982-1.506-1.95-1.506-3.915-.006-7.836 0-11.75 0-.123 0-.245.013-.368.026-.847.104-1.607.838-1.65 1.733-.056 1.11-.013 2.227-.013 3.395 1.54-.168 2.798.189 3.203 2.026H18.534c.215 0 .43.013.644.039.743.09 1.405.409 2.05.902Zm-.031 4.148c.356-2.26-1.197-3.486-2.571-3.48-3.221.02-6.442.007-9.657.007-.098 0-.196.006-.307.013v3.46h12.535Zm14.16-3.473h-.614c-3.14 0-6.276-.007-9.417 0-1.687.006-2.976 1.798-2.516 3.466h12.54c.007-1.155.007-2.291.007-3.466ZM9.938 21.565c-.926 0-1.773-.007-2.62.006-.067 0-.165.085-.19.15a84.314 84.314 0 0 0-.736 2.096c-.08.24.013.487.233.513.411.052.835.02 1.246.007.055 0 .129-.072.172-.124.613-.857 1.227-1.72 1.895-2.648Zm24.124 0c.663.928 1.277 1.791 1.902 2.642.068.09.209.156.313.162.313.02.632.02.951.007.32-.02.479-.273.368-.585a61.456 61.456 0 0 0-.717-2.038c-.031-.078-.136-.182-.203-.182-.84-.013-1.687-.006-2.614-.006Z"></path></svg>
										
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Salas</p>
									</div>

								</div>
								
							</div>
						</div>
						<div class="item">
							<div class="feat_property list" style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
								<div class="row" style="padding:20px;width: 100%;" align="center">
									
									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="18" height="17" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Bedroom"><path d="M16.2 5.867V0h-1.8v1.79H3.6V0H1.8v5.867C.729 6.487 0 7.627 0 8.947v3.58c0 .494.403.894.9.894h.9V17h1.8v-3.579h10.8V17h1.8v-3.579h.9c.498 0 .9-.4.9-.895V8.947c0-1.32-.73-2.46-1.8-3.08Zm-1.8-2.288v1.79H9.9v-1.79h4.5Zm-10.8 0h4.5v1.79H3.6v-1.79Zm12.6 8.053H1.8V8.947c0-.987.807-1.79 1.8-1.79h10.8c.993 0 1.8.803 1.8 1.79v2.685Z"></path></svg>
										
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Cuarto de Servicio</p>
									</div>
									<div class="col-lg-1 col-2">
										<svg class="imgsvg" width="33" height="28" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="AllowPets"><path d="M21.845 7.308c.387 0 .748-.006 1.11.007.07.006.161.09.2.162.38.718.98 1.048 1.787 1.042.839-.006 1.677 0 2.516-.006.297 0 .607 0 .897-.059 1.464-.285 2.232-1.333 2.78-2.524-.232-.305-.47-.55-.645-.842-.11-.181-.213-.259-.413-.278-1.11-.104-2.064-.557-2.864-1.334a98.078 98.078 0 0 1-1.42-1.417c-.541-.544-1.174-.848-1.954-.842-.955.006-1.916 0-2.871.006-.116 0-.226.013-.368.02v5.89c0 1.412-.536 2.584-1.787 3.25-.6.318-.716.687-.639 1.256.026.2-.058.31-.226.408a175.98 175.98 0 0 0-3.367 1.968c-2.11 1.269-4.226 2.524-6.304 3.839-1.71 1.08-2.516 3.075-2.129 5.01.465 2.305 2.394 3.884 4.794 3.903 1.774.014 3.548.007 5.323.007h.651c-.523-.939-1.49-1.113-2.303-1.554.626-1.08 1.148-2.175 1.103-3.45-.045-1.275-.503-2.363-1.361-3.276.29-.297.561-.576.845-.86 1.207 1.249 1.748 2.757 1.748 4.395l2.452-.175V20.69c.297 0 .555.02.806-.006.304-.026.407.064.4.388-.013 1.76-.006 3.515-.006 5.276v.401h4.471c-.684-1.165-1.852-1.133-2.955-1.308.161-1.275.316-2.537.484-3.793.013-.097.116-.2.2-.265.361-.285.755-.538 1.103-.835 1.4-1.179 1.936-3.438 1.258-5.14-.4-.997-1.084-1.748-1.903-2.396-.18-.142-.252-.284-.245-.51.013-1.004 0-2.008.013-3.011.006-.24-.078-.395-.252-.544a2.789 2.789 0 0 1-.929-1.638ZM33 4.874c0 .214-.058.428-.161.615-.4.693-.8 1.418-1.252 2.104-.884 1.347-2.155 2.078-3.768 2.137-.954.038-1.916.006-2.87.006h-.704c0 .744.007 1.457-.006 2.162a.543.543 0 0 0 .22.492c1.102.926 1.838 2.078 2.083 3.509.426 2.524-.413 4.557-2.452 6.085-.232.174-.367.343-.393.64-.052.583-.136 1.166-.207 1.761.69.117 1.297.337 1.794.77.316.279.62.603.845.965.535.842-.013 1.852-1.013 1.864-1.47.026-2.948.013-4.42.007-.715 0-1.296-.59-1.303-1.308v-3.528c-.593 0-1.154-.02-1.71.007-.36.02-.657.226-.85.524-.2.298-.362.628-.55.958.743.343 1.298.835 1.698 1.502.31.518.232 1.094-.194 1.502-.303.291-.67.343-1.07.343-4.936-.006-9.872 0-14.807-.006a2.23 2.23 0 0 1-.51-.052 1.75 1.75 0 0 1-1.194-.92A1.754 1.754 0 0 1 0 26.166c0-.317.084-.621.239-.893.406-.686.935-.925 1.858-.925 1.07.006 2.148 0 3.258 0-.052-.137-.09-.247-.13-.35-.883-2.318-.18-5.166 1.788-6.661 1.361-1.03 2.826-1.923 4.284-2.816 1.787-1.094 3.62-2.123 5.426-3.185.116-.065.193-.194.348-.35a10.556 10.556 0 0 0-.277-.038c-1.44-.11-2.388-.913-3.04-2.143-.412-.783-.418-1.631-.418-2.486.006-.945.316-1.754.974-2.421.929-.945 1.864-1.884 2.806-2.816.671-.66 1.471-1.055 2.42-1.068 1.503-.02 3.012-.013 4.516-.007.91.007 1.703.337 2.36.959.517.485.988 1.022 1.524 1.495.393.343.825.667 1.283.893.736.356 1.549.304 2.342.292.53-.007.955.129 1.245.556.13.2.194.434.194.673Zm-13.6-3.58c-.568.04-1.039.26-1.503.72-.91.906-1.807 1.812-2.716 2.718-.4.395-.633.867-.633 1.437 0 .453-.012.906.026 1.36.116 1.501 1.652 2.53 3.078 2.084 1.103-.343 1.735-1.243 1.741-2.473V1.644c.007-.116.007-.233.007-.35ZM7.187 26.775c-.348-.376-.658-.725-.98-1.049a.518.518 0 0 0-.33-.136c-1.29-.013-2.58-.013-3.864-.02-.11 0-.213.007-.323.02a.582.582 0 0 0-.477.57.57.57 0 0 0 .49.59c.149.018.297.018.452.018h2.961c.684.007 1.368.007 2.071.007Z"></path><path d="M26.058 3.975a.902.902 0 0 1-.91.893.916.916 0 0 1-.903-.906.91.91 0 0 1 .93-.913c.496.013.89.42.883.926Z"></path></svg>
									
										
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Permite mascotas</p>
									</div>

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="30" height="28" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="GuestBathroom"><path d="M28.5 10.316h-21V5.895c0-1.626 1.345-2.948 3-2.948s3 1.322 3 2.948h3C16.5 2.644 13.809 0 10.5 0s-6 2.644-6 5.895v4.42h-3c-.83 0-1.5.66-1.5 1.475v2.947c0 3.84 2.511 7.107 6 8.326V28h3v-4.421h12V28h3v-4.937c3.489-1.219 6-4.486 6-8.326V11.79c0-.815-.67-1.474-1.5-1.474Zm-1.5 4.42c0 3.252-2.691 5.896-6 5.896H9c-3.309 0-6-2.644-6-5.895v-1.474h24v1.474Z"></path></svg>
										
										
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Baño de visita</p>
									</div>

									<div class="col-lg-1 col-2">
									<svg class="imgsvg" width="21" height="20" xmlns="http://www.w3.org/2000/svg" fill="#fbcb00" alt="Free Charges Encumbrances"><path d="M20.7 3.3c0-1.7-1.3-3-3-3h-14c-1.7 0-3 1.3-3 3v2.8c0 1.1.4 2 1 2.7v8.4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8.8c.6-.7 1-1.7 1-2.7V3.3Zm-2 0v2.8c0 1.1-.8 2.1-1.9 2.2h-.1c-1.1 0-2-.9-2-2v-4h3c.5 0 1 .5 1 1Zm-10-1h4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4Zm-6 1c0-.6.4-1 1-1h3v4c0 1.1-.9 2-2 2h-.1c-1-.1-1.9-1-1.9-2.2V3.3Zm6 14v-3h4v3h-4Zm6 0v-3c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v3h-3v-7.1c.3.1.5.1.8.1 1.3.1 2.4-.5 3.2-1.4.7.8 1.8 1.4 3 1.4s2.3-.5 3-1.4c.8.9 1.9 1.4 3.2 1.4.3 0 .5-.1.8-.1v7.1h-3Z"></path></svg>
									
										
									</div>
									<div class="col-lg-2 col-4">
										<p class="pcard text-white">Libre de cargas y gravámenes</p>
									</div>
								</div>
									   
							</div>
						</div>
                        
					</div>
				</div>
			</div>

			<!-- video -->
			<div class="row">
				<div class="col-lg-12">
                    <div class="shop_single_tab_content style2 mt30 bg_videos_p" style="border-bottom: none;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="justify-content: center;border-bottom: none;">
                            <li class="nav-item">
                                <a class="btn btn-lg btn-transparent btn-block circle active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Propiedad</a>
							</li>
                            <li class="nav-item oculto-movil">
                                <a class="btn btn-lg btn-transparent btn-block circle" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Alrededores</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="property_video">
                                    <div class="thumb" align="center" style="margin-top:20px;">
                                        @if (isset($videos[0]))
                                            <video src="{{asset('./propiedad/videos/'.$videos[0]->video)}}"  controls controlslist="nodownload" class="pro_img " style="border-radius: 10px;" poster width="1080" height="720"></video>
                                        @endif
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="listing" role="tabpanel" aria-labelledby="listing-tab">
                                <div class="property_video">
                                    <div class="thumb">
                                        @if (isset($videos_alrededor[0]))
                                            <video src="{{asset('./propiedad/alrededores/'.$videos_alrededor[0]->video)}}"  controls controlslist="nodownload" class="pro_img " style="border-radius: 10px;" poster width="1080" height="720"></video>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
 
	 


	<!-- videos -->
	

	<!-- UBÍCANOS -->
	<section class="our-blog bgc-f7 pb30 bg_polga_p">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="text_polga_p text-subheading-01 font-bold">UBÍCANOS EN</h2>
					 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
                    <div class="feat_property list">
						  
							<div class="col-lg-4">
								<div class="details">
									<div class="tc_content">
										<h3 class="text-subheading-02 font-semibold">{{$propiedad->direccion}}</h3>
										<h3 class="text-subheading-02 ">{{$propiedad->provincia}}</h3>
										<span class="text-paragraph-01">Cerca a todo lo que necesites</span>
										<p class="text-justify">{{$propiedad->referencia}}</p>
										
									</div>
									 
								</div>
							</div>
							<div class="col-lg-8">
                                <div id="mapa" style="width:100%; height:400px; padding:10px;"></div>
							</div>
						 
                    </div>
                </div>
				 
			</div>
		</div>
	</section>

	<!-- formulario -->
	<section class="our-team bg_polga_p" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="text_polga_p text-subheading-03 font-light">DESCUBRE COMO</h2>
						<h2 class="text-secundario text-subheading-03 font-bold">VENDER TU PROPIEDAD M&Aacute;S R&Aacute;PIDO</h2>
					 
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<form class="home5_advanced_search_form">
						<div class="main-title text-center" style="margin-bottom:20px;">
							<h2 class="text-subheading-02 font-semibold">¿Deseas una visita guiada virtual a la propiedad?</h2>
							<p style="font-size: 25px;" class="text-subheading-02 font-semibold">Cont&aacute;ctame</p>
						</div>
						<div class="form-group">
							<!-- <label for="exampleInputName1">Nombre Completo <span class="preferen">*</span></label> -->
							<input type="text" class="form-control" id="exampleInputNombres" placeholder="Nombre Completo ">
						</div>
						<div class="form-group">
							<!-- <label for="exampleInputName1">Celular<span class="preferen">*</span></label> -->
							<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
						</div>
						 
						<div class="row">
							<div class="col">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPhone" placeholder="Dni">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPhone" placeholder="Celular">
								</div>
							</div>
						</div>
						<div class="form-group">
							<!-- <label for="exampleInputName1">Celular<span class="preferen">*</span></label> -->
							 
								<textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Escribe aquí..."></textarea>
						 
							
						</div>

						<div class="search_option_button home5">
							<button type="submit" class="btn btn-block">Contactar</button>
						</div>
					</form>
				</div>
			</div>
			 
		</div>
	</section>

    <!-- Propiedades-->
	<section>
	 
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2 class="indhead color_principal text-subheading-01 font-bold">MÁS PROPIEDADES</h2>
						<p class="indp color_principal text-subheading-03">Hechos para ti</p>
					</div>
				</div>
				<div class="col-lg-12 boxsec">
					<div class="customslider">
                        @foreach ($pro_ventas as $item)
                        <div class="item">
							<div class="feat_property">
								<div class="thumb" style="height: 350px;">
                                @php
                                    $aux=App\Models\Pro_Foto::where('destacado', 'SI')->where('id_propiedad',$item->id)->first();
                                @endphp
                                    <img class="img-whp" src="{{asset('./propiedad/fotos/'.$aux->foto)}}"  alt="fp1.jpg">
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">{{$item->tipo_casa}}</p>
										 <div class="d-flex">
											 <div class="row" style="width:100%;">
												<div class="col-lg-8">
                                                    <p class="line-clamp-1" style="max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b>{{$item->nombre}}</b></p>
                                                    <p>{{$item->direccion}}</p>
												</div>
												<div class="col-lg-4" align="right">
                                                    <p class="price">${{$item->precio_alquiler_d}} - S/{{$item->precio_alquiler_s}}</p>
                                                </div>
											 </div>
										 </div>
										<hr>
										<div class="row contentlist" style="justify-content: space-between; white-space: nowrap; margin-right: 3px;">
											 
												<div class="d-flex align-items-center  col-6 col-md-3" style="gap: 2px;">
													 
													<div class="icon-container">
														<svg class="imgsvg" width="19" height="19" xmlns="http://www.w3.org/2000/svg" alt="Area">
															<path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path>
														</svg>
													</div>
													<p class="pcard" style="margin-left:20px;">{{$item->area_terreno}} m2</p>
												</div>
												<div class="d-flex align-items-center  col-6 col-md-3" style="gap: 2px;">
													<div class="icon-container">
														<svg class="imgsvg" width="18" height="17" xmlns="http://www.w3.org/2000/svg" alt="Bedroom"><path d="M16.2 5.867V0h-1.8v1.79H3.6V0H1.8v5.867C.729 6.487 0 7.627 0 8.947v3.58c0 .494.403.894.9.894h.9V17h1.8v-3.579h10.8V17h1.8v-3.579h.9c.498 0 .9-.4.9-.895V8.947c0-1.32-.73-2.46-1.8-3.08Zm-1.8-2.288v1.79H9.9v-1.79h4.5Zm-10.8 0h4.5v1.79H3.6v-1.79Zm12.6 8.053H1.8V8.947c0-.987.807-1.79 1.8-1.79h10.8c.993 0 1.8.803 1.8 1.79v2.685Z"></path></svg>
													</div>
													<p class="pcard" style="margin-left:20px;">{{$item->habitaciones}} dorm</p>
												</div>
												<div class="d-flex align-items-center  col-6 col-md-3" style="gap: 2px;">
													<div class="icon-container">
														<svg class="imgsvg" width="18" height="17" xmlns="http://www.w3.org/2000/svg" alt="Bathroom"><path d="M17.1 6.263H4.5V3.58c0-.987.807-1.79 1.8-1.79s1.8.803 1.8 1.79h1.8C9.9 1.605 8.285 0 6.3 0S2.7 1.605 2.7 3.579v2.684H.9c-.498 0-.9.4-.9.895v1.79c0 2.331 1.507 4.315 3.6 5.055V17h1.8v-2.684h7.2V17h1.8v-2.997c2.093-.74 3.6-2.724 3.6-5.056v-1.79a.897.897 0 0 0-.9-.894Zm-.9 2.684c0 1.974-1.615 3.58-3.6 3.58H5.4c-1.985 0-3.6-1.606-3.6-3.58v-.894h14.4v.894Z"></path></svg>
													</div>
													<p class="pcard" style="margin-left:20px;">{{$item->banios}} baños</p>
												</div>
												<div class="d-flex align-items-center  col-6 col-md-3" style="gap: 2px;">
													<div class="icon-container">
														<svg width="18" height="19" xmlns="http://www.w3.org/2000/svg" alt="Garage"><path d="M.9 16.837v1.213c0 .525.402.95.9.95h.9c.498 0 .9-.425.9-.95v-.95h10.8v.95c0 .525.402.95.9.95h.9c.498 0 .9-.425.9-.95v-1.213c.536-.33.9-.935.9-1.637v-2.85c0-.79-.456-1.465-1.105-1.752l-1.231-3.9c-.368-1.165-1.397-1.948-2.56-1.948H4.896c-1.164 0-2.193.783-2.56 1.949l-1.232 3.899C.456 10.885 0 11.56 0 12.35v2.85c0 .701.364 1.307.9 1.637ZM3.15 15.2c-.745 0-1.35-.638-1.35-1.425s.605-1.425 1.35-1.425c.745 0 1.35.639 1.35 1.425 0 .787-.605 1.425-1.35 1.425Zm11.7 0c-.745 0-1.35-.638-1.35-1.425s.605-1.425 1.35-1.425c.745 0 1.35.639 1.35 1.425 0 .787-.605 1.425-1.35 1.425ZM4.897 6.65h8.205c.388 0 .732.262.854.65l.996 3.15H3.048l.995-3.15a.906.906 0 0 1 .854-.65Z"></path><path d="M18 5.119V3.115L9.284.05a.852.852 0 0 0-.592.008L0 3.394v2.021l9.014-3.46L18 5.12Z"></path></svg>
													</div>
													<p class="pcard" style="margin-left:20px;">{{$item->cocheras}} cochera</p>
												</div>
											 
										</div>
										 
									</div>
									<div class="fp_footer">
 										<div class="row">
										  <div class="col-lg-12">
											<a href="{{ route('detalle.propiedad',$item->nombre) }}" type="button" class="btn btn-lg btn-transparent btn-block">Ver Propiedad</a>
										  </div>
										</div> 
									</div>
								</div>
							</div>
						</div>
                        @endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>
	 

	 

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="text-center">
				<h2 class="text-white">Jassan</h2>
				<p class="text-white">Agente Inmobiliario</p>
				<p class="text-white">{{$con_informacion->texto_footer}}</p>
				<a class="text-white" href="">Políticas de privacidad</a>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40" style=" padding-top: 21px;padding-bottom: 21px;">
		<div class="container">
			<div class="row justify-content-center">
				@php
					$fechaActual = now();
				@endphp
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-center">
						<p>© {{ $fechaActual->year }} jassan.pe Todos los derechos reservados por Winning & Co. SAC</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="hidden redes" >
        <a href="{{$per_redes->face_link}}"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
        <a href="{{$per_redes->insta_link}}"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
        <a href="{{$per_redes->you_link}}"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>
        <a href="{{$per_redes->lin_link}}"><svg height="20" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg"><path d="M3.18605 4.376C4.39445 4.376 5.37405 3.3964 5.37405 2.188C5.37405 0.979601 4.39445 0 3.18605 0C1.97765 0 0.998047 0.979601 0.998047 2.188C0.998047 3.3964 1.97765 4.376 3.18605 4.376Z" ></path><path d="M7.44005 6.034V18.173H11.209V12.17C11.209 10.586 11.507 9.052 13.471 9.052C15.408 9.052 15.432 10.863 15.432 12.27V18.174H19.203V11.517C19.203 8.247 18.499 5.734 14.677 5.734C12.842 5.734 11.612 6.741 11.109 7.694H11.058V6.034H7.44005ZM1.29805 6.034H5.07305V18.173H1.29805V6.034Z" ></path></svg></a>
                             
    </div>
        <div id="btn-asesoria" class="btn-flotante">
          <svg width="28" height="29" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="icon-color-inherit fill-principal" alt="Advisory">
            <path
              d="M11 13.2c1.8 0 3.4-.7 4.7-1.9 1.2-1.2 1.9-2.9 1.9-4.7 0-1.8-.7-3.4-1.9-4.7C14.5.7 12.8 0 11 0 9.3 0 7.6.7 6.4 1.9c-1.2 1.2-2 2.9-2 4.7 0 1.8.7 3.4 1.9 4.7 1.3 1.2 3 1.9 4.7 1.9ZM7.5 3.1c1-.9 2.2-1.4 3.5-1.4 1.3 0 2.6.5 3.5 1.4 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5-.9.9-2.2 1.4-3.5 1.4-1.3 0-2.6-.5-3.6-1.4-.9-.9-1.4-2.2-1.4-3.5 0-1.3.5-2.6 1.4-3.5Z"
              fill="url(#ic_advisory_svg__a)"></path>
            <path
              d="M10.1 24.5c-.4 0-1.1 0-1.7-.1-1.3-.1-2.5-.3-3.6-.6-.9-.2-1.6-.5-2.3-.8-.5-.3-.8-.5-1-.8-.2-.2-.2-.4-.2-.6 0-.7.2-1.3.3-1.9.4-.9.8-1.7 1.4-2.3.6-.6 1.2-1.1 2-1.5.4-.2.9-.4 1.4-.5 1.2.8 2.5 1.2 3.9 1.3h.8c.7 0 1.3-.1 1.8-.2 1-.2 1.9-.6 2.7-1.1 1.2.3 2.2.8 3.1 1.6.8.8 1.4 1.8 1.8 2.9.2.5.3 1.1.3 1.7l.4.1c.3-.3.6-.7.9-1.1-.1-.4-.1-.8-.3-1.2-.4-1.3-1.1-2.5-2.2-3.4a6.94 6.94 0 0 0-4.1-2h-.1c-.1 0-.2 0-.3.1-.8.5-1.6.9-2.5 1.1-.6.1-1.4.2-2.2.1C9.2 15.2 8 14.8 7 14c-.1-.1-.2-.1-.4-.1-.8.1-1.5.4-2.2.7-.9.5-1.7 1.1-2.4 1.8-.7.8-1.3 1.8-1.6 2.8-.2.7-.4 1.4-.4 2.2 0 .6.1 1.2.5 1.6.3.4.8.7 1.4 1.1.7.4 1.5.7 2.5 1 1.2.3 2.4.5 3.8.6.6.1 1.3.1 1.7.1h.4c1.9 0 3.5-.1 5-.3 0-.5.1-1 .3-1.4-1.5.3-3.1.4-5.3.4h-.2Z"
              fill="url(#ic_advisory_svg__b)"></path>
            <path
              d="M27.2 14.9c-.2-.9-.8-1.6-1.6-1.8l-.8-.3h-.5c-.6 0-1.2.4-1.5 1l-.7 1.6-.1.2c-.1.3-.1.6 0 1 .1.3.2.6.5.8l1.5 1.4v.4c-.1.7-.4 1.4-.8 2.1-.4.6-.8 1.1-1.3 1.6l-.4.4-1.3-.4-.4-.1h-.5c-.2 0-.4 0-.6.1-.3.1-.5.3-.7.6l-.4.6-.5.8-.1.2c-.1.2-.2.4-.2.7v.4c.1.4.2.7.5 1l.6.6.2.1c.4.4 1 .6 1.5.6.2 0 .5 0 .7-.1 1.9-.6 3.7-2.4 5.4-5.4 1.4-3.5 2-6 1.5-8.1Z"
              fill="url(#ic_advisory_svg__c)"></path>
            <defs>
              <linearGradient id="ic_advisory_svg__a" x1="13.687" y1="0" x2="13.687" y2="28.5"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#4d0505"></stop>
                <stop offset="1" stop-color="#4d0505"></stop>
              </linearGradient>
              <linearGradient id="ic_advisory_svg__b" x1="13.687" y1="0" x2="13.687" y2="28.5"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#4d0505"></stop>
                <stop offset="1" stop-color="#4d0505"></stop>
              </linearGradient>
              <linearGradient id="ic_advisory_svg__c" x1="13.687" y1="0" x2="13.687" y2="28.5"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#4d0505"></stop>
                <stop offset="1" stop-color="#4d0505"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>
	<!-- asesoria form-->
	<div id="form_asesoria"
        class="bg-white sec-ase" style="display:none; z-index:20; position: fixed;flex-direction: column;">
        <div id="closeas"
            class="ase-close">
            x
        </div>
		<div class="ase-imgc">
			<img src="{{asset('web/images/bg-principal/jassan.jpg')}}" alt="" class="ase-bgimg">
		</div>
         
        <h3 class="font-semibold text-center">¿Quieres recibir una asesoría?
        </h3>
        <h3 class="mt-1 mb-4 font-semibold text-center">Contáctame</h3>
        <form>
            <div class="form-group">
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Celular">
            </div>
			<div class="form-group">
				<button type="button" class="btn btn-lg btn-transparent btn-block">Quiero asesoría</button>
			 </div>
         </form>
    </div>
	<!-- end asesoria -->
	

</div>

<div class="whatsapp_chat_support wcs_fixed_right" id="example_3" >
	 
	<div class="wcs_button wcs_button_circle">
		<span class="fa fa-whatsapp"></span>
	</div>  
 
</div>

<!-- Wrapper End -->
<script type="text/javascript" src="{{asset('web/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/pricing-slider.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/timepicker.js')}}"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('web/js/script.js')}}"></script>
<script src="{{asset('web/plugin/components/moment/moment.min.js')}}"></script>
<script src="{{asset('web/plugin/components/moment/moment-timezone-with-data-10-year-range.min.js')}}"></script>
<script src="{{asset('web/plugin/whatsapp-chat-support.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyCShqlh7VDQb7M5k2y5KgdzAAjfN8Fdv3E&amp;&callback=iniciarMapa"></script>
<script>
    document.getElementById('btn-asesoria').addEventListener('click', function() {
    var formAsesoria = document.getElementById('form_asesoria');
    formAsesoria.style.display = formAsesoria.style.display === 'none' ? 'block' : 'none';
    });

    function iniciarMapa(){
        
        
        generarMapa();
    }
    function generarMapa(){
        
        
        google.maps.event.addDomListener(window, 'load', function() {

            
            var latitud ={{$propiedad->latitud}};
            var longitud ={{$propiedad->longitud}};
        
            
            const myLatLng = { lat: latitud, lng: longitud };
            
            const  mapa = new google.maps.Map(document.getElementById('mapa'),
            {
                zoom: 15,
                center: myLatLng
            });
            const marcador = new google.maps.Marker({
                map: mapa,
                draggable:false,
                position: myLatLng
            });
            
            
        });
        
    }




    //COLORES//
    var portada = "url(../../propiedad/fotos/{{ $fotos[0]->foto }})";
    var color_derechos = "{{ $tema->color_derechos }}";
    var color_barra_superior = "{{ $tema->color_barra_superior }}";
    var color_texto_superior = "{{ $tema->color_texto_superior }}";
    var color_fondo_general = "{{ $tema->color_fondo_general }}";
    var color_texto_general = "{{ $tema->color_texto_general }}";
    var color_principal = "{{ $tema->color_principal }}";
    var color_boton_primario = "{{ $tema->color_boton_primario }}";
    var color_boton_texto_primario = "{{ $tema->color_boton_texto_primario }}";
    var color_boton_sec = "{{ $tema->color_boton_sec }}";
    var color_boton_texto_sec = "{{ $tema->color_boton_texto_sec }}";
    var color_fondo_conoce = "{{ $tema->color_fondo_conoce }}";
    var color_texto_conoce = "{{ $tema->color_texto_conoce }}";
    var color_fondo_fotos = "{{ $tema->color_fondo_fotos }}";
    var color_texto_fotos = "{{ $tema->color_texto_fotos }}";
    var color_fondo_videos = "{{ $tema->color_fondo_videos }}";
    var color_texto_videos = "{{ $tema->color_texto_videos }}";
    var color_fondo_polga = "{{ $tema->color_fondo_polga }}";
    var color_texto_polga = "{{ $tema->color_texto_polga }}";
    
    document.documentElement.style.setProperty('--portada', portada);
    document.documentElement.style.setProperty('--bg-benefits', color_derechos);
    document.documentElement.style.setProperty('--bg-menu', color_barra_superior);
    document.documentElement.style.setProperty('--text-menu', color_texto_superior);
    document.documentElement.style.setProperty('--fondo-general', color_fondo_general);
    document.documentElement.style.setProperty('--color-general', color_texto_general);
    document.documentElement.style.setProperty('--bg-principal', color_principal);
    document.documentElement.style.setProperty('--bg-btn-principal', color_boton_primario);
    document.documentElement.style.setProperty('--bg-btn-txt-principal', color_boton_texto_primario);
    document.documentElement.style.setProperty('--bg-btn-sec', color_boton_sec);
    document.documentElement.style.setProperty('--bg-btn-txt-sec', color_boton_texto_sec);
    document.documentElement.style.setProperty('--bg-conoce-propiedad', color_fondo_conoce);
    document.documentElement.style.setProperty('--bg-texto-conoce', color_texto_conoce);
    document.documentElement.style.setProperty('--bg-fotos-propiedad', color_fondo_fotos);
    document.documentElement.style.setProperty('--bg-texto-fotos', color_texto_fotos);
    document.documentElement.style.setProperty('--bg-videos-propiedad', color_fondo_videos);
    document.documentElement.style.setProperty('--bg-texto-videos', color_texto_videos);
    document.documentElement.style.setProperty('--bg-polga-propiedad', color_fondo_polga);
    document.documentElement.style.setProperty('--bg-texto-polga', color_texto_polga);
    
</script>
 
</body>
</html>