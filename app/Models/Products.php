<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'division',
        'district',
        'type',
        'land_area',
        'apartment_size',
        'untis',
        'parking_size',
        'title',
        'descripiton',
        'address',
        'image',
        'status',
        'updated_by_id',
        'updated_by_name',
    ];
}
