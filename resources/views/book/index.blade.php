@extends('layouts.book')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="/recipes/add" class="btn btn-default">Add a Recipe</a>
            </div>
            <h1>Recipe Book <small>Store your Recipes</small></h1>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Recipes</div>
              @foreach ($recipes as $recipe)
                @include('partials.recipe')
              @endforeach
          </div>
        </div>
    </div>
</div>
@endsection
