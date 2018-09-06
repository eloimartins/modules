<?php
    Route::get('teste1', ['as'=>'teste1a', 'uses'=>'Visitantes\NovaSenhaController@teste1a']);
    Route::post('teste1', ['as'=>'teste1b', 'uses'=>'Visitantes\NovaSenhaController@teste1b']);