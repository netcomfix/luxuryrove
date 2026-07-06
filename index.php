<?php 
    $pageTitle = "Luxury Chauffeur Services";
    $pageDescription = "Personal chauffeur driven luxury car hire services from Luxury Rove. In London, the USA for business, airport transfers, special occasions.";
    $pageKeywords = "mercedes, s-class, luxury car, german vehicles";
    $pageAuthor = "Luxury Rove";
    include('includes/header.php'); 
?>

    <!-- Main Content -->
    <main>
        <section class="hero_section padding2x" style="background-image: url(images/chauffeur-driven-passenger-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__content">
                            <img src="images/20-years-of-excellence-cutout-white.png" alt="">
                            <div class="bottom_content">
                                <h1 class="page-title heading">Premium Chauffeur Service</h1>
                                <h4>Awarded best US chauffeur company</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="booking_form"><iframe src="https://luxuryrove.com/staging/booking-form/"
                                width="100%" height="600" style="border:0;"></iframe></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Section >
        <section class="download-section black-bg">
            <div class="container">
                <div class="download__wrapper">
                    <div class="logo">
                        <img src="images/app-logo.png" alt="App Logo" class="app-logo">
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Download the App</h2>
                        <p>Download the app to book safe, chauffeur-driven rides</p>
                        <div class="store-buttons">
                            <a href="#"><img src="images/apple_app_store.svg" alt="App Store"></a>
                            <a href="#"><img src="images/google_play.svg" alt="Google Play"></a>
                        </div>
                    </div>
                    <div class="phone_img">
                        <img src="images/phone-img.png" alt="Phone App View" class="phone-mockup">
                    </div>
                </div>

            </div>
        </section-->

        <section class="car-guide light-grey-bg padding2x">
            <div class="container">
                <div class="section-header text-center text-uppercase">
                    <h2>Our Chauffeur Driven Cars</h2>
                    <h4>NYC Price Guide</h4>
                    <hr class="mx-auto mt-4">
                </div>
                <div class="row mt-lg-5 mt-3">
                    <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="face-up" data-aos-delay="100">
                        <div class="car-item">
                            <a href="#" class="hover image"><img src="images/cars/Mercedes-S-Class-cutout-2021.png"
                                    class="img-fluid"></a>
                            <div class="content">
                                <a href="/cars/mercedes-s-class/">
                                    <h5 class="">Premium Sedan</h5>
                                </a>
                                <ul class="car-pricing-list">
                                    <li>
                                        <p class="car-price-label">Hourly rate (minimum 3 hours)</p>
                                        <p class="car-price">$75</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">Day rate (8 hours)</p>
                                        <p class="car-price">$600</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">JFK to NYC</p>
                                        <p class="car-price">$165</p>
                                    </li>
                                </ul>
                                <div class="vat-line">Prices subject to VAT</div>
                                <div class="button"><a href="/book/" class="site-btn blue-btn-solid btn-full arrow white-arrow inside-arrow">Book
                                        This Car</a></div>
                                <div class="link text-center"><a href="<?php echo $base_url; ?>/cars/mercedes-s-class/" class="text-link">Find
                                        out more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="car-item">
                            <a href="#" class="hover image"><img src="images/cars/Mercedes-V-Class-cutout-2021.png"
                                    class="img-fluid"></a>
                            <div class="content">
                                <a href="/cars/mercedes-v-class/">
                                    <h5 class="">Premium Van</h5>
                                </a>

                                <ul class="car-pricing-list">
                                    <li>
                                        <p class="car-price-label">Hourly rate (minimum 3 hours)</p>
                                        <p class="car-price">$65</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">Day rate (8 hours)</p>
                                        <p class="car-price">$520</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">JFK to NYC</p>
                                        <p class="car-price">$165</p>
                                    </li>
                                </ul>
                                <div class="vat-line">Prices subject to VAT</div>
                                <div class="button"><a href="/book/" class="site-btn blue-btn-solid btn-full arrow white-arrow inside-arrow">Book This Car</a></div>
                                <div class="link text-center"><a href="/cars/mercedes-v-class/" class="text-link">Find out more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="car-item">
                            <a href="#" class="hover image"><img src="images/cars/range-rover-cutout-2025.png" class="img-fluid"></a>
                            <div class="content">
                                <a href="/cars/range-rover/">
                                    <h5 class="">Premium SUV</h5>
                                </a>
                                <ul class="car-pricing-list">
                                    <li>
                                        <p class="car-price-label">Hourly rate (minimum 5 hours)</p>
                                        <p class="car-price">$95</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">Day rate (8 hours)</p>
                                        <p class="car-price">$760</p>
                                    </li>
                                    <li>
                                        <p class="car-price-label">JFK to NYC</p>
                                        <p class="car-price">$275</p>
                                    </li>
                                </ul>
                                <div class="vat-line">Prices subject to VAT</div>
                                <div class="button"><a href="/book/" class="site-btn blue-btn-solid btn-full arrow white-arrow inside-arrow">Book This Car</a></div>
                                <div class="link text-center"><a href="/cars/range-rover/" class="text-link">Find out more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ctacar-box black-bg">
                            <div class="crest"><img src="images/newsletter-sign-up-bg-image.webp" class="img-fluid" width="100" height="100"></div>
                            <h5>Need Multiple Cars Or Have A Bespoke Request?</h5>
                            <p>We cater for all requests, <br>no matter how large or small</p>
                            <p>SPRINTERS,VANS,BUSSES available</p>
                            <div class="car-image"><img src="images/cars/bespoke-cta-car-image.webp" class="img-fluid">
                            </div>
                            <a href="/contact/" class="text-link arrow white-arrow">Speak To Us</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="black-bg text-white py-5 banner">
            <div class="container">
                <div class="row align-items-center text-center text-md-start">
                    <div class="col-md-6">
                        <h5 class="text-uppercase mb-1">Sustainable Travel</h5>
                        <p class="small">We are transitioning to an all electric fleet</p>
                    </div>
                    <div class="col-md-6 text-md-end mt-4 mt-md-0">
                        <a href="#" class="site-btn white-btn-transparent">Electric Chauffeur</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
         <section class="padding2x video-section">
            <div class="container">               
                <div class="ratio ratio-16x9">
                    <video controls autoplay muted playsinline class="w-100">
                      <source src="videos/Website-Video-Main-Luxury Rove.v3.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-header text-center text-uppercase mb-4">
                            <h2>Award Winning</h2>
                            <h4>Outstanding Service. Every time.</h4>
                            <hr class="mx-auto mt-4">
                        </div>
                        <p class="text-center">Enjoy outstanding service every step of the way. From the moment you contact us, to the moment your chauffeur opens your door. Winning Awards for Best USA Chauffeur Company demonstrates our commitment to providing the best chauffeur service.</p>
                        <div class="button mt-3 text-center">
                            <a href="/about.php" class="site-btn black-btn-transparent">Our Company</a>
                        </div>

                    </div>
                </div>                
            </div>                       
         </section>



         <section class="black-bg text-white padding2x services">
            <div class="container">
                <div class="section-header text-center text-uppercase mb-4 pb-2">
                    <h2>Our Services</h2>
                    <h4>Tailor Made Travel Just for You</h4>
                    <hr class="mx-auto mt-4">
                </div>
                       
              <!-- Cards Row -->
              <div class="row g-4">
                
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card black-bg text-white h-100 border-0 rounded-0">
                        <a href="by-the-hour.php" class="hover overflow-hidden"><img src="images/By-the-hour.jpg" class="card-img-top rounded-0" alt="By the Hour"></a>
                        <div class="card-body">
                            <a href="by-the-hour.php"><h5 class="card-title text-uppercase mb-0">By The Hour</h5></a>
                            <small class="sub-heading">As Directed Hire</small>
                            <p class="mb-4">Transparent hourly pricing with no hidden extras keeps you in control.</p>                            
                            <a href="by-the-hour.php" class="text-link arrow text-decoration-none">View Service</a>
                        </div>
                    </div>
                </div>
          
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card black-bg text-white h-100 border-0 rounded-0">
                        <a href="airport.php" class="hover overflow-hidden"><img src="images/IMG_2509-BW-2.jpg" class="card-img-top rounded-0" alt="Airport"></a>
                        <div class="card-body">                        
                            <a href="airport.php"><h5 class="card-title text-uppercase mb-0">Airport</h5></a>
                            <small class="sub-heading">Meet and Greet</small>
                            <p class="mb-4">Expect high-flying service and style with our all-inclusive airport meet and greet service.</p>
                            <a href="airport.php" class="text-link arrow text-decoration-none">View Service</a>
                        </div>
                    </div>
                </div>
          
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card black-bg text-white h-100 border-0 rounded-0">
                        <a href="one-way.php" class="hover overflow-hidden"><img src="images/One-way-journey-final.jpg" class="card-img-top rounded-0" alt="One Way"></a>
                        <div class="card-body">
                            <a href="one-way.php"><h5 class="card-title text-uppercase mb-0">One Way</h5></a>
                            <small class="sub-heading">First Class Service From A to B</small>
                            <p class="mb-4">Enjoy safe and luxurious travel from pickup to destination.</p>
                            <a href="one-way.php" class="text-link arrow text-decoration-none">View Service</a>
                        </div>
                    </div>
                </div>
          
              </div>
            </div>
          </section>
          

          <section class="testimonial-section padding2x">
            <div class="container">                
                <!-- Testimonial Slider Wrapper -->
                    <div class="testimonial-slider">
                        <!-- Slide 1 -->             
                    <div class="testimonial-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <div class="image">
                                    <img src="images/logos/forbes.svg" alt="Forbes Logo" class="img-fluid" />
                                </div>
                                <p class="testimonial-text">“Luxury Rove is set to launch a staycation that’s the last word in luxury, from dinner with Earl Spencer to a private viewing of the Crown Jewels….”</p>
                            </div>

                            <!-- Slide 2 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/es-magazine.svg" alt="ES Magazine Logo" class="img-fluid" />
                                </div>
                                <p class="testimonial-text">“Luxury Rove provide a service synonymous with discretion, flexibility and reliability”</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="testimonial-wrap">
                            <!-- Slide 3 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/daily-mail-logo.svg" alt="Daily Mail Logo" class="img-fluid"/>
                                </div>
                                <p class="testimonial-text">“Luxury Rove is set to launch a staycation that’s the last word in luxury, from dinner with Earl Spencer to a private viewing of the Crown Jewels….”</p>
                            </div>

                            <!-- Slide 4 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/the-times-logo.svg" alt="The Times Logo" class="img-fluid"/>
                                </div>
                                <p class="testimonial-text">“Luxury Rove provide a service synonymous with discretion, flexibility and reliability”</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide">
                        <div class="testimonial-wrap">
                            <!-- Slide 5 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/homesandgardens_logo.svg" alt="Homes and Gardens Logo" class="img-fluid" />
                                </div>
                                <p class="testimonial-text">“Luxury Rove is set to launch a staycation that’s the last word in luxury, from dinner with Earl Spencer to a private viewing of the Crown Jewels….”</p>
                            </div>

                            <!-- Slide 6 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/diplomat.png" alt="Diplomat Logo" class="img-fluid"/>
                                </div>
                                <p class="testimonial-text">“Luxury Rove provide a service synonymous with discretion, flexibility and reliability”</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide">
                        <div class="testimonial-wrap">
                            <!-- Slide 7 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/luxury-lifestyle-mag-logo-2.png" alt="Luxury Lifestyle Magazine Logo" class="img-fluid"/>
                                </div>
                                <p class="testimonial-text">“Luxury Rove is set to launch a staycation that’s the last word in luxury, from dinner with Earl Spencer to a private viewing of the Crown Jewels….”</p>
                            </div>

                            <!-- Slide 8 -->
                            <div class="testimonial">
                                <div class="image">
                                <img src="images/logos/stylenest.png" alt="StyleNest Logo" class="img-fluid" />
                                </div>
                                <p class="testimonial-text">“Luxury Rove provide a service synonymous with discretion, flexibility and reliability”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>




    </main>

  <?php include('includes/footer.php'); ?>