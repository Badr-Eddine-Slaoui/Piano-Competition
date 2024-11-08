function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate'); // Add class when in view
        } else {
            entry.target.classList.remove('animate')
        }
    });
}

// Set up the observer
let observer = new IntersectionObserver(animateOnScroll, {
    threshold: 0.05 // Trigger when 10% of the element is in view
});

// Target elements to observe
document.querySelectorAll('.slide-text').forEach(el => {
    observer.observe(el); // Keep observing each element
});
