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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status'); // 'in_progress' or 'completed'
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('goal')->nullable();
            $table->string('audience')->nullable();
            $table->integer('progress')->default(0); // Progress as a percentage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
