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
        Schema::create('ninios', function (Blueprint $table) {
                $table->id('id_ninio');
                $table->string('matricula')->unique();
                $table->date('fecha_i');
                $table->unsignedBigInteger('id_persona');
                $table->foreign('id_persona')->references('id_persona')->on('personas');
                $table->unsignedBigInteger('id_centro');
                $table->foreign('id_centro')->references('id_centro')->on('centros');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ninios');
    }
};
