<?php
define('BASE_URL', 'https://iberrtech.com/');
include('admin/root/db.php');

// Check if the 'url' parameter is set in the URL
if(isset($_GET['url'])) {
    // Sanitize the input to prevent SQL injection
    $url = $mysqli->real_escape_string($_GET['url']);

    // Prepare the SQL query using a prepared statement
    $sql = "SELECT * FROM blog WHERE url = ?";
    
    // Bind the parameter to the prepared statement
    if($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $url);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Fetch the data and display it
            while ($row = $result->fetch_assoc()) {
                ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from iberrtech.com/Blogs by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 10:24:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keyword" content="<?php echo $row['keyword']; ?>">
        <meta name="description" content="<?php echo $row['meta_dcr']; ?>">
        <title>seo company in kerala | seo company in calicut</title>
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/logo/favourite_icon_5.png">

        <!-- css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">

        <!-- icons - css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/icomoon.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/fontawesome-all.css">

        <!-- slider & carousel - css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/owl.theme.default.min.css">

        <!-- animation - css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/aos.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/splitting.css">

        <!-- magnific popup - css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/magnific-popup.css">

        <!-- custom - css include -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
        		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/footer.css">

        <style type="text/css">
            .sticky_header.stuck.text-white .main_menu > ul > li > a {font-weight: bold;letter-spacing: 1px;}
            .header_section.text-white .main_menu > ul > li > a {font-weight: bold;letter-spacing: 1px;}
            .container {
    max-width: 1200px;
}
        </style>

    </head>

    <body>

        <div class="body_wrap">

            <!-- backtotop - start -->
            <div id="thetop"></div>
            <div id="backtotop">
                <a href="#" id="scroll">
                    <i class="fal fa-arrow-up"></i>
                    <i class="fal fa-arrow-up"></i>
                </a>
            </div>
         
            <!-- header_section - start
            ================================================== -->
            <header id="header_section" class="header_section text-white sticky_header d-flex align-items-center clearfix">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-12">
                            <div class="brand_logo">
                                <a href="<?php echo BASE_URL; ?>index.html" class="brand_link">
                                    <img src="<?php echo BASE_URL; ?>assets/images/logo/logo1.png">
                                    <img src="<?php echo BASE_URL; ?>assets/images/logo/logo.png">
                                </a>
                                <button type="button" class="menu_btn">
                                    <i class="fal fa-bars"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <nav class="main_menu ul_li_center clearfix">
                                <ul class="clearfix">
                                    <li><a href="<?php echo BASE_URL; ?>index.html">Home</a></li>
                                    <li class="menu_item_has_child"><a href="<?php echo BASE_URL; ?>About.html">About Us</a>
                                        
                                    </li>
                                    <li class="menu_item_has_child"><a href="Services.html">Services</a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo BASE_URL; ?>services/Branding.html">Branding</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/Digital-Marketing-Malappuram-calicut.html">Digital Marketing</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/seo.php">Search Engine Optimization</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/Graphicdesigns-Malappuram-calicut.html">Graphic Designs</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/web-design-Malappuram-calicut.php">Web Design & Development</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/Mobileappdevelopment.html">Mobile App Development</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/Erp.html">ERP</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>services/Hoardingandleddisplayboards.html">Hoarding & LED Display Boards</a></li>
                                            <!-- <li><a href="smm.php">Social Media Marketing</a></li>
                                            <li><a href="seo.php">Search Engine Optimization</a></li>
                                            <li><a href="ppc.php">Pay Per Click Management</a></li>
                                            <li><a href="leadgeneration.php">Lead Generation</a></li>
                                            <li><a href="emailmarketing.php">E-Mail Marketing</a></li>
                                            <li><a href="smsmarketing.php">SMS Marketing</a></li>
                                            <li><a href="cms.php">Content Marketing Strategy</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo BASE_URL; ?>Clients.php">Clients</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>Blogs.php">Blogs</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>Contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-3 col-md-12">
                            <a href="Contact.html#Enquiry" class="btn bg_default_orange float-right">Enquire Now</a>
                        </div>
                        
                    </div>
                </div>
            </header>

            <!-- mobile sidebar menu - start -->
            <div class="sidebar-menu-wrapper">
                <div id="mobile_menu" class="mobile_menu">

                    <div class="brand_logo mb-50 clearfix">
                        <a href="<?php echo BASE_URL; ?>index.html" class="brand_link">
                            <img src="<?php echo BASE_URL; ?>assets/images/logo/logo.png">
                        </a>
                        <span class="close_btn"><i class="fal fa-times"></i></span>
                    </div>

                    <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
                        <ul class="clearfix">
                            <li><a href="<?php echo BASE_URL; ?>index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="<?php echo BASE_URL; ?>About.html"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                              
                            </li>
                            <li class="dropdown">
                                <a href="services-2.html"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo BASE_URL; ?>services/Branding.html">Branding</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/Digital-Marketing-Malappuram-calicut.html">Digital Marketing</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/seo.php">Search Engine Optimization</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/Graphicdesigns-Malappuram-calicut.html">Graphic Designs</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/web-design-Malappuram-calicut.php">Web Design & Development</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/Mobileappdevelopment.html">Mobile App Development</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/Erp.html">ERP</a></li>
                                    <li><a href="<?php echo BASE_URL; ?>services/Hoardingandleddisplayboards.html">Hoarding & LED Display Boards</a></li>
                                    <!-- <li><a href="smm.php">Social Media Marketing</a></li>
                                    <li><a href="seo.php">Search Engine Optimization</a></li>
                                    <li><a href="ppc.php">Pay Per Click Management</a></li>
                                    <li><a href="leadgeneration.php">Lead Generation</a></li>
                                    <li><a href="emailmarketing.php">E-Mail Marketing</a></li>
                                    <li><a href="smsmarketing.php">SMS Marketing</a></li>
                                    <li><a href="cms.php">Content Marketing Strategy</a></li> -->
                                </ul>
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>Clients.php">Clients</a></li>
                            <li><a href="<?php echo BASE_URL; ?>Blogs.php">Blogs</a></li>
                            <li><a href="<?php echo BASE_URL; ?>Contact.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <a href="<?php echo BASE_URL; ?>Contact.html#Enquiry" class="btn bg_default_blue">Enquire Now</a>

                </div>
                <div class="overlay"></div>
            </div>
            <!-- mobile sidebar menu - end -->

            <!-- header_section - end
            ================================================== -->

            <!-- main body - start
            ================================================== -->
            <main>
                <!-- breadcrumb_section - start
                ================================================== -->
                <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
                    <div class="container">
                        <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                            <h1 class="page_title">Blogs</h1>
                            <p class="mb-0"></p>
                        </div>
                    </div>

                    <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
                        <img src="<?php echo BASE_URL; ?>assets/images/shapes/shape_1.png" alt="spahe_not_found">
                    </div>
                    <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo BASE_URL; ?>assets/images/shapes/shape_2.png" alt="spahe_not_found">
                    </div>
                </section>
                <!-- breadcrumb_section - end
                ================================================== -->



                <!-- blog_section - start
                ================================================== -->
                <section>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="blog_view_img" style="width: 750px;
            margin: 50px 0;
            padding: 50px;overflow: hidden;">
                <img src="<?php echo BASE_URL; ?>admin/gallery/<?php echo $row['image']; ?>" alt="">

            </div>

        </div>
        <div class="row" style="display: flex; justify-content: center;flex-direction: column;">
            <h1><?php echo $row['title']; ?></h1><br>
            <h3><?php echo $row['description']; ?></h3><br>
            <b><?php echo $row['author']; ?></b>
            <small><?php echo $row['date']; ?></small>

        </div>
        <div class="row">
            <p>
            <?php echo $row['content']; ?>
            </p>

        </div>

    </div>
</section>

<?php
           }
        } else {
            // No rows found
            echo "No data found.";
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error in preparing the statement
        echo "Error in preparing SQL statement.";
    }
} else {
    // 'url' parameter is not set in the URL
    echo "URL parameter 'url' is missing.";
}

