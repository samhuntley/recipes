<div class="panel-body">
  <h2><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name}}</a></h2>
  <ul class="list-group ingredients">
    @foreach ($recipe->ingredients as $ingredient)
      <li class="list-group-item">{{ $ingredient->name }}</li>
    @endforeach
  </ul>
    {{ str_limit($recipe->instructions, 25) }}
</div>
