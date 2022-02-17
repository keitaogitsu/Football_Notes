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
        'user_id',
        'idea',
        'good',
        'task',
        'done',
        'opponent',
        'my_score',
        'opponent_score',
        ];
    
    public function getByLimit()
    {
        return $this::with('user')->orderBy('updated_at', 'DESC')->get();
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
