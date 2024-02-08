<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_produto');
            $table->string('valor_produto');
            $table->string('total_pedidos');
            $table->string('quantidade_pedidos_pix');
            $table->string('percentagem_conversao_pix');
            $table->string('quantidade_pedidos_cartao');
            $table->string('genero_cliente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
