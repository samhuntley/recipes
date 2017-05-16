<?php

namespace App\Repositories;

use App\Recipe;

class Recipes {

  /**
   * Return all of the user's recipes
   */
  public function all()
  {
    return Recipe::where('user_id', auth()->id())->get()->load('ingredients');
  }

}
