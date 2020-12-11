<div class=" px-3 pt-2 rounded-lg bg-gray-800 h-32 items-center ">
    <div class="flex py-3 ">
        <a href="/profile/{{Auth::user()->id}}" class="flex text-gray-300 font-semibold items-center">
            @php
                $src = pict();
            @endphp
            <img class='rounded-full w-12 h-12  mr-3' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
        </a>
        <span class="text-md w-full bg-gray-700 text-gray-500 font-black p-3 rounded-full block">
                What's on you mind, <b class="text-gray-400" >{{Auth::user()->name}}</b>?
            </span>
    </div>
    <div class="flex justify-around">
        <button class=" flex items-center">
            <svg class="w-8 h-8 fill-current text-red-600 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>
                <path d="M15 8v8H5V8h10m1-2H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7c0-.55-.45-1-1-1z"/>
            </svg>
            <span class="font-bold text-gray-400">Live Video</span>
        </button>

        <button class=" flex items-center">
            <svg class="w-8 h-8 fill-current text-green-600 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>  <path d="M15.56 10.81l-2.35 3.02-1.56-1.88c-.2-.25-.58-.24-.78.01l-1.74 2.23c-.26.33-.02.81.39.81h8.98c.41 0 .65-.47.4-.8l-2.55-3.39c-.19-.26-.59-.26-.79 0zM2 5c-.55 0-1 .45-1 1v15c0 1.1.9 2 2 2h15c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1-.45-1-1V6c0-.55-.45-1-1-1zm19-4H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm-1 16H8c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1z"/></svg>
            <span class="font-bold text-gray-400">Photo/Video</span>
        </button>

        <button class=" flex items-center">
            <svg class="w-8 h-8 fill-current text-yellow-600 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <defs/>
                <circle cx="15.5" cy="9.5" r="1.5"/>
                <circle cx="8.5" cy="9.5" r="1.5"/>
                <path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.7 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
            </svg>
            <span class="font-bold text-gray-400">Feeling Activity</span>
        </button>
    </div>
</div>
