@extends('blog/formulario/generico')

@section('formulario-especifico')
    <div class="form-group">
        <label>{{ trans('messages.title') }}</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">{{ trans('messages.category') }}</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>{{ trans('messages.style') }}</option>
            <option>{{ trans('messages.music') }}</option>
            <option>{{ trans('messages.relationship') }}</option>
            <option>{{ trans('messages.food') }}</option>
            <option>{{ trans('messages.travelling') }}</option>
        </select>
    </div>

    <div class="form-group">
        <div class="form-group-prepend">
            <span class="form-group-text">{{ trans('messages.text_body') }}</span>
        </div>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
@endsection

@section('txtBtn1')
    {{ trans('messages.cancel') }}
@endsection

@section('txtBtn2')
    {{ trans('messages.send') }}
@endsection

@section('formTitle')
    {{ trans('messages.new_post') }}
@endsection