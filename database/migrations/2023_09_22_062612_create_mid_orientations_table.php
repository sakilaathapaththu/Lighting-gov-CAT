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
        Schema::create('mid_orientations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg15');
            $table->string('dg16_1');
            $table->string('dg16_2');
            $table->string('dg16_3');
            $table->string('dg16_4');
            $table->string('dg17');
            $table->string('dg18');
            $table->string('dg19_1');
            $table->string('dg19_2');
            $table->string('dg19_3');
            $table->string('dg19_4');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_orientations');
    }
};
