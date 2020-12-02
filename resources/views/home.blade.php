<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   
       
       <link rel="stylesheet" href="{{asset('/css/app.css')}}">
       


    </head>
    <body class="antialiased">

        <header>
            <nav class="bg-blue-500 text-white">
                <div class="container py-3 flex m-auto items-center justify-between">
                    <a href="#">logo</a>
                    <ul class="flex">
                        <li class='mx-2' ><a href="">home</a></li>
                        <li class='mx-2'><a href="">home</a></li>

                        @auth
                        <li class='mx-2'><a href="">
                            <a href="{{ url('/dashboard') }}" class="text-sm text-green-300  font-black ">Dashboard</a> 
                            </a>
                        </li>
                        
                        @else
                        
                        <li class='mx-2'><a href="">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        </a></li>
                        <li class='mx-2'><a href="">home</a></li>
                        @endif
                    </ul>    
                </div>
            </nav>
        </header>
        <div class="content">
            <div class="container m-auto">
                <div class="grid grid-cols-3 gap-4">

                    @forEach ($users as $u)
                      
                     <div class="flex bg-blue-500 items-center p-3 my-3 ">
                           
                        <a href="/profile/{{$u->id}}">
                            <svg class='w-8' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                            </a>
                        <div>
                            {{$u->name}}  
                        </div>
                           
                     </div>
                        
                    @endforEach
                </div>
              
            </div>
        </div>
    </body>
</html>
