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

// JavaScript for Hero Section Video Slideshow
document.addEventListener('DOMContentLoaded', () => {
    const videoElements = document.querySelectorAll('.hero-video');
    let currentVideoIndex = 0;
    const intervalTime = 5000; // 5 seconds

    function showVideo(index) { // Renamed from playVideo for clarity as it also hides/resets others
        // Pause all videos and remove active class
        videoElements.forEach((video) => { // Removed 'i' as it's not used in this loop
            video.classList.remove('active');
            video.pause(); // Pause to save resources
            video.currentTime = 0; // Reset video to start from beginning when it next becomes active
        });

        // Show and play the target video
        const targetVideo = videoElements[index];
        if (targetVideo) {
            targetVideo.classList.add('active');
            // Attempt to play, handling potential autoplay block
            targetVideo.play().catch(error => {
                console.warn("Autoplay was prevented for video:", targetVideo.querySelector('source').src, error);
                // Optionally, add a mute/play button if autoplay is widely blocked
            });
        }
    }

    // Function to advance to the next video
    function nextVideo() {
        currentVideoIndex = (currentVideoIndex + 1) % videoElements.length;
        showVideo(currentVideoIndex);
    }

    // Start the slideshow
    // Play the first video immediately
    showVideo(currentVideoIndex);

    // Set interval to switch videos every 5 seconds
    setInterval(nextVideo, intervalTime);

    // This part is generally not needed if setInterval is the primary driver
    // and videos are longer than the intervalTime.
    // However, if your videos are very short, it could cause issues.
    // videoElements.forEach(video => {
    //     video.addEventListener('ended', () => {
    //         if (video.classList.contains('active')) {
    //             // nextVideo(); // Do not call nextVideo here to avoid double-triggering with setInterval
    //         }
    //     });
    // });
});