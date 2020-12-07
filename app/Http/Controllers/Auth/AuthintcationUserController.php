<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthintcationUserController extends Controller
{
    public function register(Request $request)
    {
         
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
       
        return dump($request->all());
        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);
         
        $user->profile()->save(new Profile);
        session()->flash('message', 'Your account is created');
       
        return redirect()->route('login');
    }
}
