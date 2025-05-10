<?php
define('BASE_URL', 'https://iberrtech.com/');
?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

  <meta charset="UTF-8">
  <meta property="og:image" content="https://iberrtech.com/../assets/images/logo/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<title>Best SEO Company in Calicut | Best SEO Agency in Calicut</title>-->
  <title>Best SEO company in Kerala | SEO company in Calicut</title>
  <meta name="description"
        content="Looking for the Best SEO Company in Calicut? Iberr Technologies, the Best SEO Agency in Calicut,offers expert SEO services designed to meet your business goals." />
  <!--<meta name="description"-->
  <!--  content="Looking for the Best SEO Company in Calicut? Iberr Technologies, the Best SEO Agency in Calicut,offers expert SEO services designed to meet your business goals." />-->
  <meta property="og:site_name" content="iberr">
  <meta property="og:url" content="">
  <meta property="og:type" content="website">
  <meta property="og:title" content="iberrtech - Best SEO Company in Calicut">

  <link rel="stylesheet" href="../assets/css/style.css?qy">

  <link rel="stylesheet" href="../assets/css/style.css">



  <!-- icons - css include -->
  <link rel="stylesheet" type="text/css" href="../assets/css/icomoon.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.css">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/home/css/style.css">



  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Nunito:wght@800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

  .web_head h3 {
    color: #134575;
    font-family: "Work Sans", sans-serif !important;
    font-weight: 800;
    transition: .5s;
    width: 300px;
  }

  .web_head h3:hover {
    color: #0488a1;
  }

  .web_icons i {
    font-size: 25px;
  }

  .web_view {
    border: 1px solid #134575;
    width: 150px;
    padding: 5px;
    text-align: center;
    margin-top: 25px;
    position: relative;
    z-index: 1;
  }

  .web_view a {
    color: #134575;
  }

  .web_view::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transform: scale(0);
    transition: .5s;
    background: #134575;
    z-index: -1;
  }

  .web_view:hover::before {
    transform: scale(1);
  }

  .web_view a:hover {
    color: white;
  }

  .web_slider {
    margin-bottom: 50px;
  }

  @media screen and (max-width:765px) {
    .web_head h3 {

      font-size: 21px;
    }

    .web_head {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .web_section {
      margin: 80px 0 !important;
    }

  }

  .web_card img {
    width: 100%;
  }

  .web_section {
    margin: 100px 50px;
  }

  .web_section h1 {
    font-family: "Work Sans", sans-serif;
    font-weight: 800;
    color: #134575;
    text-align: center;
    margin-bottom: 40px;
  }

  .sec-4_box h3 {
    color: white;

  }

  .section-3 a {
    width: 100%;
  }

  .section-3 h3 {
    color: white;
  }

  .section-3 .card {
    height: 300px !important;
    width: 100%;
    overflow: hidden;
    border: 0;
    padding: 5px;
    display: flex;
    color: white;
    justify-content: flex-end;
    border-radius: 30px;
  }

  .section-3 .card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 4px 0px #393434e0;
    cursor: pointer;
  }

  .section-3 .card-1 {
    background: #3ab376;
  }

  .section-3 .card-2 {
    background: #00317a;
  }

  .section-3 .card-3 {
    background: #8951e8;
  }

  .section-3 .card-4 {
    background: #e3dc5a;
  }

  .section-3 .card-5 {
    background: #5dc9d6;
  }

  .section-3 .card-6 {
    background: #ffb06d;
  }

  .section-3 .heading h2 {
    padding: 50px 0;
    color: var(--blue);
    font-weight: bold;
  }

  .section-3 .col-md-6 {
    margin-bottom: 30px;
  }

  .section-3 .col-md-6.scr-anime {
    transition: 0.5s;
    opacity: 0;
    perspective: 700px;

  }

  .section-3 .col-md-6.scr-anime.actives {
    transform: perspective(800px);

    opacity: 1;
    perspective: 0;
  }

  .section-3 .card div {
    width: 80%;
    padding-left: 15px;
    gap: 13px;
    display: flex;
    flex-direction: column;
  }

  .section-3 .card img {
    position: absolute;
    width: 40%;
    right: 10px;
    top: 0;
    transition: 0.5s;
  }

  @media only screen and (min-width:700px) {
    .section-3 .card div {
      padding-bottom: 67px;
      padding-left: 66px;
    }

    .section-3 .col-md-6.scr-anime {
      transform: perspective(800px) translate(0%, 50%) rotateX(20deg);
    }

  }

  @media only screen and (max-width:600px) {
    .section-3 .col-md-6.scr-anime {
      transform: perspective(700px) translate(0%, 50%);
    }

    .section-3 .col-md-6 {
      padding: 4%;
    }

    .section-3 .card {
      height: 200px;
    }

    .section-3 .card div {
      padding-bottom: 25px;
      padding-left: 20px;
    }
  }

  .nav_icon {
    color: white;
  }

  .nav_icon.stuck {
    color: #194a79;
  }

  .main_menu .menu_item_has_child .submenu {

    top: 26%;
    left: 40%;
    opacity: 0;
    margin: 0px;
    width: auto;
    height: auto;
    display: block;
    min-width: 220px;
    padding: 10px 0px;
    visibility: hidden;
    position: fixed;
    background-color: #ffffff;
    -webkit-transform: translateY(10px);
    -ms-transform: translateY(10px);
    transform: translateY(10px);
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-box-shadow: -1px 2px 19px 3px rgba(14, 0, 40, 0.05);
    box-shadow: -1px 2px 19px 3px rgba(14, 0, 40, 0.05);
  }

  .header_section.text-white .main_menu>ul>li>a,
  .header_section.text-white .main_menu>ul>li>a:hover {
    color: #134575;
  }

  .nav_icon {
    color: #134575;
  }

  .social_a {
    color: #051441;
  }

  .header_section.text-white .menu_btn {
    color: #134575 !important;
  }

  header {
    height: auto !important;
  }


  .header_section {
    background-color: #ffffff;
  }
