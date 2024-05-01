const header = document.querySelector('header');
function fixednavbar(){
header.classList.toggle('scrolled',window.pageXOffset > 0)

}
fixednavbar();
window.addEventListener('scroll',fixednavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click',function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})

userBtn.addEventListener('click',function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');

})






