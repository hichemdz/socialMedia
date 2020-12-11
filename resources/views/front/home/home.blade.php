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
{{--  col-span-12 col-start-3  lg:col-span-9 md:col-span-8 --}}
                <div class="col-start-1 sm:px-6 md:px-0 col-span-12 sm:col-start-2 sm:col-span-10   md:col-start-4 md:col-span-6   ">
                    @include('front.home.include.content_contents')
                </div>
                {{-- aside right--}}
                <div class="hidden md:block col-span-2 lg:col-span-2  md:col-span-3 ">
                    @include('front.home.include.content_aside_right')
                </div>














{{--                @forEach ($users as $u)--}}

{{--                    <div class="flex bg-blue-500 items-center p-3 my-3 ">--}}

{{--                        <a href="/profile/{{$u->id}}">--}}
{{--                            <svg class='w-8' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                        <div>--}}
{{--                            {{$u->name}}--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                @endforEach--}}
            </div>


    </div>
@endsection

@section('script')
    @parent
{{--    <script src="{{asset('js/profile.js')}}"></script>--}}
@endsection
