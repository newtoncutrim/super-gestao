<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->integer('unidade');
            $table->string('descricao');
            $table->timestamps();
        });

        //relacionamneto foreign produto_detalhes->unidades
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('id_unidade');
            $table->foreign('id_unidade')->references('id')->on('unidades');
        });

        //relacionamneto foreign produtos->unidades
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('id_unidade');
            $table->foreign('id_unidade')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->dropForeign(['id_unidade']);
        });

        Schema::table('produtos', function(Blueprint $table){
            $table->dropForeign(['id_unidade']);
        });
        
        Schema::dropIfExists('unidades');
    }
};
