function animateOnComiteLeftScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animateComiteLeft'); // Add class when in view
        } else {
            entry.target.classList.remove('animateComiteLeft')
        }
    });
}

// Set up the observer
let observerComiteLeft = new IntersectionObserver(animateOnComiteLeftScroll, {
    threshold: 0.05 // Trigger when 10% of the element is in view
});

// Target elements to observe
document.querySelectorAll('.comite.left').forEach(el => {
    observerComiteLeft.observe(el); // Keep observing each element
});

function animateOnComiteRightScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animateComiteRight'); // Add class when in view
        } else {
            entry.target.classList.remove('animateComiteRight')
        }
    });
}

// Set up the observer
let observerComiteRight = new IntersectionObserver(animateOnComiteRightScroll, {
    threshold: 0.05 // Trigger when 10% of the element is in view
});

// Target elements to observe
document.querySelectorAll('.comite.right').forEach(el => {
    observerComiteRight.observe(el); // Keep observing each element
});
