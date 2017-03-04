<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
     * Get the recipes for this user
     */
    public function recipes() {
      return $this->hasMany('App\Recipe');
    }

    public function create(Recipe $recipe) {
      $this->recipes()->save($recipe);
    /*  Recipe::create([
        'name' => request('name'),
        'description' => request('description'),
        'story' => request('story'),
        'photo' => request('photo'),
        'user_id' => auth()->id()
      ]);*/

    }
}
