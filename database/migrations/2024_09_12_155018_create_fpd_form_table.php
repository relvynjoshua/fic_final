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
        Schema::create('fpd_form', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('unit_bldg')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('city');
            $table->string('province')->nullable();
            $table->string('zip')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('company_type')->nullable();
            $table->string('employees')->nullable();
            $table->string('asset_size')->nullable();
            $table->text('background')->nullable();
            $table->string('lastName')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->text('identification')->nullable();
            $table->string('other_identification')->nullable();
            $table->text('position')->nullable();
            $table->string('other_position')->nullable();
            $table->text('new_product')->nullable();
            $table->text('product_standard')->nullable();
            $table->text('formulation_dev')->nullable();
            $table->text('process_dev')->nullable();
            $table->string('other_service')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fpd_form');
    }
};
