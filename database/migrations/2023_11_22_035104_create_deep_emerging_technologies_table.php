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
        Schema::create('deep_emerging_technologies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('td1');
            $table->string('td2');
            $table->string('td3');
            $table->string('td4');
            $table->string('td5');
            $table->string('td6');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_emerging_technologies');
    }
};
