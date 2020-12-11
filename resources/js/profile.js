const edit_file = document.querySelectorAll('.edidt_file_profile');
const file_editor = document.querySelector('#file_editor');
//const type = document.querySelector('#type');
const close = document.querySelector('#close');
const profile_id  =  document.querySelector('#profile_id');
var path=null;


close.addEventListener('click',()=>{
   file_editor.classList.add('hidden')
    document.querySelector('#photo_profile_form').reset();
})


// image upload

const fileUpload = document.querySelector('#file');
const btn  = document.querySelector('#submitData');

fileUpload.onchange = (e)=>{
    var file = e.target.files[0];
    resizeAndUpload(file);
}

function resizeAndUpload(file) {
    var reader = new FileReader();
    reader.onloadend = function () {
        var tempImg = new Image();
        tempImg.src = reader.result;
        tempImg.onload = function () {
            var MAX_WIDTH = 1440; // you can keep any width you want
            var MAX_HEIGHT = 960;  // you can keep any height you want

            var tempW = tempImg.width;
            var tempH = tempImg.height;

            //calculating the ratio of width that needs to be resized.
            //resizing the height in the same ratio as width.
            if (tempW > MAX_WIDTH) {
                var ratio = tempW / MAX_WIDTH;
                tempW = parseInt(tempW / ratio);
                tempH = parseInt(tempH / ratio);
            }
            else {
                if (tempH > MAX_HEIGHT) {
                    var ratio = tempW / MAX_HEIGHT;
                    tempW = parseInt(tempW / ratio);
                    tempH = parseInt(tempH / ratio);
                }
            }

            var canvas = document.createElement('canvas');
            canvas.width = tempW;
            canvas.height = tempH;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(this, 0, 0, tempW, tempH);
            var dataURL = canvas.toDataURL("image/jpeg");
            document.querySelector('img').src= dataURL;
            path = dataURL;
        }
    }
    reader.readAsDataURL(file);
}

Object.values(edit_file).map(b=>{
    b.addEventListener('click',()=>{
        type = b.dataset.type.trim() === 'cover'?'c':'p' ;
        file_editor.classList.toggle('hidden')

        //
        btn.addEventListener('click', (e)=>{
            e.preventDefault();
            let profile_id = file_editor.dataset.id
            axios.post('/profile',{path,type,profile_id})
                .then(res=>{
                    ///storage/front/profile/
                   // console.log(res.data)
                    console.log(type)
                    if(type =='p') document.querySelector('#photo_profile').innerHTML = res.data;
                    if(type =='c') document.querySelector('#photo_cover').innerHTML = res.data;

                    close.click();

                }).catch(err=> console.log(err) )
        })

    })
})

