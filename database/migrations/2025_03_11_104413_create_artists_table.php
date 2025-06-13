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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloudinary_upload_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->integer('monthly_listeners')->nullable();
            $table->integer('followers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
