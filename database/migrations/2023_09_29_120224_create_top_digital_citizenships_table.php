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
        Schema::create('top_digital_citizenships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict6_1');
            $table->string('ict6_2');
            $table->string('ict6_3');
            $table->string('ict7_1');
            $table->string('ict7_2');
            $table->string('ict7_3');
            $table->string('ict8');
            $table->string('ict9');
            $table->string('ict10');
            $table->string('ict11');
            $table->string('ict12_1');
            $table->string('ict12_2');
            $table->string('ict12_3');
            $table->string('ict13');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_digital_citizenships');
    }
};
