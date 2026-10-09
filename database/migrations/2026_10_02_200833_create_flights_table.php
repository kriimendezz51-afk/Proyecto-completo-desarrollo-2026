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
        Schema::create('flights', function (Blueprint $table) {
            $table->id(); //id
            $table->string('origen');
            $table->string('destino');
            $table->string('codigo');
            $table->timestamps(); //se crean dos campos: created_at y updated_at (guardar la fecha y hora de la craeacion y de la ultima vez que se edito)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
