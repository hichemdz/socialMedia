<?php

use App\Models\Profile;
use App\Models\User;
use App\Models\Friend;
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

function UploadPhoto($folder,$img,$type=null)
{
    $img->store($folder);

    return  $type . $img->hashName();
   
}

function actFriends($id){
    $Friend = Friend::where([
        ['status',1],
        ['user_send',$id],
    ])
    ->orWhere([
        ['status',1],
        ['user_request',$id]
    ])->get();
  
  return $Friend->map( function ($d)
    {    $id = $d->user_send ==  Auth::user()->id ? $d->user_request:$d->user_send;
      
         return User::find($id);  
    }); 
}



/*

 
 - go to table Friends find each row

    if stauts 1 ==== in all friends /---- acsept request ----/

    user login and user profile is friends




*/
function isFriends($id_a,$id_p){
    //$id_p = 50;
    $Friend = Friend::where([
        ['status',1],
        ['user_send',$id_a],
        ['user_request',$id_p]
    ])
    ->orWhere([
        ['status',1],
        ['user_send',$id_p],
        ['user_request',$id_a]
    ])->first();
   
   return $Friend?true:false;
 } 








