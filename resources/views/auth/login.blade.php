<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web | CIRO</title>
    <meta name="description" content="Desarrollado por www.pyrusstudio.com - www.pyrushd.com">
    <link rel="icon" href="{{asset('admin\images\favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/color_skins.css')}}">
</head>
<body class="theme-green">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="{{asset('admin\images\LOGO.png')}}" alt="Lucid">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Iniciar Sesión</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST" action="{{ route('admin.login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="text" class="form-control" id="signin-email" name="email"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="password"
                                        placeholder="Contraseña">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block">INGRESAR</button>
                                <div class="bottom">
                                        <span class="helper-text m-b-10">
                                            COPYRIGHT 2007 - HASTA LA ACTUALIDAD <br>
                                            &copy; MARCA Y PERSONAJES REGISTRADOS
                                        </span>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    
</body>
</html>