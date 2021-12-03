console.log('Script de header conectado');
const mobileboton = document.querySelector('#mobileboton');
const mobilemenu = document.querySelector('#mobilemenu');
const userboton = document.querySelector('#userboton');
const usermenu = document.querySelector('#usermenu');

mobileboton.addEventListener('click',()=>{
    mobilemenu.classList.toggle('hidden');
})
userboton.addEventListener('click',()=>{
    usermenu.classList.toggle('hidden');
})
