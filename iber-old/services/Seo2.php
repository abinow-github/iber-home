<?php
// Ensure BASE_URL is defined only once
if (!defined('BASE_URL')) {
    define('BASE_URL', 'https://iberrtech.com/');
}
?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>SEO - Digital Marketing Agency</title>
    <meta property="og:site_name" content="iberr">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="iberrtech - SEO - Digital Marketing Agency">
    <!-- <meta name='og:image' content='images/../new_assets/ogg.png'> -->
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="../assetsnew/img/logo/favicon/favicon.ico" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../new_assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../new_assets/fonts/bootstrap-icons.css" />
    <link rel="stylesheet" href="../new_assets/css/animate.min.css" />
    <link rel="stylesheet" href="../new_assets/css/slick.css" />
    <link rel="stylesheet" href="../new_assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="../new_assets/css/aos.css" />
    <link rel="stylesheet" href="../new_assets/css/spacing.css" />
    <link rel="stylesheet" href="../new_assets/css/new_main.css" />



    <!-- fontawsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- old page start -->
    <!-- google images slick css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- google images slick css end -->



    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="../assetsnew/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/aos.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/mobile.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/sidebar.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="../assetsnew/css/plugins/nice-select.css">
    <link rel="stylesheet" href="../assetsnew/css/main.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="../assetsnew/js/plugins/jquery-3-6-0.min.js"></script>


    <!-- old page end -->

</head>

