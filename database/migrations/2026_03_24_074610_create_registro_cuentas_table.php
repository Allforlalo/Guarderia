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
        Schema::create('registro_cuentas', function (Blueprint $table) {
                $table->id('id_regcuenta');
                $table->unsignedBigInteger('id_fam');
                $table->foreign('id_fam')->references('id_fam')->on('familiares');
                $table->string('cuenta')->unique();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_cuentas');
    }
};
