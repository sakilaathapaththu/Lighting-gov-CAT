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
        Schema::create('mid_workplace_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt6');
            $table->string('mgt7');
            $table->string('mgt8');
            $table->string('mgt9_1');
            $table->string('mgt9_2');
            $table->string('mgt9_3');
            $table->string('mgt9_4');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_workplace_management');
    }
};
