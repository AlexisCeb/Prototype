console.log('added!');
const mau = document.querySelector('#mau');
const meu = document.querySelector('#meu');
const op1 = document.querySelector('#op1');
const op2 = document.querySelector('#op2');
const op3 = document.querySelector('#op3');
const op4 = document.querySelector('#op4');
const op5 = document.querySelector('#op5');
var c = 1;

mau.addEventListener('click',()=>{
    if (c===5){
        console.log('full (' + c + ')');
    }else{
        c = c+1;
        console.log(c);
        change();
    }
});
meu.addEventListener('click',()=>{
    if (c===1){
        console.log('No minor than one (' + c + ')');
    }else{
        c = c-1;
        console.log(c);
        change();
    }
});


function change() {
    switch (c) {
        case 1:
            op1.classList.remove('hidden');
            op2.classList.add('hidden');
            op3.classList.add('hidden');
            op4.classList.add('hidden');
            op5.classList.add('hidden');
            break;
        case 2:
            op2.classList.remove('hidden');
            op1.classList.add('hidden');
            op3.classList.add('hidden');
            op4.classList.add('hidden');
            op5.classList.add('hidden');
            break;
        case 3:
            op3.classList.remove('hidden');
            op1.classList.add('hidden');
            op2.classList.add('hidden');
            op4.classList.add('hidden');
            op5.classList.add('hidden');
            break;
        case 4:
            op4.classList.remove('hidden');
            op1.classList.add('hidden');
            op2.classList.add('hidden');
            op3.classList.add('hidden');
            op5.classList.add('hidden');
            break;
        case 5:
            op5.classList.remove('hidden');
            op1.classList.add('hidden');
            op2.classList.add('hidden');
            op3.classList.add('hidden');
            op4.classList.add('hidden');
            break;
    }
}

window.addEventListener('load', function (){
    change();
})
