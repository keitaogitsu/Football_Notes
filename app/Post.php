<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'free',
        ];
    
    public function getByLimit()
    {
        return $this->orderBy('updated_at', 'DESC')->get();
    }
}
