



<!-- Script for Mobile Menu -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
<footer class="bg-gray-800 py-6 mt-10">
    <div class="container mx-auto text-center">
        <div class="mb-4">
            <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-gray-400 mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank" class="text-white hover:text-gray-400 mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-gray-400 mx-2">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" class="text-white hover:text-gray-400 mx-2">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <p class="text-gray-400">&copy; <?php echo date("Y"); ?> Mobile Customer Interfce Unit. All rights reserved.</p>
    </div>
</footer>

<!-- Include Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Bootstrap JS (optional, for some Bootstrap features) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

@include('partials.alert');
</body>
</html>
