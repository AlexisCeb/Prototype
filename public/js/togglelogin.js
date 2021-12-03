const togglelogin = document.querySelector('#togglelogin');

togglelogin.addEventListener('click', () => {
    loginframe.classList.toggle('hidden')
    logincont.classList.toggle('md:grid-cols-2')
})
//TEMPORAL PARA QUE INICIE CON LOGIN ABIERTO
loginframe.classList.toggle('hidden')
logincont.classList.toggle('md:grid-cols-2')
