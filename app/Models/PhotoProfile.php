<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoProfile extends Model
{
    use HasFactory;

    protected $fillable = ['path','type','profile_id'];
}
