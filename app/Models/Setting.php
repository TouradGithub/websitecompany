<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name',
        'description',
        'about_content',
        'logo',
        'phone',
        'whatsapp',
        'email',
        'localisation'
    ];
}
