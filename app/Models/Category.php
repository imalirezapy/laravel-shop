<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];
    public $timestamps = false;

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function childes()
    {
        return $this->hasMany(Category::class, 'id', 'parent_id');
    }

    public function app()
    {
        return $this->hasMany(App::class);
    }
}
