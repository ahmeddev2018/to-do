<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['title','date'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }



}
