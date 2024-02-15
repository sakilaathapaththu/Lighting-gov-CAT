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
        Schema::create('cdios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cdio_name');
            $table->string('cdio_email');
            $table->string('cdio_contact_number');
            $table->string('action')->default('deactive');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdios');
    }
};
