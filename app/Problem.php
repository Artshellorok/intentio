<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $guarded =['id'];
    public function employer()
    {
        return $this->belongsTo('\App\Employer');
    }
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
    public function users(){
        return $this->belongsToMany('\App\User')->withPivot('offer', 'status', 'channel_id');
    }
}
