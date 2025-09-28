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
        Schema::create('customdesign', function (Blueprint $table) {
            $table->id('designId');
            $table->foreignId('referenceImage_id')
                ->constrained('referenceimage', 'referenceImageId')
                ->unique()
                ->onDelete('cascade');
            $table->string('description', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customdesign');
    }
};
