<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  public function vacancies()
  {
    return $this->hasMany('App\Vacancy');
  }

  public function courses()
  {
    return $this->hasMany('App\Course');
  }

  public function location()
  {
    return $this->belongsTo('App\Location');
  }

  public function donations()
  {
    return $this->belongsToMany('App\Donation');
  }

  public function supports()
  {
    return $this->belongsToMany('App\Support');
  }
}
