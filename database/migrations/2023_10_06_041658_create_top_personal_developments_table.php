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
        Schema::create('top_personal_developments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt28');
            $table->string('mgt29');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_personal_developments');
    }
};
