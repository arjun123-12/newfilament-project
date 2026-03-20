<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'service_name',
        'description',
        'card_image',

        'first_content',
        'first_img',
        'first_img_alt',

        'second_content',
        'second_img',
        'second_img_alt',

        'full_content',
        'full_content_second',

        'banner_text',

        'faqs',
        'testimonials',

        'status',
        'city_id',
        'suburb_id',
        'suburbname',
        'keywords',
    ];

    protected $casts = [
        'faqs' => 'array',
        'testimonials' => 'array',
        'status' => 'boolean',
    ];
}
