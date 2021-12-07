const ele1 = document.querySelector('#ele1');
const ele1_2 = document.querySelector('#ele1_2');
const ele1_3 = document.querySelector('#ele1_3');
const ele1_4 = document.querySelector('#ele1_4');
const ele1_close = document.querySelector('#ele1_close');
const redirect = document.querySelector('#redirect');
const redirectmenu = document.querySelector('#redirectmenu');

ele1.addEventListener('click',() => {
    console.log('ele1_test_passed')
    ele1_2.classList.toggle('h-68');
    ele1_2.classList.toggle('overflow-y-auto');
    ele1_3.classList.toggle('hidden');
    ele1_4.classList.toggle('hidden');
    ele1_close.classList.toggle('hidden');
    ele1.classList.toggle('hidden');
});

ele1_close.addEventListener('click',() => {
    console.log('ele1_close_test_passed')
    ele1_2.classList.toggle('h-68');
    ele1_2.classList.toggle('overflow-y-auto');
    ele1_3.classList.toggle('hidden');
    ele1_4.classList.toggle('hidden');
    ele1_close.classList.toggle('hidden');
    ele1.classList.toggle('hidden');
});

redirect.addEventListener('click',() => {
    redirectmenu.classList.toggle('hidden')
});


