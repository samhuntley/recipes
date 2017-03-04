@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $recipe->title }}</h1>

            <p>{{ $recipe->description }}</p>

            <div class="story">
            {{ $recipe->story }}
            </div>

            <p class="meta">
              <span class="created">Created: {{ $recipe->created_at->toDayDateTimeString() }}</span>
              <span class="updated">Last updated: {{ $recipe->updated_at }}</span>
            </p>
        </div>
    </div>
</div>
@endsection
