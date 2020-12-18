<form method='POST' 
      action="{{route('post.store')}}" 
      enctype="multipart/form-data" 
     class="w-full mt-2" id='form_post' >
     @csrf
    <textarea class="w-full p-2 text-2xl font-black bg-gray-700  text-gray-300" name="content"  cols="30" rows="4" placeholder="What's on your mind"></textarea>
    <input  type="hidden" name="privacy" value='public'>
    <input type="hidden" name="user_id" value='{{Auth::user()->id}}'>
    <div class="px-3  my-2">
        <div class="border-2 flex items-center font-black p-3 rounded-lg border-gray-700">
            <p class="text-gray-200 w-full mr-2">Add To Your Post</p>
            <div class="flex items-center justify-around">
                {{-- Photod --}}
                <button class=" mr-2" id='upload_file'>
                    <svg class="w-6 h-6 fill-current text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-4.86 8.86l-3 3.87L9 13.14 6 17h12l-3.86-5.14z"/>
                    </svg>       
                </button>
                {{-- Friends --}}
                <button class="mr-2">
                    <svg class="w-6 h-6 fill-current text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M5 15v-3h3v-2H5V7H3v3H0v2h3v3zm7-1.25c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM7.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H7.34zM12 12c1.93 0 3.5-1.57 3.5-3.5S13.93 5 12 5 8.5 6.57 8.5 8.5 10.07 12 12 12zm0-5c.83 0 1.5.67 1.5 1.5S12.83 10 12 10s-1.5-.67-1.5-1.5S11.17 7 12 7zm5 5c1.93 0 3.5-1.57 3.5-3.5S18.93 5 17 5c-.24 0-.48.02-.71.07.76.94 1.21 2.13 1.21 3.43 0 1.3-.47 2.48-1.23 3.42.24.05.48.08.73.08zm2.32 2.02c1 .81 1.68 1.87 1.68 3.23V19h3v-1.75c0-1.69-2.44-2.76-4.68-3.23z"/>
                        </svg>       
                </button>
                {{-- Feeling --}}
                <button class="mr-2">
                    <svg class=" w-6 h-6 fill-current text-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <circle cx="15.5" cy="9.5" r="1.5"/>
                        <circle cx="8.5" cy="9.5" r="1.5"/>
                        <path d="M12 18c2.28 0 4.22-1.66 5-4H7c.78 2.34 2.72 4 5 4z"/>
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    </svg>       
                </button>
                {{-- Location --}}
                <button class="mr-2">
                    <svg class=" w-6 h-6 fill-current text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/>
                        <circle cx="12" cy="9" r="2.5"/>
                        </svg>       
                </button> 
                {{-- came --}}
                <button class="">
                    <svg class=" w-6 h-6 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M15 8v8H5V8h10m1-2H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7c0-.55-.45-1-1-1z"/>
                        </svg>       
                </button>
            </div>
        </div>
        <button class="w-full rounded-lg mt-2 text-gray-300 font-semibold bg-gray-700 py-1 px-2 text-center" type="submit" > Post</button>
    </div>
</form>