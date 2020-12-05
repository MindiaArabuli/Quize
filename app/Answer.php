<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'Answer', 'questionID','iscorrect'
    ];

    
    public function questions()
    {
        
        return $this->hasMany('App\Question')
            ->withTimestamps();
    }

}
