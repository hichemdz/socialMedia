<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

function pict($id='')
    {
        $id = $id == null ? Auth::user()->id:$id;
        $profile =  Profile::find($id);
        $photo = $profile->photos->where('type','p');


        $image = null;

        if(count($photo)){

            $image  = $photo->sortByDesc(function($a,$b){
                return strtotime($a['updated_at']);
            })->first();

        }

        return $image?$image->path:$image;

    }
 function cover($id=null)
    {

        $id = $id == null ? Auth::user()->id:$id;

     $profile =  Profile::find($id);
     $photo = $profile->photos->where('type','c');


     $image = null;

     if(count($photo)){

         $image  = $photo->sortByDesc(function($a,$b){
                return strtotime($a['updated_at']);
            })->first();

     }

     return $image?$image->path:$image;
    }








