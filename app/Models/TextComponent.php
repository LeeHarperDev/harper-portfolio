<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TextComponent extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'title',
        'body',
        'img_src',
        'img_alt'
    ];
}
