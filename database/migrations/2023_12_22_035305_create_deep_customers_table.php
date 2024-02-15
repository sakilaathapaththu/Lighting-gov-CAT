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
        Schema::create('deep_customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('deep_citizen_experience_strategy');
            $table->string('deep_citizen_engagement');
            $table->string('deep_citizen_experience');
            $table->string('deep_citizen_trust');
            $table->string('deep_citizen_insight');
            $table->string('overall');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_customers');
    }
};
