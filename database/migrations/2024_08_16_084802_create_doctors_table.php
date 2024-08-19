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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('phone_no')->nullable();
            $table->string('specialist')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('blood_type')->nullable();
            $table->text('address')->nullable();
            $table->string('photo')->nullable();

            $table->unsignedBigInteger('clinic_room_id')->nullable();
            $table->foreign('clinic_room_id')->references('id')->on('clinic_rooms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
