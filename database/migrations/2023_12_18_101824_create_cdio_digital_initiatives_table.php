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
        Schema::create('cdio_digital_initiatives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg26');
            $table->string('dg27');
            $table->string('dg28');
            $table->string('dg29');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_digital_initiatives');
    }
};
