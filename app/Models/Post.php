<?php

namespace App\Models;

use App\Models\Category;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia

{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }
}
