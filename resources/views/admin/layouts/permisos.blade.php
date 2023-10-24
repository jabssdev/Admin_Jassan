@extends('admin.layouts.principal')

@section('menu')
    @include('admin.menu.admin')
@endsection

@section('content')
    <!--if(auth()->user()->rol == 'admin')
        include('admin.content_index.admin')
    else-->
    @include('admin.home.admin')
        <!--
    endif->

@endsection