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
<link href="" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="" sizes="128x128" rel="shortcut icon" />
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
 </style>
 
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

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
		        <a href="index.html" class="navbar_brand float-left dn-smd">
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
		                <a href="#"><span class="title">Propiedades</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="#">Destacados</a>
		                         
		                    </li>
		                    <li>
		                        <a href="#">Comprar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Alquilar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Vendido / Alquilado</a>
		                        
		                    </li>
		                      
	                	</ul>
		            </li>
		            <li style="margin-right:10px;margin-left:10px;">
		                <a href="#"><span class="title">Testimonios</span></a>
		                <ul>
		                     
                            <li><a href="">Presentaci&oacute;n</a></li>
                            <li><a href="">Gu&iacute;as</a></li>
		                </ul>
		            </li>
		            <li style="margin-right:10px;margin-left:10px;">
		                <a href="#"><span class="title">Blog</span></a>
		                
		            </li>
		         
		             
	                <li class="list-inline-item add_listing home2 style10 float-right"><a href="#"><span class="dn-lg"> Iniciar sesión</span></a></li>
	               
		        </ul>
		    </nav>
		</div>
	</header>
 
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="d-flex justify-content-between">
					<a class="mobile-menu-trigger" href="#menu"><img src="images/dark-nav-icon.svg" alt=""></a>
					<a class="nav_logo_img" href="index.html"><img class="img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png"></a>
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
		                        <a href="#">Destacados</a>
		                         
		                    </li>
		                    <li>
		                        <a href="#">Comprar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Alquilar</a>
		                        
		                    </li>
							<li>
		                        <a href="#">Vendido / Alquilado</a>
		                        
		                </li>
					</ul>
				</li>
				<li><span>Testimonios</span>
					<ul>
						<li><a href="">Presentaci&oacute;n</a></li>
						<li><a href="">Gu&iacute;as</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="title">Blog</span></a>
					 
				</li>
				 
 				<li><a href="#"><span class="flaticon-user"></span> Iniciar Sesion </a></li>
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
							
							<form class="home5_advanced_search_form">
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
			<div style="position: absolute; top:13%">
				<h2 class="text-white">DESCUBRE COMO</h2>
				<h2 class="text-orange">VENDER TU PROPIEDAD M&Aacute;S R&Aacute;PIDO</h2>
			</div>
			<div class="d-flex" style="position: absolute; bottom: 4px; display: block !important;">
				 <h1 class="color_principal" style="text-transform: uppercase;">{{$propiedad->tipo_casa}} EN VENTA</h1>
				 <p class="text-white">{{$propiedad->direccion}}</p>
				 <p class="text-white">¿Para qui&eacute;n?</p>
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
	<section class="our-blog bgc-f7 pb30" style="background: black !important;">
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
					 <h3 class="text-center color_principal">DESCRIPCIÓN</h3>
				</div>
				<div class="col-sm-6 col-lg-6 col-xl ">
					 
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
						<h2 class="text_fotos_p">CONOCE NUESTROS ESPACIOS</h2>
						<p class="text_fotos_p">Visita los diversos espacios de esta propiedad</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="team_slider_custom">
                        @foreach ($fotos as $foto )
                        <div class="item">
							<img class="img-fluid" src="{{asset('./propiedad/fotos/'.$foto->foto)}}" alt="lsslider1.jpg">
							 
						</div>
                        @endforeach
						
						
						 
						 
					</div>
				</div>
			</div>
			<!-- slier pequeño -->
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="slider-three">
						<div class="item">
							<div class="feat_property list" style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
								<div class="col-lg-1">
								<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
								</div>
								<div class="col-lg-2">
								<p class="pcard text-white">97.2 m2</p>
								</div>

								<div class="col-lg-1">
								<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
								</div>
								<div class="col-lg-2">
								<p class="pcard text-white">97.2 m2</p>
								</div>

								<div class="col-lg-1">
								<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
								</div>
								<div class="col-lg-2">
								<p class="pcard text-white">97.2 m2</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property list" style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
									   </div>

									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
									   </div>

									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
									   </div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property list" style="padding-top: 2.5rem; padding-bottom: 2.5rem; justify-content: center;align-items: center; background-color:#242424; border: 1px solid #242424">
									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
									   </div>

									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
									   </div>

									   <div class="col-lg-1">
										<svg class="imgsvg" width="19" height="19" fill="#fbcb00" xmlns="http://www.w3.org/2000/svg" alt="Area"><path d="M16 11h-2v3h-3v2h3v3h2v-3h3v-2h-3v-3ZM1 16h3v-2H2v-2H0v3a1 1 0 0 0 1 1ZM16 1a1 1 0 0 0-1-1h-3v2h2v2h2V1ZM2 2h2V0H1a1 1 0 0 0-1 1v3h2V2ZM0 6h2v4H0V6Zm14 0h2v3h-2V6ZM6 0h4v2H6V0Zm0 14h3v2H6v-2Z"></path></svg>
									   </div>
									   <div class="col-lg-2">
										<p class="pcard text-white">97.2 m2</p>
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
                            <li class="nav-item">
                                <a class="btn btn-lg btn-transparent btn-block circle" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Alrededores</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="property_video">
                                    <div class="thumb">
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
						<h2 class="text_polga_p">UBÍCANOS EN</h2>
					 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
                    <div class="feat_property list">
						  
							<div class="col-lg-4">
								<div class="details">
									<div class="tc_content">
										<h3>{{$propiedad->direccion}}</h3>
										<h3>{{$propiedad->provincia}}</h3>
										<span>Cerca a todo lo que necesites</span>
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
						<h2 class="text_polga_p">DESCUBRE COMO</h2>
						<h2 class="text-secundario">VENDER TU PROPIEDAD M&Aacute;S R&Aacute;PIDO</h2>
					 
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<form class="home5_advanced_search_form">
						<div class="main-title text-center">
							<h2>¿Deseas una visita guiada virtual a la propiedad?</h2>
							<p style="font-size: 25px;">Cont&aacute;ctame</p>
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
						<h2 class="indhead color_principal">MÁS PROPIEDADES</h2>
						<p class="indp color_principal">Hechos para ti</p>
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
											<a href="{{ route('detalle.propiedad',$item->id) }}" type="button" class="btn btn-lg btn-transparent btn-block">Ver Propiedad</a>
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
			 
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-center">
						<p>© 2023 ciro.pe Todos los derechos reservados por Winning & Co. SAC</p>
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