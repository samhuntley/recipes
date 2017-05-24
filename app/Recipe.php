<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

  protected $fillable = ['name', 'instructions', 'story', 'user_id'];
  /**
   * Get the ingredients for the recipes
   */

   public function ingredients()
   {
     return $this->hasMany('App\Ingredient');
   }


   /**
    * Get the user that created this recipe
    */
   public function user()
   {
     return $this->belongsTo('App\User');
   }
}
