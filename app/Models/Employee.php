<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

        protected $fillable = [
        'eid',
        'user_id',
        'state_id',
        'address',
        'country_id',
        'department_id',
        'experience',
        'city_id',
        'dob',
        'first_name',
        'last_name',
        'middle_name',
        'zipcode',
        'date_hired'
    ];
    protected $casts = [

        'created_at' => 'date',
    ];
    public function user()
    {
     return $this->belongsTo(User::class);
    }

        public function department()
    {
      return  $this->belongsTo(Department::class);
    }

        public function city()
    {
      return  $this->belongsTo(City::class);
    }

        public function country()
    {
       return $this->belongsTo(Country::class);
    }
        public function state()
    {
       return $this->belongsTo(State::class);
    }
}