</style>


<body>


  <div id="header_section" class="header_section text-white sticky_header d-flex align-items-center clearfix"
    style="overflow: hidden;z-index: 999;">
    <div class="container sm_nav_container">
      <div class="head-social" id="head-social">
        <ul>
          <li><a href="https://www.instagram.com/iberrtechnologies/" target="_blank" class="social_a"><i
                class="fa-brands fa-square-instagram bounce2"></i></a></li>
          <li><a href="https://www.facebook.com/iberrtech/" target="_blank" class="social_a"><i
                class="fa-brands fa-facebook-f bounce1"></i></a></li>
          <li><a href="https://twitter.com/IberrTech" target="_blank" class="social_a"><i
                class="fa-brands fa-x-twitter bounce3"></i></a></li>
          <li><a href="https://www.linkedin.com/in/iberr-technologies-llp-101b77222/" target="_blank"
              class="social_a"><i class="fa-brands fa-linkedin bounce4"></i></a></li>
        </ul>

      </div>
      <div class="row align-items-center">

        <div class="col-lg-2 col-md-12">
          <div class="brand_logo">
            <a href="<?php echo BASE_URL; ?>index.html" class="brand_link">
              <img src="../assets/images/logo/logo.png">
              <img src="../assets/images/logo/logo.png">
            </a>
            <button type="button" class="menu_btn">
              <i class="fal fa-bars"></i>
            </button>
          </div>
        </div>

        <div class="col-lg-7 col-md-12">
          <nav class="main_menu ul_li_center clearfix">
            <ul class="clearfix">
              <li><a href="<?php echo BASE_URL; ?>index.html"><lord-icon src="https://cdn.lordicon.com/cnpvyndp.json"
                    trigger="hover" class="current-color lordIcon nav_icon" style="width:20px;height:20px">
                  </lord-icon>Home</a></li>
              <li class="menu_item_has_child"><a href="<?php echo BASE_URL; ?>About.html"><lord-icon
                    src="https://cdn.lordicon.com/yxczfiyc.json" trigger="hover" class="current-color lordIcon nav_icon"
                    style="width:20px;height:20px">
                  </lord-icon>About Us</a>

              </li>
              <li class="menu_item_has_child"><a href="<?php echo BASE_URL; ?>Services.html">
                  <lord-icon src="https://cdn.lordicon.com/lecprnjb.json" trigger="hover"
                    class="current-color lordIcon nav_icon" style="width:20px;height:20px">
                  </lord-icon>
                  Services</a>
                <ul class="submenu">
                  <li>
                    <Branding href="<?php echo BASE_URL; ?>services/Branding.html">Branding</a>
                  </li>
                  <li><a href="<?php echo BASE_URL; ?>services/Digital-Marketing-Malappuram-calicut.html">Digital
                      Marketing</a></li>
                  <li><a href="<?php echo BASE_URL; ?>services/seo.php">Search Engine Optimization</a></li>
                  <li><a href="<?php echo BASE_URL; ?>services/Graphicdesigns-Malappuram-calicut.html">Graphic
                      Designs</a></li>
                  <li><a href="<?php echo BASE_URL; ?>services/web-design-malappuram-calicut.php">Web Design &
                      Development</a></li>
                  <li><a href="<?php echo BASE_URL; ?>services/Mobileappdevelopment.html">Mobile App Development</a>
                  </li>
                  <li><a href="<?php echo BASE_URL; ?>services/Erp.html">ERP</a></li>
                  <li><a href="<?php echo BASE_URL; ?>services/Hoardingandleddisplayboards.html">Hoarding & LED Display
                      Boards</a></li>


                </ul>
              </li>
              <li><a href="<?php echo BASE_URL; ?>Clients.php">
                  <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="hover"
                    class="current-color lordIcon nav_icon" style="width:20px;height:20px">
                  </lord-icon>
                  Clients</a></li>
              <li><a href="<?php echo BASE_URL; ?>Blogs.php">
                  <lord-icon src="https://cdn.lordicon.com/lyrrgrsl.json" trigger="hover"
                    class="current-color lordIcon nav_icon" style="width:20px;height:20px">
                  </lord-icon>
                  Blogs</a></li>
              <li><a href="<?php echo BASE_URL; ?>Contact.html">
                  <lord-icon src="https://cdn.lordicon.com/fdxqrdfe.json" trigger="hover"
                    class="current-color lordIcon nav_icon" style="width:20px;height:20px">
                  </lord-icon>
                  Contact Us</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">


          <div class="head-social" id="head_social">
            <ul>
              <li><a href="https://www.instagram.com/iberrtechnologies/" target="_blank" class="social_a"><i
                    class="fa-brands fa-square-instagram bounce2"></i></a></li>
              <li><a href="https://www.facebook.com/iberrtech/" target="_blank" class="social_a"><i
                    class="fa-brands fa-facebook-f bounce1"></i></a></li>
              <li><a href="https://twitter.com/IberrTech" target="_blank" class="social_a"><i
                    class="fa-brands fa-x-twitter bounce3"></i></a></li>
              <li><a href="https://www.linkedin.com/in/iberr-technologies-llp-101b77222/" target="_blank"
                  class="social_a"><i class="fa-brands fa-linkedin bounce4"></i></a></li>
            </ul>

          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-12">
                <a href="Contact.html#Enquiry" class="btn bg_default_orange float-right">Enquire Now</a>
            </div> -->

      </div>
    </div>
  </div>

  <!-- mobile sidebar menu - start -->
  <div class="sidebar-menu-wrapper" style="overflow: hidden;">
    <div id="mobile_menu" class="mobile_menu" style="overflow: hidden;z-index: 10002;">

      <div class="brand_logo mb-50 clearfix">
        <a href="<?php echo BASE_URL; ?>index.html" class="brand_link">
          <img src="../assets/images/logo/logo.png">
        </a>
        <span class="close_btn"><i class="fal fa-times"></i></span>
      </div>

      <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
        <ul class="clearfix">
          <li><a href="<?php echo BASE_URL; ?>index.html"><lord-icon src="https://cdn.lordicon.com/cnpvyndp.json"
                trigger="click" colors="primary:#110a5c" style="width:20px;height:20px">
              </lord-icon>Home</a></li>


          <li><a href="<?php echo BASE_URL; ?>About.html"><lord-icon src="https://cdn.lordicon.com/yxczfiyc.json"
                trigger="click" colors="primary:#110a5c" style="width:20px;height:20px" class="lg_hide">
              </lord-icon>About</a></li>

          <li class="dropdown">
            <a href="<?php echo BASE_URL; ?>Services.html" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"> <lord-icon src="https://cdn.lordicon.com/lecprnjb.json" trigger="click"
                colors="primary:#110a5c" style="width:20px;height:20px">
              </lord-icon>Services</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo BASE_URL; ?>services/Branding.html">Branding</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/Digital-Marketing-Malappuram-calicut.html">Digital
                  Marketing</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/seo.php">Search Engine Optimization</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/Graphicdesigns-Malappuram-calicut.html">Graphic Designs</a>
              </li>
              <li><a href="<?php echo BASE_URL; ?>services/web-design-malappuram-calicut.php">Web Design &
                  Development</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/Mobileappdevelopment.html">Mobile App Development</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/Erp.html">ERP</a></li>
              <li><a href="<?php echo BASE_URL; ?>services/Hoardingandleddisplayboards.html">Hoarding & LED Display
                  Boards</a></li>

            </ul>
          </li>
          <li><a href="<?php echo BASE_URL; ?>Clients.html"><lord-icon src="https://cdn.lordicon.com/kthelypq.json"
                trigger="click" colors="primary:#110a5c" style="width:20px;height:20px" class="lg_hide">
              </lord-icon>Clients</a></li>
          <li><a href="<?php echo BASE_URL; ?>Blogs.html"><lord-icon src="https://cdn.lordicon.com/lyrrgrsl.json"
                trigger="click" colors="primary:#110a5c" style="width:20px;height:20px">
              </lord-icon>Blogs</a></li>
          <li><a href="<?php echo BASE_URL; ?>Contact.html"><lord-icon src="https://cdn.lordicon.com/fdxqrdfe.json"
                trigger="click" colors="primary:#110a5c" style="width:20px;height:20px">
              </lord-icon>Contact Us</a></li>
        </ul>
      </div>
      <div class="sm_contact">
        <div class="side_menu_call" style="background: #2296c7;">
          <a class=" quick-contact_sm" href="tel:7907385121"><i class="fa-solid fa-phone"
              style="font-size: 20px;color: white;"></i></a>

        </div>
        <div class="side_menu_whatsp" style="background: #24b966;">
          <a class="quick-contact-wapp_sm" href="https://wa.me/9526536504"><i class="fa-brands fa-whatsapp"
              style="font-size: 20px;color: white;"></i></a>

        </div>

      </div>
      <div class="menubar_adres ">
        <div class="row">
          <div class="col-6" style="border-right: 1px solid;">
            <p style="margin-bottom: 0;">Kozhikode</p>
            <p>
              Pottammal-Palazhi Rd, <br>Kozhikode,

            </p>

          </div>
          <div class="col-6">
            <p style="margin-bottom: 0;">Malappuram</p>
            <p>
              Palakkad Road,<br>
              Perinthalmanna
            </p>

          </div>
        </div>



      </div>

      <div class="nav_sm_social">
        <div
          style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);"
          class="icon"><a href="https://www.instagram.com/iberrtechnologies/" target="_blank" class=""><i
              class="fa-brands fa-square-instagram "></i></a></div>
        <div style="background: #1877F2;" class="icon"><a href="https://www.facebook.com/iberrtech/" target="_blank"
            class=""><i class="fa-brands fa-facebook-f "></i></a></div>
        <div style="background: black;" class="icon"><a href="https://twitter.com/IberrTech" target="_blank" class=""><i
              class="fa-brands fa-x-twitter "></i></a></div>
        <div style="background: #2962ff;" class="icon"><a
            href="https://www.linkedin.com/in/iberr-technologies-llp-101b77222/" target="_blank" class=""><i
              class="fa-brands fa-linkedin"></i></a></div>
      </div>



    </div>
    <div class="overlay"></div>
  </div>
  <!-- mobile sidebar menu - end -->


































  <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>


  <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>

  <!-- mobile menu - jquery include -->
  <script src="../assets/js/mCustomScrollbar.js"></script>

  <script src="../assets/home/js/script.js"></script>
  <script src="../assets/home/js/addfile.js"></script>
  <!-- <script src="../assets/js/custom.js"></script> -->
  <script src="https://cdn.lordicon.com/lordicon.js"></script>

  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function () {
      $('.close_btn, .overlay').on('click', function () {
        $('#mobile_menu').removeClass('active');
        $('.overlay').removeClass('active');
      });

      $('.menu_btn').on('click', function () {
        $('#mobile_menu').addClass('active');
        $('.overlay').addClass('active');
      });
    });


    $('.mobile_menu .dropdown').on('show.bs.dropdown', function (e) {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
    });
    $('.mobile_menu .dropdown').on('hide.bs.dropdown', function (e) {
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });



    // sticky header - start
    // --------------------------------------------------
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 120) {
        $('.sticky_header').addClass("stuck");
        // $('.social_a').addClass("stuck");
        $('.nav_icon').addClass("stuck");

      } else {
        $('.sticky_header').removeClass("stuck");
        // $('.social_a').removeClass("stuck");
        $('.nav_icon').removeClass("stuck");

      }
    });
    // sticky header - end
  </script>


</body>

</html>