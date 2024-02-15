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
        Schema::create('cdio_digital_transformations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt39');
            $table->string('mgt40');
            $table->string('mgt41');
            $table->string('mgt42');
            $table->string('mgt43');
            $table->string('mgt44');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_digital_transformations');
    }
};
