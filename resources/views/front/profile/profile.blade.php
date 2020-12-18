@extends('front.base')





@section('main')
   <main class="grid grid-cols-12 pt-14">
         {{-- cover --}}
        <div class="relative bg-red-200
                    col-start-1 col-span-12
                    md:col-start-2 md:col-span-10
                    lg:col-start-3 lg:col-span-8"
                        >
              {{-- Photo profile --}}
              <div class="relative w-full cover"
                  id="photo_cover">
                  @include('front.profile.include.backgroundCover')
              </div>

              <div class=" w-36 h-36  m-auto absolute inner_photo_profile  border-4 border-gray-900 rounded-full "
                  id="photo_profile">
                  @include('front.profile.include.backgroundPhoto')
              </div>

        </div>
       {{--  information user  --}}
        @include('front/profile/include/description');
        {{--  actions --}}
        @include('front.profile.include.action')
  </main>

  {{--  inner uploads photos  --}}
 
  @section('overflay')
    <button class="absolute top-0 right-0 " id='close'>
        <svg class='fill-current hover:text-red-200 text-white w-5 h-5 mt-3 mr-3' xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
        </svg>
    </button>
    @include('front.profile.include.main_upload')
  @endsection
  {{--  --}}

@endsection

@section('content')
    <div class="conten bg-gray-900 pt-4">

        <div class="inner_mai m-auto  grid grid-cols-12 lg:grid-cols-12 gap-4">
          {{-- left aside --}}
            <aside class="col-start-1   col-span-12 lg:col-start-3 lg:col-span-3 md:col-start-2 md:col-span-10">
                <div class="0">
                  {{-- Intro --}}
                <div class="bg-sub  p-4 mb-2 rounded">
                    @include('front.profile.include.content_intro')
                 </div>
                {{-- Phots --}}
                <div class="bg-sub p-3 mb-2 w-full rounded">
    
                 @include('front.profile.include.content_photo')
                </div>
                {{-- friends --}}
                <div class="bg-sub p-3 rounded ">

                    @include('front.profile.include.content_friends')
                </div>
                </div>
            </aside>
            {{-- All profile Posts--}}
            <div class="bg-red col-start-1 col-span-12  md:col-start-2 md:col-span-10 lg:col-span-5">

               @foreach ($errors->all() as $message)
                    {{$message}}
               @endforeach
               
               

               
                 
                    
                 




                  @isset($profile->user->posts) 

                     @auth
                        
                          @php  
                              $id =  isFriends( Auth::id() ,$profile->user->id ) 
                          @endphp
                      
                     @endauth 

                      @foreach ($profile->user->posts as $post)
                          
                          @if($post->privacy  === 'Public')

                            @include('front.components.posts.post')

                          @else  

                               @auth
                                    @if(Auth::id() === $profile->id 
                                       || $post->privacy  === 'Friends' 
                                       &&  $id )
                                           @include('front.components.posts.post')
                                    @endif
                               @endauth 

                          @endif
                        
                      @endforeach {{-- posts loop  --}}
                  @endisset {{-- if have posts --}}

              
              
            </div>

        </div>

        <div class="inner_chat fixed bottom-0  z-10 flex  flex-col bg-gray-800 hidden">
            <div class="bg-red-0 h-full">one</div>
            <div class="bg-red-0 h-12 ">
                <form action="" class="flex  px-2  h-full  items-center">
                    <input type="text" class="bg-sub rounded-full w-full px-3 py-1 mr-2" placeholder="send message">
                    <button type='submit' class="bg-r">
                        <svg class="w-5 fill-current text-white" height="20px" width="20px" viewBox="0 0 24 24"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z" fill-rule="evenodd" stroke="none"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent
    {{-- <script src="{{asset('js/profile.js')}}"></script> --}}
@endsection
