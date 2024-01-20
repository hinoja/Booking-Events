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
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('place'); 
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->longtext('description');
            $table->dateTime('date');
            $table->boolean('is_active')->default(true);
            $table->string('status')->nullable();
            $table->datetime('hour')->nullable();
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
