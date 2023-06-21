window.addEventListener('scroll', function(){
    const header=document.querySelector('header');
    header.classList.toggle("sticky",window.scrollY>0);
});
function toggleMenu(){
    const tm=document.querySelector('.menutoggle');
    const nav=document.querySelector('.navigation');           
    tm.classList.toggle('active');
    nav.classList.toggle('active');
}