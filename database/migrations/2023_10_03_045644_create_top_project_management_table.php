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
        Schema::create('top_project_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg1_1');
            $table->string('dg1_2');
            $table->string('dg2');
            $table->string('dg3');
            $table->string('dg4');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_project_management');
    }
};
