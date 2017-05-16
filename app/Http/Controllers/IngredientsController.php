<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;
use App\Ingredient;

class IngredientsController extends Controller
{
  /**
   * View to add a new recipe
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Recipe $recipe)
  {
      $measurements = ['lb', 'oz'];
      return view('book.addIngredient', compact('recipe', 'measurements'));
  }

  /**
   * Add a new ingredient to a recipe
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Recipe $recipe)
  {
    // dd(request());
    Ingredient::create([
       'name' => request('name'),
       'amount' => request('amount'),
       'measurement' => request('measurement'),
       'recipe_id' => $recipe->id,
       'user_id' => auth()->id()
     ]);

     return redirect('/recipes/' . $recipe->id);
  }
}
