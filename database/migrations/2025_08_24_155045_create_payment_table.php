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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('paymentId');
            $table->foreignId('order_id')->constrained('order', 'orderId')->cascadeOnDelete(); // FK ke Order
            $table->double('amount');
            $table->date('paymentDate');
            $table->string('method', 20);
            $table->string('receiptImage'); // URL Gambar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
