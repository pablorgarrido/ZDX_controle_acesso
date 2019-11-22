<?php

Route::get('', 'ParticipanteController@index')->name('index');
Route::post('', 'ParticipanteController@postIndex')->name('postIndex');

Route::get('foto/{participante}', 'ParticipanteController@getAvatar')->name('avatar');
