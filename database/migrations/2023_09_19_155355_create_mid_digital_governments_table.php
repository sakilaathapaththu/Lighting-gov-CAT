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
        Schema::create('mid_digital_governments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mid_project_management');
            $table->string('mid_change_management');
            $table->string('mid_collaboration');
            $table->string('mid_orientation');
            $table->string('mid_quality_management');
            $table->string('mid_initiative');
            $table->string('marks_mid_digital_government');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_digital_governments');
    }
};
