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
        Schema::create('op_icts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('op_ict_in_workplace');
            $table->string('op_information_management');
            $table->string('op_digital_citizenship');
            $table->string('marks_op_ict');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_icts');
    }
};
