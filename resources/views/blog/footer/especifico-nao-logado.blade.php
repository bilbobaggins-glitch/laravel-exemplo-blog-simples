@extends('blog/footer/generico')

@section('footer-especifico')
    <div class="justify-content-end">
        <button type="button" class="btn btn-primary">{{ trans('messages.restricted_area') }}</button>
    </div>
@endsection