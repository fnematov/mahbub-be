<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title_uz')->nullable();
            $table->string('banner_title_ru')->nullable();
            $table->string('banner_title_en')->nullable();
            $table->string('banner_description_uz')->nullable();
            $table->string('banner_description_ru')->nullable();
            $table->string('banner_description_en')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('website_title')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
