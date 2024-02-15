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
        Schema::create('cdio_digital_governments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('project_and_programme_management');
            $table->string('change_management');
            $table->string('collaboration');
            $table->string('orientation');
            $table->string('managing_quality');
            $table->string('drive_the_adoption');
            $table->string('digital_initiative');
            $table->string('overall');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_digital_governments');
    }
};
