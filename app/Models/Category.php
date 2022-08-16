<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
     // category could be associate with many posts (has many)
    public function posts(){
        // hasOne, hasMany, belongsToMany, belongsTo
        return $this->hasMany(Post::class);
    }
}
