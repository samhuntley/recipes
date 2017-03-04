@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($recipes as $recipe)
              <div class="recipe">
                <h2 class="recipe-title"><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></h2>
                <img src="/recipe-photos/{{ $recipe->photo }}" alt="Photo of {{ $recipe->title }}" />
                <p>{{ $recipe->description }}</p>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
