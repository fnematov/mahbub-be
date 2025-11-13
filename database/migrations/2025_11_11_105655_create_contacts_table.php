<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('position_uz');
            $table->string('position_ru');
            $table->string('position_en');
            $table->string('manager_name');
            $table->json('phone1');
            $table->json('phone2')->nullable();
            $table->json('working_days');
            $table->time('from');
            $table->time('do');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
