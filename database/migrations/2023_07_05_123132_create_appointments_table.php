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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_name')->constrained('doctors')->cascadeOnDelete();
            $table->string('patient_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('patient_address');
            $table->string('blood_group');
            $table->date('appointment_date');
            $table->foreignId('schedule_management_id')->constrained('schedule_management')->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
