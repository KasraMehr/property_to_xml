<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_ref_no')->nullable();
            $table->string('permit_number')->nullable();
            $table->string('property_status')->nullable();
            $table->string('property_purpose')->nullable();
            $table->string('property_type')->nullable();
            $table->decimal('property_size', 10, 2)->nullable();
            $table->string('property_size_unit')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->text('features')->nullable();
            $table->boolean('off_plan')->nullable();
            $table->text('portals')->nullable();
            $table->dateTime('last_updated')->nullable();
            $table->string('property_title')->nullable();
            $table->text('property_description')->nullable();
            $table->string('property_title_ar')->nullable();
            $table->text('property_description_ar')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('rent_frequency')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('sub_locality')->nullable();
            $table->string('tower_name')->nullable();
            $table->string('listing_agent')->nullable();
            $table->string('listing_agent_phone')->nullable();
            $table->string('listing_agent_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
}
