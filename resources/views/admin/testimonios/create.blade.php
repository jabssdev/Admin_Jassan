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
                    <li class="breadcrumb-item active"> Registrar Testimonio</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Registrar Testimonio</h2>
                </div>
                <hr>
                <div class="body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                            </ul>
                        </div> 
                    @endif
                   
                    <form action="{{ route('testimonio.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <label>Autor<span style="color:red;"> *</span></label>
                                    <input type="text" name="autor" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Título<span style="color:red;"> *</span></label>
                                    <input type="text" name="titulo" class="form-control" required>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <label>Testimonio<span style="color:red;"> *</span></label>
                                    <textarea name="testimonio" id="testimonio" class="form-control" cols="30" rows="2" required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Imagen <span style="color:red;"> *</span></label>
                                    <input type="file" name="imagen" id="input-file-now" class="dropify"  data-allowed-file-extensions='jpg png'>
                                    <small class="form-control-feedback"> Ingrese una imagen. <strong>Dimension de imagen recomendado: 263 x 283</strong></span>
                                </div>
                                
                            </div>
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a type="button" href="{{ route('testimonio.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('testimonio');
    </script>
    <script src="{{asset('admin/vendor/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>
    <script src="{{asset('admin/vendor/summernote/dist/summernote.js')}}"></script>
@endsection
