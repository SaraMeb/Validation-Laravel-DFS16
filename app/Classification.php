<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function race()
    {
      return $this->hasMany('App\Race');
    }

}
