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
        Schema::create('deep_citizen_engagements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cus2');
            $table->string('cus3');
            $table->string('cus4');
            $table->string('cus5');
            $table->string('cus6');
            $table->string('cus7');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_citizen_engagements');
    }
};
