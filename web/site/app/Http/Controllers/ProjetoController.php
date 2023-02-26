<?php

namespace App\Http\Controllers;


use App\Models\ProductModel;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = ProductModel::table('2023_create_product_models_table')->paginate(5);
       $product=ProductModel::all();
        return view('pagina_inicial/inicio',['product'=>$product]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  o codigo abaixo valida a informaçao inserida no formulario
        /*$request->validate([
            'nome_carro'=>'required|min:3| max:255',
            'cor'=>'nullable| min:3| max:1000',
            'placa'=>'required| min:4|max:7',
            'arquivo'=>'required|image'
        ]);
        */

//esse linha de codigo abaixo captura todas as informaçoes inseridas no formulario
      dd($request->all());


// a linha de comando abaixo captura somente as requicoes informadas nas chaves
       //dd($request->only(['name','description']));

// a linha de comando abaixo captura todas as informaçoes EXCETO o valor atribuido dentro do parentese
       //dd($request->except('_token'));

// o codigo abaixo faz com que o usuario carregue um arquivo para o frontend é o (( isValid() )) valida o arquivo
    //if($request->file('arquivo')->isValid())  {

 // o codigo abaixo pega o nome é a extençao do arquivo
       // $name=$request->name .'.'. $request->arquivo->extension();

      // o codigo abaixo faz um debug do arquivo e salva no caminho store dentro da pasta imagens e mostra a extençao do arquivo
    //dd($request->file('arquivo')->store('imagens_publicas'),$name); }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
