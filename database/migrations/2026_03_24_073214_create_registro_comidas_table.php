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
        Schema::create('registro_comidas', function (Blueprint $table) {
                $table->id('id_registrocomida');
                $table->unsignedBigInteger('id_ninio');
                $table->foreign('id_ninio')->references('id_ninio')->on('ninios');
                $table->unsignedBigInteger('id_plato');
                $table->foreign('id_plato')->references('id_plato')->on('platos');
                $table->date('fecha');
                $table->integer('cantidad');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_comidas');
    }
};
