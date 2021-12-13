const menu = document.querySelector('.menu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');

openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    menu.style.display = 'flex';
    menu.style.top = '225px';
    menu.style.backgroundColor = '#ece8f5';
    menu.style.margin = '0 auto';
}
function close(){
    menu.style.top = '-100%';
}