
<div class="overflow-hidden" >
    <div class="text-md text-white  px-1  my-2">
        {{$post->content}}

    </div>
     
     
    <div class="mt-2 grid inner_post_photos relative
        
         
      @if(count($post->photos)>1)grid-cols-2 grid-rows-2 @else grid-cols-1  @endif "
        >
           

         @if(count($post->photos) > 3 )

           @foreach($post->photos->slice(0,2) as $key => $photo)
                
              <a href="{{asset('/storage/front/posts/'. $photo->path)}}" class="mx-auto w-full  h-full
                @if(count($post->photos)>1)
                    
                  @if($key === 0)  absolute top-0 left-0 @else z-10 row-start-2  @endif
    
                @endif  
                
                ">
                <img  class="w-full h-full" src="{{asset('/storage/front/posts/'. $photo->path)}}" alt="">  
              </a>
            @endforeach
            
            
          <a href="/post/{{$post->id}}"  class="mx-auto w-full grid grid-cols-2  h-full z-10 relative
            row-start-2 ">
            <div class="overfaly absolute top-0 left-0 w-full h-full flex items-center justify-center">
              <svg class='w-24 h-24 fill-current text-gray-200' xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                <path d="M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18c.62-.39.62-1.29 0-1.69L9.54 5.98C8.87 5.55 8 6.03 8 6.82z"/>
              </svg>
            </div>

            @foreach($post->photos->slice(3,6) as $key => $photo)
                
              
                <img  class="w-full h-full" src="{{asset('/storage/front/posts/'. $photo->path)}}" alt="">  
              
            @endforeach
            
          </a>
        
               
            

         
         @else

           @foreach($post->photos as $key => $photo)
                
    	        <a href="{{asset('/storage/front/posts/'. $photo->path)}}" class="mx-auto w-full  h-full
                @if(count($post->photos)>1)
                    
                  @if($key === 0)  absolute top-0 left-0 @else z-10 row-start-2  @endif
                
                @endif  
                
                ">
    	        	<img  class="w-full h-full" src="{{asset('/storage/front/posts/'. $photo->path)}}" alt="">	
    	        </a>
            @endforeach
         @endif


    </div>
</div>
