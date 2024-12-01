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
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('categoria'); 
            $table->string('ciudad');
            $table->decimal('precio', 8, 2);
            $table->text('descripcion')->nullable(); 
            $table->string('foto')->nullable(); 
            $table->text('politicas_cancelacion')->nullable(); 
            $table->boolean('disponibilidad')->default(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoteles');
    }
};
