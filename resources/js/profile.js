const edit_file = document.querySelectorAll('.edidt_file_profile');
const file_editor = document.querySelector('#file_editor');
const type_input_profile = document.querySelector('#type_input_profile');
const close = document.querySelector('#close');

Object.values(edit_file).map(b=>{
    b.addEventListener('click',()=>{

      console.log(b.dataset.type);
      type_input_profile.value = b.dataset.type === 'cover'?'c':'p' ;
      file_editor.classList.toggle('hidden')

    })
})

close.addEventListener('click',()=>{
   file_editor.classList.add('hidden')

})
