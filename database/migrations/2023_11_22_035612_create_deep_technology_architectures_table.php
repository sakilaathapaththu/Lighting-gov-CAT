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
        Schema::create('deep_technology_architectures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('td23');
            $table->string('td24');
            $table->string('td25');
            $table->string('td26');
            $table->string('td27');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_technology_architectures');
    }
};
