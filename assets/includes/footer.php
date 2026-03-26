    <footer class="footer pt-4 pb-1">
        <div class="container">
            <div class="row gy-4">

                <!-- Logo and tagline -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center mb-3">
                        <a href="index.php"><img src="assets/images/logo-bokbunkern.webp" class="footer-logo me-2" alt="Bokbunkerns logotyp, bokhög med två lysande ögon"></a>
                        <a href="index.php" class="footer-logo-link">
                            <span class="footer-logo-text">Bokbunkern</span>
                        </a>
                    </div>
                    <p class="footer-tagline">
                        En plats för läslust, gemenskap och nya bokidéer.
                    </p>
                </div>

                <!-- Links to navigate -->
                <div class="col-md-4">
                    <h4 class="footer-heading">Länkar</h4>
                    <ul class="footer-links list-unstyled">
                        <?php foreach ($navLinks as $file => $label) {
                            if ($current === $file) {
                                echo '<li><a href="' . $file . '" class="active">' . $label . '</a></li>';
                            } else {
                                echo '<li><a href="' . $file . '">' . $label . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

                <!-- Contact info and social media links -->
                <div class="col-md-4">
                    <h4 class="footer-heading">Kontakt</h4>
                    <p class="footer-contact">info@bokbunkern.se</p>

                    <div class="footer-social d-flex gap-3 mt-3">
                        <a href="https://www.tiktok.com/explore"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

            </div>

            <hr class="footer-divider mt-2">

            <div class="text-center footer-copy">
                <p> © 2026 Bokbunkern – Studentprojekt skapat av Mina, Ofelia & Yetnayet</p>
            </div>

        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>