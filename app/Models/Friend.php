<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_send', 'user_request'];
    public $incrementing = false;
    protected $fillable = ['user_send','user_request'];

    public function user()
    {   
        return $this->belongsTo('App\Models\User','user_request');
    }
    public function user_send()
    {   
        return $this->belongsTo('App\Models\User','user_send');
    }
}
