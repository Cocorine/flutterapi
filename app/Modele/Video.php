<?php

namespace App\Modele;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','url','post_id',
    ];


    public function post(){
        return $this->belongsTo('App\Modele\Post');
    }
}
