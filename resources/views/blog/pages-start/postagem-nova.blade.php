@extends('blog/layout-geral/start')

@section('header')
    @include('blog/header/especifico-logado')
@endsection

@section('middle')
    @include('blog/formulario/especifico-postagem-nova')
@endsection

@section('footer')
    @include('blog/footer/especifico-logado')
@endsection
