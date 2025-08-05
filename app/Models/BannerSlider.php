<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerSlider extends Model
{

    protected $table = 'banner_sliders';
    protected $fillable = [
        'title',
        'description',
        'image',
        'image_positon',
        'status',
        'updated_by',
    ];
}
