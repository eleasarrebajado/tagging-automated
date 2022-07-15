const btnInput = document.querySelector('.btnInput-1');
const inputfiledClose = document.querySelector('.btnClose');

const inputDropdwn1 = document.querySelector('#drp1');
const inputDropdwn = document.querySelector('.form-inputFiled_box');

let inputShowFiled = false;

btnInput.addEventListener('click', toggleInput);
inputfiledClose.addEventListener('click', toggleInput);

function toggleInput() {
    if(!inputShowFiled){
        inputDropdwn1.classList.add('open2');
        inputDropdwn.classList.add('open');
        inputfiledClose.classList.add('open');


        inputDropdwn1User.classList.remove('open2');

        
        

        inputShowFiled = true;
    } else {
        inputDropdwn1.classList.remove('open2');
        inputDropdwn.classList.remove('open');
        inputfiledClose.classList.add('open');


        
        

        inputShowFiled = false;
    }
}



// this is another function 

const btnInputUser = document.querySelector('.btnInput-2');// this is button
const inputfiledCloseUser = document.querySelector('.btnClose');// this is the x button closed

const inputDropdwn1User = document.querySelector('#drp2');// this is the dropdown main div
const inputDropdwnUser = document.querySelector('#inputfiledUser');// this is dropdown child div

btnInputUser.addEventListener('click', toggleInputUser);// this is the click even button
inputfiledCloseUser.addEventListener('click', toggleInput);// this is the x button closed

function toggleInputUser() {
    if(!inputShowFiled){
        inputDropdwn1User.classList.add('open2');
        inputDropdwnUser.classList.add('open');
        inputfiledCloseUser.classList.add('open');

        inputDropdwn1.classList.remove('open2');




        inputShowFiled = true;
    } else {

        inputDropdwn1User.classList.remove('open2');
        inputDropdwnUser.classList.remove('open');

        
        

        inputShowFiled = false;
    }
}




// THIS IS THE TABLE DROP DOWN CONTENT DIVISION START ==============================

let TableCondition = true;

let TableDrop = document.querySelector('#tableDrp-a');

document.querySelector('#btnDrop-a').onclick = () => {
    if(!TableCondition){
        TableDrop.classList.add('active');
        TableDrop_b.classList.remove('active');

        TableCondition = true;
    } else {
        TableDrop.classList.remove('active');
        TableDrop.style.transition = "0.3s";
        TableDrop.style.overflow = "hidden";  
        
        TableCondition = false;
    }   
}

//================================================================

let TableDrop_b = document.querySelector('#tableDrp-b');

document.querySelector('#btnDrop-b').onclick = () => {
    if(!TableCondition){
        TableDrop_b.classList.add('active');
        TableDrop.classList.remove('active');

        TableCondition =  true;
    } else {
        TableDrop_b.classList.remove('active');
        TableDrop_b.style.transition = "0.3s";
        TableDrop_b.style.overflow = "hidden"; 

        TableCondition = false;
    }
}


