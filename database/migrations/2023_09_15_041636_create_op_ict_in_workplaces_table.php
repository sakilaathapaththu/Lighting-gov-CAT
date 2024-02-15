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
        Schema::create('op_ict_in_workplaces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict1_1');
            $table->string('ict1_2');
            $table->string('ict1_3');
            $table->string('ict2');
            $table->string('ict3_1');
            $table->string('ict3_2');
            $table->string('ict3_3');
            $table->string('ict4');
            $table->string('ict5');
            $table->string('ict6');
            $table->string('ict7');
            $table->string('ict8');
            $table->string('ict9');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ict_in_workplaces');
    }
};
