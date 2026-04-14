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
        Schema::create('bajas_ninios', function (Blueprint $table) {
                $table->id('id_baja');
                $table->string('motivo');
                $table->date('fecha');
                $table->unsignedBigInteger('id_ninio');
                $table->foreign('id_ninio')->references('id_ninio')->on('ninios');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bajas_ninios');
    }
};