<style>
    body {
        font-family: "Russo One", sans-serif !important;
        overflow-x: hidden !important;

    }

    /* General Transition for Animations */
    .zoom {
        transition: transform 2s ease-out, opacity 2s ease-out;
        /* Duration: 2s for smoother animation */
        opacity: 0;
        transform-style: preserve-3d;
    }

    /* Zoom In Animations */
    .zoom-in {
        transform: scale(0);
    }

    .zoom-in-up {
        transform: scale(0) translateY(200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-in-down {
        transform: scale(0) translateY(-200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-in-left {
        transform: scale(0) translateX(200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-in-right {
        transform: scale(0) translateX(-200px);
        /* Adjusted translation for smoother effect */
    }

    /* Zoom Out Animations */
    .zoom-out {
        transform: scale(1.5);
    }

    .zoom-out-up {
        transform: scale(1.5) translateY(200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-out-down {
        transform: scale(1.5) translateY(-200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-out-left {
        transform: scale(1.5) translateX(200px);
        /* Adjusted translation for smoother effect */
    }

    .zoom-out-right {
        transform: scale(1.5) translateX(-200px);
        /* Adjusted translation for smoother effect */
    }

    /* Flip Animations */
    .flip-up {
        transform: rotateX(90deg);
    }

    .flip-down {
        transform: rotateX(-90deg);
    }

    .flip-left {
        transform: rotateY(90deg);
    }

    .flip-right {
        transform: rotateY(-90deg);
    }

    /* When Element is Visible (Reset to Normal) */
    .zoom.visible {
        opacity: 1;
        transform: scale(1) translateX(0) translateY(0) rotateX(0) rotateY(0);
    }
</style>

<body>
    <div class="main-page-wrapper">
        <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

        <!-- Add your site or application content here -->


        <!-- preloader start -->
        <!-- <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="icon"><img src="../new_assets/img/favicon.png" alt="" class="m-auto d-block">
                </div>
            </div>
        </div> -->
        <!-- preloader end  -->



        <!-- header-area start -->
        <header class="theme-main-menu theme-menu-one">

            <div class="main-header-area pt-25 pb-15">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-auto col-6">
                            <div class="logo-area">
                                <a href="<?php echo BASE_URL; ?>index.php"><img
                                        src="../assetsnew/img/seoimages/iberrlogo.png" alt="Header-logo"></a>
                            </div>
                        </div>
                        <div class="col-md-auto d-flex align-items-center justify-content-end d-lg-inline-block d-none">
                            <div class="main-menu d-none d-lg-block">
                                <nav id="mobile-menu">
                                    <ul class="menu-list">
                                        <li>
                                            <a href="<?php echo BASE_URL; ?>index.php">
                                                Home
                                            </a>

                                        </li>
                                        <li>
                                            <a href="<?php echo BASE_URL; ?>about.php">About</a>

                                        </li>
                                        <li>
                                            <a href="404-3">
                                                Services
                                            </a>
                                            <ul class="sub-menu mega-menu">
                                                <li>
                                                    <a href="<?php echo BASE_URL; ?>Services/Branding.php">Branding</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?php echo BASE_URL; ?>Services/Digital-Marketing-Malappuram-calicut.php">Digital
                                                        Marketing</a>

                                                </li>

                                                <li>
                                                    <a href="<?php echo BASE_URL; ?>Services/seo.php">Search Engine
                                                        Optimization</a>

                                                </li>
                                                <li><a href="<?php echo BASE_URL; ?>Services/graphic.php">Graphic
                                                        Designs</a></li>
                                                <li><a
                                                        href="<?php echo BASE_URL; ?>Services/web-design-malappuram-calicut.php">Web
                                                        Design & Development</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>Services/mobile.php">Mobile App
                                                        Development</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>Services/erp.php">ERP</a></li>
                                                <li><a href="<?php echo BASE_URL; ?>Services/Hoarding.php">Hoarding &
                                                        LED Display Boards</a></li>


                                            </ul>
                                        </li>


                                        <li><a href="<?php echo BASE_URL; ?>clients.php">Clients</a>
                                        <li><a href="<?php echo BASE_URL; ?>blogs.php">Blogs</a>
                                        <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-auto col-6">
                            <div class="right-nav d-flex align-items-center justify-content-end">


                                <div class="hamburger-menu ms-0">
                                    <div class="bar-wrap">
                                        <div class="bar-1"></div>
                                        <div class="bar-2"></div>
                                        <div class="bar-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.theme-main-menu -->
        </header>
        <!-- header-area end -->

        <!-- slide-bar start -->
        <div class="ht-menu-wrapper">
            <div class="ht-menu-area">
                <button class="ht-menu-toggle"><i class="bi bi-x-lg"></i></button>
                <div class="mobile-logo">
                    <a href='/'>
                        <img src="../assetsnew/img/seoimages/iberrlogo.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu-wrapper d-lg-none d-inline-block">
                    <div class="mobile-menu"></div>
                </div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20 ">FIND THE BEST SEO COMPANY IN CALICUT</h4>
                        <p class="mb-30">
                            We are the top SEO service provider in Calicut,Kerala. Through a methodical research
                            process, we have enhanced the businesses and raised the revenue of hundreds of enterprises.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- side-bar end -->


        <main>
            <!-- theme-banner-one start -->
            <section class="theme-banner-one px-lg-5">
                <!-- <div class="user-wrapper d-none d-xxl-inline-block">
                    <img class="bg-shape-vector" src="../new_assets/img/shape/shape-17.png" alt="">
                    <div class="inner-wrapper d-xl-inline-flex align-items-center">
                        <ul class="user-list">
                            <li><img src="../new_assets/img/hero/user-1.jpg" alt="author"></li>
                            <li><img src="../new_assets/img/hero/user-2.jpg" alt="author"></li>
                            <li><img src="../new_assets/img/hero/user-3.jpg" alt="author"></li>
                            <li class="add-user"><i class="bi bi-plus"></i></li>
                        </ul>
                        <div class="user-content">
                            <h3 class="number"><span class="counter">13</span>mil+</h3>
                            <p>Customers</p>
                        </div>
                    </div>
                </div> -->
                <div class="ht-hero-slider-ones">
                    <div class="ht-slider-item">
                        <div class="ht-slider-wrapper" data-background="../new_assets/img/hero/seo-analyst.png">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h1 class="main-title">
                                            Search Engine Optimization
                                            <img class="shapes-1 d-none d-lg-inline-block"
                                                src="../new_assets/img/shape/shape-1.png" alt="Shape">
                                        </h1>
                                        <p>Effective SEO strategies not only elevate a website's visibility but also
                                            drive
                                            targeted traffic, enhance user experience.</p>
                                        <div class="d-flex align-items-center ">
                                            <a class='ht-btn' href='/contact'>Discover More <span><i
                                                        class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- .container -->
                        </div>
                    </div>
                    <!-- item -->
                </div>
                <!-- <div class="abin-upect d-none d-xxl-inline-block">
                    <img class="bg-shape-vector2" src="../new_assets/img/shape/shape-18.png" alt="shape">
                    <div class="video-content d-flex align-items-center">
                        <div class="video-boxes">
                            <a href="https://www.youtube.com/watch?v=6stlCkUDG_s&amp;list=PL4Gr5tOAPttLOY9IrWVjJlv4CtkYI5cI_"
                                class="popup-video"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <div class="contents">
                            <h4 class="h-title-1">Check Lebus clip</h4>
                            <h6 class="h-title-2">Watch it Now.</h6>
                        </div>
                    </div> -->
    </div>
    </section>
    <!-- theme-banner-one end -->

    <!-- text-wrapper-section start -->
    <section class="text-wrapper-section pt-150 pb-90 pt-lg-60 pb-lg-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-wrapper-one position-relative mb-30">
                        <img class="main-img img-fluid " src="../new_assets/img/media/seospecialist.png" alt="About"
                            style="border-radius:20px">
                        <!-- <img class="thumb" src="../new_assets/img/media/best seo.png" alt="About"> -->
                        <div class="counter-wrap-2 position-absolute d-md-inline-flex d-none">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>
                            <div class="content">
                                <p class="counter-title">Trusted By</p>
                                <h3 class="number"><span class="counter">1000</span>+</h3>

                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 mb-75" style="margin-top:85px !important;">
                        <div class="col d-flex justify-content-xl-start justify-content-center">
                            <div class="progressbar-content">
                                <div class="chart" data-percent="80"><span>240+</span></div>
                                <h3 class="progress-title">Buissiness People</h3>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-xl-end justify-content-center">
                            <div class="progressbar-content">
                                <div class="chart" data-percent="100"><span>100%</span></div>
                                <h3 class="progress-title">Customer Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="text-wrapper-one mb-30">
                        <div class="title-one mb-45">
                            <h5 class="sub-title">SEO marketing</h5>
                            <h2 class="title">FIND THE BEST SEO COMPANY IN CALICUT</h2>
                            <p class="mb-30">The process of improving a website's technical organisation,
                                content applicability, and link popularity is known as search engine
                                optimisation" (SEO). If you're weary of your underperforming website, try making
                                its pages easier to access, more applicable, and more popular for user search
                                queries. As a result, search engines will rank them higher and help you grow
                                your business. For many businesses, SEO is by far the most important component
                                of their online presence. We are the top SEO service provider in Calicut,Kerala.
                                Through a methodical research process, we have enhanced the businesses and
                                raised the revenue of hundreds of enterprises.</p>
                        </div>


                        <a class='ht-btn w-100' href="<?php echo BASE_URL; ?>about.php">More About Us <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text-wrapper-section end -->






    <!-- google image -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 service-head">
                    <!-- <h2>Our Services</h2> -->
                    <div class="slid_head">
                        <h1 class="slid_h1">Our Clients </h1>

                        <h1 style="
                  color: #c85040; font-weight:700;"> <span
                                style="color: #f7bb12;font-family: Arial, Helvetica, sans-serif;">Success</span>
                            Stories</h1>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="slider googleimage" style="overflow: hidden;">
                        <!-- Added class "slider" for Slick -->
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/best digital marketting company in kozhikode.jpg"
                                alt="Service 1">
                        </div>
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/best seo management company in calicut.jpg"
                                alt="Service 2">
                        </div>
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/best seo management company in kozhikode.jpg"
                                alt="Service 3">
                        </div>
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/seo management company calicut.jpg" alt="Service 3">
                        </div>
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/seo management company in calicut.jpg" alt="Service 3">
                        </div>
                        <div class="slide">
                            <img src="../assetsnew/img/seoimages/seo management company kozhikode.jpg" alt="Service 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- google images end -->



    <!-- ht-service-section start -->
    <section class="light-grey-bg ht-service-section border-rad pt-120 pb-130 pt-lg-60 pb-lg-60 mx-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-one text-center mb-55 px-xl-5 mx-xl-5">
                        <h2 class="title">WHAT IS INCLUDED IN SEO?</h2>
                        <!-- <p>The laboratory offers dependable and accurate services, ensuring reliable results
                                    quality in all its analyses and tests.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-left  " style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/audit.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>The analyzing of factors affect websites visibility in search engine. Process of
                            reviewing the page performance. And we sure that your site performing the best.</p>
                        <h4 class="service-title mb-10">WEBSITE AUDIT
                        </h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-up" style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/keyword.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>Research what people want to know, finding and analyzing search terms and provide
                            valuable information about the queries.</p>
                        <h4 class="service-title mb-10"><a href='/services-details'>KEYWORD RESEARCH</a>
                        </h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-right" style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/searching.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>We will generate URL structure SEO guidelines for your brand or business. URLs can be
                            a quality tool for achieving your success in SEO.</p>
                        <h4 class="service-title mb-10">KEYWORD & URL
                            OPTIMIZATION
                        </h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-left" style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/content-creation.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>content creation offers credibility and trust in SEO. We provide valuable content for
                            the user, to see the best results into your digital marketing strategy.</p>
                        <h4 class="service-title mb-10">SEO CONTENT CREATION
                        </h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-up" style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/ooooooooooooooooooooooooooooooooooo.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>Plan your best website structure. Make sure your site is accessible at one domain and
                            indexable. Also confirm your site is mobile and user friendly.</p>
                        <h4 class="service-title mb-10">TECHNICAL <br> SEO
                        </h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-wrap-1 zoom flip-right" style="transition-duration: .5s;">
                        <div class="icon">
                            <img src="../new_assets/img/media/link.png" alt="icon" style="height: 75px; 
filter: invert(22%) sepia(20%) saturate(2981%) hue-rotate(176deg) brightness(98%) contrast(95%);">
                        </div>
                        <p>It is best method replicate your competitor’s links, publish guest posts, introduce
                            more people about your content. We know the best methods be done for link building.
                        </p>
                        <h4 class="service-title mb-10">LINK <br> BUIDING
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-35">
                    <a class='ht-btn ' href="<?php echo BASE_URL; ?>about.php">See All Services <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ht-service-section end -->



    <!--===== CASE AREA STARTS =======-->
    <!-- <div class="case1-section-area sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 m-auto">
                            <div class="case-header-area heading2 text-center">
                                <h5>SEO</h5>
                                <h2 class="text-anime-style-3">WHAT TO EXPECT FROM SEO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cs_case_study_1_list">
                                <div class="cs_case_study cs_style_1 cs_hover_active active">
                                    <a href="" class="cs_case_study_thumb cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img1.png"></a>
                                    <div class="content-area1">
                                        <a href="">Generate Quality Leads</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Generate Quality Leads </f=>
                                        <p>Improving conversion with high quality lead increase revenue and sales.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img2.png"></a>
                                    <div class="content-area1">
                                        <a href="">Make Your Brand Visibility High</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Make Your Brand Visibility High</f=>
                                        <p>Raising more awareness about brand and product services. you can generate
                                            standout brand definition.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img3.png"></a>
                                    <div class="content-area1">
                                        <a href="">Largest Source Of Site Traffic</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Largest Source Of Site Traffic</f=>
                                        <p>We understand the critical role that a well-designed and user-friendly
                                            website plays in shaping your online presence driving.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img4.png"></a>
                                    <div class="content-area1">
                                        <a href="">24/7 customer promotion</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">24/7 customer promotion</f=>
                                        <p>It will provide customer’s requirement every time and provide the right key
                                            of visibility. your business can continue even in your absences.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img5.png"></a>
                                    <div class="content-area1">
                                        <a href="">Long Term Strategy</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Long Term Strategy</f=>
                                        <p>Available between six to 12 months from the date of implementation. Return on
                                            investment is considerable and cheaper than other marketing methods.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img6.png"></a>
                                    <div class="content-area1">
                                        <a href="">Builds Brand Credibility And Trust</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Builds Brand Credibility And Trust</f=>
                                        <p>It is very user friendly and genuine source of conversion and
                                            long-term-traffic. provide the better results for your business.</p>
                                    </div>
                                </div>
                                <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;">
                                    <a href="" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed"
                                        data-src="../assetsnew/img/all-images/case-img7.png"></a>
                                    <div class="content-area1">
                                        <a href="">Analytics & Reporting</a>
                                    </div>
                                    <div class="content-area">
                                        h5f="">Analytics & Reporting</f=>
                                        <p>We understand the critical role that a well-designed and user-friendly
                                            website plays in shaping your online presence driving.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!--===== CASE AREA ENDS =======-->

    



    <section class="homeAbout">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 homeAboutLeft ps-xl-5 pe-xl-5">
                    <div class="homeAboutImageWrapper">
                        <div class="itemWrapper  zoom zoom-out-up" style="transition-duration: 1s;">
                            <div class="item">

                                <picture>
                                    <img src="../new_assets/img/media/seopecialist.png" alt="About image 3"
                                        class="img-fluid imgLayer" height="1200" width="800" loading="lazy">
                                </picture>

                                <div class="overlay"><img loading='lazy' class="overlayImage h-auto"
                                        src="../assetsnew/img/logo/favicon/favicon.ico" width="198" height="229"
                                        alt="Overlay"></div>
                            </div>
                            <div class="item">
                                <picture>
                                    <img src="../new_assets/img/media/seo specs.png" alt="About image 1 "
                                        class="img-fluid imgLayer" height="1200" width="800" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="itemWrapper  zoom zoom-out-up" style="transition-duration: 1s;">
                            <div class="item">
                                <picture>
                                    <img src="../new_assets/img/media/seospeciialistt.png" alt="About image 2 "
                                        class="img-fluid imgLayer" height="1200" width="800" loading="lazy">
                                </picture>
                            </div>
                            <div class="item">
                                <div id="particles-js"></div>
                                <div class="wrapper">
                                    <div class="h4">Trusted By</div>
                                    <h2><span class="counter">1001</span>+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 homeAboutRight ps-xxl-5  zoom zoom-out-up" style="transition-duration: 1s;">
                    <div class="w-100">
                        <div class="h6 subHeading">Why Choose Us</div>
                        <h2 class="mainHeading">Comprehensive SEO services</h2>
                        <!-- <p class="mainDescription h5" <h5 class="mainDescription" style="text-align: left;">A dynamic team of passionate and driven individuals committed to ensuring equal accessibility for all in the digital world. Trust us with all your digital marketing needs and you will not be disappointed.</h5>
                        </p> -->
                        <div class="highlightSlider">
                            <div class="item">
                                <div class="highlightCard" style="display:flex; flex-direction:column;">
                                    <h3 class="title"
                                        style=" margin-bottom: 28px !important; font-weight:700; font-size:30px; color: #134575;">
                                        Enhance site usability</h3>
                                    <p class="description">Evaluate user performance and search results to identify
                                        areas
                                        for improvement. <br><br></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="highlightCard" style="display:flex; flex-direction:column;">
                                    <h3 class="title"
                                        style=" margin-bottom: 28px !important; font-weight:700; font-size:30px; color: #134575;">
                                        Conduct comprehensive audits</h3>
                                    <p class="description">Optimize site structure and create user-friendly pages for
                                        improved navigation. </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="highlightCard" style="display:flex; flex-direction:column;">
                                    <h3 class="title"
                                        style=" margin-bottom: 28px !important; font-weight:700; font-size:30px; color: #134575;">
                                        Strategic analysis for growth</h3>
                                    <p class="description">Perform detailed analysis to increase search traffic and
                                        drive
                                        sales. <br><br></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="highlightCard" style="display:flex; flex-direction:column;">
                                    <h3 class="title"
                                        style=" margin-bottom: 28px !important; font-weight:700; font-size:30px; color: #134575;">
                                        Transparent communication and pricing</h3>
                                    <p class="description">Maintain clear communication with clients and ensure no
                                        unexpected costs, prioritizing site security.</p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>

        $(document).ready(function () {
            $('.highlightSlider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });






    </script>



    <!-- in-depth section  -->

    <!-- Accordion Section -->
    <!-- <section class="container">  -->
    <div class="container in-depth-section lg_hide">
        <!-- Title and Description -->
        <div class="row text-center">
            <div class="col-12">
                <h3 class="in-depth-title">Please Check Our some clients Google Ranking</h3>

            </div>
        </div>

        <!-- Accordion Section -->
        <div class="row">
            <!-- Left Side Image -->
            <div class="col-md-3">
                <!-- <img src="../new_assets/img/media/best seo.png" alt="overseas-education-consultants"
                            class="in-depth-image"> -->
            </div>

            <!-- Right Side Accordion -->
            <div class="col-md-6 accordion-container">
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 10px 0; font-size: 22px;">Dr.Basil Homeo</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://drbasilhomeo.com/" target="_blank">https://drbasilhomeo.com/</a>
                        </p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Best Homeopathy Hospital</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best homeopathy hospital in India</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeo doctors near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathic doctor</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy hospital in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy clinic near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy clinic in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online homeopathy doctor</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy treatment in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeo doctors in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>No 1 homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Top homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 10px 0; font-size: 22px;">Ledgergate</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://ledgergate.in/" target="_blank">https://ledgergate.in/</a>
                        </p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CMA USA institutes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA coaching centers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA course in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA coaching centers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA USA coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA academy in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA coaching centers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA academy in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA course center in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 10px 0; font-size: 22px;">Safe Drops</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="http://safedrops.com/" target="_blank">http://safedrops.com/</a>
                        </p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Water purifier dealers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Industrial water purifier dealers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier services in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier services in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Commercial water purifier in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Commercial water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier supplier in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best water purifier supplier in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier dealers near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier distributors in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier dealers near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Industrial water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best RO water purifier in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 10px 0; font-size: 22px;">ICA Engineering Academy</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://icaengineeringacademy.com/"
                                target="_blank">https://icaengineeringacademy.com/</a></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RRB JE coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB AE coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB AE coaching center in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>AE civil coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB sub engineer coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>SSC junior engineer coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Sub-engineer coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Engineering entrance coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">GCC Walkins</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://gccwalkins.com/" target="_blank">https://gccwalkins.com/</a></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gulf job interview in Chennai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Trichy</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Kochi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf jobs interview in Hyderabad</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf walk-in interview in Mumbai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Delhi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Chennai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Trichy</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Kochi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf jobs interview in Hyderabad</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf walk-in interview in Mumbai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">EnglishPlus Academy</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://englishplusacademy.in/"
                                target="_blank">https://englishplusacademy.in/</a></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken English classes in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken English institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken English institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Online IELTS coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best IELTS online coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best IELTS coaching centre in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS coaching centre in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS online training in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>English speaking course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English course in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English classes Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English online classes Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Junior English course</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">ArabicPlus Academy</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://arabicplus.in/" target="_blank">https://arabicplus.in/</a></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Arabic classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic online course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">HindiPlus Academy</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://hindiplusacademy.com/"
                                target="_blank">https://hindiplusacademy.com/</a></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Hindi classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi online course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Hindi institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi online</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Hindi institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">vishnuayurvedacollege</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://vishnuayurvedacollege.in/"
                                target="_blank">https://vishnuayurvedacollege.in/</a></p>

                        <table>
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Arabic classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic online course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>

                </div>
                <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">
                    <div class="accordion-header">
                        <span style="padding: 15px 0; font-size: 22px; ">Zaitoon Campus</span>

                    </div>
                    <div class="accordion-content">
                        <p>Website: <a href="https://www.zaitooncampus.com/"
                                target="_blank">https://www.zaitooncampus.com/</a></p>
                        <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">


                            <table>
                                <thead>
                                    <tr>
                                        <th>Keywords</th>
                                        <th>Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Best residential school with NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best boarding school for JEE coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school with NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best girls' school for JEE coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school for boys in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best residential school for boys in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best boarding school for NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school for girls in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>



                </div>






                <!-- <div class="accordion-item">
        <div class="accordion-header">
          <span>Pre-departure Briefings</span>
          
        </div>
        <div class="accordion-content">
          <p>We equip you with the knowledge and resources needed to adjust smoothly to your new academic and cultural environment.</p>
        </div>
      </div> -->
            </div>

            <div class="col-md-3">

            </div>
        </div>
    </div>
    <!-- </section> -->

    <!-- Add this JavaScript for accordion functionality -->
    <script>
        // Accordion functionality with smooth transitions
        document.addEventListener("DOMContentLoaded", function () {
            const accordionItems = document.querySelectorAll(".accordion-item");

            accordionItems.forEach((item, index) => {
                const header = item.querySelector(".accordion-header");
                const content = item.querySelector(".accordion-content");

                // Open the first accordion item by default
                if (index === 0) {
                    content.style.maxHeight = content.scrollHeight + "px"; // Set max-height to its full height
                    header.classList.add("open");
                }

                header.addEventListener("click", () => {
                    const isOpen = content.style.maxHeight;

                    // Close all accordion items first
                    document.querySelectorAll(".accordion-content").forEach((c) => {
                        c.style.maxHeight = null;
                        c.previousElementSibling.classList.remove("open");
                    });

                    // Toggle current accordion
                    if (!isOpen) {
                        content.style.maxHeight = content.scrollHeight + "px"; // Open accordion
                        header.classList.add("open");
                    }
                });
            });
        });

    </script>





    <section class="s9  sm_hide">
        <div class="container">
            <h2>Please Check Our Some Clients Google Ranking</h2>

            <div class="tabs-container">
                <div class="tabs">
                    <div class="tab-links zoom zoom-in-right" style="transition-duration: 1s;">
                        <button class="tab-link1  show " data-tab="s9-tab-1">
                            <h5>1.</h5> <span> Dr.Basil Homeo</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-2">
                            <h5>2.</h5><span>Ledgergate</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-3">
                            <h5>3.</h5> <span>Safe Drops</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-4">
                            <h5>4.</h5> <span>ICA Engineering Academy</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-5">
                            <h5>5.</h5> <span>GCC Walkings</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-6">
                            <h5>6.</h5> <span>English plus</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-7">
                            <h5>7.</h5> <span>Arabic plus</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-8">
                            <h5>8.</h5> <span>Hindi plus</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-9">
                            <h5>9.</h5> <span>Vishnu Ayurveda</span>
                        </button>
                        <button class="tab-link1 " data-tab="s9-tab-10">
                            <h5>10.</h5> <span>Zaitoon</span>
                        </button>


                    </div>
                    <div class="tab-content1 show " id="s9-tab-1">
                        <p>Website: <a href="https://drbasilhomeo.com/" target="_blank">https://drbasilhomeo.com/</a>
                        </p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Best Homeopathy Hospital</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best homeopathy hospital in India</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeo doctors near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathic doctor</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy hospital in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy clinic near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy clinic in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online homeopathy doctor</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeopathy treatment in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Homeo doctors in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>No 1 homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Top homeopathy doctor in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-2">
                        <p>Website: <a href="https://ledgergate.in/" target="_blank">https://ledgergate.in/</a>
                        </p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CMA USA institutes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA coaching centers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA course in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA USA coaching centers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA USA coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA academy in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>CMA coaching centers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA academy in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best CMA course center in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-3">
                        <p>Website: <a href="http://safedrops.com/" target="_blank">http://safedrops.com/</a>
                        </p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Water purifier dealers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Industrial water purifier dealers in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier services in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier services in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Commercial water purifier in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Commercial water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier supplier in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best water purifier supplier in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier dealers near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Water purifier distributors in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>RO water purifier dealers near me</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Industrial water purifier dealers in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best RO water purifier in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-4">
                        <p>Website: <a href="https://icaengineeringacademy.com/"
                                target="_blank">https://icaengineeringacademy.com/</a></p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RRB JE coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB AE coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB AE coaching center in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>AE civil coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>KSEB sub engineer coaching</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>SSC junior engineer coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Sub-engineer coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Engineering entrance coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-content1 " id="s9-tab-5">
                        <p>Website: <a href="https://gccwalkins.com/" target="_blank">https://gccwalkins.com/</a></p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gulf job interview in Chennai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Trichy</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Kochi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf jobs interview in Hyderabad</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf walk-in interview in Mumbai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Delhi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Chennai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Trichy</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf interview in Kochi</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf jobs interview in Hyderabad</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf walk-in interview in Mumbai</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Gulf job interview in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-6">
                        <p>Website: <a href="https://englishplusacademy.in/"
                                target="_blank">https://englishplusacademy.in/</a></p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken English classes in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken English institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken English institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Online IELTS coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best IELTS online coaching in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best IELTS coaching centre in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS institute in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS coaching in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS coaching centre in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>IELTS online training in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best online spoken English classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>English speaking course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English course in Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English classes Calicut</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken English online classes Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Junior English course</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-7">
                        <p>Website: <a href="https://arabicplus.in/" target="_blank">https://arabicplus.in/</a></p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Arabic classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic online course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-content1 " id="s9-tab-8">
                        <p>Website: <a href="https://hindiplusacademy.com/"
                                target="_blank">https://hindiplusacademy.com/</a></p>
                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Hindi classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi online course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Hindi institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi online</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Hindi institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Hindi institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-content1 " id="s9-tab-9">
                        <p>Website: <a href="https://vishnuayurvedacollege.in/"
                                target="_blank">https://vishnuayurvedacollege.in/</a></p>

                        <table id="keywordsTable">
                            <thead>
                                <tr>
                                    <th>Keywords</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Spoken Arabic classes in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic online course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course in Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute Kerala</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic classes</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic course</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                                <tr>
                                    <td>Best spoken Arabic institute</td>
                                    <td>1st page</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-content1 " id="s9-tab-10">
                        <p>Website: <a href="https://www.zaitooncampus.com/"
                                target="_blank">https://www.zaitooncampus.com/</a></p>
                        <div class="accordion-item zoom zoom-in-right" style="transition-duration: 1s;">


                            <table>
                                <thead>
                                    <tr>
                                        <th>Keywords</th>
                                        <th>Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Best residential school with NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best boarding school for JEE coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school with NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best girls' school for JEE coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school for boys in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best residential school for boys in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best boarding school for NEET coaching in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                    <tr>
                                        <td>Best Islamic school for girls in Kerala</td>
                                        <td>1st page</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-link1"); // Changed to match tab button class
            const contents = document.querySelectorAll(".tab-content1"); // Changed to match tab content class

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    // Remove "show" class from all tabs and content
                    tabs.forEach((t) => t.classList.remove("show"));
                    contents.forEach((c) => c.classList.remove("show"));

                    // Add "show" class to the clicked tab and its corresponding content
                    tab.classList.add("show");
                    const targetId = tab.getAttribute("data-tab");
                    const target = document.getElementById(targetId);
                    target.classList.add("show");
                });
            });

            // Activate the first tab by default
            tabs[0].classList.add("show");
            contents[0].classList.add("show");
        });
    </script>













    <!-- what to expect section start  -->


    <section class="container my-5 seo-section">
        <div class="col-lg-12 m-auto ">
            <div class="case-header-area  text-center">
                <!-- <h5>SEO</h5> -->
                <h2 class="expect-title">WHAT TO EXPECT FROM SEO</h2>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- Left Side Features -->
            <div class="col-md-4">
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>Long Term Strategy</h5>
                        <p>Available between six to 12 months from the date of implementation. Return on
                            investment is considerable and cheaper than other marketing methods.</p>
                    </div>

                </div>
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>Make Your Brand Visibility High</h5>
                        <p>Raising more awareness about brand and product services. you can generate standout
                            brand definition.</p>
                    </div>
                </div>
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>Largest Source Of Site Traffic</h5>
                        <p>We understand the critical role that a well-designed and user-friendly website plays
                            in shaping your online presence driving.</p>
                    </div>
                </div>
            </div>

            <!-- Center Image -->
            <div class="col-md-4 text-center zoom zoom-in-up" style="transition-duration: 1.5s;">
                <img src="../new_assets/img/media/best seo.png" alt="Success Image" class="img-fluid rounded shadow">
            </div>

            <!-- Right Side Features -->
            <div class="col-md-4">
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>24/7 customer promotion</h5>
                        <p>It will provide customer’s requirement every time and provide the right key of
                            visibility. your business can continue even in your absences.</p>
                    </div>
                </div>
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>Generate Quality Leads </h5>
                        <p>Improving conversion with high quality lead increase revenue and sales.</p>
                        <br>
                    </div>
                </div>
                <div class="feature-box zoom zoom-in-up" style="transition-duration: 1.5s;">
                    <div class="content-area ">
                        <h5>Builds Brand Credibility And Trust</h5>
                        <p>It is very user friendly and genuine source of conversion and long-term-traffic.
                            provide the better results for your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end  -->





    <style>
        .service-head {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            transform: translateY(50px);
        }

        @media (max-width:768px) {
            .service-head {
                display: flex;
                justify-content: center;

                transform: translateY(0px) !important;
                margin-bottom: 10px;
            }
        }

        .googleimage img {
            /* height: 100px; */
            /* width: 100px; */
            padding: 10px;
            display: block;
            /* Ensures images are centered */
            /* margin: auto;  */
        }


        /* =================faq============================== */
        /* =================faq============================== */

        @media (max-width:765px) {
            .qa-section {

                /* h5 {
            font-size: 25px !important;
        } */
                h2 {
                    font-size: 2rem !important;
                }
            }
        }

        .qa-section {
            position: relative;


            h2 {
                font-weight: bold;
                font-size: 3rem;
                color: transparent;

                background: linear-gradient(180deg, rgb(23, 35, 80) 0%, #012093 100%);

                background-clip: text !important;
                text-align: center;
            }

            .qstn {
                font-weight: bold;
                font-size: 3rem;
                color: transparent;

                background: linear-gradient(180deg, #0486BF 0%, rgb(33, 69, 84) 100%);

                background-clip: text !important;
                text-align: center;
            }


            .accordion {
                border-radius: 15px;
                color: black;
                cursor: pointer;
                padding: 20px 15px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 14px;
                display: flex;
                justify-content: space-between;
                transition: all 0.3s ease;
            }

            .accordion p {
                margin-bottom: 0;
            }

            .accordion span {
                font-weight: bold;
                font-size: 1.5rem;
                color: transparent;
                background: linear-gradient(180deg, #0486BF 0%, rgb(2, 60, 86) 100%);
                background-clip: text !important;
                margin-right: 10px;
            }

            .accordion i {
                color: #0486BF;
                font-size: 22px;
                transition: transform 0.3s ease;
            }

            .panel {
                padding: 0px 18px;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.8s ease-out;
            }

            .panel p {
                padding-top: 10px;
                font-size: 14px;
            }

            /* Hide the section on small screens (max-width: 768px) */


            /* On mobile view */
            @media screen and (max-width: 600px) {
                .accordion {
                    width: 100%;
                }
            }
        }

        /* ==========================faq======================= */
    </style>

    <section class="qa-section">
        <div class="container">
            <h2>Frequently Asked <span class="qstn">Question</span></h2>
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-6 ">

                        <button class="accordion zoom zoom-in ">
                            <p><span>Q</span> What SEO services does Iberr Technologies offer in Calicut,
                                Kerala?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies provides a comprehensive range of SEO services in Calicut,
                                Kerala, including keyword research, on-page optimization, content creation, link
                                building, and performance tracking. Our goal is to enhance your online
                                visibility and drive targeted traffic to your website.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span> How can Iberr Technologies improve my website's search engine
                                rankings?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies employs proven SEO strategies tailored to your business needs.
                                We optimize your website's structure, content, and backlink profile, ensuring
                                search engines recognize its relevance, ultimately improving its ranking on
                                search engine results pages.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span> Why should I choose Iberr Technologies for my SEO needs?</p>
                        </button>
                        <div class="panel">
                            <p>
                                Iberr Technologies is a leading SEO agency in Calicut, Kerala, with a proven
                                track record of success. We offer cost-effective SEO services tailored to your
                                specific business goals and target audience. Our experienced team stays updated
                                on the latest SEO trends and algorithms to ensure your website achieves optimal
                                visibility.
                            </p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span> What makes Iberr Technologies unique in the SEO industry?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies stands out for its personalized approach to SEO. We conduct a
                                thorough analysis of your business, competitors, and industry to develop a
                                customized strategy. Our team is committed to staying updated with the latest
                                SEO trends to deliver optimal results for our clients.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span> How long does it take to see results from Iberr Technologies's SEO
                                services?</p>
                        </button>
                        <div class="panel">
                            <p>The timeline for SEO results varies based on factors like the competitiveness of
                                your industry and the current state of your website. Typically, clients start
                                noticing improvements within a few months, with more significant gains over time
                                as the strategies take full effect.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span>Does Iberr Technologies only focus on local SEO for businesses in
                                Calicut?</p>
                        </button>
                        <div class="panel">
                            <p>While Iberr Technologies is based in Calicut, our SEO services extend beyond
                                local optimization. We cater to businesses globally, implementing strategies
                                that target local, national, and international audiences based on your specific
                                objectives.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span>Q</span> How does Iberr Technologies approach keyword research for SEO?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies conducts thorough keyword research, identifying the most
                                relevant and high-performing keywords for your business. We consider search
                                volume, competition, and user intent to optimize your content effectively.</p>
                        </div>
                        <br>
                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> What tools and technologies does Iberr Technologies
                                use for SEO analysis?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies utilizes a variety of industry-leading SEO tools and
                                technologies to conduct in-depth analysis. This includes tools for keyword
                                research, competitor analysis, website audits, and performance tracking to
                                ensure our strategies are data-driven and effective.</p>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">



                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> Can Iberr Technologies help with website redesign
                                for better SEO performance?</p>
                        </button>
                        <div class="panel">
                            <p>Absolutely. Iberr Technologies not only offers SEO services but can also assist
                                in website redesign to ensure it is SEO-friendly. We optimize website structure,
                                navigation, and content to enhance user experience and search engine
                                recognition.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> What is the importance of backlinks in Iberr
                                Technologies's SEO strategy?</p>
                        </button>
                        <div class="panel">
                            <p>Backlinks are a crucial element in Iberr Technologies' SEO approach. We focus on
                                building high-quality, relevant backlinks to improve your website's authority
                                and credibility in the eyes of search engines, contributing to higher rankings.
                            </p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> Can Iberr Technologies help with local businesses
                                looking to target specific neighborhoods in Calicut?</p>
                        </button>
                        <div class="panel">
                            <p>Yes, Iberr Technologies specializes in local SEO, helping businesses target
                                specific neighborhoods in Calicut and beyond. Our strategies include local
                                keyword optimization, Google My Business optimization, and local link building
                                to enhance local visibility.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> Does Iberr Technologies provide regular reports on
                                SEO performance?</p>
                        </button>
                        <div class="panel">
                            <p>Yes, Iberr Technologies believes in transparency. We provide regular, detailed
                                reports on SEO performance, including key metrics, keyword rankings, and the
                                impact of our strategies. This allows you to track progress and understand the
                                value of our services.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span>Is Iberr Technologies compliant with current SEO best
                                practices and guidelines?</p>
                        </button>
                        <div class="panel">
                            <p>Absolutely. Iberr Technologies strictly adheres to SEO best practices and
                                industry guidelines. Our team follows ethical and sustainable strategies,
                                ensuring that your website's optimization is in line with search engine
                                requirements.</p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span>How does Iberr Technologies integrate social media
                                into its SEO strategy?</p>
                        </button>
                        <div class="panel">
                            <p>Social media is integrated into Iberr Technologies' SEO strategy through content
                                promotion, engagement, and building social signals. This synergy enhances your
                                website's online presence and contributes to improved search engine rankings.
                            </p>
                        </div>
                        <br>

                        <button class="accordion zoom zoom-in">
                            <p><span class="faq-Q">Q</span> How does Iberr Technologies stay updated with
                                changes in search engine algorithms?</p>
                        </button>
                        <div class="panel">
                            <p>Iberr Technologies is committed to staying abreast of search engine algorithm
                                updates and industry trends. Our team continually updates strategies to align
                                with algorithm changes, ensuring that your website remains optimized and
                                competitive in the evolving landscape of search engine optimization.</p>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // For the accordion functionality
            const accordions = document.querySelectorAll('.accordion');

            accordions.forEach(acc => {
                acc.addEventListener('click', function () {
                    const panel = this.nextElementSibling;
                    const icon = this.querySelector('i');

                    // Toggle the panel (answer) visibility
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + 'px';
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });

            // For View More button functionality
            document.querySelector('.view-more-btn').addEventListener('click', function () {
                const hiddenQuestions = document.querySelector('.hidden_questions');
                hiddenQuestions.style.display = hiddenQuestions.style.display === 'none' ? 'block' : 'none';
                this.innerHTML = hiddenQuestions.style.display === 'none'
                    ? '<i class="fa-solid fa-arrow-down"></i>'
                    : '<i class="fa-solid fa-arrow-up"></i>';
            });
        });

    </script>







    <!-- ht-cta start -->
    <div class="ht-cta theme-bg position-relative pt-80 pb-80 mx-xl-5">
        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="title-one pb-4">
                        <h2 class="title text-white" style="color:white !important;">Subscribe to Regular Newsletters.
                        </h2>
                    </div>
                    <div class="subscribe-form mt-2">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <img class="shape-1" src="../new_assets/img/shape/shape-14.png" alt="shape">
        <img class="shape-2" src="../new_assets/img/shape/shape-15.png" alt="shape">
    </div>
    <!-- ht-cta end -->


    </main>






    <!--===== FOOTER AREA STARTS =======-->
    <div class="footer1-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-logo-area">
                        <img src="../assetsnew/img/seoimages/iberrlogo.png" alt="Header-logo">
                        <p>By optimizing content, leveraging relevant keywords, and adhering to best practices,
                            businesses can secure prominent position (SEO)</p>
                       <ul>
                            <li>
                                <a href="https://www.facebook.com/iberrtenewch/" target="_blank">
                                    <img src="<?php echo BASE_URL; ?>../assetsnew/img/icons/facebook.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/iberrtechnologies/" target="_blank">
                                    <img src="<?php echo BASE_URL; ?>../assetsnew/img/icons/instagram.svg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/iberr-technologies-llp-101b77222/recent-activity/all/" target="_blank">
                                    <img src="<?php echo BASE_URL; ?>../assetsnew/img/icons/linkedin.svg" alt="LinkedIn">
                                </a>
                            </li>
                            <!-- Uncomment if needed -->
                            <!-- <li><a href="#"><img src="<?php echo BASE_URL; ?>assetsnew/img/icons/youtube.svg" alt="YouTube"></a></li> -->
                        </ul>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-logo-area1">
                        <h3>About Link</h3>
                        <ul>
                            <li><a href="<?php echo BASE_URL; ?>blogs.php">Our Blog</a></li>
                            <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>
                            <li><a href="<?php echo BASE_URL; ?>Services/seo.php">Services</a></li>
                            <li><a
                                    href="<?php echo BASE_URL; ?>Services/Digital-Marketing-Malappuram-calicut.php">Marketing</a>
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>Services/web-design-malappuram-calicut.php">web
                                    Development</a></li>
                            <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo-area2">



                        <h3>Get in touch</h3>
                        <ul>
                            <li><a href="404-4"><img src="<?php echo BASE_URL; ?>../assetsnew/img/icons/email.svg"
                                        alt=""><span>iberrtech@gmail.com</span></a></li>
                            <li><a href="#"><img src="<?php echo BASE_URL; ?>../assetsnew/img/icons/location.svg"
                                        alt=""><span><b>Kozhikode</b> <br class="d-lg-block d-none">Payyadimeetal,
                                        <br class="d-lg-block d-none">Pottammal-Palazhi Rd,<br
                                            class="d-lg-block d-none">Punathil Bazar, <br
                                            class="d-lg-block d-none">Kozhikode, <br class="d-lg-block d-none">Kerala
                                        673019</span></a></li>
                            <li><a href="#"><img src="<?php echo BASE_URL; ?>assetsnew/img/icons/location.svg"
                                        alt=""><span><b>Malappuram</b> <br class="d-lg-block d-none"> NK Complex 1st
                                        Floor , <br class="d-lg-block d-none"> Palakkad Road,
                                        <br class="d-lg-block d-none">White Super Market, <br class="d-lg-block d-none">
                                        Perinthalmanna 679322</span></a></li>

                            <li><a href="tel:917907385121"><img src="<?php echo BASE_URL; ?>assetsnew/img/icons/phone.svg"
                                        alt=""><span>7907385121</span></a></li>
                            <li><a href="tel:919526536504"><img src="<?php echo BASE_URL; ?>assetsnew/img/icons/phone.svg"
                                        alt=""><span>9526536504</span></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-logo-area3">
                        <h3>Subscribe Our Newsletter</h3>
                        <form action="#">
                            <input type="text" placeholder="Enter Your email">
                            <button class="header-btn1"> Subscribe <span><i
                                        class="fa-solid fa-arrow-right"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="space80 d-lg-block d-none"></div>
            <div class="space40 d-lg-none d-block"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area">
                        <div class="pera">
                            <p>ⓒCopyright 2024 SEOC . All rights reserved</p>
                        </div>
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#" class="m-0"> Privacy Policy </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== FOOTER AREA ENDS =======-->


    <!--scrollToTopBtn end-->
    <a id="scrollToTopBtn" class="progress-wrap">
        <i class="bi bi-arrow-up"></i>
    </a>


   
    <!--main-page-wrapper end-->

    <script>
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true,
                dots: true, // Show dot indicators
                infinite: true, // Infinite looping
                speed: 500, // Transition speed
                slidesToShow: 3, // Number of slides to show
                slidesToScroll: 1, // Number of slides to scroll
                responsive: [
                    {
                        breakpoint: 768, // For tablets
                        settings: {
                            slidesToShow: 1 // Show 2 slides on medium screens
                        }
                    },
                    {
                        breakpoint: 480, // For mobile phones
                        settings: {
                            slidesToShow: 1 // Show 1 slide on small screens
                        }
                    }
                ]
            });
        });
    </script>

    <script>
        // Create an intersection observer to observe the elements
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                // If the element is in the viewport
                if (entry.isIntersecting) {
                    // Add the class to trigger the animation
                    entry.target.classList.add('visible');
                    // Optionally, stop observing the element once it's in view
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5 // Trigger animation when 50% of the element is in view
        });

        // Select all elements you want to animate (with the respective class)
        const zoomElements = document.querySelectorAll('.zoom');

        // Observe each element
        zoomElements.forEach(element => {
            observer.observe(element);
        });
    </script>






    <!-- JS here -->

    <script src="../new_assets/js/modernizr-3.5.0.min.js"></script>
    <script src="../new_assets/js/jquery-3.5.1.min.js"></script>
    <script src="../new_assets/js/popper.min.js"></script>
    <script src="../new_assets/js/bootstrap.min.js"></script>
    <script src="../new_assets/js/jquery.meanmenu.js"></script>
    <script src="../new_assets/js/slick.min.js"></script>
    <script src="../new_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../new_assets/js/isotope.pkgd.min.js"></script>
    <script src="../new_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../new_assets/js/wow.min.js"></script>
    <script src="../new_assets/js/aos.js"></script>
    <script src="../new_assets/js/jquery.counterup.min.js"></script>
    <script src="../new_assets/js/jquery.waypoints.min.js"></script>
    <script src="../new_assets/js/jquery.easypiechart.min.js"></script>
    <script src="../new_assets/js/jquery-ui.js"></script>

    <!--Custom JS here -->
    <script src="../new_assets/js/main.js"></script>

    <!-- animation  -->
    <script src="../new_assets/js/particles.min.js"></script>
    <script src="../new_assets/js/particles-app.min.js"></script>





</body>

</html>