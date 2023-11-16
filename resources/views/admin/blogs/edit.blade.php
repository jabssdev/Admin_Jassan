@extends('admin.layouts.permisos')
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendor/dropify/css/dropify.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendor/summernote/dist/summernote.css')}}"/>
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
                    <li class="breadcrumb-item active"> Editar Blog</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                
                <div class="header">
                    <h2>Editar Blog</h2>
                </div>
                <hr>
                <div class="body">
                @if (session('mensaje'))
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                @endif

                @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                   
                    <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                        <div class="form-group">
                            <div class="row clearfix">
                                
                                <div class="col-md-12">
                                    <label>Foto Principal<span style="color:red;"> *</span></label>
                                    <input type="file" name="primera_imagen" class="dropify"
                                       data-allowed-file-extensions='jpg png'
                                       data-default-file="{{ asset( 'img_blogs/'.$blog->primera_imagen ) }}">
                                    *Recuerda que el ancho de las fotos no debe exceder los 689 px
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Título<span style="color:red;"> *</span></label>
                                    <input style="font-weight: 600;font-size: 2.062rem; line-height: 2.562rem; " type="text" name="titulo" value="{{$blog->titulo}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Descripción corta<span style="color:red;"> *</span></label>
                                    <textarea name="descripcion_corta"  class="form-control" cols="30" rows="1" >{{$blog->descripcion_corta}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Subtítulo 1<span style="color:red;"> *</span></label>
                                    <input style="font-weight: 600;font-size: 1.687rem;line-height: 2.062rem; " type="text" name="primer_subtitulo" value="{{$blog->primer_subtitulo}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Párrafo 1<span style="color:red;"> *</span></label>
                                    <textarea name="primer_parrafo" id="primer_parrafo" class="form-control" cols="30" rows="2"  >{{$blog->primer_parrafo}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <label>Párrafo 2<span style="color:red;"> *</span></label>
                                    <textarea name="segundo_parrafo" id="segundo_parrafo" class="form-control" cols="30" rows="2"  >{{$blog->segundo_parrafo}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Frase<span style="color:red;"> *</span></label>
                                    <textarea name="frase" id="frase" class="form-control" cols="30" rows="2"  >{{$blog->frase}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Subtítulo 2<span style="color:red;"> *</span></label>
                                    <input style="font-weight: 600;font-size: 1.687rem;line-height: 2.062rem; " type="text" name="segundo_subtitulo" value="{{$blog->segundo_subtitulo}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Párrafo 3<span style="color:red;"> *</span></label>
                                    <textarea name="tercer_parrafo" id="tercer_parrafo" class="form-control" cols="30" rows="2"  >{{$blog->tercer_parrafo}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                
                                <div class="col-md-12">
                                    <input type="file" name="segunda_imagen" class="dropify"
                                       data-allowed-file-extensions='jpg png'
                                       data-default-file="{{ asset( 'img_blogs/'.$blog->segunda_imagen ) }}">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <label>Párrafo 4<span style="color:red;"> *</span></label>
                                    <textarea name="cuarto_parrafo" id="cuarto_parrafo" class="form-control" cols="30" rows="2"  >{{$blog->cuarto_parrafo}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-6" id="secundario">
                                    <label>Foto Secundaria<span style="color:red;"> *</span></label>
                                    <input type="file" name="tercera_imagen" class="dropify"
                                       data-allowed-file-extensions='jpg png'
                                       data-default-file="{{ asset( 'img_blogs/'.$blog->tercera_imagen ) }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="div">
                                        <div class="col-md-12">
                                            <label>Subtítulo 3<span style="color:red;"> *</span></label>
                                            <input style="font-weight: 600;font-size: 1.687rem;line-height: 2.062rem; " type="text" name="tercer_subtitulo" value="{{$blog->tercer_subtitulo}}" class="form-control" required>
                                        </div>
                                        <div class="col-md-12" style="margin-top:20px;">
                                            <label>Párrafo 5<span style="color:red;"> *</span></label>
                                            <textarea name="quinto_parrafo" id="quinto_parrafo" class="form-control" cols="30" rows="2"  >{{$blog->quinto_parrafo}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a type="button" href="{{ route('blog.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('primer_parrafo');
        CKEDITOR.replace('segundo_parrafo');
        CKEDITOR.replace('tercer_parrafo');
        CKEDITOR.replace('cuarto_parrafo');
        CKEDITOR.replace('quinto_parrafo');
        CKEDITOR.replace('frase');
    </script>
    <script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>
    <script src="{{asset('admin/vendor/summernote/dist/summernote.js')}}"></script>
@endsection