// Close the database connection
$mysqli->close();
?>
                <!-- blog_section - end
                ================================================== -->


            </main>
            <!-- main body - end
            ================================================== -->
   

            <!-- footer_section - start
            ================================================== -->
            <footer class="footer_section bg_gray_3 deco_wrap clearfix" style="background-color: #111d43;">

                <br>
<div class="container" style="position: relative;">
    <div class="row m-gap" >
        <div class="col-md-3">
            <h3 style="text-align: left;">We Are Iberrtech</h3>
            <div>
              <p style="text-align: left;">
                Unlock the digital potential of your business with Iberr Technologies, the leading SEO
                 company in Kerala. Our cost-effective solutions and cutting-edge strategies will propel your 
                 venture to new heights of online visibility and credibility. 
              </p>
            </div>
            <div class="iber_img" style="margin-left: -110px;">
            <img src="<?php echo BASE_URL; ?>assets/home/img/logo/logo1.png" alt="" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="menu_head" ><h3>Menu</h3></div>
            <div class="container menu-div">
                <div class="row">
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>index.html">Home</a></div>
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>Blogs.php">Blogs</a></div>
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>Clients.php">Clients</a></div>
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>About.html">About us</a> </div>
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>Services.html">Services</a></div>
                    <div class="col-sm-12 col-md-12"><a href="<?php echo BASE_URL; ?>Careers.html">Careers</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sales_enq"><h3>Sales Enquiry</h3>
                <div><i class="fa-solid fa-envelope" style="color: #ffffff;"> </i> <a href="iberrtech@gmail.com">iberrtech@gmail.com</a></div>
                <div><i class="fa-solid fa-envelope" style="color: #ffffff;"> </i><a href="https://iberrtech.com/"> info@iberrtech.com</a></div>
                <div><i class="fa-solid fa-phone" style="color: #ffffff;"> </i> <a href="tel:7907385121" style="text-decoration: none;">7907385121</a></div>
                <div><i class="fa-solid fa-phone" style="color: #ffffff;"> </i><a href="tel:9526536504" style="text-decoration: none;">9526536504</a></div>
            </div>
        </div>
        <div class="col-md-3 add_ress">
        <div class=" address-container">
          <div style="font-size: 19px; ;" ><h4>Head Office Address</h4></div><br><br>
          <div class="address">
             
              <i class="fas fa-map-marker-alt"></i>
              <span>Kozhikode</span><br>
              Payyadimeetal,<br> Pottammal-Palazhi Rd, <br>Punathil Bazar, <br>Kozhikode,<br> Kerala&nbsp;
              673019 

          </div><br>
          <div class="address">
           
              <i class="fas fa-map-marker-alt"></i><span>Malapuram </span><br>
              Room No 10/607 K T Building <br>Opp Ramadas Hospital<br>
              Perinthalmanna Kerala&nbsp;679322 
          </div>
      </div>
    </div>

        <!-- <div class="col-md-3 sister-div">
            <div><h3>Sister Concern</h3>
                <img src="assets/home/img/logo/welkinwits.png" alt="">
                <img src="assets/home/img/logo/gsoft.png" alt="">
            </div>
        </div> -->
    </div>
