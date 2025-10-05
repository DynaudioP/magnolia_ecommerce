<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('productId');
            $table->string('productName', 100);
            $table->foreignId('category_id')->constrained('category', 'categoryId'); // FK ke Category
            $table->string('fabricSize', 20);
            $table->foreignId('technique_id')->constrained('technique', 'techniqueId'); // FK ke Technique
            $table->foreignId('material_id')->constrained('material', 'materialId'); // FK ke Material
            $table->double('price');
            $table->double('stockQuantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
