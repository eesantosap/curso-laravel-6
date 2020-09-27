<?php

Route::resource('produtos', 'ProdutoController');
Route::get('contato', 'Admin\TesteController@teste');

/*
Route::get('login', function(){
    return 'Login';
})->name('login');
*/

/*
Route::resource('produtos', 'ProdutoController')->middleware('auth');
Route::get('/produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::get('/produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');
Route::post('/produtos', 'ProdutoController@store')->name('produtos.store');
Route::get('/produtos/{id}', 'ProdutoController@show')->name('produtos.show');
Route::put('/produtos/{id}', 'ProdutoController@update')->name('produtos.update');
Route::delete('/produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');
/////////////////////////////////////////////////////////////////////////////////////
Route::get('/contato', 'Admin\TesteController@teste');
*/