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
        Schema::create('mid_quality_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg20');
            $table->string('dg21');
            $table->string('dg22_1');
            $table->string('dg22_2');
            $table->string('dg22_3');
            $table->string('dg22_4');
            $table->string('dg23');
            $table->string('dg24');
            $table->string('dg25');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_quality_management');
    }
};
