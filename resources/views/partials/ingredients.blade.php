<div class="form-group">
  <label>Ingredients</label>
  @foreach ($recipe->ingredients as $ingredient)

    <fieldset class="form-group form-inline">

      <div class="form-group">
        <label class="control-label">Name</label>
        <input type="text" name="ing[{{ $ingredient->id }}][ingredientName]" value="{{ $ingredient->name }}" placeholder="Name" />
      </div>

      <div class="form-group">
        <label class="control-label">Amount</label>
        <input type="text" name="ing[{{ $ingredient->id }}][ingredientAmount]" value="{{ $ingredient->amount }}" placeholder="Amount" />
      </div>

      <div class="form-group">
        <label class="control-label">Measurement</label>
        <select name="ing[{{ $ingredient->id }}][ingredientMeasurement]">
          <option value="">Select&hellip;</option>
          @if (count($measurements) > 0)
            @foreach($measurements as $m)
              <option value="{{ $m }}" {{ $m == $ingredient->measurement ? 'selected="selected"' : '' }}>{{ $m }}</option>
            @endforeach
          @endif
        </select>
      </div>

    </fieldset>


  @endforeach
</div>
