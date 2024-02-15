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
        Schema::create('op_digital_governments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('op_change_management');
            $table->string('op_collaboration');
            $table->string('op_orientation');
            $table->string('op_quality_management');
            $table->string('op_initiative');
            $table->string('marks_op_digital_government');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_digital_governments');
    }
};
