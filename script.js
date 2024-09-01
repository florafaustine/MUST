 // JavaScript code for all pages

// Function to toggle the navigation menu on mobile devices
function toggleMenu() {
    var nav = document.querySelector('nav');
    nav.classList.toggle('active');
}

// Function to handle smooth scrolling when clicking on anchor links
function smoothScroll(target) {
    var element = document.querySelector(target);
    var position = element.offsetTop;

    window.scrollTo({
        top: position,
        behavior: 'smooth'
    });
}

// Add event listeners to navigation links for smooth scrolling or navigation
document.querySelectorAll('nav ul li a').forEach(function(link) {
    link.addEventListener('click', function(event) {
        var target = this.getAttribute('href');
        if (target.startsWith('#')) { // Check if the link points to an anchor on the same page
            event.preventDefault();
            smoothScroll(target);
        }
    });
});

// Add event listener to the toggle button for the navigation menu
document.querySelector('.toggle-btn').addEventListener('click', function() {
    toggleMenu();
});

// Add event listener to close the navigation menu when a link is clicked
document.querySelectorAll('nav ul li a').forEach(function(link) {
    link.addEventListener('click', function() {
        var nav = document.querySelector('nav');
        nav.classList.remove('active');
    });
});

// Add event listener to the "Join Us" button for smooth scrolling
document.querySelector('.join-us-btn').addEventListener('click', function(event) {
    event.preventDefault();
    smoothScroll('#join-us-section');
});

// Add event listener to the "Learn More" button for smooth scrolling
document.querySelector('.learn-more-btn').addEventListener('click', function(event) {
    event.preventDefault();
    smoothScroll('#about-section');
});
