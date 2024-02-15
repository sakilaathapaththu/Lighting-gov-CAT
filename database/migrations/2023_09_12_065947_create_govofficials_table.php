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
        Schema::create('govofficials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('preferred_name');
            $table->string('designation');
            $table->string('contact_number');
            $table->string('email');
            $table->string('employment_layer');
            $table->string('date_of_birth');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->foreignId('govorganizationname_id')->constrained('govorganizationnames');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govofficials');
    }
};
