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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_description')->nullable();

            // Photos
            $table->string('cover_image');
            $table->string('hero_position')->default('center 35%');
            $table->json('gallery');

            // Main content
            $table->text('details');
            $table->json('overview')->nullable();
            $table->json('services')->nullable();
            $table->text('experience')->nullable();
            $table->text('impact')->nullable();
            $table->json('partners')->nullable();

            // Summary box
            $table->foreignId('event_category_id')->constrained()->restrictOnDelete();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location');
            $table->string('department');
            $table->string('client')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
