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
        Schema::create('abonos', function (Blueprint $table) {
                $table->id('id_abono');
                $table->integer('cantidad');
                $table->date('fecha');
                $table->unsignedBigInteger('id_regcuenta');
                $table->foreign('id_regcuenta')->references('id_regcuenta')->on('registro_cuentas');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonos');
    }
};
