<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'image',
        'cooking_time',
        'weight',
        'description'
    ];
}
