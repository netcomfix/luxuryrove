<?php include_once(__DIR__ . '/../config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    
    <!-- ✅ SEO Meta Tags -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Premium Chauffeur Services'; ?></title>    
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Default description'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'default, keywords'; ?>">
    <meta name="author" content="<?php echo isset($pageAuthor) ? $pageAuthor : 'Luxury Rove'; ?>">

     <!-- ✅ Favicon -->
    <link rel="icon" href="<?php echo $base_url; ?>/images/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/css/style.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />    
</head>

<body>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="top-header d-lg-flex justify-content-between align-items-center">
            <div class="phone-number">
                <img src="<?php echo $base_url; ?>/images/uk.webp" alt="UK">
                <a href="tel:+1.929.768.0110">+1.929.768.0110</a>
            </div>
            <a class="navbar-brand mx-auto" href="<?php echo $base_url; ?>">
                <img src="<?php echo $base_url; ?>/images/desktop-logo.webp" alt="">
            </a>
            <a href="#" class="header-button">Book</a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
                <img src="<?php echo $base_url; ?>/images/desktop-logo.webp" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <div id="custom-menubar">
                    <span></span><span></span><span></span>
                </div>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="carsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Our Cars</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/mercedes-s-class.php">Mercedes S-Class</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/mercedes-v-class.php">Mercedes V-Class & EQV</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/mercedes-e-class.php">Mercedes E-Class</a></li>                            
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/range-rover.php">Range Rover</a></li>                            
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/bentley-mulsanne.php">Bentley Mulsanne</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/senzati-jet-class.php">Senzati Jet Class</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/cars/minibuses-coaches.php">Minibuses & Coaches</a></li>                            
                        </ul>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/one-way.php">One Way</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/by-the-hour.php">By The Hour</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/airport.php">Airport</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/business.php">Business</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/events.php">Events</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/tour.php">Tours</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/wedding.php">Weddings</a></li>
                        </ul>
                    </li>

                    <!-- Chauffeurs Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="chauffeursDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Chauffeurs</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="chauffeurs.php">Chauffeur</a></li>
                            <li><a class="dropdown-item" href="partner.php">Partner with us</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Training</a></li> -->
                        </ul>
                    </li>

                    <!-- Our Company Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Our Company</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/contact.php">Contact Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/safety.php">Safety</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/sustainability.php">Sustainability</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/blog.php">Blog</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/faq.php">FAQ</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/chauffeur-reviews.php">Testimonials</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/press-media.php">Press & Media</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
