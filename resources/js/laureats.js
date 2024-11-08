function animateOnLaureatsLeftScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animateLaureatsLeft'); // Add class when in view
        } else {
            entry.target.classList.remove('animateLaureatsLeft')
        }
    });
}

// Set up the observer
let observerLaureatsLeft = new IntersectionObserver(animateOnLaureatsLeftScroll, {
    threshold: 0.05 // Trigger when 10% of the element is in view
});

// Target elements to observe
document.querySelectorAll('.laureats .left').forEach(el => {
    observerLaureatsLeft.observe(el); // Keep observing each element
});

function animateOnLaureatsRightScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animateLaureatsRight'); // Add class when in view
        } else {
            entry.target.classList.remove('animateLaureatsRight')
        }
    });
}

// Set up the observer
let observerLaureatsRight = new IntersectionObserver(animateOnLaureatsRightScroll, {
    threshold: 0.05 // Trigger when 10% of the element is in view
});

// Target elements to observe
document.querySelectorAll('.laureats .right').forEach(el => {
    observerLaureatsRight.observe(el); // Keep observing each element
});
