<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use App\Recipe;
use Intervention\Image\ImageManagerStatic as Image;

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
      $image = Image::make(sprintf('recipe-photos/%s', $photoName))->resize(200, 200)->save();
      $r['photo'] = $photoName;
    } else {
      $r['photo'] = '';
    }

    auth()->user()->publish(
      new Recipe($r)
    );

    return redirect('/recipes');
  }

}
