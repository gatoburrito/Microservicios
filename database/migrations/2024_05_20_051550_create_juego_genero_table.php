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
        Schema::create('juego_genero', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juego_id');
            $table->unsignedBigInteger('genero_id');
            $table->timestamps();

            $table->foreign('juego_id')->references('id')->on('juegos')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego_genero');
    }
};
