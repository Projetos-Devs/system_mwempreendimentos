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
        Schema::create('orcamentos_produtos', function (Blueprint $table) {

            $table->unsignedBigInteger('id_orcamento');
            $table->foreign('id_orcamento')->references('id')->on('orcamentos')
                ->onUpdate('restrict')->onDelete('restrict');

            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos')
                ->onUpdate('restrict')->onDelete('restrict');

            $table->integer('quantidade');



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
        Schema::dropIfExists('orcamentos_produtos');
    }
};
