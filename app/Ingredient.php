<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'photo', 'history'];

  /**
   * Get the recipes that use this ingredient
   */
  public function recipes() {
    return $this->belongsToMany('App\Recipe')->withTimestamps();
  }
}
