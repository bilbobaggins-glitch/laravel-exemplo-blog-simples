@extends('blog/layout-geral/start')

@section('header')
    @include('blog/header/especifico-nao-logado')
@endsection

@section('middle')
    @include('blog/entidades/postagens', ['postagens' => $postagens])
@endsection

@section('footer')
    @include('blog/footer/especifico-nao-logado')
@endsection