<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10); 
            $table->string('aerolinea', 50); 
            $table->time('horario'); 
            $table->integer('duracion_vuelo'); 
            $table->decimal('precio', 10, 2); 
            $table->string('ciudad_origen', 50); 
            $table->string('ciudad_destino', 50); 
            $table->boolean('tiene_escalas')->default(false); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};

