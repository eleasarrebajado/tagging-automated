














// THIS IS THE JAVASCRIPT FOR TAGGING BUTON <------------------------

let tagDrop = document.querySelector('#listDrop-a');
let tagDrop_b = document.querySelector('#listDrop-b');
let tagDrop_c = document.querySelector('#listDrop-c');
let tagDrop_d = document.querySelector('#listDrop-d');
let tagDrop_e = document.querySelector('#listDrop-e');
let tagDrop_f = document.querySelector('#listDrop-f');
let tagDrop_g = document.querySelector('#listDrop-g');
let tagDrop_h = document.querySelector('#listDrop-h');





document.querySelector('#listBtn').onclick = () =>{
    tagDrop.classList.toggle('active');

    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
}

document.querySelector('#listBtn-b').onclick = () =>{
    tagDrop_b.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_h.classList.remove('active');
}

document.querySelector('#listBtn-c').onclick = () =>{
    tagDrop_c.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_h.classList.remove('active');
}

document.querySelector('#listBtn-d').onclick = () =>{
    tagDrop_d.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_h.classList.remove('active');

}
document.querySelector('#listBtn-e').onclick = () =>{
    tagDrop_e.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_h.classList.remove('active');
}

document.querySelector('#listBtn-f').onclick = () =>{
    tagDrop_f.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_h.classList.remove('active');
}

document.querySelector('#listBtn-g').onclick = () =>{
    tagDrop_g.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_e.classList.remove('active');
    tagDrop_h.classList.remove('active');
}

document.querySelector('#listBtn-h').onclick = () =>{
    tagDrop_h.classList.toggle('active');

    tagDrop.classList.remove('active');
    tagDrop_b.classList.remove('active');
    tagDrop_c.classList.remove('active');
    tagDrop_d.classList.remove('active');
    tagDrop_f.classList.remove('active');
    tagDrop_g.classList.remove('active');
    tagDrop_e.classList.remove('active');
}







// THIS IS THE NAV BTN DIVISION < ----------------------------------
const navBtn = document.querySelector('.nave-menu_btn'); // THIS IS THE NAV BTN DIVISION <---------------------------------
const nav_side_hide = document.querySelector('.nav-side-a');

document.querySelector('.nav-menu__wrapper').onclick = () =>{
    navBtn.classList.toggle('open');
    nav_side_hide.classList.toggle('active');
}
