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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('source');
            $table->string('image_url');
            $table->year('release_year');
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('listens')->default(0);
            $table->foreignId('genre_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('duration');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
