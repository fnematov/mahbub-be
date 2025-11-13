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
        Schema::create('tour_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->decimal('add_price_adult', 10, 2)->nullable();
            $table->decimal('add_price_child', 10, 2)->nullable();
            $table->text('description_tour_uz')->nullable();
            $table->text('description_tour_ru')->nullable();
            $table->text('description_tour_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_routes');
    }
};
