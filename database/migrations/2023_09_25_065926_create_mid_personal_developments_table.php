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
        Schema::create('mid_personal_developments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt38');
            $table->string('mgt39_1');
            $table->string('mgt39_2');
            $table->string('mgt39_3');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_personal_developments');
    }
};
