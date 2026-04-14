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
        Schema::create('familiares', function (Blueprint $table) {
                $table->id('id_fam');
                $table->unsignedBigInteger('id_persona');
                $table->foreign('id_persona')->references('id_persona')->on('personas');
                $table->string('DNI')->unique();
                $table->string('dir');
                $table->unsignedBigInteger('id_parentezco');
                $table->foreign('id_parentezco')->references('id_parentezco')->on('parentezcos');
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
        Schema::dropIfExists('familiares');
    }
};
