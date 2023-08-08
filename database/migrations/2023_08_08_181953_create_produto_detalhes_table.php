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
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->float('comprimento');
            $table->float('largura');
            $table->float('altura');
            $table->unsignedBigInteger('id_detalhe');
            $table->foreign('id_detalhe')->references('id')->on('produtos')->unique('id_detalhe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->dropForeign(['id_detalhe']);
        });
        Schema::dropIfExists('produto_detalhes');
    }
};

