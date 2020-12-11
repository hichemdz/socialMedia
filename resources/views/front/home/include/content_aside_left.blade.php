<div class=" col-span-1  p-4">
    <ul>
        @auth
            <li class='py-2'>
                <a href="/profile/{{Auth::user()->id}}" class="flex text-gray-300 font-semibold items-center">
                    @php
                        $src = pict();
                    @endphp
                    <img class='rounded-full w-8 h-8  mr-3' src="{{asset('/storage/front/profile/'.$src)}}" alt="">
                    {{Auth::user()->name}}

                </a>
            </li>
        @endif
        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z"/>
                </svg>
                <span class='text-gray-300 font-semibold '>Pages</span>
            </a>
        </li>

        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path fill-rule="evenodd" d="M16.67 13.13C18.04 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.57-3.47-6.33-3.87z"/>
                    <circle cx="9" cy="8" r="4" fill-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4c-.47 0-.91.1-1.33.24C14.5 5.27 15 6.58 15 8s-.5 2.73-1.33 3.76c.42.14.86.24 1.33.24zM9 13c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                </svg>
                <span class='text-gray-300 font-semibold'>Friends</span>
            </a>
        </li>

        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-gray-300 rounded-full p-1  bg-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M12 12.75c1.63 0 3.07.39 4.24.9 1.08.48 1.76 1.56 1.76 2.73V18H6v-1.61c0-1.18.68-2.26 1.76-2.73 1.17-.52 2.61-.91 4.24-.91zM4 13c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm1.13 1.1c-.37-.06-.74-.1-1.13-.1-.99 0-1.93.21-2.78.58C.48 14.9 0 15.62 0 16.43V18h4.5v-1.61c0-.83.23-1.61.63-2.29zM20 13c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm4 3.43c0-.81-.48-1.53-1.22-1.85-.85-.37-1.79-.58-2.78-.58-.39 0-.76.04-1.13.1.4.68.63 1.46.63 2.29V18H24v-1.57zM12 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3z"/></svg>
                <span class='text-gray-300 font-semibold'>Groups</span>
            </a>
        </li>

        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs>
                        <path fill="none" d="M0 0h24v24H0z"/>
                    </defs>
                    <g fill="none">
                        <use xlink:href="#reuse-0"/>
                        <use xlink:href="#reuse-0"/>
                    </g>
                    <path d="M21.9 8.89l-1.05-4.37c-.22-.9-1-1.52-1.91-1.52H5.05c-.9 0-1.69.63-1.9 1.52L2.1 8.89c-.24 1.02-.02 2.06.62 2.88.08.11.19.19.28.29V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6.94c.09-.09.2-.18.28-.28.64-.82.87-1.87.62-2.89zM7.02 5l-.58 4.86c-.08.65-.6 1.14-1.21 1.14-.49 0-.8-.29-.93-.47-.26-.33-.35-.76-.25-1.17l1-4.36h1.97zm11.89-.01l1.05 4.37c.1.42.01.84-.25 1.17-.14.18-.44.47-.94.47-.61 0-1.14-.49-1.21-1.14L16.98 5l1.93-.01zm-3.4 4.53c.05.39-.07.78-.33 1.07-.23.26-.55.41-.96.41-.67 0-1.22-.59-1.22-1.31V5h1.96l.55 4.52zM11 9.69c0 .72-.55 1.31-1.29 1.31-.34 0-.65-.15-.89-.41-.25-.29-.37-.68-.33-1.07L9.04 5H11v4.69zM18 19H6c-.55 0-1-.45-1-1v-5.03c.08.01.15.03.23.03.87 0 1.66-.36 2.24-.95.6.6 1.4.95 2.31.95.87 0 1.65-.36 2.23-.93.59.57 1.39.93 2.29.93.84 0 1.64-.35 2.24-.95.58.59 1.37.95 2.24.95.08 0 .15-.02.23-.03V18c-.01.55-.46 1-1.01 1z"/></svg>
                <span class='text-gray-300 font-semibold'>Marketpalace</span>
            </a>
        </li>

        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M21.25 10.5c-.41 0-.75.34-.75.75h-1.54c-.15-1.37-.69-2.63-1.52-3.65l1.09-1.09.01.01c.29.29.77.29 1.06 0s.29-.77 0-1.06L18.54 4.4c-.29-.29-.77-.29-1.06 0-.29.29-.29.76-.01 1.05l-1.09 1.09c-1.02-.82-2.27-1.36-3.64-1.51V3.5h.01c.41 0 .75-.34.75-.75S13.16 2 12.75 2h-1.5c-.41 0-.75.34-.75.75s.33.74.74.75v1.55c-1.37.14-2.62.69-3.64 1.51L6.51 5.47l.01-.01c.29-.29.29-.77 0-1.06-.29-.29-.77-.29-1.06 0L4.4 5.46c-.29.29-.29.77 0 1.06.29.29.76.29 1.05.01l1.09 1.09c-.82 1.02-1.36 2.26-1.5 3.63H3.5c0-.41-.34-.75-.75-.75s-.75.34-.75.75v1.5c0 .41.34.75.75.75s.75-.34.75-.75h1.54c.15 1.37.69 2.61 1.5 3.63l-1.09 1.09c-.29-.29-.76-.28-1.05.01-.29.29-.29.77 0 1.06l1.06 1.06c.29.29.77.29 1.06 0 .29-.29.29-.77 0-1.06l-.01-.01 1.09-1.09c1.02.82 2.26 1.36 3.63 1.51v1.55c-.41.01-.74.34-.74.75s.34.75.75.75h1.5c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-.01v-1.54c1.37-.14 2.62-.69 3.64-1.51l1.09 1.09c-.29.29-.28.76.01 1.05.29.29.77.29 1.06 0l1.06-1.06c.29-.29.29-.77 0-1.06-.29-.29-.77-.29-1.06 0l-.01.01-1.09-1.09c.82-1.02 1.37-2.27 1.52-3.65h1.54c0 .41.34.75.75.75s.75-.34.75-.75v-1.5c.01-.4-.33-.74-.74-.74zM13.75 8c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM12 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1.75-5c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM8.5 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm1.75 3c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm3.5 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm.75-4c0-.55.45-1 1-1s1 .45 1 1-.45 1-1 1-1-.45-1-1z"/>
                </svg>
                <span class='text-gray-300 font-semibold'>Add Center</span>
            </a>
        </li>

        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/>  <path d="M12 20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2s-2 .9-2 2v12c0 1.1.9 2 2 2zm-6 0c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2s-2 .9-2 2v4c0 1.1.9 2 2 2zm10-9v7c0 1.1.9 2 2 2s2-.9 2-2v-7c0-1.1-.9-2-2-2s-2 .9-2 2z"/></svg>
                <span class='text-gray-300 font-semibold'>Ads Manager</span>
            </a>
        </li>
        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/><path d="M11 3.18v17.64c0 .64-.59 1.12-1.21.98C5.32 20.8 2 16.79 2 12s3.32-8.8 7.79-9.8c.62-.14 1.21.34 1.21.98zm2.03 0v6.81c0 .55.45 1 1 1h6.79c.64 0 1.12-.59.98-1.22-.85-3.76-3.8-6.72-7.55-7.57-.63-.14-1.22.34-1.22.98zm0 10.83v6.81c0 .64.59 1.12 1.22.98 3.76-.85 6.71-3.82 7.56-7.58.14-.62-.35-1.22-.98-1.22h-6.79c-.56.01-1.01.46-1.01 1.01z"/></svg>
                <span class='text-gray-300 font-semibold'>Business Manager</span>
            </a>
        </li>


        <li class='py-2'>
            <a href="/profile/{{Auth::user()->id}}" class="flex items-center">
                <svg class="w-8 h-8 mr-3 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <defs/>
                    <path fill="none" d="M0 0h24v24H0z"/><path d="M18.75 3.94L4.07 10.08c-.83.35-.81 1.53.02 1.85L9.43 14c.26.1.47.31.57.57l2.06 5.33c.32.84 1.51.86 1.86.03l6.15-14.67c.33-.83-.5-1.66-1.32-1.32z"/></svg>
                <span class='text-gray-300 font-semibold'>Campus</span>
            </a>
        </li>


    </ul>
</div>
