<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_send', 'user_request'];
    public $incrementing = false;
}
