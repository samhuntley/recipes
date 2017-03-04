@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a Recipe!</div>

                <div class="panel-body">
                    <form method="post" action="/recipes" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="recipe-name">Title</label>
                        <input type="text" name="title" id="recipe-name" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label for="recipe-desctipion">Description</label>
                        <textarea name="description" id="recipe-decription" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recipe-story">Story</label>
                        <textarea name="story" id="recipe-story" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recipe-photo">Photo</label>
                        <input type="file" name="photo" id="recipe-photo" accept="image/*"/>
                      </div>
                      <div class="form-group">
                        <button type="submit">Submit</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
