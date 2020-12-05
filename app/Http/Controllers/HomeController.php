<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Support\Facades\Log;
class HomeController extends Controller
{
    
    public function index()
    {    
         $users = User::all();
           
        return View('home',compact('users'));
    }

    public function show($id=null)
    {  $id = $id != null? $id: \Auth::user()->id; 
          
        $user = User::find($id);
        
        $id_login = \Auth::user() ?  \Auth::user()->id : null;
           
        $freind =  Friend::whereIn('user_send', [$user->id,$id_login])
                         ->whereIn('user_request', [$user->id,$id_login])
                         ->limit(1)->get();
        //return dump($freind[0]->user_send );                 
        return View('profile',['user' => $user,'friend'=>$freind ]);
    }
   

    
    public function request_friend(Request $request)
    {     
       if(\Auth::user()){
            $data = $request->all();
       
            switch ($data['action']) {
                case 'accept' : 
                    Friend::where('user_send',$data['user_send'])
                    ->where('user_request',$data['user_receive'])
                    ->update(['status' => 1]);
                    $msg = 'add new friend';
                break;

                case 'Unfriend' : 
               
                       Friend::whereIn('user_send', [$data['user_send'],$data['user_receive']])
                             ->whereIn('user_request',  [$data['user_send'],$data['user_receive']])
                             ->delete();
                       $msg = 'unfriend';    

                break;
                case 'reject' : 
                break;
                case 'add' : 
                   $Friend = Friend::whereIn('user_send', [$data['user_send'],$data['user_receive']])
                             ->whereIn('user_request',  [$data['user_send'],$data['user_receive']])->count();
                   if(!$Friend){
                    
                    Friend::create([
                       'user_send'   => $data['user_send'],
                       'user_request' => $data['user_receive']
                    ])->save();
                    $msg = 'send request';
                   }          
                   else{
                    $msg = 'have error';
                   }

                break;
                
            } // switch

            return back()->with('message',$msg);

       }


       return back()->with('error','must be login');
    }


    public function message($id)
    {
       return dump($id);
    }

}
