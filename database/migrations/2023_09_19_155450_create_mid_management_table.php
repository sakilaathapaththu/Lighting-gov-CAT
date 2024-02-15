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
        Schema::create('mid_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mid_communication');
            $table->string('mid_workplace_management');
            $table->string('mid_decision_making');
            $table->string('mid_capacity_building');
            $table->string('mid_stakeholder');
            $table->string('mid_performance_management');
            $table->string('mid_team_work');
            $table->string('mid_personal_development');
            $table->string('mid_management_overall');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_management');
    }
};
