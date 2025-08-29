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
        Schema::create('measurement', function (Blueprint $table) {
            // Primary Key custom
            $table->id('measurementId'); 
            $table->double('height');
            $table->double('weight');
            $table->double('shoulderLength');
            $table->double('bodyCircumference');
            $table->double('waist');
            $table->double('hips');
            $table->double('bustWidth');
            $table->double('bustHeight');
            $table->double('frontHeight');
            $table->double('shoulderWidth');
            $table->double('backWidth');
            $table->double('backLength');
            $table->double('neck');
            $table->double('armLength');
            $table->double('underArm');
            $table->double('upperArm');
            $table->double('elbow');
            $table->double('wristSize');
            $table->double('sleeveLength');
            $table->double('topLength');
            $table->double('skirtLength');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement');
    }
};
