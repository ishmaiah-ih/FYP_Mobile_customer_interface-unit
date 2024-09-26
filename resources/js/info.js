document.addEventListener('DOMContentLoaded', () => {
    const alert = document.getElementById('status-alert');

    // Check if alert exists before setting timeouts
    if (alert) {
        // Set a timeout to hide the alert after 3 seconds
        setTimeout(() => {
            // Add the 'fade' class and remove 'show' to hide the alert
            alert.classList.remove('show'); // Hides the alert visually

            // Optional: Remove the element from the DOM after the fade effect
            setTimeout(() => {
                alert.remove();
            }, 500); // 500 milliseconds delay to match Bootstrap's fade-out duration
        }, 3000); // 3 seconds delay before starting the fade
    }
});
