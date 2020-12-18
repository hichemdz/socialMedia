 {{-- list type --}}
<div class="w-full  pb-2">
    {{--  --}}
    <div class="relative text-center border-b border-gray-600 ">
        <h3 class="font-black text-2xl py-3 text-gray-400"> Select Privacy  </h3>
        <svg  id='back_to_publish' class="w-8 h-8  mt-4 ml-3 rounded-full p-2 fill-current text-gray-200 bg-gray-700  absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <defs/>
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/>
        </svg>
    </div>
    {{--  --}}
 

        <div class="p-3">
        <h3 class="tetx-gray-200 font-black text-xl text-gray-300">Who can see your post?</h3>
        <p class="text-md text-gray-300 font-semibold">Your post will show up in News Feed, on your profile and in search results.</p>
        </div>
        {{--  --}}
        <ul id='type_publish' class="flex flex-col w-full px-2">
            {{-- @for ($i = 0; $i < 30; $i++) --}}
                
                {{-- anyone --}}
                <li class="flex justify items-start rounded-lg w-full bg-gray-600 p-3 mb-2">
                    <svg class="w-64 rounded-full mr-1 bg-gray-700 fill-current text-gray-200 p-1"  
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <div>
                        <span class="ml-1 font-black text-md leading-3  block">Public</span>
                        <p class="ml-1 text-xs ">Anyone On Of Facebook </p>
                    </div>            
                </li>
                
                {{-- Friends --}}
                <li class="flex  rounded-lg items-start w-full bg-gray-600 p-3 mb-2">
                
                    <svg class=" rounded-full mr-1 bg-gray-700 fill-current text-gray-200 p-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path fill-rule="evenodd" d="M16.67 13.13C18.04 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.57-3.47-6.33-3.87z"/>
                        <circle cx="9" cy="8" r="4" fill-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4c-.47 0-.91.1-1.33.24C14.5 5.27 15 6.58 15 8s-.5 2.73-1.33 3.76c.42.14.86.24 1.33.24zM9 13c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <div>
                        <span class="ml-1 font-black text-md leading-3  block">Friends</span>
                        <p class="ml-1 text-xs ">Anyone On Of Facebook </p>
                    </div>            
                </li>
    
                {{-- nonely --}}
                <li class="flex justify rounded-lg items-start w-full bg-gray-600 p-3 mb-2">
                    <svg class=" rounded-full mr-1 bg-gray-700 fill-current text-gray-200 p-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <defs/>
                        <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                        <path d="M8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2h-4.66L20 17.56V8h-3V6.22c0-2.61-1.91-4.94-4.51-5.19-2.53-.25-4.72 1.41-5.32 3.7L8.9 6.46V6zM4.41 4.81L3 6.22 4.78 8H4v14h14.78l1 1 1.41-1.41z"/>
                    </svg>
                    
                    <div>
                        <span class="ml-1 font-black text-md leading-3  block">Only</span>
                        <p class="ml-1 text-xs ">Anyone On Of Facebook </p>
                    </div>            
                </li> 
            {{-- @endfor --}}

        </ul>
    
</div>
{{-- .list type  --}}