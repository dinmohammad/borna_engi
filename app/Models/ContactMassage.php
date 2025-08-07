<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMassage extends Model
{
    protected $table = 'contact_messages';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'number',
        'message',
        'status',
        'updated_by_id',
        'updated_by_name',
    ];
}
