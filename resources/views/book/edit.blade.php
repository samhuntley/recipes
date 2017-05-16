@extends('layouts.book')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-md-offset-2">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="enter">
              <div class="panel-body">
                <form method="POST" action="{{ route('recipe', ['id' => $recipe->id]) }}">
                  {{ csrf_field() }}
                  @include('partials.ingredients')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Title" value="{{ $recipe->name }}">
                  </div>
                  <div class="form-group">
                    <label for="instructions">Instructions</label>
                    <textarea name="instructions" id="instructions" class="form-control" row="8">{{ $recipe->instructions }}</textarea>
                    <p class="help-block">Include all instructions and notes to complete this recipe.</p>
                  </div>
                  <div class="form-group">
                    <label for="story">Story</label>
                    <textarea name="story" id="story" class="form-control" row="8">{{ $recipe->story }}</textarea>
                    <p class="help-block">Describe what this recipe means to you and your family.</p>
                  </div>
                  <button type="submit" class="btn btn-default">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
