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
            $table->id('orderId'); // PK
            $table->foreignId('customer_id')->nullable()->constrained('customer', 'customerId')->nullOnDelete();  // FK Customer
            $table->foreignId('status_id')->constrained('status', 'statusId'); // status order: cart/pending/paid/etc
            $table->date('orderDate')->nullable();
            $table->double('totalItem')->default(0);
            $table->double('totalPrice')->default(0);
            $table->date('estimatedDate')->nullable();
            $table->foreignId('shippingMethod_id')->constrained('shippingmethod', 'shippingMethodId')->nullable(); // FK Ke ShippingMethode
        });

        // Schema::create('order', function (Blueprint $table) {
        //     $table->id('orderId'); // Primary Key
        //     $table->foreignId('customer_id')->constrained('customer', 'customerId'); // FK ke Customer
        //     $table->foreignId('item_id')->constrained('orderitem', 'itemId'); // FK ke Orderitems
        //     $table->date('orderDate');
        //     $table->string('status', 20);
        //     $table->foreignId('modelType_id')->constrained('modeltype', 'modelTypeId'); // FK ke ModelType
        //     $table->foreignId('liningOption_id')->constrained('liningoption', 'liningOptionId'); // FK ke LiningOption
        //     $table->foreignId('accessories_id')->constrained('accessories', 'accessoriesId'); // FK ke Accessories
        //     $table->foreignId('status_id')->constrained('status','statusId'); // FK ke Status
        //     $table->double('totalItem');
        //     $table->double('totalPrice');
        //     $table->date('estimatedDate');
        //     $table->foreignId('shippingMethod_id')->constrained('shippingmethod','shippingMethodId'); // FK ke ShippingMethod
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
