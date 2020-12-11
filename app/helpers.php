<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;




function pict (){

    return Auth::user()->id;

}
//
//public function cover($id=null)
//    {
//        $id = $id == null ? Auth::user()->id:$id;
//        $profile =  Profile::find($id)->first();
//        $cover = $profile->phots->where('type','=','c');
//        $image = null;
//
//        if(count($cover)){
//
//            $image  = $cover->sortByDesc(function($a,$b){
//                return strtotime($a['updated_at']);
//            });
//
//        }
//
//        return $image;
//
//    }
//public function pict($id='')
//    {
//        $id = $id == null ? Auth::user()->id:$id;
//        $profile =  Profile::find($id);
//        return dump($profile);
//        $photo = $profile->phots->where('type','=','p');
//
//        $image = null;
//
//        if(count($photo)){
//
//            $image  = $photo->sortByDesc(function($a,$b){
//                return strtotime($a['updated_at']);
//            });
//
//        }
//
//        return $image;
//
//    }








