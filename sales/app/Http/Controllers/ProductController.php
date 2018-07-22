<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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

    public function delete(Produto $produto){
        $produto->delete();

        return redirect()->intended('/produtos')->with('message_success', 'Produto eliminado com sucesso !');
    }

    public function getProdutosCategoria(Categoria $categoria){
        $countProds = Produto::all()->count();
        $produtos = Produto::all();
        $paginatedProds = Produto::paginate(3);
        $categorias = Categoria::all();
        $arrayProdCat = [];


        foreach ($categorias as $cat){
            foreach ($produtos as $prod){
                if($cat->id == $prod->categoria_id){
                    $arrayProdCat[$cat->name] = $prod;
                }
            }
        }
        $produtosCategorias = Produto::where('categoria_id',$categoria->id)->get();
        $countProds = count($produtosCategorias);

        return view('welcome',compact('categoria','produtos','categorias','countProds','paginatedProds','arrayProdCat','produtosCategorias'));
    }

    public function getProdutosOrderByPrice($id,Categoria $categoria){
        //dd("ID: ".$id."              Categoria:".$categoria);

        $countProds = Produto::all()->count();
        $produtos = Produto::all();
        $paginatedProds = Produto::paginate(3);
        $categorias = Categoria::all();
        $arrayProdCat = [];


        foreach ($categorias as $cat){
            foreach ($produtos as $prod){
                if($cat->id == $prod->categoria_id){
                    $arrayProdCat[$cat->name] = $prod;
                }
            }
        }

        if($id == 1){
            $produtosCategorias = Produto::where('categoria_id',$categoria->id)->orderBy('preco','asc')->get();
        }else{
            $produtosCategorias = Produto::where('categoria_id',$categoria->id)->orderBy('preco','desc')->get();
        }
        $countProds = count($produtosCategorias);

        return view('welcome',compact('categoria','produtos','categorias','countProds','paginatedProds','arrayProdCat','produtosCategorias'));
    }
}
