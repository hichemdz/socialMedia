<div class="bg-sub  p-4 mb-2 rounded">
    <div class="flex mb-2">
        <h4 class="text-white font-black text-xl ">Intro</h4>
    </div>
    <ul>
        @if($profile->live)
        <li class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-6 mr-2" viewBox="0 0 24 24">
                <defs/>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            </svg>
            <span class='text-white text-lg font-3xl' >Lives in <b> {{$profile->live}} </b></span>
        </li>
        @endif
        @if($profile->work)
        <li class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-6 mr-2" viewBox="0 0 24 24">
                <defs/>
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
            </svg>

            <span class='text-white text-lg font-3xl' >Work in <b> {{$profile->work}} </b></span>
        </li>
        @endif
        @if($profile->study)
        <li class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-6 mr-2" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
            </svg>

            <span class='text-white text-lg font-3xl' >Study in <b> {{$profile->study}} </b></span>
        </li>
        @endif

    </ul>
</div>
