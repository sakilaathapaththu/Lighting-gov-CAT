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
        Schema::create('op_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('op_communication');
            $table->string('op_workplace_management');
            $table->string('op_stakeholder_management');
            $table->string('op_teamwork');
            $table->string('op_personal_development');
            $table->string('marks_op_management');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_management');
    }
};
