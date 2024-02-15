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
        Schema::create('typesofservices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('types_of_service');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_of_services');
    }
};
