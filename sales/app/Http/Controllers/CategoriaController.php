<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index(){
        $categorias = Categoria::paginate(10);

        return view('categoria.index',compact('categorias'));
    }
}
