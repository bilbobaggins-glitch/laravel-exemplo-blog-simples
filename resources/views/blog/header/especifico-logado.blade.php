@extends('blog/header/generico')

@section('header-especifico')
    <div class="justify-content-end">
        <button type="button" class="btn btn-primary">{{ trans('messages.account') }}</button>
        <label for="basic-url">{{ trans('messages.welcome_writer', ['writerName' => $usuario]) }}</label>
    </div>
@endsection