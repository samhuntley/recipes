<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;
use App\Ingredient;
use App\Measurement;

class IngredientsController extends Controller
{
  /**
   * View to add a new ingredient
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Recipe $recipe)
  {
      $measurements = Measurement::all();
      return view('book.addIngredient', compact('recipe', 'measurements'));
  }

  /**
   * View to add a edit an ingredient
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Recipe $recipe)
  {
      $measurements = Measurement::all();
      return view('book.addIngredient', compact('recipe', 'measurements'));
  }

  /**
   * Add a new ingredient to a recipe
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Recipe $recipe)
  {
    Ingredient::create([
       'name' => request('name'),
       'amount' => request('amount'),
       'measurement_id' => request('measurement'),
       'recipe_id' => $recipe->id,
       'user_id' => auth()->id()
     ]);

     return redirect('/recipes/' . $recipe->id);
  }


  /**
   * Remove an ingredient from a recipe
   *
   * @return \Illuminate\Http\Response
   */
  public function delete(Recipe $recipe, Ingredient $ingredient)
  {
    $ingredient->delete();

    return redirect('/recipes/' . $recipe->id . '/edit');
  }
}
