@for($i = 0; $i < count($postagens); $i++)
    <div class="card" style="width: 45rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $postagens[$i]->getTitulo() }}</h5>
            <p class="card-text">{{ $postagens[$i]->getTexto() }}</p>
            <a href="#" class="btn btn-primary">{{ trans('messages.read_more') }}</a>
        </div>
    </div>
@endfor