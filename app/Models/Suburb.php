<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    protected $fillable = [
        'suburbname',
        'slug',
        'image',
        'description',
        'suburb_content',
    ];

    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'suburb_id');
    }
}
