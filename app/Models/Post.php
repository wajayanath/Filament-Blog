<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }

}
