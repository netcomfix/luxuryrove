    <?php include_once(__DIR__ . '/../config.php'); ?>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer_top">
                <div class="row gap-lg-0 gap-4">
                    <div class="col-lg-6">
                        <div class="footer_column__top">
                            <div class="footer-logo"><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>/images/desktop-logo.webp" alt=""></a></div>
                            <div class="phone-number">
                                <img src="<?php echo $base_url; ?>/images/uk.webp" alt="USA">
                                <a href="tel:+1.929.768.0110">+1.929.768.0110</a>
                            </div>
                        </div>
                        <div class="footer_column__bottom">
                            <ul class="menu-footer-nav">
                                <li class="widget">
                                    <a href="/cars/">Our Cars</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo $base_url; ?>/cars/mercedes-s-class.php">Mercedes S-Class</a></li>
                                        <li><a href="<?php echo $base_url; ?>/cars/mercedes-v-class.php">Mercedes V-Class & EQV</a></li>
                                        <li><a href="<?php echo $base_url; ?>/cars/mercedes-e-class.php">Mercedes E-Class</a></li>                                        
                                        <li><a href="<?php echo $base_url; ?>/cars/range-rover.php">Range Rover</a></li>                                        
                                        <li><a href="<?php echo $base_url; ?>/cars/bentley-mulsanne.php">Bentley Mulsanne</a></li>                                                                              
                                    </ul>
                                </li>
                                <li class="widget">
                                    <a href="#">Services</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo $base_url; ?>/by-the-hour.php">By The Hour</a></li>
                                        <li><a href="<?php echo $base_url; ?>/one-way.php">One Way</a></li>
                                        <li><a href="<?php echo $base_url; ?>/airport.php">Airport</a></li>
                                        <li><a href="<?php echo $base_url; ?>/business.php">Business</a></li>
                                        <li><a href="<?php echo $base_url; ?>/events.php">Events</a></li>
                                        <li><a href="<?php echo $base_url; ?>/tour.php">Tours</a></li>
                                        <li><a href="<?php echo $base_url; ?>/wedding.php">Weddings</a></li>
                                    </ul>
                                </li>
                                <li class="widget">
                                    <a href="#">Our Company</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo $base_url; ?>/contact.php">Contact Us</a></li>
                                        <li><a href="<?php echo $base_url; ?>/about.php">About Us</a></li>
                                        <li><a href="<?php echo $base_url; ?>/safety.php">Safety</a></li>
                                        <li><a href="<?php echo $base_url; ?>/sustainability.php">Sustainability</a></li>
                                        <li><a href="<?php echo $base_url; ?>/blog.php">Blog</a></li>
                                        <li><a href="<?php echo $base_url; ?>/faq.php">FAQ</a></li>
                                        <li><a href="<?php echo $base_url; ?>/chauffeur-reviews.php">Testimonials</a></li>
                                        <li><a href="<?php echo $base_url; ?>/press-media.php">Press & Media</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="newsletter">
                            <div class="container">
                                <div class="newsletter-wrapper">
                                    <img src="<?php echo $base_url; ?>/images/newsletter-sign-up-bg-image.webp">
                                    <h4>JOIN THE CLUB</h4>
                                    <p>Sign up for the latest news on our cars, services & chauffeurs.</p>
                                    <form class="newsletter-form">
                                        <input type="email" placeholder="Enter your email..." required>
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="app-store-links">
                            <h3>Download Our App</h3>
                            <div class="store-link">
                                <a href="#"><img src="<?php echo $base_url; ?>/images/apple_app_store.svg" alt="App Store"></a>
                                <a href="#"><img src="<?php echo $base_url; ?>/images/google_play.svg" alt="Google Play"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <ul class="social_links">
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
                <div class="copyright">© Copyright 2026 Luxury Rove. All Rights Reserved</div>
                <ul class="footer-links">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- jQuery and Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="<?php echo $base_url; ?>/js/custom.js"></script>
</body>

</html>