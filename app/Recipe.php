<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title', 'story', 'description', 'photo'];

  /**
   * Get the recipes that use this ingredient
   */
  public function recipes() {
    return $this->belongsToMany('App\Ingredient')->withTimestamps();
      return $this->belongsToMany('App\Instructions')->withTimestamps();
  }

  /**
   * Get the instructions
   */
  public function instructions() {
    return $this->hasMany('App\Instruction');
  }

  /**
   * Get the owner of this recipe
   */
  public function user() {
    return $this->belongsTo('App\User');
  }
}
