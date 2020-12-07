@extends('base')
@section('main')
   <main class="grid grid-cols-12">
     {{-- cover --}}
    <div class="relative cover bg-red-200
                col-start-1 col-span-12 
                md:col-start-2 md:col-span-10 
                lg:col-start-3 lg:col-span-8" 
                style="background:url({{asset('/storage/front/profile/' . $cover )}})  
                       no-repeat 0px center ; background-size:cover; " >
      {{-- Photo profile --}}
      <button data-type='cover' class="edidt_file_profile inline-block p-1 absolute opacity-25 
                     duration-500 ease-in-ou mt-3 mr-3
                    hover:opacity-100 transition-opacity 
                  right-0 top-0 rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="fill-current text-gray-600  w-4 h-4"
                height="24" viewBox="0 0 24 24" 
                width="24"><path d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
            </svg>
      </button>
      <div class="  w-24 h-24 z-10 m-auto relative rounded-full border-4 border-gray-900 " 
          style="background:url({{asset('/storage/front/profile/'.$photo)}}) no-repeat 0px center ; 
                 background-size:cover; ">
        <button id='edit_photo' data-type='photo' class="edidt_file_profile inline-block p-1 absolute opacity-25 
                duration-500 ease-in-ou
                hover:opacity-100 transition-opacity 
                right-0 top-0 rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="fill-current text-gray-600  w-4 h-4"
              height="24" viewBox="0 0 24 24" 
              width="24"><path d="M0 0h24v24H0z" fill="none"/>
              <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
            </svg>
        </button>
      </div>
      
    </div>
    {{--  actions --}}
    <div class="col-start-1 col-span-12 
    md:col-start-2 md:col-span-10 
    lg:col-start-3 lg:col-span-8" >
        <div class="flex items-center justify-between bg-red-" >
          <ul class="flex text-white">
            <li class=" p-4"><a href="" class="text-lg font-black">Post</a></li>
            <li class=" p-4"><a href="" class="text-lg font-black">About</a></li>
            <li class=" p-4"><a href="" class="text-lg font-black">Friens</a></li>
            <li class=" p-4"><a href="" class="text-lg font-black">Phots</a></li>
            <li class=" p-4"><a href="" class="text-lg font-black">Archive</a></li>
            <li class=" p-4"><a href="" class="text-lg font-black flex items-center">More 
                <svg height="13" width="13" class="ml-2  fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612.004 612.004">
                      <defs/>
                      <path d="M499.147 160.094L330.222 329.019c-6.472 6.472-15.075 10.035-24.223 10.035-9.146 0-17.749-3.561-24.218-10.035L112.854 160.094c-25.822-25.817-67.674-25.817-93.491 0-25.817 25.819-25.817 67.674 0 93.491L188.29 422.508c31.443 31.445 73.245 48.764 117.712 48.764s86.269-17.319 117.714-48.761l168.925-168.925c25.817-25.817 25.817-67.674 0-93.491-25.819-25.818-67.679-25.818-93.494-.001z"/>
                  </svg>
                  </a>
              </li>
          </ul>
          <div class="flex">
              
              <a href="{{route('massengers.show',['massenger'=>$user->id]) }}" class="text-sm mr-2 font-black flex items-center text-white bg-gray-800 rounded py-1 px-3">
                  <svg viewBox="0 0 28 28" class="w-5 fill-current text-gray-200 mr-2" height="28" width="28">
                      <path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path>
                  </svg>
                  Message
              </a> 
              @if (Auth::user() and $user->id != Auth::user()->id)
              <form class='flex' action="/profile" method="POST">
                  @csrf 
                          
                
                  {{-- have  --}}
              @if (count($friend))
              <input type='hidden'  name="user_send" value='{{$friend[0]->user_send}}'>
              <input type="hidden" name="user_receive" value='{{$friend[0]->user_request}}'>   
              
              {{-- if accepted --}}
              @if ($friend[0]->status)
                  {{-- Phone --}}
                  <button type="submite" name='action' value='accept' class="mr-2 text-sm font-black flex items-center text-white bg-gray-800 rounded py-1 px-3">
                      <svg class='w-4 fill-current text-white ' version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 513.64 513.64" style="enable-background:new 0 0 513.64 513.64;" xml:space="preserve">
                
                      <g>
                          <g>
                              <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72
                                  c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68
                                  c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44
                                  l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"/>
                          </g>
                      </g>
                      
                      </svg>
                  </button>
                  {{-- unfriend --}}
                  <button type="submite" name='action' value='Unfriend' class="text-sm font-black flex items-center text-white bg-gray-800 rounded py-1 px-3 mr-2" >
                      <svg class="w-5 fill-current text-gray-200 " height="28" width="28" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg">
                          <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/>
                          <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/>          
                      </svg> 
                  </button>
                  
              @else
                  {{-- if have request --}}  
                  
                  @if ($friend[0]->user_request == $user->id)
                  {{-- respond --}}
                  <button type="submite" name='action' value='accept' class="text-sm font-black flex items-center text-white bg-gray-800 rounded py-1 px-3">
                      <svg class="w-5 fill-current text-gray-200 mr-2" height="28" width="28" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg">
                          <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/>
                          <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/>          
                      </svg> 
                      Respond
                  </button>
                  @else 
                  {{-- unrequeat --}}
                  <button type="submite" name='action' value='unRequst' class="text-sm font-black flex items-center text-white bg-gray-800 rounded py-2 px-3">
                      <svg class="w-5 fill-current text-gray-200 mr-2" height="28" width="28" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg">
                          <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/>
                          <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/>          
                      </svg> 
                      unRequst
                  </button>
                  @endif   
              @endif
              
              @else 
                {{-- add friend  --}}
                <input type='hidden'  name="user_send" value='{{Auth::user()->id}}'>
                <input type="hidden" name="user_receive" value='{{$user->id}}'>  
              <button type="submite" name='action' value='add' class="text-sm font-black flex items-center text-white bg-gray-800 rounded py-1 px-3">
                  <svg class="w-4 fill-current text-gray-200 mr-2" height="28" width="28" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 43.028 43.028" style="enable-background:new 0 0 43.028 43.028;"
                  xml:space="preserve">
                  <g>
                      <path d="M39.561,33.973l-0.145,0.172c-4.774,5.729-11.133,8.884-17.902,8.884c-6.77,0-13.128-3.154-17.903-8.884l-0.144-0.172
                          l0.034-0.225c0.922-6.014,4.064-10.844,8.847-13.605l0.34-0.196l0.271,0.284c2.259,2.369,5.297,3.674,8.554,3.674
                          s6.295-1.306,8.554-3.674l0.271-0.284l0.34,0.196c4.783,2.762,7.925,7.592,8.848,13.605L39.561,33.973z M21.514,21.488
                          c5.924,0,10.744-4.82,10.744-10.744S27.438,0,21.514,0S10.77,4.82,10.77,10.744S15.59,21.488,21.514,21.488z M32.612,29.778h-2.027
                          v-2.024c0-0.959-0.777-1.738-1.736-1.738s-1.736,0.779-1.736,1.738v2.024h-2.027c-0.959,0-1.736,0.778-1.736,1.737
                          s0.777,1.736,1.736,1.736h2.027v2.025c0,0.959,0.776,1.736,1.735,1.736s1.735-0.777,1.735-1.736V33.25h2.027
                          c0.959,0,1.736-0.777,1.736-1.736S33.571,29.778,32.612,29.778z"/>
                  </g>
                
                  </svg>
                  Add Friend
              </button>
              @endif
    
              </form>  
            @endif
          </div>
      </div>
      {{--  --}}
    </div>
  </main>

  <div id='file_editor' class="fixed flex justify-center  hidden 
              items-center w-full h-screen
               bg-black z-10 top-0 left-0 ">
  
    <button class="absolute top-0 right-0 " id='close'>
      <svg class='fill-current hover:text-red-200 text-white w-5 h-5 mt-3 mr-3' xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
     </svg>
    </button>           

    <form class='flex w-64 h-64 flex-col p-3' action="/profile" method='POST' enctype="multipart/form-data" >
      @csrf
      <input class="mb-2 p-2 rounded-full bg-gray-300" type="text" name='profile_id' value='{{$profile->id}}'>
      <input class="mb-2 p-2 bg-gray-300 rounded-full" id='type_input_profile' type="text" name='type'>
     
      <input type="file" class="bg-gray-300 p-2 mb-2 rounded-full" name="path" id="">
      <button class="bg-blue-500 p-3 rounded-full " type="submit">upload</button>
  </form>
    {{-- <form class='flex w-64 h-64 flex-col p-3'   action="/profile" method='POST' enctype="multipart/form-data">
      
      <input class="mb-2 p-2 " type="text" name='profile_id' value='{{$profile->id}}'>
      <input class="mb-2 p-2" type="text" name='type' value='p'>
      <input class="mb-2 p-2 bg-gray-600 @error('path') is-invalid @enderror "  type="file" name='path' />
      @error('path')
          {{$message}}
      @enderror
      <input class="bg-green-500 p-2"  type="submit" value="update">
      
    </form> --}}

  </div>
@endsection

@section('content')
<div class="content">
    
  
</div>
@endsection

@section('script')
    @parent
    <script src="{{asset('js/profile.js')}}"></script>
@endsection