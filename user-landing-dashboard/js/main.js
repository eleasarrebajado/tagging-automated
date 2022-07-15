const btnInput = document.querySelector('.btnInput-1');
const inputfiledClose = document.querySelector('.btnClose');
const inputDropdwn2 = document.querySelector('.form-inputFiled');
const inputDropdwn = document.querySelector('.form-inputFiled_box');

let inputShowFiled = false;

btnInput.addEventListener('click', toggleInput);
inputfiledClose.addEventListener('click', toggleInput);

function toggleInput() {
    if(!inputShowFiled){
        inputDropdwn2.classList.add('open2');
        inputDropdwn.classList.add('open');
        inputfiledClose.classList.add('open');
        

        inputShowFiled = true;
    } else {
        inputDropdwn2.classList.remove('open2');
        inputDropdwn.classList.remove('open');
        inputfiledClose.classList.add('open');
        

        inputShowFiled = false;
    }
}