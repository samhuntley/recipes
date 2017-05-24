<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class CreateRecipesTest extends TestCase
{

  use DatabaseTransactions;

  /** @test */
  public function a_user_can_see_only_owned_recipes()
  {
    $user = factory('App\User')->create();

    $recipes = factory('App\Recipe', 5)->create([
      'user_id' => $user->id
    ]);

    $response = $this->actingAs($user)->get('/recipes');

    foreach ($recipes as $recipe) {
      $response->assertSee($recipe->name);
    }


    $otherUser = factory('App\User')->create();

    $otherRecipe = factory('App\Recipe')->create([
      'user_id' => $otherUser->id
    ]);

    $response->assertDontSee($otherRecipe->name);
  }

  /** @test */
  public function a_user_can_view_owned_recipes()
  {
    $user = factory('App\User')->create();

    $recipe = factory('App\Recipe')->create([
      'user_id' => $user->id
    ]);
    $response = $this->actingAs($user)->get('/recipes/' . $recipe->id);



    $otherUser = factory('App\User')->create();

    $otherRecipe = factory('App\Recipe')->create([
      'user_id' => $otherUser->id
    ]);

    $response->assertDontSee($otherRecipe->name);
  }
}
