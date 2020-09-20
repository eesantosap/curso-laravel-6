<?php

Route::get('/login', function(){
    return 'Página de Login';
})->name('login');


/*
Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){

                Route::get('/dashboard','Admin\TesteController@teste')->name('dashboard');
            
                Route::get('/financeiro', 'Admin\TesteController@teste')->name('financeiro');
                
                Route::get('/contabilidade', 'Admin\TesteController@teste')->name('contabilidade');
                
                Route::get('/recursoshumanos', 'Admin\TesteController@teste')->name('recursoshumanos');
    
                Route::get('/', 'Admin\TesteController@teste')->name('home');

            });

        });

    });
    
});

*/


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function(){

    Route::get('/dashboard','Admin\TesteController@teste')->name('dashboard');
            
    Route::get('/financeiro', 'Admin\TesteController@teste')->name('financeiro');
    
    Route::get('/contabilidade', 'Admin\TesteController@teste')->name('contabilidade');
    
    Route::get('/recursoshumanos', 'Admin\TesteController@teste')->name('recursoshumanos');

    Route::get('/', 'Admin\TesteController@teste')->name('home');

});


Route::get('/redirect3', function(){
     return redirect()->route('url.name');  
    });

Route::get('/possomudar2', function(){
    return 'Testando rota com mudança de nome 2 sem afetar a rota original';
})->name('url.name');

Route::view('/view', 'welcome');

// Route::get('/view', function(){
//     return view('welcome');
// });

Route::redirect('/redirect1', '/redirect2');

// Route::get('/redirect1', function(){
//     return redirect('/redirect2');
// });

Route::get('/redirect2', function(){
    return 'Redirect 02';
});

Route::get('/produtos/{idProduto?}', function($idProduto = ''){
    return "Passagem de parâmetro com valor não obrigatório {$idProduto}";
});

Route::get('/categoria/{flag}/post', function($flag){
    return "Passagem de parâmetro com variável obrigatpriamente igual ao parâmetro {$flag}";
});

Route::get('/categorias/{flag}', function($diferente){
    return "Passagem de parâmetro com variável que pode ser diferente do parâmetro {$diferente}";
});

Route::match(['get', 'post'], '/match', function(){
    return 'o MATCH determina quais verbos HTTP será aceito';
});

Route::any('/any', function(){
    return 'o verbo ANY aceita todos os outros de verbos HTTP';
});

Route::post('/register', function(){
    return 'o verbo POST tem que especificar o token';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/sobre', function(){
    return view('site.sobre');
});