@extends('blog/header/generico')

@section('header-especifico')
    <div class="justify-content-end">
        <label for="basic-url">{{ trans('messages.welcome_reader') }}</label>
    </div>
@endsection