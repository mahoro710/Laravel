<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  
  
  protected $fillable = [
        'post.title',
        'post.body',
        ];
        
        
       public function getPaginateByLimit(int $limit_count = 10)
{
    
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
   
}
