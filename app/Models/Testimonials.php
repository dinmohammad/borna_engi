<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';
    protected $fillable = [
        'quote',
        'client_name',
        'client_position',
        'image',
        'image_positon',
        'status',
        'updated_by_id',
        'updated_by_name',
    ];
}
