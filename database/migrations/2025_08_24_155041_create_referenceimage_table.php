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
        Schema::create('referenceimage', function (Blueprint $table) {
            $table->id('referenceImageId');
            $table->foreignId('design_id')
                ->constrained('customdesign', 'designId')
                ->cascadeOnDelete(); // FK ke CustomDesign
            $table->string('refImage'); // URL gambar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referenceimage');
    }
};
