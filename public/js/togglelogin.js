const togglelogin = document.querySelector('#togglelogin');
const togglemobil = document.querySelector('#togglemobil');

const search1 = document.querySelector('#search1');
const searchbutton1 = document.querySelector('#searchbutton1');
const searchbutton2 = document.querySelector('#searchbutton2');

togglelogin.addEventListener('click', () => {
    loginframe.classList.toggle('hidden')
    logincont.classList.toggle('md:grid-cols-2')
    logincont.classList.toggle('divide-gray-300')
})
togglemobil.addEventListener('click', () => {
    loginframe.classList.toggle('hidden')
    logincont.classList.toggle('md:grid-cols-2')
    logincont.classList.toggle('divide-gray-300')
})
//TEMPORAL PARA QUE INICIE CON LOGIN ABIERTO
loginframe.classList.toggle('hidden')
logincont.classList.toggle('md:grid-cols-2')
