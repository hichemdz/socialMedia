<div class="absolute bottom-0 left-0 w-full h-full z-9" style="background:url({{asset('/storage/front/profile/' . $cover )}})
    no-repeat 0px center ; background-size:cover;">
    @auth
        @if(Auth::user()->id == $user->id)
        <button id='edit_cover' data-type='cover' class="edidt_file_profile inline-block p-1 absolute opacity-25
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
        @endif
    @endif

</div>
