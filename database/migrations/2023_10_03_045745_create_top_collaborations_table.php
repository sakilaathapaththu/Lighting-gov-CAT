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
        Schema::create('top_collaborations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg7');
            $table->string('dg8');
            $table->string('dg9');
            $table->string('dg10');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_collaborations');
    }
};
