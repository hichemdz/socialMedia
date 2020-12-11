<div>
    {{-- footar status --}}
    <div class="flex justify-between items-start my-3 ">
    {{-- emojy--}}
        <div class="flex items-center w-full">
            <div class="">
                 <span class=" w-5 h-5 inline-block"
                       style="background: url('{{asset("/img/emoji/thumb-up.svg")}}') center center no-repeat;
                           background-size:cover;"></span>
                <span class=" w-5 h-5 inline-block"
                      style="background: url('{{asset("/img/emoji/sad.svg")}}') center center no-repeat;
                          background-size:cover;"></span>
                <span class=" w-5 h-5 inline-block"
                      style="background: url('{{asset("/img/emoji/very_happy.svg")}}') center center no-repeat;
                          background-size:cover;"></span>
                <span class=" w-5 h-5 inline-block"
                      style="background: url('{{asset("/img/emoji/angry.svg")}}') center center no-repeat;
                          background-size:cover;"></span>
            </div>
            <p class="text-gray-200 font-semibold ml-2 pb-1">4.6K</p>
        </div>
    {{-- comments --}}
        <div class="w-full text-right text-gray-200  font-semibold" >
            <p class="pb-1">1.8k Comments</p>
        </div>
    </div>
    {{-- footer feeling  --}}
    <div class="text-gray-200 flex items-center justify-around font-bold py-3 border-t my-2 border-b border-gray-900">
        <button  class="w-full flex items-center justify-center cursor-pointer hover:bg-gray-600 px-2 py-1 rounded">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <defs/>
              <path fill="none" d="M0 0h24v24H0V0z" opacity=".87"/>
              <path d="M21 8h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2c0-1.1-.9-2-2-2zm0 4l-3 7H9V9l4.34-4.34L12.23 10H21v2zM1 9h4v12H1z"/>
            </svg>
            <p class="ml-2">Like</p>
        </button>
        <button  class="w-full flex items-center justify-center hover:bg-gray-600 px-2 py-1 rounded">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <defs/>
              <path fill="none" d="M0 0h24v24H0V0z"/>
              <path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/>
            </svg>
           <p class="ml-2"> Comment</p>
        </button>
    </div>
    {{-- desplay commentd --}}
    <div></div>
</div>
