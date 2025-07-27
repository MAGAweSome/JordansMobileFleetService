import './bootstrap';
import '../css/app.css';

// JavaScript for Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default jump behavior

        // Get the target element using its ID
        const targetId = this.getAttribute('href').substring(1); // Remove the '#'
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth' // This is the magic property for smooth scroll
            });

            // Optional: Update URL hash without jumping the page, for bookmarking
            // history.pushState(null, null, this.getAttribute('href'));
        }
    });
});