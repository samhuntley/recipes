@extends('layouts.book')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="tab-pane fade in active" id="enter">
              <div class="panel-body">
                <form method="POST" action="{{ route('ingredient', $recipe) }}">
                  {{ csrf_field() }}

                  <fieldset class="form-group form-inline">

                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" name="name" placeholder="Name" />
                    </div>

                    <div class="form-group">
                      <label class="control-label">Amount</label>
                      <input type="text" name="amount" placeholder="Amount" />
                    </div>

                    <div class="form-group">
                      <label class="control-label">Measurement</label>
                      <select name="measurement">
                        <option value="">Select&hellip;</option>
                        @if (count($measurements) > 0)
                          @foreach($measurements as $m)
                            <option value="{{ $m->id }}">{{ $m->name }}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>

                  </fieldset>

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
