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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('contact_email')->unique();
            $table->string('contact_phone_number');
            $table->string('company_name');
            $table->string('company_address')->default('216 12th Street NW Roanoke VA');
            $table->string('company_city')->default('Roanoke');
            $table->string('company_zip')->default('24017');
            $table->integer('company_vat')->default('NA');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};