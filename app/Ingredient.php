<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

  protected $fillable = ['name', 'amount', 'measurement', 'recipe_id', 'user_id'];

  /**
   * Get the recipes that include this recipe
   */

   public function recipe()
   {
     return $this->belongsTo('App\Recipe');
   }

   public function measurement() {
     return $this->belongsTo('App\Measurement');
   }
}
