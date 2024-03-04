<<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_cot')->nullable();
            $table->foreign('id_cot')->references('id')->on('cotizaciones');
            $table->string('nombre', 255); // <- The name column
            $table->string('rut', 100);
            $table->string('categoria', 255);
            $table->string('producto', 255);
            $table->string('descripcion', 255);
            $table->string('detalle', 255);
            $table->decimal('alto', 10, 2);
            $table->decimal('ancho', 10, 2); 
            $table->integer('cantidad');
            $table->string('diseno', 10);
            // Modify img1 and img2 columns for file storage
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->decimal('neto', 10, 2);
            $table->decimal('iva', 10, 2);
            $table->decimal('total', 10, 2);
            $table->date('ingreso');
            $table->timestamps();
        
            // **Nueva clave foránea**
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');->onDelete('cascade')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};