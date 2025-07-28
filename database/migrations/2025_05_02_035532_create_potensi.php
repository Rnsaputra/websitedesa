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
        Schema::create('potensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained(
                table:'potensi_categories',
                indexName:'potensi_categories_id',
            );
            $table->string('cover')->nullable();
            $table->string('place')->unique();
            $table->string('slugplace')->unique();
            $table->string('description');
            $table->text('locate')->nullable();
            $table->text('embedlocate')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi');
    }
};
