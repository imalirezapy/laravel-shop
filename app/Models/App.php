<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'owner',
        'version',
        'file',
        'cover',
        'size',
        'description',
        'preview',
        'category_id',
    ];

    use HasFactory;

}
