<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'classification_id',
        'lifeExpectancy',
    ];

    public function animal()
    {
      return $this->hasMany('App\Animal');
    }

    public function classification()
    {
      return $this->belongsTo('App\Classification');
    }
}
