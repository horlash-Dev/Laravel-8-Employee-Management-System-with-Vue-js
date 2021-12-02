<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
        protected $fillable = [
        'name','country_code'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function state()
    {
      return  $this->hasMany(State::class);
    }
}
