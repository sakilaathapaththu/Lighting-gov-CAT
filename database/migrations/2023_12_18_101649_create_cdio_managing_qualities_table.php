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
        Schema::create('cdio_managing_qualities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg15');
            $table->string('dg16');
            $table->string('dg17');
            $table->string('dg18');
            $table->string('dg19');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_managing_qualities');
    }
};
