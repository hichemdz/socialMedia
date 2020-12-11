<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Profile;
use App\Models\PhotoProfile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  $id_login = \Auth::user() ?  \Auth::user()->id : null;
        $route = $id?  redirect('/profile/'.$id): redirect('login');
        return $route;
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



        // ajax
        if($request->ajax()) {
            $input = $request->all();
            $type = $input['type'] == 'c'?'cover':'profile';
            //convert
            $image_pres = explode(';base64,', $input['path']);
            $ex = explode('image/',$image_pres[0])[1];
            $input['path'] = $type.'/'.$type.'_'. time().$ex;
            $image_bas64 = base64_decode($image_pres[1]);

            //validate
            $request->validate([
                'path' => 'required:image',
                'type' => 'required',
                'profile_id' => 'required',
            ]);



            Storage::put('public/front/profile/'. $input['path'],$image_bas64);

            PhotoProfile::create($input);

            if($input['type'] == 'c'){
                $context = ['cover'=>$input['path']];
                $template = 'front.profile.include.backgroundCover';
            }else{
                $context = ['photo'=>$input['path']];
                $template = 'front.profile.include.backgroundPhoto';
            }

            return view($template , $context)->render();

        }

//
//
//        $file = $request->file('path');
//
//        $ext = $file->getClientOriginalExtension();
//
//        $request->file('path')->storeAs('public/front/profile/'.$type,$type.'_'. time().'.'.$ext);
//
//
//        $input['path'] = $type.'/'.$type.'_'. time().'.'.$ext;
//
//
//        $u = public_path('storage/front/profile/'. $input['path'] );
//
//
//        //$img = Image::make($u)->resize(911, 351);
////        $img = Image::make($u) ; //->crop(911, 351);
////        return dump($img->filesize());
////        $img->save();
//        PhotoProfile::create($input);
//
//        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile =  Profile::find($id); //  data profile
        $id_login = \Auth::user() ?  \Auth::user()->id : null;
        if(!$profile ){
            return  redirect('profile');
        }
//

        $user =  $profile->user;



        $friend = Friend::whereIn('user_send', [$user->id,$id_login])
            ->whereIn('user_request', [$user->id,$id_login])
            ->limit(1)->get();

       $image_photo  = pict($id);
       $image_cover  = cover($id);

       $context = ['cover'=>$image_cover,'photo'=>$image_photo,'profile'=>$profile,'user'=>$user,'friend'=>$friend ];
       return view('front.profile.profile', $context);
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
