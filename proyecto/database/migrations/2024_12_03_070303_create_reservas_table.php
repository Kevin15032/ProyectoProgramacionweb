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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamp('fecha_reserva')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('monto', 10, 2);
            $table->string('estado')->default('Reservado'); 
            $table->timestamps();
        
            $table->foreign('hotel_id')->references('id')->on('hoteles')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
