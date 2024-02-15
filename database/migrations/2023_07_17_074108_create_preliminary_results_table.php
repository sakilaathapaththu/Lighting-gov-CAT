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
        Schema::create('preliminary_results', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('overall_result');
            $table->string('results_for_dimension_1');
            $table->string('results_for_dimension_2');
            $table->string('results_for_dimension_3');
            $table->string('results_for_dimension_4');
            $table->string('results_for_dimension_5');
            $table->foreignId('preliminary_assessment_id')->constrained('preliminary_assessments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_result');
    }
};
