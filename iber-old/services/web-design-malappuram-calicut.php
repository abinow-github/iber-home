<?php
include("../header.php")
  ?>
  
  
<style>
  /* web images */
  .g_cnt p {
    text-align: justify;
  }

  .web_head h3,
  .web_head1 h3 {
    color: #134575;
    font-family: "Work Sans", sans-serif;
    font-weight: 800;
    transition: .5s;
    width: 359px;
    font-size: 25px;
  }

  .web_head h3:hover,
  .web_head1 h3:hover {
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

  .web_view:hover a {
    color: white;
  }

  /* .web_head{
  transform: translateY(50px);
    opacity: 0;
    transition: 1s;
} */
  .web_head.animated {
    transform: translateY(0);
    opacity: 1;
  }

  .web_col_1 {
    margin-bottom: 50px;
  }

  @media screen and (max-width:765px) {

    .web_head h3,
    .web_head1 h3 {

      font-size: 21px !important;
    }

    .sm_nav_container {
      display: flex;
      justify-content: center;
      align-items: center;

    }

    .web_head {
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

  }

  .web_col_head {
    width: 85px;
    margin-right: 20px;
  }

  .web_col_head img {
    filter: invert(32%) sepia(20%) saturate(1765%) hue-rotate(150deg) brightness(104%) contrast(92%);
  }

  .web_col3 {
    display: flex;
    justify-content: center;
    transition: 1s;
    transform: translateY(100px);
    opacity: 0;
  }

  .web_col3.animated {
    transform: translateY(0);
    opacity: 1;
  }

  .web_col_body h4 {
    color: #048aa3;
    font-family: "Work Sans", sans-serif;
    font-weight: 600;
  }

  .web_col_h4 h4 {
    color: #048aa3;
    font-family: "Work Sans", sans-serif;
    font-size: 29px;
    word-spacing: 4px;
    letter-spacing: 1px;
  }

  .web_sec_3 {
    margin-bottom: 100px;

  }

  #websites h2 {
    font-family: "Work Sans", sans-serif;
    font-weight: 800;
    color: #134575;
    text-align: center;
    margin-bottom: 70px;
  }

  .web_col_1 img,
  .web_head {
    /* transition: 2s; */
  }

  .web_col_1:hover {
    img {

      /* transform: scale(1.3); */
      z-index: 1;
      position: relative;
    }

    .web_head,
    .web_head1 {
      margin-bottom: 50px;

    }
  }

  .web_col_h4 {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .web_head1 {
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  /* web images end */
  /* FAQ */
  .faq {
    background: white;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 2px solid rgb(4 138 163);
    text-align: left;
    outline: none;
    font-size: 18px;
    font-weight: 500;
    transition: 0.5s;
    display: flex;
    justify-content: space-between;
  }

  .section-q {
    padding: 25px;
    margin: 50px 0;
  }

  .section-q h2 {
    font-weight: 600;
  }

  .section-q .active,
  .faq:hover {
    background-color: #4e2fda;
    color: white;
  }


  .faq:after {
    content: '\002B';
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .section-q .active:after {
    content: "\2212";
  }

  .panel {
    padding: 0px 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

  .panel p {
    padding-top: 10px;
    margin-top: 20px;
    text-align: left;
    color: black;
  }


  @media screen and (max-width:600px) {
    .faq {
      width: 100%;
      font-size: 15px;

    }

    .section-q .prpl {
      font-size: 30px !important;
    }

    .img2 {
      display: none;
    }


  }

  /* --- FAQ END --- */
  /* FAQ END */
  .service1-section-area .service-all-boxes-area1 .service-boxarea {
    max-height: 410px !important;
  }

  .space66 {
    height: 45px !important;
  }
</style>


<h1 style="display:none">web development Calicut </h1>

    <h2 style="display:none">web development company in Calicut</h2>

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area"
  style="background-image: url(../assetsnew/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <img src="../assetsnew/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1" style="width: fit-content;">
  <img src="../assetsnew/img/elements/star2.png" alt="" class="star2 keyframe5" style="width: fit-content;">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="about-inner-header heading9 text-center">
          <h2>Best Website Development</h2>
          <a href="<?php echo BASE_URL; ?>index.html"> Home <i class="fa-solid fa-angle-right"></i> <span>Services</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->
<!-- progeramming language -->





<section class="why-choose">

  <div class="container">
    <div class="row">
      <div class="col-xl-6 why-chooseLeft pe-xl-0">
        <div class="w-100">
          <div class="h6 subHeading">
            <h5 style="color: white;">Website Development</h5>
            <h2 style="color: white;">Shaping Digital Experiences</h2>
            <p>We are the best Web designing agency in kerala. Web development can range from simple text-only web pages
              to
              complicated web apps and social networking services. Iberrtech offers professional, cost-effective, and
              customizable website design services, integrating creative new ideas to turn your websites everything into
              creation. A web design team with competence and experience in many skills also offers the option of
              finding
              the best website development services at low cost. Web graphic design, interface design, and
              user-experience
              design are indeed elements of website design.Having a website has become a must-have for businesses, since
              they must communicate with potential clients and inform them of their services and products.</p>
          </div>


       
        </div>
      </div>
      <div class="col-xl-6 pe-0 why-chooseRight">
        <div class="clientIconBox">
          <picture>

            <img src="../new_assets/img/media/phone-call.png" alt="Iberrtech" class="img-fluid" height="75" width="75"
              loading="lazy"
              style="filter: invert(100%) sepia(2%) saturate(195%) hue-rotate(167deg) brightness(118%) contrast(100%);">
          </picture>
          <a href="<?php echo BASE_URL; ?>Contact.html">
            <div class="h6">CONTACT</div>
          </a>
        </div>


        <picture>

          <img src="../new_assets/img/media/web-design team.png" alt="Iberrtech" class="img-fluid w-100" height="1200"
            width="800" loading="lazy" style="border-radius: 20px;">
        </picture>
      </div>
    </div>
  </div>
</section>



<!--  programming end -->

<!--===== SERVICE AREA STARTS =======-->













<section class="counterSection">
  <div class="overlayImageBox" style="background: rgba(128, 128, 128, 0.5); ">
    <picture>
      <img src="../new_assets/img/media/web-design-team.png" alt="iberrtech" class="img-fluid bw-image">
    </picture>
  </div>
  <div class="container position-relative">
    <div class="row">
      <div class="skills-header text-center heading2" style="margin-top: -150px; margin-bottom:110px;">

        <h2 style="font-weight: 800; ">Our Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 col-6 mb-3">
        <div class="counterItem">
          <img loading='lazy' class="img-fluid positionImage" src="../new_assets/img/media/shape1.webp" alt="Shape"
            width="314" height="300" style="transform: rotate(-90deg);">
          <div class="leftIcon">
            <picture>
              <img src="../new_assets/img/media/static.png" alt="iberrtech" class="img-fluid w-100" height="80"
                width="80"
                style="filter: invert(100%) sepia(2%) saturate(195%) hue-rotate(167deg) brightness(118%) contrast(100%);">
            </picture>
          </div>
          <div class="rightDetails">
            <h2><span class="counter">95</span>%</h2>
            <h3>Static</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-6 mb-3">
        <div class="counterItem">
          <img loading='lazy' class="img-fluid positionImage" src="../new_assets/img/media/shape1.webp" alt="Shape"
            width="314" height="300" style="transform: rotate(-90deg);">
          <div class="leftIcon">
            <picture>
              <img src="../new_assets/img/media/dynamic.png" alt="iberrtech" class="img-fluid w-100" height="80"
                width="80"
                style="filter: invert(100%) sepia(2%) saturate(195%) hue-rotate(167deg) brightness(118%) contrast(100%);">
            </picture>
          </div>
          <div class="rightDetails">
            <h2><span class="counter">94</span>%</h2>
            <h3>Dynamic</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-6 mb-3">
        <div class="counterItem">
          <img loading='lazy' class="img-fluid positionImage" src="../new_assets/img/media/shape1.webp" alt="Shape"
            width="314" height="300" style="transform: rotate(-90deg);">
          <div class="leftIcon">
            <picture>
              <img src="../new_assets/img/media/online-store.png" alt="iberrtech" class="img-fluid w-100" height="80"
                width="80"
                style="filter: invert(100%) sepia(2%) saturate(195%) hue-rotate(167deg) brightness(118%) contrast(100%);">
            </picture>
          </div>
          <div class="rightDetails">
            <h2><span class="counter">92</span>%</h2>
            <h3>E-commerce</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-6 mb-3">
        <div class="counterItem">
          <img loading='lazy' class="img-fluid positionImage" src="../new_assets/img/media/shape1.webp" alt="Shape"
            width="314" height="300" style="transform: rotate(-90deg);">
          <div class="leftIcon">
            <picture>
              <img src="../new_assets/img/media/web-design.png" alt="iberrtech" class="img-fluid w-100" height="80"
                width="80"
                style="filter: invert(100%) sepia(2%) saturate(195%) hue-rotate(167deg) brightness(118%) contrast(100%);">
            </picture>
          </div>
          <div class="rightDetails">
            <h2><span class="counter">95</span>%</h2>
            <h3>Web Design</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="whyChooseUsSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 whyChooseUsLeft ps-xl-5 pe-xl-5">
        <div class="whyChooseUsImageWrapper">
          <img src="../new_assets/img/media/seospecialists.png" alt="" class="whyChooseUsImg" height="120px;">
        </div>
      </div>
      <div class="col-lg-6 whyChooseUsRight ps-xxl-5 zoom zoom-out-up" style="transition-duration: 1s;">
        <div class="w-100">
          <div class="h6 whyChooseUsSubHeading">Why Choose Us</div>
          <h2 class="whyChooseUsMainHeading">Experience the Advantage Why We're the Right Choice</h2>
          <p class="whyChooseUsPara">Experience the Iberr Technologies advantage with innovative digital solutions that
            elevate your business. Our expert team combines creativity and technology to deliver results-driven
            strategies tailored to your unique goals.</p>
          <div class="whyChooseUsSlider">
            <div class="item">
              <div class="whyChooseUsCard">
                <h3 class="whyChooseUsTitle">Proven Results</h3>
                <p class="whyChooseUsDescription">We have a track record of delivering tangible results for our clients. From
                  increasing website traffic
                  and improving search.  <br></p>
              </div>
            </div>
            <div class="item">
              <div class="whyChooseUsCard">
                <h3 class="whyChooseUsTitle">Customized Solutions</h3>
                <p class="whyChooseUsDescription">Get a website tailored exactly to your business needs with our customized
                  development solutions. From
                  design to functionality. </p>
              </div>
            </div>
            <div class="item">
              <div class="whyChooseUsCard">
                <h3 class="whyChooseUsTitle">Dedicated Support</h3>
                <p class="whyChooseUsDescription">Your success is our top priority. That's why provide dedicated support and
                  guidance every step of the
                  way to running seo. <br></p>
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
    $('.whyChooseUsSlider').slick({
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




<section class="service-sec">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="service-wrap-1 zoom flip-left  " style="transition-duration: .5s; background-color:#D3E1E5;">
          <div class="icon">
            <img src="../new_assets/img/media/static.png" alt="iberrtech" class="img-fluid w-100"
              style=" height: 80px; width: 80px !important; filter: invert(18%) sepia(85%) saturate(944%) hue-rotate(178deg) brightness(98%) contrast(92%);">
          </div>
          <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize
            your website to rank higher.</p>
          <h4 class="service-title mb-10">Static Website
          </h4>

        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="service-wrap-1 zoom flip-up" style="transition-duration: .5s; background-color:#D3E1E5;">
          <div class="icon">
            <img src="../new_assets/img/media/dynamic.png" alt="iberrtech" class="img-fluid w-100"
              style=" height: 80px; width: 80px !important; filter: invert(18%) sepia(85%) saturate(944%) hue-rotate(178deg) brightness(98%) contrast(92%);">
          </div>
          <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our experts
            craft compelling ad copy and optimize.</p>
          <h4 class="service-title mb-10">Dynamic Website
          </h4>

        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="service-wrap-1 zoom flip-right" style="transition-duration: .5s; background-color:#D3E1E5;">
          <div class="icon">
            <img src="../new_assets/img/media/online-store.png" alt="iberrtech" class="img-fluid w-100"
              style=" height: 80px; width: 80px !important; filter: invert(18%) sepia(85%) saturate(944%) hue-rotate(178deg) brightness(98%) contrast(92%);">
          </div>
          <p>Build a strong brand presence and engage with your audience on social media platforms. We create
            strategic social media campaigns </p>
          <h4 class="service-title mb-10">E Commerce
          </h4>

        </div>
      </div>

    </div>

  </div>
</section>





<style>
  

 

   /* wedsite clients in web development page start  */
  
   .slider-container {
    width: 100%;
    overflow: hidden;
    position: relative;
    max-width: 800px;
    margin: auto;
  }

  .slider {
    display: flex;
    transition: transform 1.5s ease-in-out;
  }

  .slide {
    min-width: 100%;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
  }

  img {
    width: 100%;
    display: block;
  }

  @media (max-width: 600px) {
    .slider-container {
      max-width: 90%;
    }
  }




 /* wedsite clients in web development page end  */
</style>



<section id="websites" style="margin-bottom: 100px; margin-top:50px;">

  <div class="slider-container">
    <h2>Website Clients</h2>
    <div class="slider" id="slider">
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>Vishnu Ayurvedha Medical College</h3>
            <div class="web_view"><a href="https://vishnuayurvedacollege.in/">View Website <i
                  class="fa-solid fa-caret-right"></i></a></div>
          </div>
          <img src="../assetsnew/img/webdev/web-design development calicut1.png" alt="web-design development calicut1">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>ENGLISH PLUS LANGUAGE ACADEMY</h3>
            <div class="web_view"><a href="https://englishplusacademy.in/">View Website <i
                  class="fa-solid fa-caret-right"></i></a></div>
          </div>
          <img src="../assetsnew/img/webdev/best web-design development in malappuram1.png"
            alt="best web-design development in malappuram">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>THIRANZ TECH SOLUTIONS</h3>
            <div class="web_view"><a href="https://thiranz.com/">View Website <i
                  class="fa-solid fa-caret-right"></i></a>
            </div>
          </div>
          <img src="../assetsnew/img/webdev/web-design development in calicut1.png"
            alt="web-design development in calicut1">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>MEDIASPOT ADVERTISING SPOT</h3>
            <div class="web_view"><a href="https://mediaspot.in/">View Website <i
                  class="fa-solid fa-caret-right"></i></a>
            </div>
          </div>
          <img src="../assetsnew/img//webdev/best web-design development in calicut1.png"
            alt="best web-design development in calicut1">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>IMAM TRAVEL AGENCY</h3>
            <div class="web_view"><a href="https://www.imamdocs.com/">View Website <i
                  class="fa-solid fa-caret-right"></i></a></div>
          </div>
          <img src="../assetsnew/img//webdev/best web-design development malappuram1.png"
            alt="best web-design development malappuram1">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>GULF ARAB EAST REALESTATE AGENCY</h3>
            <div class="web_view"><a href="https://gulfarabeast.com/">View Website <i
                  class="fa-solid fa-caret-right"></i></a></div>
          </div>
          <img src="../assetsnew/img//webdev/web-design development in malappuram1.png"
            alt="web-design development in malappuram1">

        </div>
      </div>
      <div class="slide">
        <div class=" web_col_1">
          <div class="web_head animations">
            <div class="web_icons">
              <i class="fab fa-app-store-ios " style="color: #204f7c;"></i>
              <i class="fab fa-android mx-1 " style="color: #1e5c1e;"></i>
              <!-- <i class="fa fa-globe mx-1 " style="color: #49b1e5;"></i> -->
            </div>
            <h3>BLUESTAR AUOTO SPAREPARTS</h3>
            <div class="web_view"><a href="https://bluestarspareparts.com/">View Website <i
                  class="fa-solid fa-caret-right"></i></a></div>
          </div>
          <img src="../assetsnew/img//webdev/best web-design development calicut1.png"
            alt="best web-design development calicut1">

        </div>
      </div>

    </div>
    <div style="display: flex;justify-content: center;">
      <div class="web_view" style="width: 300px;padding: 10px;">
        <a href="../Clients.php#partner_section_web">View More Websites <i class="fa-solid fa-caret-right"></i></a>
      </div>
    </div>
  </div>
</section>
<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll(".slide");
  const totalSlides = slides.length;

  function moveSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    document.getElementById("slider").style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  setInterval(moveSlide, 3000);
</script>












<!--===== CTA AREA STARTS =======-->
<div class="cta-section-area">
  <img src="../assetsnew/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="../assetsnew/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="cta-header-area text-center sp4 heading2">
          <h2>Ready To Take Your WEBSITE To <br class="d-md-block d-none"> The Next Level</h2>
          <p>Effective SEO strategies not only elevate a website's visibility but also drive <br
              class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
          <div class="btn-area text-center">
            <a href="<?php echo BASE_URL; ?>Contact.html"class="header-btn1">Connect Us <span><i
                  class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->




<!-- ==== Accordian ==== -->
<section class="qa-section">
  <div class="container">
    <h2>Frequently Asked <span class="qstn">Question</span></h2>
    <div class="auto-container">
      <div class="row">
        <div class="col-md-6 ">
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> What services does Iberr Technologies in Calicut and Malappuram offer in web design and
              development?</p>
          </button>
          <div class="panel">
            <p>Iberr Technologies specializes in a wide range of web design and development services, including custom
              website design, responsive web development, e-commerce solutions, content management systems (CMS), and
              web application development.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> How experienced is Iberr Technologies in the field of web design and development?</p>
          </button>
          <div class="panel">
            <p>Iberr Technologies boasts a team of highly skilled professionals with extensive experience in web
              design
              and development. Our track record includes successful projects for clients across various industries.
            </p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Can Iberr Technologies create mobile-friendly websites?</p>
          </button>
          <div class="panel">
            <p>Absolutely. Iberr Technologies prioritizes responsive web design, ensuring that websites adapt
              seamlessly
              to various screen sizes, providing an optimal user experience on both desktop and mobile devices.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> What technologies does Iberr Technologies use for web development?</p>
          </button>
          <div class="panel">
            <p>Iberr Technologies leverages cutting-edge technologies, including HTML5, CSS3, JavaScript, Bootstrap,
              and
              PHP to create dynamic and interactive web applications.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Does Iberr Technologies provide e-commerce solutions?</p>
          </button>
          <div class="panel">
            <p>Yes, Iberr Technologies excels in developing robust e-commerce platforms designed to meet the unique
              needs of businesses. Our solutions include secure payment gateways, inventory management, and
              user-friendly interfaces.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Can Iberr Technologies redesign an existing website?</p>
          </button>
          <div class="panel">
            <p>Certainly. Iberr Technologies offers website redesign services to enhance the visual appeal, user
              experience, and functionality of existing websites, ensuring they stay current and competitive in the
              digital landscape.</p>
          </div>
          <br>
        </div>
        <div class="col-md-6">
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Is Iberr Technologies experienced in SEO-friendly web development?</p>
          </button>
          <div class="panel">
            <p>Absolutely. Our web development practices adhere to SEO best practices, ensuring that websites are
              optimized for search engines, thereby enhancing online visibility and attracting organic traffic.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> What is the typical timeframe for completing a web development project with Iberr
              Technologies?</p>
          </button>
          <div class="panel">
            <p>The timeframe for a web development project varies based on the complexity and scope. Iberr
              Technologies
              works closely with clients to establish realistic timelines and milestones, ensuring timely delivery
              without compromising quality.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Can Iberr Technologies assist with website analytics and performance tracking?</p>
          </button>
          <div class="panel">
            <p>Certainly. Iberr Technologies can integrate analytics tools and set up performance tracking for
              websites,
              providing clients with valuable insights into user behavior, traffic patterns, and other key metrics.
            </p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> How does Iberr Technologies ensure the security of websites and web applications?</p>
          </button>
          <div class="panel">
            <p>Security is a top priority for Iberr Technologies. We implement industry-standard security measures,
              including data encryption, secure authentication, and regular security audits, to safeguard websites and
              web applications against potential threats.</p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> Can Iberr Technologies assist with website maintenance and updates?</p>
          </button>
          <div class="panel">
            <p>Yes, Iberr Technologies provides ongoing website maintenance services, including software updates,
              security patches, and content updates, to ensure that websites remain functional, secure, and
              up-to-date.
            </p>
          </div>
          <br>
          <button class="accordion zoom zoom-in">
            <p><span>Q</span> How does Iberr Technologies handle client feedback during the web development process?
            </p>
          </button>
          <div class="panel">
            <p>Iberr Technologies values client feedback and encourages open communication throughout the development
              process. We incorporate client input at key stages, ensuring the final product aligns with their vision
              and expectations.</p>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==== Accordian end === -->



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

    <script> 
    // Function to set or update the canonical tag with the current page URL
      function setCanonical() {
          const url = window.location.href;
          let canonical = document.querySelector('link[rel="canonical"]');
          if (canonical) {
              // Update the existing canonical tag
              canonical.href = url;
          } else {
              // Create a new canonical tag
              canonical = document.createElement('link');
              canonical.rel = 'canonical';
              canonical.href = url;
              document.head.appendChild(canonical);
          }
      }
      // Set the canonical tag to the current page URL
      setCanonical();
</script>

<script>
	function updateAltTags() {
    const altTags = [
        "best seo company in calicut",
        "top seo agency in calicut",
        "affordable seo services in calicut",
        "seo experts in calicut",
        "professional seo agency calicut",
        "calicut digital marketing and seo",
        "local seo company in calicut",
        "seo consultants in calicut",
        "best digital marketing company in calicut",
        "result-driven seo services in calicut"
    ];

    const images = document.querySelectorAll('img');

    images.forEach((img, index) => {
        // Assign alt text from the list, cycling through if there are more images than alt texts
        img.alt = altTags[index % altTags.length];
    });
}

// Call the function to update all img tags
updateAltTags();
</script>

<?php
include('../footer.php');
?>