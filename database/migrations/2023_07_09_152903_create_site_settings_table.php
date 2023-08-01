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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('alias');
            $table->string('working_day');
            $table->string('working_time');
            $table->string('closed_day');
            $table->string('closed_time');
            $table->string('description');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('copyright');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('insta');
            $table->string('footer_text');

            $table->string('photo');
            $table->string('logo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
