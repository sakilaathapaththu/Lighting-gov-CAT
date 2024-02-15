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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('emerging_technology');
            $table->string('data_management');
            $table->string('delivery_governance');
            $table->string('connectivity');
            $table->string('security');
            $table->string('technology_architecture');
            $table->string('data_governance');
            $table->string('data_engineering');
            $table->string('interoperbility');
            $table->string('application_for_users');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
