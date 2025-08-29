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
        Schema::create('testimonial', function (Blueprint $table) {
            $table->id('testimonialId');
            $table->integer('customerId'); // FK ke Customer Tabel
            $table->integer('productId'); // FK Ke Product Tabel
            $table->integer('orderId'); // FK Ke Order Tabel
            $table->binary('imageUrl'); // blob gambar
            $table->string('description', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial');
    }
};
