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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->smallInteger('rating'); // 1 dan 5 gacha bo‘ladi odatda
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->integer('moderator_rate')->nullable();
            $table->text('comment_uz')->nullable();
            $table->text('comment_ru')->nullable();
            $table->text('comment_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
