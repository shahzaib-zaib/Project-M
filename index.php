<?php

    define( 'ROOT', dirname(__FILE__) );

    $page_name = isset( $_GET['page'] ) ? $_GET['page'] : 'home';
    $page = ROOT . '/pages/' . $page_name . '.php';

    if( $page_name == 'home' ) {
        $header = 'header.php';
        $footer = 'footer.php';
    } else {
        $header = ( isset($_GET['header'] ) && $_GET['header'] == 'dark' ) ? 'header-2.php' : 'header.php' ;
        $footer = ( isset( $_GET['footer'] ) && $_GET['footer'] == '1' ) ? 'footer-2.php' : 'footer.php' ;
    }

    $header = ROOT . '/parts/' . $header;
    $footer = ROOT . '/parts/' . $footer;

    $pages = array(
        'about'             => 'About Us',
        'adult-services'    => 'Adult Services',
        'blog'              => 'Blog',
        'child-refuses'     => 'Child Refuses',
        'child-services'    => 'child Services',
        'consultation'      => 'consultation',
        'contact'           => 'Contact',
        'corporate-services'=> 'Corporate Services',
        'family-and-friend' => 'Family and Friend',
        'family-services'   => 'Family Services',
        'faqs'              => 'FAQs',
        'home'              => 'Home',
        'medico-legal'      => 'Medico Legal',
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $pages[$page_name];?> | Dr. Maheen Rizvi</title>
    <link rel="icon" type="image/png" href="assets/images/site-logo.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullpage.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-multipage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-onepage.css">
</head>
<body>
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="wrapper">
        
        <?php if($page_name == 'home'): ?>
            
        <?php endif; ?>

        <?php
            if (isset ($_GET['parts'] ) ) {
                require ROOT . '/parts/' . $_GET['parts'] ;
            } else {
                require $header;
                require $page;
                require $footer;
            }
        ?>
        
    </div><!-- /.wrapper -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fullpage.min.js"></script>
    <script src="assets/js/scrolloverflow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>