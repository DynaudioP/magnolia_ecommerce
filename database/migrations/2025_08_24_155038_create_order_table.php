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
        Schema::create('order', function (Blueprint $table) {
            $table->id('orderId'); // Primary Key
            $table->integer('customerId');   // FK ke customers
            $table->integer('itemId');       // FK ke items
            $table->integer('designId');     // FK ke designs
            $table->integer('measurementId'); // FK ke measurements
            $table->date('orderDate');
            $table->string('status', 20);
            $table->string('modelType', 20);
            $table->string('liningOption', 100);
            $table->string('accessories', 100);
            $table->string('accessoryLevel', 100);
            $table->double('totalItem');
            $table->double('totalPrice');
            $table->date('estimatedDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
