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
        Schema::create('mid_project_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg1_1');
            $table->string('dg1_2');
            $table->string('dg1_3');
            $table->string('dg1_4');
            $table->string('dg1_5');
            $table->string('dg2_1');
            $table->string('dg2_2');
            $table->string('dg2_3');
            $table->string('dg2_4');
            $table->string('dg3_1');
            $table->string('dg3_2');
            $table->string('dg3_3');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_project_management');
    }
};
