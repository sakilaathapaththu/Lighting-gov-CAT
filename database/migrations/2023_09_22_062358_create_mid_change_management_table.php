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
        Schema::create('mid_change_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg4');
            $table->string('dg5');
            $table->string('dg6');
            $table->string('dg7');
            $table->string('dg8');
            $table->string('dg9_1');
            $table->string('dg9_2');
            $table->string('dg9_3');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_change_management');
    }
};
