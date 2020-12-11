<div class="bg-sub p-3 mb-2 rounded">
    <div class="flex items-center justify-between mb-2">

        <h4 class="text-white font-black text-xl ">Photos</h4>
        <a href="" class="text-md text-blue-500 font-black"> See All Photos</a>
    </div>
    <div class="grid grid-cols-3 gap-2 mb-3">

        @foreach($profile->photos->slice(0,6) as  $f)
            <a href="" >
                <img class="w-full h-full" class='rounded' src='{{"/storage/front/profile/".$f->path}}' alt="">
            </a>
        @endforeach
    </div>
</div>
