function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        } else {
            entry.target.classList.remove('animate')
        }
    });
}

let observer = new IntersectionObserver(animateOnScroll, {
    threshold: 0.05
});

document.querySelectorAll('.slide-text').forEach(el => {
    observer.observe(el);
});

let menu = document.getElementById('menu')
let menuBar = document.getElementById('menuBar')

menuBar.addEventListener('click',()=>{
    if( menu.style.opacity === '1'){
        menu.style.opacity = 0;
        menu.style.transform = "translateX(100%)";
    } 
    else{
        menu.style.opacity = 1;
        menu.style.transform = "translateX(0%)";
    }
})