const  toggPList = document.querySelector("#toggler_publish_list"); //
const  addPost = document.querySelector("#add_post"); // 
const  listPublish = document.querySelector("#list_publish"); // 
const  backToPublish = document.querySelector("#back_to_publish"); //
const  openCreatePost = document.querySelector("#open_create_post"); //
const  type_publish = document.querySelectorAll("#type_publish li"); //





/* --------------------------------------------------------------- */

const upload_file  = document.querySelector("#upload_file")

toggPList.addEventListener('click' , ()=>{
    addPost.style.display = 'none';
    listPublish.style.display= 'flex';
    
})

backToPublish.addEventListener('click' , ()=>{
    addPost.style.display = 'block';
    listPublish.style.display= 'none';
    
})

openCreatePost.addEventListener('click' , ()=>{
    file_editor.classList.toggle('hidden')  
})

const upload = (btnNam,nameFile,type='file') =>{
   btnNam.addEventListener('click', (e)=>{
        e.preventDefault()
        const file = document.createElement('input');
        file.type = type;
        file.name = nameFile;
        file.multiple = true;
        file.style.display = 'none';

        document.querySelector("#form_post").appendChild(file);
        file.click()
    })
}

upload (upload_file,'photos[]')


// chnage type 

Object.values(type_publish).map((ele,k)=>{
   const privacy = ['Public','Friends','Only'];
   ele.addEventListener('click',()=>{
      document.getElementsByName('privacy').value = privacy[k]
      
   })
  


})