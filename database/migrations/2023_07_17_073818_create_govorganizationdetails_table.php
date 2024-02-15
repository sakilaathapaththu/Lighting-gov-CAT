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
        Schema::create('govorganizationdetails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gov_org_address');
            $table->string('gov_org_email');
            $table->string('number_of_employee');
            $table->text('districts_of_operations');
            $table->string('phone_number');
            $table->string('availablity_of_IT_unit');
            $table->string('name_of_the_head');
            $table->string('contact_number_of_the_head');
            $table->string('head_email');
            $table->string('designation');
            $table->string('types_of_service');
            $table->string('dtu_type')->default('No data'); ;
            $table->string('number_of_employees_dtu')->default('No data'); ;
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('related_ministry_id')->constrained('related_ministries');
            $table->foreignId('organization_category_id')->constrained('organization_categories');
            $table->foreignId('govorganizationname_id')->constrained('govorganizationnames');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govorganizationdetail');
    }
};
