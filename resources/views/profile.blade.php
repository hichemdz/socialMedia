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
                             {{Auth::user()->name}}
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
              
              <h3 class="my-5"> {{$user->name}}  </h3>
              <form action="/profile" method="POST">
                 @csrf
                      
                 {{-- have  --}}
              @if ($friend)
              <input type="text"  name="user_send" value='{{$friend->user_send}}'>
              <input type="text" name="user_receive" value='{{$friend->user_request}}'>   
              {{-- if accepted --}}
               @if ($friend->status)
                 <button type="submite" name='action' value='Unfriend' class="p-2 bg-red-200 mr-2 rounded-full text-sm">Unfriend</button>
               @else
                    {{-- if have request --}}  
                   
                    @if ($friend->user_send == $user->id)
                    <input type="submit"   name='action' value='accept' class="p-2 bg-green-200 mr-2 rounded-lg text-sm">
                    <button type="submite" name='action' value='reject' class="p-2 bg-red-200 mr-2 rounded-lg text-sm">reject</button>
                    @else 
                    <button type="submite" value='unRequst' name='action' class="p-2 bg-red-200 mr-2 rounded-lg text-sm">unRequst</button>   
                    @endif   
               @endif
               
          @else   
          <button type="submit" name='action' value='add' class="p-2 bg-red-200 mr-2 rounded-full text-sm">Add friend</button> 
          @endif
          

              </form>
              

              
              
           
              
            </div>
        </div>
    </body>
</html>
