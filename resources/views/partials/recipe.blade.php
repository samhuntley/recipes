<div class="panel-body">
  <h2><a href="/recipes/{{ $recipe->id }}">{{ $recipe->name}}</a></h2>
    {{ str_limit($recipe->instructions, 25) }}
</div>
