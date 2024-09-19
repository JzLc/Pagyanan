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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            // $table->user_id();
            $table->string('place_name');
            $table->longText('place_description');
            $table->string('place_type');
            $table->string('place_region');
            $table->string('place_province_city');
            $table->string('place_municipality_town');
            $table->string('place_brgy_street');
            $table->string('place_email');
            $table->bigInteger('place_contact_num');
            $table->bigInteger('place_room_size');
            $table->bigInteger('place_monthly_rent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
