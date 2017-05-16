@extends('layouts.book')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="/recipes/{{ $recipe->id }}/edit" class="btn btn-default">Edit</a>
              <a href="/recipes/{{ $recipe->id }}/delete" class="btn btn-default">Delete</a>
            </div>
            <h1>{{ $recipe->name }}</h1>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <ul class="list-group ingredients">
            @foreach ($recipe->ingredients as $ingredient)
              <li class="list-group-item"><strong>{{ $ingredient->amount }}{{ $ingredient->measurement }}</strong> {{ $ingredient->name }}</li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="panel-body instructions">
              {{ $recipe->instructions }}
          </div>
            <div class="panel-body story">
                {{ $recipe->story }}
            </div>
          <div class="panel-footer clearfix meta">
              <p class="pull-left">Created: <span title="{{ $recipe->created_at->toDayDateTimeString() }}">{{ $recipe->created_at->diffForHumans() }}</span></p>
              <p class="pull-right">Last Modified: <span title="{{ $recipe->updated_at->toDayDateTimeString() }}">{{ $recipe->updated_at->diffForHumans() }}</span></p>
          </div>
        </div>
    </div>
</div>
@endsection
