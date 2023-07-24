<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'categoryName',
        'slug',
        'avatar',
        'category_id'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
