<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $with = ['user', 'likes'];
    protected $fillable = ['name', 'slug', 'description', 'ingredients', 'howToMake', 'timeToMake', 'portions', 'front', 'inner', 'sidebar_image', 'published', 'user_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function likes(){
       return  $this->morphMany(Like::class, 'likeable');
    }

    public function like()
    {
        $userId = ['user_id' => auth()->id()];

        if(! $this->likes()->where($userId)->exists()){
           return $this->likes()->create($userId);
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
