<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imobiliaria_id')->references('id')->on('imobiliarias');
            $table->integer('codigo_ref')->nullable();
            $table->string('tipo_imovel');
            $table->double('preco_imovel')->nullable();
            $table->double('preco_aluguel')->nullable();
            $table->integer('quartos');
            $table->integer('cozinhas');
            $table->integer('banheiros');
            $table->integer('garagem');
            $table->boolean('pets');
            $table->float('area_total');
            $table->float('area_contruida');
            $table->string('status');
            $table->string('localizacao');
            $table->integer('n_imovel');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('estado');
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
};
