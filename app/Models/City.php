<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_name',
        'name',
        'slug',
        'services',
        'image',
        'description',
        'suburb_id',
        'cities_content',
    ];

    public function suburb()
    {
        return $this->belongsTo(\App\Models\Suburb::class);
    }
}
