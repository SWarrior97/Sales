<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
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
        foreach ($arrayProdCat as $prod) {
            $produtosCategorias = Produto::where('categoria_id',$prod->categoria->id)->get();
            break;
        }

        $countProds = count($produtosCategorias);

        //dd($arrayProdCat['Calçados']);
        //dd(array_values($arrayProdCat['Calçados']));

        return view('welcome',compact('prod->categoria','produtos','categorias','countProds','paginatedProds','arrayProdCat','produtosCategorias'));
    }

    function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }
}
