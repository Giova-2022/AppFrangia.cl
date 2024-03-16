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
    Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('codigo', 255)->unique(); // Maximum length for code, unique constraint
        $table->string('categoria', 255);  // Maximum length for category

        // Use appropriate data types for numeric and boolean values
        $table->integer('cantidad');        // Quantity (whole number)
        $table->decimal('alto', 8, 2);        // Height with 2 decimal places
        $table->decimal('ancho', 8, 2);      // Width with 2 decimal places
        $table->integer('costo');    // Cost with 2 decimal places
        $table->integer('neto');      // Net price with 2 decimal places (optional)
        $table->integer('iva');        // IVA (tax) with 2 decimal places (optional)
        $table->integer('total');    // Total price with 2 decimal places (optional)
        $table->integer('stock');           // Stock (whole number)

        $table->boolean('disponible')->default(true); // Availability flag (optional)
        $table->string('material', 255);     // Material (text)

        // String columns for descriptions and images
        $table->text('descripcion');       // Detailed product description
        $table->string('imagen', 255)->nullable(); // Image path (allow null)
        $table->string('img2', 255)->nullable();  // Additional image path (allow null)
        $table->string('img3', 255)->nullable();  // Additional image path (allow null)

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
