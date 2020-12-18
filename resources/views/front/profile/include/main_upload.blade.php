

  

    <form id="photo_profile_form" class='flex items-center justify-center  p-3' action="/profile" method='POST' enctype="multipart/form-data" >
        @csrf
        {{-- Id Profile --}}
        <input type="hidden" 
               class=" w-64 border-2 border-gray-400 
                     bg-gray-200 hover:bg-gray-200 
                      p-2 mb-2 rounded-full" value='{{{$profile->id}}}'  
                      name="profile_id">
        {{-- type photo --}}
        <input type="hidden" 
               id='type_form_profile'
               class=" w-64 border-2 border-gray-400 
                     bg-gray-200 hover:bg-gray-200 
                     p-2 mb-2 rounded-full" value='c' name="type">

        <input type="file" class=" w-64 border-2 border-gray-400 bg-gray-200 hover:bg-gray-200 p-2 mb-2 rounded-full" name="path" accept="image/*,image/heif,image/heic" id="file">
        <button class="bg-gray-200 border-2 border-gray-400 hover:bg-gray-300 w-24 h-8 ml-3  px-2 rounded-full " type="submit" id="submitData">upload</button>
    </form>
    <img src="" class="w-24" alt="">



