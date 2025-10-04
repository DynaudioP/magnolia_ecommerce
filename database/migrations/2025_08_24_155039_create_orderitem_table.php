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
            $table->id('itemId'); // PK
            $table->foreignId('order_id')->constrained('order', 'orderId')->cascadeOnDelete(); // FK ke Tabel Order
            $table->foreignId('product_id')->nullable()->constrained('product', 'productId')->nullOnDelete(); // FK ke Tabel Product

            // detail jumlah & harga item
            $table->integer('quantity')->default(1);
            $table->double('unitPrice')->default(0);
            $table->double('subtotal')->default(0);

            // Foreign Key dari pilihan customisasi user
            $table->foreignId('modelType_id')->nullable()->constrained('modeltype', 'modelTypeId')->cascadeOnDelete(); // FK ke ModelType
            $table->foreignId('liningOption_id')->nullable()->constrained('liningoption', 'liningOptionId')->cascadeOnDelete(); // FK ke LiningOption
            $table->foreignId('accessories_id')->nullable()->constrained('accessories', 'accessoriesId')->cascadeOnDelete(); // FK ke Accessories
        });

        // Schema::create('orderitem', function (Blueprint $table) {
        //     $table->id('itemId');
        //     $table->foreignId('product_id')->constrained('product','productId'); // FK ke Product
        //     $table->integer('quantity');
        //     $table->double('unitPrice');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitem');
    }
};
