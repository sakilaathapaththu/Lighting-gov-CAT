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
        Schema::create('op_stakeholder_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt7');
            $table->string('mgt8');
            $table->string('mgt9');
            $table->string('mgt10');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_stakeholder_management');
    }
};
