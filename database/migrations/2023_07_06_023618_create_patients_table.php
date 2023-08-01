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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialist_id')->constrained('specialists')->cascadeOnDelete();
            $table->string('patient_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('security_token');
            $table->string('patient_address');
            $table->string('blood_group');
            $table->date('appointment_date');
            $table->time('time_for_appointment');
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
        Schema::dropIfExists('patients');
    }
};
