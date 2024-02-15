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
        Schema::create('preliminary_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('report_file');
            $table->string('description');
            $table->foreignId('preliminary_result_id')->constrained('preliminary_results');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_reports');
    }
};
