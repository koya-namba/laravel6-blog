<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function getByLimit(int $limit_count = 3)
    {
        //updated_at降順，limitで制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 3)
    {
        //updated_at降順，limit_countでpaginateする
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
