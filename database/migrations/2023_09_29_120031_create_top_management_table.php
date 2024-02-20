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
        Schema::create('top_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('organizational_leadership');
            $table->string('communication');
            $table->string('workplace_management');
            $table->string('decision_making');
            $table->string('capacity_building');
            $table->string('stakeholder_management');
            $table->string('human_resource');
            $table->string('personal_development');
            $table->string('overall_top_management');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_management');
    }
};
