<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded =['id'];
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
    public function employers(){
        return $this->belongsToMany('\App\Employer','employer_project')->withPivot('offer', 'status','created_at', 'channel_id');
    }
}
