<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu">
        @php
            $x = $_SERVER['REQUEST_URI'];
            $a = 'perfil';
            $b = stripos($x, $a);
            $c = 'tema';
            $d = stripos($x, $c);
            $e = 'configuracion';
            $f = stripos($x, $e);
            $g= 'testimonios';
            $h = stripos($x, $g);
            $i = 'blogs';
            $j = stripos($x, $i);
            $k = 'activos';
            $l = stripos($x, $k);
            $m = 'completados';
            $n = stripos($x, $m);  
            $o = 'cerrar';
            $p = stripos($x, $o);
            $q = 'previsualizar';
            $r = stripos($x, $q);
            $s = 'ir';
            $t = stripos($x, $s);            

            if ($b!== false ) {

                $activoPerfil='active';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $d!== false ) {
                $activoPerfil='';
                $activoTema='active';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $f!== false) {

                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='active';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $h!== false) {
                
                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='active';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $j!== false) {
                
                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='active';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $l!== false){
                
                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='active';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }else if( $n!== false){

                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='active';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }
            else if( $p!== false){

                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='active';
                $activoPrevisualizar='';
                $activoIr='';

            }
            else if( $r!== false){

                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='active';
                $activoIr='';

            }
            else if( $t!== false){

                $activoPerfil='';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='active';

            }
            else {

                $activoPerfil='active';
                $activoTema='';
                $activoConfiguracion='';
                $activoTestimonios='';
                $activoBlogs='';
                $activoActivos='';
                $activoCompletados='';
                $activoCerrar='';
                $activoPrevisualizar='';
                $activoIr='';

            }
        @endphp
        <li class="{{ $activoPerfil }}">
            <a href="#" ><i class="icon-user"></i> <span>Perfil</span></a>
            <ul>
                <li>
                <li><a href="">Información personal </a></li>
                <li><a href="">Redes sociales </a></li>
                <li><a href="">Información adicional </a></li>
                <li><a href="">Seguridad </a></li>
                <li><a href="">Fotografías de perfil </a></li>
                <li><a href="">Videos de perfil </a></li>
                </li>
            </ul>
        </li>
        <li class="{{ $activoTema }}">
            <a href="#" ><i class="fa fa-tint"></i> <span>Tema</span></a>
            <ul>
                <li>
                <li><a href="">Módulos página principal </a></li>
                <li><a href="">Módulos detalle de propiedad </a></li>
                <li><a href="">Configuración general </a></li>
                <li><a href="">Color barra superior </a></li>
                <li><a href="">Color sección derechos reservados </a></li>
                </li>
            </ul>
        </li>
        <li class="{{ $activoConfiguracion }}">
            <a href="#" ><i class="icon-settings"></i> <span>Configuración</span></a>
            <ul>
                <li>
                <li><a href="{{ route('configuracion.index') }}">Información general </a></li>
                <li><a href="">Google tags / Facebook Pixel </a></li>
                <li><a href="">Videos de youtube </a></li>
                <li><a href="">Logo / Favicon </a></li>
                <li><a href="">Página web </a></li>
                </li>
            </ul>
        </li>
        <li class="{{ $activoTestimonios }}">
            <a href="{{ route('testimonio.index') }}" ><i class="icon-speech"></i> <span>Testimonios</span></a>
            
        </li>
        <li class="{{ $activoBlogs }}">
            <a href="{{ route('blog.index') }}" ><i class="fa fa-book"></i> <span>Blogs</span></a>
            
        </li>
        <li class="{{ $activoActivos }}">
            <a href="#" ><i class="icon-home"></i> <span>Prop. Activos</span></a>
            
        </li>
        <li class="{{ $activoCompletados }}">
            <a href="#" ><i class="icon-home"></i> <span>Prop. Completados</span></a>
            
        </li>
        
        <li class="{{ $activoPrevisualizar }}">
            <a href="#" ><i class="icon-share-alt"></i> <span>Previsualizar web</span></a>
            
        </li>
        <li class="{{ $activoIr }}">
            <a href="#" ><i class="icon-share-alt"></i> <span>Ir a web</span></a>
            
        </li>
        
        
    </ul>
</nav>
