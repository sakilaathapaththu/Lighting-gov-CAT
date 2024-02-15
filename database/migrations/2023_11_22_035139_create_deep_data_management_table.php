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
        Schema::create('deep_data_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('td7');
            $table->string('td8');
            $table->string('td9');
            $table->string('td10');
            $table->string('td11');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_data_management');
    }
};
