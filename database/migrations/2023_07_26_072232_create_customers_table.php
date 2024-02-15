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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('citizen_engagement');
            $table->string('citizen_experience');
            $table->string('citizen_experience_strategy');
            $table->string('citizen_insights');
            $table->string('citizen_trust');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
