<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = ['title','body','task_id'];


    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
