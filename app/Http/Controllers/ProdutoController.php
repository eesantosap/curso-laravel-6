<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {

        $this->request = $request;
        //$this->middleware('auth');
        //$this->middleware('auth')->only('create');
        /*$this->middleware('auth')->only([
            'create', 'store'
            ]);*/
        //$this->middleware('auth')->except('index');
        $this->middleware('auth')->except([
            'index', 'show'
            ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $teste2 = 'Testando Existência de Variável';
        $teste3 = [];
        $teste4 = 2;
        //$teste = '<h1>Mostrando código real</h1>';
        //return view('contato', [ 'teste' => $teste ]);
        //return view('contato', compact('teste'));
        return view('admin.pages.produtos.index', compact('teste', 'teste2', 'teste3', 'teste4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Criando um novo Produto";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Cadastrando Produto";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Mostrando detalhe do Produto {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Editando Produto {$id}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Atualizando Produto {$id}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Excluindo Produto {$id}";
    }
}
