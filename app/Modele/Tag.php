<?php

namespace App\Modele;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];


    public function posts(){
        return $this->belongsToMany('App\Modele\Post');
    }
}
