<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tour_group_tours', function (Blueprint $table) {
            $table->foreignId('tour_group_id')->constrained('tour_groups');
            $table->foreignId('tour_id')->constrained('tours');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tour_group_tours');
    }
};
