<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index(){
        $produtos = Produto::paginate(10);

        return view('produtos.index',compact('produtos'));
    }

    public function getDetails($id){
        $id = \Crypt::decrypt($id);

        $produto = Produto::find($id);

        return view('produtos.detalhes',compact('produto'));
    }

    public function showCreateProd(){
        $categorias = Categoria::all();

        return view('produtos.create',compact('categorias'));
    }

    public function storeProd(Request $request){
        //dd($request->all());
        $countProdutos = Produto::all()->count();
        $produto = new Produto;

        $produto->name = $request->name;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria;
        $name = $countProdutos . '.jpg';


        if($request->hasFile('imagem')){
            $path = $request->file('imagem')->storeAs(
                'public/images', $name
            );
            $produto->photo	= explode('/', $path)[2];
        }

        $produto->save();

        return redirect()->intended('/produtos')->with('message_success', 'Produto criado com sucesso !');
    }
}
