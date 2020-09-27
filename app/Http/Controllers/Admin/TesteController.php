<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste()
    {
        $teste = 'alô sofona';
        $produtos = ['mouse', 'teclado', 'monitor', 'câmera'];
        $livros = ['PHP', 'JS', 'CSS3', 'HTML5'];
        $listas = [];
        
        return view('contato', compact('teste', 'produtos', 'livros', 'listas'));
    }

}
