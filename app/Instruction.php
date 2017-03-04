<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'order'];

    /**
     * Get the recipe for this instruction
     */
    public function recipe() {
      return $this->belongsTo('App\Recipe');
    }
}
