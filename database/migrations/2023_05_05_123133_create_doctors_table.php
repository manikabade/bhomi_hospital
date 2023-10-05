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
            $table->foreignId('specialist_id')->constrained('specialists')->cascadeOnDelete();
            $table->string('doctor_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('hospital_name');
            $table->string('hospital_address');
            $table->string('day_from');
            $table->string('day_to');
            $table->string('degree');
            $table->string('bio');
            $table->string('image');
            $table->boolean('status')->default(0);
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
