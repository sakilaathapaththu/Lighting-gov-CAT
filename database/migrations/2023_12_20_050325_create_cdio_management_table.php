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
        Schema::create('cdio_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('commmunication');
            $table->string('managing_effective_workplace');
            $table->string('decision_making');
            $table->string('building_capacity');
            $table->string('stakeholder');
            $table->string('human_resource');
            $table->string('teamwork');
            $table->string('self_development');
            $table->string('digital_transformation');
            $table->string('overall');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_management');
    }
};
