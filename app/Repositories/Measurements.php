<?php

namespace App\Repositories;

use App\Measurement;

class Measurements {

  /**
   * Return all of the measurement options
   */
  public function all()
  {
    return Measurement::all()->get();
  }

  /**
   * Return volume measurement options
   */
  public function volumes()
  {
    return Measurement::where('type', 'volume')->get();
  }
}
