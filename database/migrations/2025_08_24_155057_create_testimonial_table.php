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
            $table->foreignId('customer_id')->constrained('customer','customerId'); // FK ke Customer
            $table->foreignId('product_id')->constrained('product', 'productId'); // FK ke Product
            $table->foreignId('order_id')->constrained('order','orderId'); // FK ke Order
            $table->binary('imageUrl'); // blob gambar
            $table->string('description', 200);
            $table->timestamp('created_at')->useCurrent();
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
