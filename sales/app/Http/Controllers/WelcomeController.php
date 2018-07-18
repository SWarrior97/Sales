<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('welcome',compact('produtos','categorias'));
    }
}
