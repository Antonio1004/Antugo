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
        Schema::create('reno', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('peso');
            $table->integer('edad');
            $table->timestamps();

        });

        Schema::create('regalo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float(column: 'peso');
            $table->float(column: 'precio');
            $table->timestamps();
            
        });

        Schema::create('viaje', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_destino');
            $table->float(column: 'precio');
            $table->date(column: 'fecha_llegada');
            $table->date(column: 'fecha_salida');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
