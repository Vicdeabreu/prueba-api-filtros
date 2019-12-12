<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function courses()
  {
    return $this->hasMany('App\Course');
  }

  public function vacancies()
  {
    return $this->hasMany('App\Vacancy');
  }
}
