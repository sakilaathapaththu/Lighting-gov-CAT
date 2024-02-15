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
        Schema::create('top_stakeholder_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt22');
            $table->string('mgt23_1');
            $table->string('mgt23_2');
            $table->string('mgt24');
            $table->string('mgt25');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_stakeholder_management');
    }
};
