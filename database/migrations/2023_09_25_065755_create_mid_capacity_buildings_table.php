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
        Schema::create('mid_capacity_buildings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt19_1');
            $table->string('mgt19_2');
            $table->string('mgt19_3');
            $table->string('mgt19_4');
            $table->string('mgt20_1');
            $table->string('mgt20_2');
            $table->string('mgt20_3');
            $table->string('mgt20_4');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_capacity_buildings');
    }
};
