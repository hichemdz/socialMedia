
<div class="flex items-center justify-between mb-2">

        <h4 class="text-white font-black text-xl ">Photos</h4>
        <a href="" class="text-md text-blue-500 font-black"> See All Photos</a>
    </div>
    <div class="grid grid-cols-3 gap-2 mb-3">
            
     @php $counted = 0 @endphp
     {{-- if count photo display littel of 6 --}}
     @if($counted<=6)
            {{-- profile photos --}}
            @foreach($profile->photos as  $f)

                @if($counted >= 6) @break  @endif
                <a href="{{"/storage/front/profile/".$f->path}}" >
                    <img class="w-full h-auto" class='rounded' src='{{"/storage/front/profile/".$f->path}}' alt="">
                </a>
               @php $counted += 1 @endphp
            @endforeach
            {{-- posts phots --}}
           
            @foreach($profile->user->posts as  $s)
                @if($counted<=6)
                    @foreach($s->photos  as $photos)
                        @if($counted >= 6) @break  @endif
                        <a href="{{"/storage/front/profile/".$photos->path}}" >
                        <img class="w-full h-auto" class='rounded' src='{{"/storage/front/posts/". $photos->path}}' alt="">
                        </a>
                        @php $counted += 1 @endphp
                    @endforeach 
                @endif
            @endforeach
         
     @endif
     
      
     


    </div>