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
        Schema::create('orderitem', function (Blueprint $table) {
            $table->id('itemId');
            $table->foreignId('product_id')->constrained('product','productId'); // FK ke Product
            $table->integer('quantity');
            $table->double('unitPrice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitem');
    }
};
