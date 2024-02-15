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
        Schema::create('cdio_ict_in_workplaces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict1');
            $table->string('ict2');
            $table->string('ict3');
            $table->string('ict4');
            $table->string('ict5');
            $table->string('ict6');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_ict_in_workplaces');
    }
};
