<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PhotsPost;
use Illuminate\Http\Request;
use App\Http\Requests\StorPostRequest ;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '<h1>Posts</h1>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '<h1>create</h1>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorPostRequest $request)
     {   
        
       
        $post =  Post::create($request->except('photo'));

        if($request->file('photos') ){

            $photos_post =  array();

            foreach($request->photos as $file ){

                $folder = 'public/front/posts'; 

                $path = UploadPhoto($folder,$file) ;

                $photos_post[] = [
                    'path' => $path, 
                    'post_id' => $post->id 
                ];
            
              PhotsPost::create([
                    'path' => $path, 
                    'post_id' => $post->id 
                ]);
            }

            //return dump($photos_post);
          

        } 
        
        return back()->with('success','create new post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {     
        
       $photos = Post::find($post)->photos;
        return view('front.glary',compact('photos')) ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
