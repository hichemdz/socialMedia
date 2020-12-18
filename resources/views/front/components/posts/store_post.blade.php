<div id='add_post' class="bg-gray-800  sm:1/2  py-2 md:w-1/3 relative rounded-md">
    {{-- header --}}
    @include('front.components.posts.include.store.store_post_header')

    {{-- inner information user --}}
    <div class="flex  items-start px-3 justify-start text-gray-300">
        {{-- photo user --}}
        <a href="/profile/{{Auth::user()->id}}" class=" text-gray-300  mr-2 items-center">
            @php
                $src = pict();
            @endphp
            <img class='rounded-full w-8 h-8  ' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
        </a>
        {{--  information --}}
        <div>
            <div class="text-xl font-bold leading-none mb-1">
                {{--  name user --}}
                <a href="#" class="text-base">{{Auth::user()->name}} </a>
                <button  id='toggler_publish_list' class="flex items-center font-black text-sm bg-gray-700 px-2  rounded-md my-1 ">
                    <svg class="w-4 h-4 fill-current text-red-500"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span class="ml-1 text-xs">Public</span>
                    <svg class="w-5 h-5 fill-current text-red-500"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M7 10l5 5 5-5z"/>
                    </svg>
                </button>
            </div>
        </div>
        {{-- cntent --}}       
    </div>
    
    {{-- form --}}
     @include('front.components.posts.include..store.store_post_form')
            
 </div>

{{-- type publish--}}
  <div id='list_publish' class="flex flex-col hidden bg-gray-800  sm:1/2  md:w-1/3 relative rounded-md ">
    @include('front.components.posts.include.store.store_post_publish_type')
   </div>
{{-- type publish --}}  


