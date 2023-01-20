<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'details', 'slug', 'description', 'image_path', 'user_id'];
    public function user(){
        return $this->belongTo(User::class);
    }

    public function sluggable(): array{
        return[
            'slug'=> [
                'source'=>'title'
            ]
        ];
    }
}
