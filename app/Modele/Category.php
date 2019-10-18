<?php

namespace App\Modele;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','color',
    ];
    public function posts(){
        return $this->hasMany('App\Modele\Post');
    }
}
