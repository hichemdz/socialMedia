const openOption = document.querySelector('#openOption');
const optiom = document.querySelector('.option');

openOption.addEventListener('click', (e)=>{
    e.preventDefault();
   
    optiom.classList.toggle('hidden')

})