</div>
<br><br>
<div class="container last-cntr">
  <!-- <a href="https://www.instagram.com/iberrtechnologies/" target="_blank" class=""><i class="fa-brands fa-square-instagram bounce2"></i></a>
     <a href="https://www.facebook.com/iberrtech/" target="_blank" class=""><i class="fa-brands fa-facebook-f bounce1"></i></a>
     <a href="https://twitter.com/IberrTech" target="_blank" class=""><i class="fa-brands fa-x-twitter bounce3"></i></a>
     <a href="https://www.linkedin.com/in/zyberry-tech-7b4570219/" target="_blank" class=""><i class="fa-brands fa-linkedin bounce4"></i></a> -->
    <div class="Social-media-div">
       
        <a href="https://www.instagram.com/iberrtechnologies/" target="_blank" class=""><i class="fa-brands fa-square-instagram " style="color: #ffffff;"></i></a>
        <a href="https://www.facebook.com/iberrtech/" target="_blank" class="">  <i class="fa-brands fa-facebook-f "style="color: #ffffff;"></i></a>
        <a href="https://twitter.com/IberrTech" target="_blank" class=""><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></a>
        <a href="https://www.linkedin.com/in/zyberry-tech-7b4570219/" target="_blank" class=""> <i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>


    </div>
    <div >
        <span>Copyright © 2021 Desing by iberrtech</span>
    </div>
</div>
<div class="whats-call-div">  
    <a href="tel:7907385121" class="call-btn"><i class="fa-solid fa-phone"></i>  call now</a>
    <a href="https://wa.me/9526536504" class="whatsapp-btn"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
</div>
</footer>

            </footer>
            <!-- footer_section - end
            ================================================== -->
        </div>

<script src='../kit.fontawesome.com/a076d05399.html' crossorigin='anonymous'></script>

<style type="text/css">
.footer_section .contact_info > ul > li > a {
    color: #a6bfde;
}
.footer_section .contact_info > ul > li {
    color: #ffffff;
}
.footer_section .useful_links > ul > li > a {
    color: #a6bfde;
}
.footer_section .widget_title {
    color: #fff;
}
</style>

        <!-- jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

        <!-- slider & carousel - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/owl.carousel.min.js"></script>

        <!-- animation - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/aos.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/splitting.js"></script>

        <!-- magnific popup - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/magnific-popup.min.js"></script>

        <!-- isotope filter - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/masonry.pkgd.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/imagesloaded.pkgd.min.js"></script>

        <!-- mouse move & scroll parallax  - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/parallax.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/parallax-scroll.js"></script>

        <!-- google map - jquery include -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/gmaps.js"></script>

        <!-- mobile menu - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/mCustomScrollbar.js"></script>

        <!-- custom - jquery include -->
        <script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/home/js/addfile.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/home/js/script.js"></script>

    </body>

<!-- Mirrored from iberrtech.com/Blogs by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 10:24:07 GMT -->
</html>