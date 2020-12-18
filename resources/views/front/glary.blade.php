@extends('front.base')


@section('header') @endsection

@section('main') @endsection

@section('content')
   <div class="content">
       
     
     <div class=" m-auto ">
       
         <div class="relative">
          
             @foreach($photos as $p) 
                 <div class="absolute left-0 top-0 w-full">
                   <img class="w-auto h-64" class='rounded' src='{{"/storage/front/posts/". $p->path}}' alt="">
                 </div>
             @endforeach       
 
         </div>
                       
     </div>
      
       
   </div>
@endsection

@section('script')
    @parent
    {{-- <script src="{{asset('js/profile.js')}}"></script> --}}
@endsection
