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
        Schema::create('top_capacity_buildings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt18_1');
            $table->string('mgt18_2');
            $table->string('mgt18_3');
            $table->string('mgt19');
            $table->string('mgt20');
            $table->string('mgt21');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_capacity_buildings');
    }
};
