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
        Schema::create('cdio_digital_citizenships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict13');
            $table->string('ict14');
            $table->string('ict15');
            $table->string('ict16');
            $table->string('ict17');
            $table->string('ict18');
            $table->string('ict19');
            $table->string('ict20');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_digital_citizenships');
    }
};
