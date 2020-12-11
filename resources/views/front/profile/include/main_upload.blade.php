<div id='file_editor' data-id="{{$profile->id}}"
     class="fixed flex justify-center  hidden
              items-center w-full h-screen
               bg-black z-10 top-0 left-0 ">

    <button class="absolute top-0 right-0 " id='close'>
        <svg class='fill-current hover:text-red-200 text-white w-5 h-5 mt-3 mr-3' xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
        </svg>
    </button>

    <form id="photo_profile_form" class='flex items-center justify-center  p-3' action="/profile" method='POST' enctype="multipart/form-data" >
        @csrf
        <input type="file" class=" w-64 border-2 border-gray-400 bg-gray-200 hover:bg-gray-200 p-2 mb-2 rounded-full" name="path" accept="image/*,image/heif,image/heic" id="file">
        <button class="bg-gray-200 border-2 border-gray-400 hover:bg-gray-300 w-24 h-8 ml-3  px-2 rounded-full " type="submit" id="submitData">upload</button>
    </form>
    <img src="" class="w-24" alt="">


</div>
