@extends('blog/footer/generico')

@section('footer-especifico')
    <div class="justify-content-end">
        {{ @trans('messages.already_signed_in') }}
    </div>
@endsection