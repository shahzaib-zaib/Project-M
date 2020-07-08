<?php

    define( 'ROOT', dirname(__FILE__) );

    $page_name = isset( $_GET['page'] ) ? $_GET['page'] : 'home';
    $page = ROOT . '/pages/' . $page_name . '.php';

    if( $page_name == 'home-2' ) {
        $header = 'header-2.php';
        $footer = 'footer-2.php';
    } elseif ( $page_name == 'home' ) {
        $header = 'header.php';
        $footer = 'footer.php';
    } else {
        $header = ( isset($_GET['header'] ) && $_GET['header'] == 'dark' ) ? 'header-2.php' : 'header.php' ;
        $footer = ( isset( $_GET['footer'] ) && $_GET['footer'] == '1' ) ? 'footer.php' : 'footer-2.php' ;
    }

    $header = ROOT . '/parts/general/' . $header;
    $footer = ROOT . '/parts/general/' . $footer;

    $pages = array(
        'about'             => 'About Us',
        'adultservices'     => 'Adult Services',
        'blog'              => 'Blog',
        'child-refuses'     => 'Child Refuses',
        'children'          => 'Children',
        'childservices'     => 'child Services',
        'consultation'      => 'consultation',
        'contact'           => 'Contact',
        'family-and-friend' => 'Family and Friend',
        'familyservices'    => 'Family Services',
        'faqs'              => 'FAQs',
        'home'              => 'Home',
        'medicolegal'       => 'Medico Legal',
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dr. Maheen Rizvi</title>
    <link rel="icon" type="image/png" href="images/site-logo.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/rosaleda-multipage.css">
    <link rel="stylesheet" type="text/css" href="css/rosaleda-onepage.css">
</head>
<body>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fullpage.min.js"></script>
    <script src="js/scrolloverflow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/accordions.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>