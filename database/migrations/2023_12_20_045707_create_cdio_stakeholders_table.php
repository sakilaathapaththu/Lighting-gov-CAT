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
        Schema::create('cdio_stakeholders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt23');
            $table->string('mgt24');
            $table->string('mgt25');
            $table->string('mgt26');
            $table->string('mgt27');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_stakeholders');
    }
};
