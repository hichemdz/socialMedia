<div class="flex items-start justify-between text-gray-300">
    {{-- name user > name group --}}
    <div class="flex items-start">
        {{-- phot user --}}
        <a href="/profile/{{$post->user->id}}" class=" text-gray-300  mr-2 items-center">
            @php
                $src = pict($post->user->id);
            @endphp
            <img class='rounded-full w-8 h-8  ' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
        </a>
        {{--  information --}}
        <div>
            <div class="text-xl font-bold">
                {{--  name user --}}
                <a href="#" class="text-base">{{$post->user->name}} </a>
                
                {{-- name group  --}}
                @isset($grup)
                    {{-- icon arrow right --}}
                <svg class="w-5 fill-current  inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path d="M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18c.62-.39.62-1.29 0-1.69L9.54 5.98C8.87 5.55 8 6.03 8 6.82z"/>
                </svg>
                <a class="mb-0 text-base">Group Informatique Learn</a>
                @endisset
            </div>
            {{-- time publish--}}
            <div class="text-sm time_publish flex items-end">
                <span class="float-left text-xs mr-2">{{$post->updated_at->diffForHumans()}} </span>
                @isset($post->privacy)

                <span class="t">
                                 <svg class="w-4 h-4 mr-3 fill-current text-gray-300 rounded-full   g-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs/>
                                       
                                       @switch($post->privacy)
                                            @case('Public')
                                               <path fill="none" d="M0 0h24v24H0z"/>
                                               <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                               @break

                                            @case('Friends')
                                                 <path fill-rule="evenodd" d="M16.67 13.13C18.04 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.57-3.47-6.33-3.87z"/>
                                                  <circle cx="9" cy="8" r="4" fill-rule="evenodd"/>
                                                  <path fill-rule="evenodd" d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4c-.47 0-.91.1-1.33.24C14.5 5.27 15 6.58 15 8s-.5 2.73-1.33 3.76c.42.14.86.24 1.33.24zM9 13c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                                                @break
                                            @case('Only')
                                                <path d="M8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2h-4.66L20 17.56V8h-3V6.22c0-2.61-1.91-4.94-4.51-5.19-2.53-.25-4.72 1.41-5.32 3.7L8.9 6.46V6zM4.41 4.81L3 6.22 4.78 8H4v14h14.78l1 1 1.41-1.41z"/>
                                                @break
                                           
                                              
                                        @endswitch



                                        
                                 </svg>
                            </span>
                @endisset
            </div>
        </div>
    </div>
    {{--  right actin more  --}}
    <div >
        <a href="" class="float-right ">
            <svg class="w-5 fill-current  inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>

                <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            </svg>
        </a>
    </div>
    {{-- .action--}}
</div>
