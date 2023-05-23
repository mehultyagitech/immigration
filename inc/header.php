<!doctype html>
<html lang="zxx">
   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/showMoreItems-theme.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <?php
// Set the page title for each page
$titles = [
    'index.php' => 'Home',
    'services.php' => 'Services',
    'about.php' => 'About Us',
    'contact.php' => 'Contact Us'
];

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);

// Set the default title
$title = 'My Website';

// Check if the current page exists in the titles array
if (isset($titles[$current_page])) {
    $title = $titles[$current_page];
}
?>

        <title><?php echo $title; ?> | HI IMMIGRATION CONSULTANCY</title>

        <link rel="icon" type="image/png" href="assets/img/as.png">
    </head>
    <body>

        <!-- Start Header Area -->
        <div class="header-area">

            <!-- Start Top Header Area -->
            <div class="top-header-area">
                <div class="container-fluid">
                    <div class="top-header-inner">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <div class="top-header-left-side">
                                    <div class="d-flex align-items-center">
                                        <ul class="top-header-social-links d-flex align-items-center">
                                            <li>Follow us:</li>
                                            <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-8 col-md-12">
                                <ul class="top-header-contact-info">
                                    <li><i class="ri-time-line"></i><span>SUN - THU:</span> 8:00 AM - 9:00 PM</li>
                                    <li><i class="ri-map-pin-2-line"></i><span>OFFICE:</span> 1847 Morris Street, Texas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header Area -->

            <!-- Start Navbar Area -->
            <div class="navbar-area navbar-style-two">
                <div class="enry-responsive-nav">
                    <div class="container">
                        <div class="enry-responsive-menu">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo.png" alt="logo" id="header-logo" ></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="enry-nav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo" id="header-logo" ></a>

                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                                    <li class="nav-item"><a href="services.php" class="nav-link">Services </a></li>
                                    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                                </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
            
        </div>
        <!-- End Header Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Enter your keywords...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->