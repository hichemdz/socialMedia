@extends('base')
@section('main')
   <main class=" grid grid-cols-12 ">

     <div class="col-start-1 col-span-12 md:col-start-2 md:col-span-10 lg:col-start-3 lg:col-span-8 bg-red-200">
        <a href="">
            <div class="cover relative" style="background:url({{asset('img/profile/cv.jpg')}})  no-repeat 0px center ; background-size:cover; "  >
                {{-- <img  class='absolute top-0 left-0 w-full h-full' src='{{asset('img/profile/cv.jpg')}}' alt='cover'> --}}
            </div>
        </a>    
     </div>
    {{--  inner --}}
    {{-- cover --}}

    {{--  actions --}}
     

  </main>
@endsection

@section('content')
<div class="content">
    
  
</div>
@endsection