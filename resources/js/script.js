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
