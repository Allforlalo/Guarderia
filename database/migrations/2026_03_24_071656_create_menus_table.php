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
        Schema::create('menus', function (Blueprint $table) {
                $table->id('id_menu');
                $table->unsignedBigInteger('id_plato');
                $table->foreign('id_plato')->references('id_plato')->on('platos');
                $table->unsignedBigInteger('id_ingrediente');
                $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
