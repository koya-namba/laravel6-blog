<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getByCategory(int $limit_count = 3)
    {
        return $this->posts()->with("category")->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
