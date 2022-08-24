<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navitem extends Model
{
    use HasFactory;

    protected $table = "navitems";

    protected $fillable = [
        'name',
        'link',
        'dropdown-menu',
        'dropdown-item',
        'sm',
        'lg',
        'order',
    ];

    public $timestamps = false;
}
