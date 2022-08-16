<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Everytime I fetch a post I always want the author included as part of the result set
    protected $with = ['category', 'author'];

//    Protected $guarded = ['id'];
    //Protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id'];
    public function category(){
        // hasOne, hasMany, belongsToMany, belongsTo
        return $this->belongsTo(Category::class);
    }

    public function author(){     // here we can override this name and mention that the foreign key is the author id
        // hasOne, hasMany, belongsToMany, belongsTo
        return $this->belongsTo(User::class, 'user_id');
    }
}
