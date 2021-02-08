@extends('blog/formulario/generico')

@section('formulario-especifico')
    <div class="form-group">
        <label for="exampleInputEmail1">{{ trans('messages.email') }}</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">{{ trans('messages.password') }}</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
@endsection

@section('txtBtn1')
    {{ trans('messages.forgot_my_password') }}
@endsection

@section('txtBtn2')
    {{ trans('messages.sign_in') }}
@endsection

@section('formTitle')
    {{ trans('messages.login') }}
@endsection