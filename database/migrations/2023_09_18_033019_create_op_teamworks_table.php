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
        Schema::create('op_teamworks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt11');
            $table->string('mgt12');
            $table->string('mgt13');
            $table->string('mgt14');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_teamworks');
    }
};
