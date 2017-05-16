<div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
    <div class="panel-heading"><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name}}</a></div>
    <ul class="list-group ingredients">
      @foreach ($recipe->ingredients as $ingredient)
        <li class="list-group-item">{{ $ingredient->name }}</li>
      @endforeach
    </ul>
    <div class="panel-body">
        {{ str_limit($recipe->instructions, 25) }}
    </div>
  </div>
</div>
