{{--inner--}}
<div class="">
    {{--  story--}}
    <div class="bg-gray-800 flex items-center justify-start p-6 mb-3 rounded">
        <div class="w-8 h-8 mr-3 bg-gray-700 rounded-full flex items-center justify-center" >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-200" viewBox="0 0 448 448">
                <defs/>
                <path d="M408 184H272c-4.418 0-8-3.582-8-8V40c0-22.0898-17.9102-40-40-40s-40 17.9102-40 40v136c0 4.418-3.582 8-8 8H40c-22.0898 0-40 17.9102-40 40s17.9102 40 40 40h136c4.418 0 8 3.582 8 8v136c0 22.0898 17.9102 40 40 40s40-17.9102 40-40V272c0-4.418 3.582-8 8-8h136c22.0898 0 40-17.9102 40-40s-17.9102-40-40-40zm0 0"/>
            </svg>
        </div>
        <div>
            <h3 class="text-lg text-gray-200 font-black"> Create Story</h3>
            <p class="text-md text-gray-400 font-semibold">Share a Photo or write something</p>
        </div>
    </div>
    <div class="lg:px-6">

        {{--  add posts   --}}
        @include('front.components.posts.create_post')
        {{-- all posts --}}
        
        @isset($posts)
            @foreach ($posts as $post)
                @if($post->privacy  === 'Only' && $post->user_id == Auth::user()->id  || $post->privacy  === 'Public'  )
                  @include('front.components.posts.post') 
                @endif

            @endforeach                   
      @endisset
    </div>
</div>
{{-- .inner--}}

@section('overflay')

        @include('front.components.posts.store_post')
@endsection