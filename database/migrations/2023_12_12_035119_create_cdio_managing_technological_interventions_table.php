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
        Schema::create('cdio_managing_technological_interventions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict8');
            $table->string('ict9');
            $table->string('ict10');
            $table->string('ict11');
            $table->string('ict12');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_managing_technological_interventions');
    }
};
