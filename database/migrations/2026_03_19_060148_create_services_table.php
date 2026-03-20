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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('first_content')->nullable();
            $table->string('first_img')->nullable();
            $table->string('first_img_alt')->nullable();
            $table->longText('full_content')->nullable();
            $table->text('second_content')->nullable();
            $table->string('second_img')->nullable();
            $table->string('second_img_alt')->nullable();
            $table->longText('full_content_second')->nullable();
            $table->string('title');
            $table->string('slug')->nullable()->index();
            $table->string('service_name')->nullable();
            $table->string('card_image')->nullable();
            $table->text('description');
            $table->longText('faqs')->nullable();
            $table->longText('testimonials')->nullable();
            $table->text('banner_text')->nullable();
            $table->integer('status')->default(1);
            $table->foreignId('city_id')->nullable();
            $table->string('suburbname')->nullable();
            $table->text('keywords')->nullable();
            $table->foreignId('suburb_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
