<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function users(){
        return $this->hasMany('\App\User');
    }
    public function problems()
    {
        return $this->hasMany('\App\Problem');
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
}
