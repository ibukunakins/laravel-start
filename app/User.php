<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class User extends Authenticatable implements SluggableInterface
{
    use SluggableTrait;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Used to build the slug attribute
     * @var array
     * 
     * */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];
}
