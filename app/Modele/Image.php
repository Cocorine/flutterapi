<?php

namespace App\Modele;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description','url','post_id','featured',
    ];


    public function post(){
        return $this->belongsTo('App\Modele\Post');
    }

}
