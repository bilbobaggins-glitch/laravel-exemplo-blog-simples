<?php

Route::get('/{lang}/home', 'BlogController@home');

Route::get('/{lang}/home/logado/{usuario}', 'BlogController@homeLogado');

Route::get('/{lang}/login', 'BlogController@login');

Route::get('/{lang}/logado/{usuario}/postagem-nova', 'BlogController@postagemNova');