<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\PhotoProfile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           #mimes:jpeg,jpg,png,gif|required|max:50000
        $request->validate([
            'path' => 'required|image',
            'type' => 'required',
            'profile_id' => 'required',
            ]);

        $input = $request->all();


        if($input['type'] == 'p' ){
            $type = 'photo';
        }else{
            $type = 'cover';
        }


        $file = $request->file('path');

        $ext = $file->getClientOriginalExtension();

        $request->file('path')->storeAs('public/front/profile/'.$type,$type.'_'. time().'.'.$ext);


        $input['path'] = $type.'/'.$type.'_'. time().'.'.$ext;


        $u = public_path('storage/front/profile/'. $input['path'] );


        //$img = Image::make($u)->resize(911, 351);
        $img = Image::make($u) ; //->crop(911, 351);
        return dump($img->filesize());
        $img->save();
        PhotoProfile::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($profile)
    {
       $profile =  Profile::find($profile)->first(); //  data profile
       $user =  $profile->user;
       $photo = $profile->phots->where('type','=','p')->sortByDesc(function($a,$b){
             return strtotime($a['updated_at']);
        })->first()->path; // path photo
       $cover = $profile->phots->where('type','=','c')->sortByDesc(function($a,$b){
            return strtotime($a['updated_at']);
       })->first()->path; // path cover
       return view('profile', ['cover'=>$cover,'photo'=>$photo,'profile'=> $profile,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile)
    {

    }
}
