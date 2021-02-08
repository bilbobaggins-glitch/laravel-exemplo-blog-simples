<?php

namespace App\Http\Controllers;

use App\NonLaravelStandardClasses\Postagem;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    //
    public function homeLogado($lang, $usuario)
    {
        App::setLocale($lang);

        $postagens = array();
        $postagens[] = new Postagem('Titulo 1', "Texto 1", null, null, null);
        $postagens[] = new Postagem('Titulo 2', "Texto 2", null, null, null);
        $postagens[] = new Postagem('Titulo 3', "Texto 3", null, null, null);
        $postagens[] = new Postagem('Titulo 4', "Texto 4", null, null, null);
        $postagens[] = new Postagem('Titulo 5', "Texto 5", null, null, null);

        return view('/blog/pages-start/home-logado', ['postagens' => $postagens, 'usuario' => $usuario]);
    }

    public function home($lang){
        App::setLocale($lang);

        $postagens = array();
        $postagens[] = new Postagem('Titulo 1', "Texto 1", null, null, null);
        $postagens[] = new Postagem('Titulo 2', "Texto 2", null, null, null);
        $postagens[] = new Postagem('Titulo 3', "Texto 3", null, null, null);
        $postagens[] = new Postagem('Titulo 4', "Texto 4", null, null, null);
        $postagens[] = new Postagem('Titulo 5', "Texto 5", null, null, null);

        $usuario = "leitor";

        return view('/blog/pages-start/home', ['postagens' => $postagens, 'usuario' => $usuario]);
    }

    public function postagemNova($lang, $usuario){
        App::setLocale($lang);

        return view('/blog/pages-start/postagem-nova', ['usuario' => $usuario]);
    }

    public function login($lang)
    {
        App::setLocale($lang);

        return view('/blog/pages-start/login');
    }
}