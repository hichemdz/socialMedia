<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{

    function store (Request $request) {
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

}
