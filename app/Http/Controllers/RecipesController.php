<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use App\Recipe;

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
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $recipes = Recipe::where('user_id', auth()->id())->get();
      return view('recipes.index', compact('recipes'));
  }

  /**
   * Display a recipe to the database
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Recipe $recipe)
  {
      return view('recipes.show', compact('recipe'));
  }

  /**
   * Show a form to add a recipe to the database
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('recipes.create');
  }

  /**
   * Save a Recipe to the database
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    //$this->validate


    $r = request(['title', 'description', 'story', 'photo']);

    if ($request->hasFile('photo')) {
      $photo = $request->file('photo');
      $photoName = time() . "-" . $photo->getClientOriginalName();
      $photo->move('recipe-photos', $photoName);
      //$image = Image::make(sprintf('uploads/%s', $image_name))->resize(200, 200)->save();
      $r['photo'] = $photoName;
    }

    auth()->user()->create(
      new Recipe($r)
    );

    return redirect('/recipes');
  }

}
