<aside class="px-2 fixed w-1/5 right-0">
        {{-- header contact --}}
        <div class="flex items-center justify-between text-white p-2 ">
            <span class="w-full font-bold">
                Contact
            </span>
            <div class="flex items-center">
                <a href="" class="mr-1">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </a>
                <a href="" class="">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/> <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                </a>

            </div>
        </div>
        {{-- user onlie  --}}
        <ul>
            @for($i=0; $i<4;$i++)
                <li class ='mb-2 py-2 hover:bg-gray-700  rounded-md '>
                    <a href="/profile/{{Auth::user()->id}}" class="flex relative px-3 text-gray-300 font-semibold items-center">
                        @php
                            $src = pict();
                        @endphp
                        <div class="w-6 h-6  mr-3 relative">

                            <img class='rounded-full w-full h-full' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
                            <span class="w-2 h-2 absolute right-0 bottom-0 bg-green-500"></span>
                        </div>
                        {{Auth::user()->name}}


                    </a>
                </li>
            @endfor
        </ul>
    {{--  group --}}
        <ul class="border-t-2 border-gray-700 mt-2 pt-2">
            @for($i=0; $i<4;$i++)
                <li class ='mb-2 py-2 hover:bg-gray-700  rounded-md '>
                    <a href="/profile/{{Auth::user()->id}}" class="flex relative px-3 text-gray-300 font-semibold items-center">
                        @php
                            $src = pict(1);
                            $src2 = pict(2);
                        @endphp
                        <div class="w-8 h-8  mr-3 relative">

                            <img class='rounded-full w-full h-full ' src="{{asset('/storage/front/profile/'.$src2)}}" alt="">
                            <img class='rounded-full border-2 border-gray-800 w-6 h-6 absolute z-10 left-0 bottom-0' src="{{asset('/storage/front/profile/'.$src)}}" alt="">

                            <span class="w-2 h-2 absolute right-0 bottom-0 bg-green-500"></span>
                        </div>
                        {{Auth::user()->name}}


                    </a>
                </li>
            @endfor
        </ul>
    </aside>

