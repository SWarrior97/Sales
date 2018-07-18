<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('categoria')->insert([
            'name' => "Alimentaçao"
        ]);

        DB::table('categoria')->insert([
            'name' => "Roupas"
        ]);

        DB::table('categoria')->insert([
            'name' => "Calçados"
        ]);

        DB::table('categoria')->insert([
            'name' => "Acessorios"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
