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
        Schema::create('mid_icts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict_in_workplace');
            $table->string('information_management');
            $table->string('digital_citizenship');
            $table->string('overall_mid_ict');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_icts');
    }
};
