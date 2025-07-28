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
            Schema::create('potensi_image', function (Blueprint $table) {
                $table->id();
                $table->foreignId('potensi_id')->constrained('potensi')->onDelete('cascade');
                $table->string('image_path');
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi_image');
    }
};
