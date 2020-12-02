<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;

class HomeController extends Controller
{
    
    public function index()
    {    
         $users = User::all();
           
        return View('home',compact('users'));
    }

    public function show($id)
    {      
        $user = User::find($id);
        $id_login = \Auth::user()->id;
        
        $freind =  Friend::whereIn('user_send', [$user->id,$id_login])
                         ->whereIn('user_request', [$user->id,$id_login])
                         ->limit(1)->get();
        
        

        return View('profile',['user' => $user,'friend'=>$freind[0] ]);
    }
   
    public function request_friend(Request $request)
    {     
        $data = $request->all();
       
        switch ($data['action']) {
             case 'accept' : 
                Friend::where('user_send',$data['user_send'])
                   ->where('user_request',$data['user_receive'])
                   ->update(['status' => 1]);
             break;
             case 'Unfriend' : 
                 //return dump($data['user_send']);
                   Friend::whereIn('user_send', [$data['user_send'],$data['user_receive']])
                         ->whereIn('user_request',  [$data['user_send'],$data['user_receive']])
                         ->delete();;
             break;
             case 'reject' : 
             break;
             case 'add' : 
             break;
            
        }

       return back();
    }

}
