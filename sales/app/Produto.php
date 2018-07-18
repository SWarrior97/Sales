<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    public $timestamps = false;


    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
