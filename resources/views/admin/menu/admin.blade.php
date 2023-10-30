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
            $k = 'propiedades';
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
            <a href="{{ route('perfil.index') }}" ><i class="icon-user"></i> <span>Perfil</span></a>
            
        </li>
        <li class="{{ $activoTema }}">
            <a href="#" ><i class="fa fa-tint"></i> <span>Tema</span></a>
           
        </li>
        <li class="{{ $activoConfiguracion }}">
            <a href="{{ route('configuracion.index') }}" ><i class="icon-settings"></i> <span>Configuración</span></a>
            
        </li>
        <li class="{{ $activoTestimonios }}">
            <a href="{{ route('testimonio.index') }}" ><i class="icon-speech"></i> <span>Testimonios</span></a>
            
        </li>
        <li class="{{ $activoBlogs }}">
            <a href="{{ route('blog.index') }}" ><i class="fa fa-book"></i> <span>Blogs</span></a>
            
        </li>
        <li class="{{ $activoActivos }}">
            <a href="{{ route('activos.index') }}" ><i class="icon-home"></i> <span>Prop. Activos</span></a>
            
        </li>
        <li class="{{ $activoCompletados }}">
            <a href="{{ route('completados.index') }}" ><i class="icon-home"></i> <span>Prop. Completados</span></a>
            
        </li>
        
        <li class="{{ $activoPrevisualizar }}">
            <a href="{{ route('previsualizar.index') }}" ><i class="icon-share-alt"></i> <span>Previsualizar web</span></a>
            
        </li>
        <li class="{{ $activoIr }}">
            <a href="{{ route('web.index') }}" ><i class="icon-share-alt"></i> <span>Ir a web</span></a>
            
        </li>
        
        
    </ul>
</nav>
