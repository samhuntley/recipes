<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;
use App\Repositories\Recipes;
use App\Ingredient;

class RecipesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the recipe book
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Recipes $recipes)
    {
        $recipes = $recipes->all();
        return view('book.index', compact('recipes'));
    }

    /**
     * Show a recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
      return view('book.recipe', compact('recipe'));
    }

    /**
     * Add a new recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.add');
    }

    /**
     * Add a new recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      Recipe::create([
         'name' => request('name'),
         'instructions' => request('instructions'),
         'story' => request('story'),
         'user_id' => auth()->id()
       ]);

       return redirect('/recipes');
    }

    /**
     * Edit a recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
      $measurements = ['lb', 'oz'];
      return view('book.edit', compact('recipe', 'measurements'));
    }

    /**
     * Update a recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Recipe $recipe)
    {
      $ingredients = request('ing');
      if (count($ingredients) > 0) {
        foreach ($ingredients as $id => $ing) {
          if ($id) {
            if ($id && ($ingredient = Ingredient::find($id))) {
              $ingredient->update([
                'name' => $ing['ingredientName'],
                'amount' => $ing['ingredientAmount'],
                'measurement' => $ing['ingredientMeasurement']
              ]);
            }
          }
        }
      }
      $recipe->update([
         'name' => request('name'),
         'instructions' => request('instructions'),
         'story' => request('story')
       ]);

       return redirect('/recipes/' . $recipe->id);
    }

    /**
     * Delete a recipe
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Recipe $recipe)
    {
      $recipe->delete();

       return redirect('/recipes');
    }
}
