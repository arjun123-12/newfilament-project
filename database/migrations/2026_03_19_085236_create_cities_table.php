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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->string('name');
            $table->string('slug')->index();
            $table->longText('services')->nullable(); // as you want
            $table->string('image')->nullable();
            $table->string('description');
            $table->timestamps();
            $table->foreignId('suburb_id')->nullable(); // as you want
            $table->text('cities_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
