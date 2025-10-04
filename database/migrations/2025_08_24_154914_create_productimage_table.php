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
        Schema::create('productimage', function (Blueprint $table) {
            $table->id('productImageId');
            $table->string('prodImage'); // URL gambar
            $table->foreignId('product_id')->constrained('product','productId')->cascadeOnDelete(); ; // FK ke Product
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productimage');
    }
};
