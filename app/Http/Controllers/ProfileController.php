<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Profile;
use App\Models\PhotoProfile;
use Illuminate\Http\Request;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfileRequest;


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
    public function store(StoreProfileRequest $request)
    {
        
    
        try{
             
          $type = $request->type == 'c' ? 'cover/':'photo/';
          $folder = 'public/front/profile/'.$type;
          $path =  UploadPhoto($folder,$request->path, $type);
              
           PhotoProfile::create([
               'type' => $request->type ,
               'profile_id' => $request->profile_id,
               'path' => $path,
           ]);

         return back()->with('message','create new  photo');
            
        }
        catch(\Exception $ex){
            DB::rollback();
            return back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
           

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
