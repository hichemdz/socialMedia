@extends('front.base')
@section('main')
  
@endsection

@section('content')
    <div class="conten bg-gray-900 pt-20">
            
            <div class="grid grid-cols-12 gap-4">
                {{-- aside left--}}
                <div class="relative overflow-hidden hidden md:block md:col-start-1 col-span-3
                 px-1">
                     @include('front.home.include.content_aside_left')
                </div>
                {{-- content --}}

                <div class="col-start-1 sm:px-6 md:px-0 col-span-12 sm:col-start-2 sm:col-span-10   md:col-start-4 md:col-span-6  md:bg-red-20 ">

                    @include('front.home.include.content_contents')
                </div>

                {{-- aside right--}}
                <div class="hidden md:block col-span-2 lg:col-span-2  md:col-span-3 ">
                    @include('front.home.include.content_aside_right')
                </div>
                
            </div>

    </div>
@endsection


