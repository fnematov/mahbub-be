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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained()->onDelete('cascade');

            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');

            $table->string('status')->default('active');

            $table->decimal('price_adult', 10, 2)->nullable();
            $table->decimal('price_child', 10, 2)->nullable();

            $table->integer('days_count')->default(0);
            $table->integer('nights_count')->default(0);

            $table->text('info_tour_uz')->nullable();
            $table->text('info_tour_ru')->nullable();
            $table->text('info_tour_en')->nullable();

            $table->jsonb('event_months')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
