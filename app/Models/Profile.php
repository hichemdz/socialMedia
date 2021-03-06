<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [];

     public function user()
     {
         return $this->belongsTo('App\Models\User');
     }

     public function photos()
     {
         return $this->hasMany('App\Models\PhotoProfile');
     }

     
     public function posts()
    {
        return $this->hasMany('App\Models\Post');
    
    }




}
