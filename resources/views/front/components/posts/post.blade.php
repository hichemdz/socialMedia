
<div class="bg-gray-800 mt-3 p-3">
    {{--  header posts--}}
    <div class="flex items-start justify-between text-gray-300">
        {{-- name user > name group --}}
        <div class="flex items-start">
            {{-- phot user --}}
            <a href="/profile/{{Auth::user()->id}}" class=" text-gray-300  mr-2 items-center">
                @php
                    $src = pict();
                @endphp
                <img class='rounded-full w-8 h-8  ' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
            </a>
            {{--  information --}}
            <div>
                <div class="text-xl font-bold">
                    {{--  name user --}}
                    <a href="#">{{Auth::user()->name}} </a>
                    {{-- icon arrow right --}}
                    <svg class="w-5 fill-current  inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path d="M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18c.62-.39.62-1.29 0-1.69L9.54 5.98C8.87 5.55 8 6.03 8 6.82z"/>
                    </svg>
                    {{-- name group  --}}
                    <a class="mb-0">Group Informatique Learn</a>
                </div>
                {{-- time publish--}}
                <div class="text-sm time_publish">
                    <span class="float-left mr-2">December 6 at 12:04 PM</span>
                    <span class="t">
                                 <svg class="w-5 h-5 mr-3 fill-current text-gray-300 rounded-full p-1  bg-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs/>
                                        <path fill="none" d="M0 0h24v24H0z"/>
                                        <path d="M12 12.75c1.63 0 3.07.39 4.24.9 1.08.48 1.76 1.56 1.76 2.73V18H6v-1.61c0-1.18.68-2.26 1.76-2.73 1.17-.52 2.61-.91 4.24-.91zM4 13c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm1.13 1.1c-.37-.06-.74-.1-1.13-.1-.99 0-1.93.21-2.78.58C.48 14.9 0 15.62 0 16.43V18h4.5v-1.61c0-.83.23-1.61.63-2.29zM20 13c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm4 3.43c0-.81-.48-1.53-1.22-1.85-.85-.37-1.79-.58-2.78-.58-.39 0-.76.04-1.13.1.4.68.63 1.46.63 2.29V18H24v-1.57zM12 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3z"/>
                                 </svg>
                            </span>
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

    {{-- content --}}
    <div class="text-md text-white font-bold my-2">
        <p>Hello how are you </p>
        <p>I hope you are fine</p>
        <p>I this day i want to talk about how create awesome web application </p>
    </div>
    <div class="mt-2 grid grid-cols-1 gap-3">
        <a href="" class="m-auto">
            <img src="{{asset('/img/profile/cv.jpg')}}" alt="">
        </a>

    </div>
</div>
