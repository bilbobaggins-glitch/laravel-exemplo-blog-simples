<?php

namespace App\NonLaravelStandardClasses;


class Postagem
{
    private $titulo, $texto, $data, $imagemUrl, $autor;

    public function __construct($titulo, $texto, $data, $imagemUrl, $autor) {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->data = $data;
        $this->imagemUrl = $imagemUrl;
        $this->autor = $autor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getData() {
        return $this->data;
    }

    function getImagemUrl() {
        return $this->imagemUrl;
    }

    function getAutor() {
        return $this->autor;
    }
}