<script>
    // Wait for the DOM content to load
    document.addEventListener('DOMContentLoaded', (event) => {
        // Select the alert element
        const alert = document.getElementById('status-alert');

        // Set a timeout to hide the alert after 3 seconds
        setTimeout(() => {
            // Add the Bootstrap 'fade' class and remove 'show' to hide it
            alert.classList.add('fade');
            alert.classList.remove('show');

            // Optionally, remove the element from the DOM after the fade
            setTimeout(() => {
                alert.remove();
            }, 500); // Delay slightly more to match the fade-out effect
        }, 3000); // 3000 milliseconds = 3 seconds
    });
</script>
