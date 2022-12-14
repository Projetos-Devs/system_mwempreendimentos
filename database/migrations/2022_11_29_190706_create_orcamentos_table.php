<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('nome_empresa')->nullable();
            $table->string('email');
            $table->string('telefone');
            $table->string('tipo_evento');
            $table->string('endereco');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->enum('status', ['andamento', 'finalizado', 'cancelado']);

            $table->unsignedBigInteger('id_uf');
            $table->foreign('id_uf')->references('id')->on('ufs')
                ->onUpdate('restrict')->onDelete('restrict');

            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id')->on('municipios')
                ->onUpdate('restrict')->onDelete('restrict');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
};
