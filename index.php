<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="./plugins/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./plugins/meanmenu/meanmenu.css">
  <link rel="stylesheet" href="./plugins/slick-1.8.1/slick.css">
  <link rel="stylesheet" href="./plugins/fancybox-master/jquery.fancybox.min.css">
  <link rel="stylesheet" href="./plugins/aos-animation/aos.css">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@200;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./fonts/ep-icon-fonts/css/style.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.min.css">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="./css/settings.css">
  <link rel="stylesheet" href="./css/style.css">

   <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CJPQZ8TN02"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-CJPQZ8TN02');
	</script>
</head>

<body>
<!-- <div class="loader-container" style="display:none;">
    <svg class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
</div> -->
<?php
session_start();
if (isset($_SESSION['status'])) {
	//$status = $_SESSION['status'];
	if($_SESSION['status']=1){
		echo "<script>alert('We will get in touch with you.')</script>";
	}else {
  echo "<script>alert('Some error occured while sending mail')</script>";
}
unset($_SESSION['status']);
} 

?>
<div class="site-wrapper">
  <div class="overlay">
    <div class="bottom-layer"></div>
  </div>
<!-- Header Starts -->
  <header class="site-header position-relative">
        <div class="container">
            <div class="row justify-content-center align-items-center position-relative">
                <div class="col-sm-3 col-6 col-lg-2 col-xl-2 order-lg-1">
                  <!-- Brand Logo -->
                    <div class="brand-logo">
                        <a href=""><img src="image/logo/logoblack.png" alt="logo" title="SAGLOBAL" /></a>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-2 col-xl-2 d-none d-sm-block order-lg-3">
                    <div class="header-btns justify-content-end">
                        <!-- <a href="#" class="btn btn-link">Contact</a> -->
                        <ul>
                          <li><a href="https://www.facebook.com/saglobalrw" target="_blank"><img src="image/icons/icons8-facebook-60.png" /></a></li>
                          <li><a href="#"><img src="image/icons/icons8-instagram-logo-48.png" /></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Menu Block -->
                <div class="col-sm-1 col-6 col-lg-6 col-xl-6 offset-lg-2  position-static order-lg-2">
                    <div class="main-navigation">
                        <ul class="main-menu">
                            <li class="menu-item has-dropdown">
                                <a href="#aboutus">About</a>
                                    <!-- <ul class="menu-dropdown">
                                        <li class="single-item">
                                            <a href="">
                                            <h3>Demo</h3> 
                                            <p>Demo text</p>
                                            </a>
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                 <h3>Demo</h3> 
                                            <p>Demo text</p>
                                            </a> 
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                <h3>Demo</h3> 
                                            <p>Demo text</p>
                                        </a> 
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                    <h3>Demo</h3> 
                                            <p>Demo text</p>
                                            </a> 
                                        </li>
                                    </ul> -->
                                </li>
                            <li class="menu-item "><a href="#productline">Product Line</a></li>
                    
                            <li class="menu-item"><a href="#aboutus">Our Story</a></li>
                            <li class="menu-item"><a href="#contactus">Contact Us</a></li>
                            </ul>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
        <div class="shape-holder header-shape" data-aos="fade-down" data-aos-once="true"><img src="image/header-shape.svg" alt=""></div>
  </header>

<!-- Hero-Area -->
<div class="hero-area position-relative">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-7 col-12">
        <div class="hero-content">
          <h1>S.A. Global Ltd</h1>
          <!-- <p>S.A Global is a Soap & Detergent Production Company, it is a registered company by
RDB will be located at the kigali special economic zone phase two,Msoro,Gasabo
District</p> -->
<p>Producer of Soap & Detergent based in Rwanda</p>
          <div class="hero-btn"><a href="#productline" class="btn primary-btn btn--hover-shine">Product-line</a></div>
          <!-- <div class="rating"> -->
            <!-- <div class="icon"> -->
              <!-- <i class="fas fa-star active"></i> -->
              <!-- <i class="fas fa-star active"></i> -->
              <!-- <i class="fas fa-star active"></i> -->
              <!-- <i class="fas fa-star active"></i> -->
              <!-- <i class="fas fa-star"></i> -->
            <!-- </div> -->
            <!-- <span class="text">Trused by over 4,332 customers</span> -->
          <!-- </div> -->
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-5 col-12">
        <div class="hero-media">
          <img src="image/product/ozzy_transparent.png" alt="">
          <!-- <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>
          <div class="media-shape animate-spin"><img src="image/media-shape.png" alt="">-->
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="shape-holder hero-shape" data-aos="fade-right" data-aos-once="true"><img src="image/hero-orange-shape.svg" alt=""></div>
</div>

<!-- Facts Section -->
<section class="facts-section">
  <div class="container">
    <div class="position-relative">
      <div class="fact-absolute">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 mb--35  text-center">
                <span class="fact-text">The #1 Detergent in the Africa</span>
              </div>
            </div>
            <div class="row justify-content-center space-db--30">
                <!-- <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">12,382</span>
                            <p class="info">Happy customers</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/users-wm.png" alt="">
                          </div>
                        </div>
                </div>
                 -->
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">1</span>
                            <p class="info">Location</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/fact-2.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">100%</span>
                            <p class="info">Happy Customers</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/fact-3.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">1</span>
                            <p class="info">Product in Africa</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/fact-4.png" alt="">
                          </div>
                        </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</section>


<!-- Course section -->
<section class="course-section position-relative">
  <div class="shape-holder">
    <img src="./image/section-2-shape-bg.svg" alt="">
  </div>
  <div class="shape-holder" data-aos="zoom-in"  data-aos-once="true">
    <img src="./image/section-2-shape.svg" alt="">
  </div>
  <div class="shape-holder course-shape-3" data-aos="zoom-in-left" data-aos-once="true">
    <img src="./image/course-yelloow-svg.svg" alt="">
  </div>
  <div class="container pt-lg--85">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title section-black">
          <h2>Our Process</h2>
          <p>We go through an extensive process to present the best product in the category.</p>
        </div>
      </div>
    </div>
    <div class="accordion course-accordion" id="accordionExample" >
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="card-header" id="headingOne">
          <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="./image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Raw materials gathering</h3>
                    <p>Rigorous quality control and in-house procedures encompass our manufacturing and packaging processes. Product performance is key to our success. For over  years, our tried and tested products have proven themselves in the toughest healthcare environments. Customers can be confident that our products offer exceptional performance and deliver consistent results.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-xl-4 col-lg-5 offset-xl-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div> -->
          </div>
          
        </div>
    
        <!-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div> -->
      </div>
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
        <div class="card-header" id="heading2">
          <div class="row">
              <div class="col-lg-12">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="./image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Industrial Manufacturing</h3>
                    <p>Using our knowledge and experience, we work with our customers to troubleshoot and eliminate end user problems. Our superior technical support ensures optimal use of our products and enhances overall customer satisfaction.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-4 offset-lg-2"> -->
                <!-- <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div> -->
              <!-- </div> -->
          </div>
          
        </div>
    
        <!-- <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div> -->
      </div>
      <!-- <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
        <div class="card-header" id="heading3">
          <div class="row">
              <div class="col-lg-6">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="./image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Quality Check</h3>
                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div>
          </div>
          
        </div>
    
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div> -->
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
        <div class="card-header" id="heading4">
          <div class="row">
              <div class="col-lg-12">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="./image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Market Shipping</h3> 
                    <p>Our extensive modern warehouse facility allows us to stock large quantities of customer finished goods, enabling us to significantly reduce order lead times and fast track orders to our clients.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-4 offset-lg-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div> -->
          </div>
          
        </div>
    
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Aurthor Starts -->
<div class="aurthor-section">
  <div class="container">
    <div class="row  spacing-bottom mb--10">
      <div class=" col-lg-5 col-md-4" data-aos="zoom-in-right"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="aurthor-image">
          <img src="image/product/product.jpeg" alt="OZZY">
        </div>
      </div>

      <div class="col-lg-6 offset-md-1 col-md-6" data-aos="zoom-in-left"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="aurthor-content">
          <!-- <span class="account">@something</span> -->
          <h2 id="productline">OZZY</h2>
          <p>Your <b>Expert</b> in <b style="color: #F01F26;">washing</b> and <b>cleaning</b>. <br>Made in Rwanda</p>
        </div>
      </div>
    </div>
    <span class="section-devider"></span>
  </div>
</div>

<!-- Testimonial Starts -->
<!--<section class="testimonial-section position-relative">
  <div class="container">
      <div class="row">
          <div class="col-lg-7 col-xl-6">
              <h2 class="">Testimonials</h2>
          </div>
      </div>
      <div class="testimonial-slider-wrapper">
          <div class="slider-btns"></div>
          <div class="testimonial-slider">
              <div class="single-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="./image/t4-card-2.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Annie Reyes</h4>
                          <span class="d-block">Founder of Crips</span>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, earum suscipit? Mollitia voluptates eveniet saepe iste! Nihil animi quia, ipsam maxime cumque consectetur ducimus! Dicta iusto tenetur pariatur in consequuntur?</p>
                          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a> 
                      </div>
                  </div>
              </div>
              <div class="single-slide" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="./image/t4-card-3.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Jay Fletcher</h4>
                          <span class="d-block">Marketing Head at Gigri Solution</span>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, earum suscipit? Mollitia voluptates eveniet saepe iste! Nihil animi quia, ipsam maxime cumque consectetur ducimus! Dicta iusto tenetur pariatur in consequuntur?</p>
                      </div>
                  </div>
              </div>
              <div class="single-slide"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="./image/t4-card-1.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Arthur Keller</h4>
                          <span class="d-block">CTO at Drivin</span>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, earum suscipit? Mollitia voluptates eveniet saepe iste! Nihil animi quia, ipsam maxime cumque consectetur ducimus! Dicta iusto tenetur pariatur in consequuntur?</p>
                      </div>
                  </div>
              </div>
              <div class="single-slide"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="./image/t4-card-1.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Annie Reyes</h4>
                          <span class="d-block">Founder of Crips</span>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, earum suscipit? Mollitia voluptates eveniet saepe iste! Nihil animi quia, ipsam maxime cumque consectetur ducimus! Dicta iusto tenetur pariatur in consequuntur?</p>
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
  </div>
  <div class="shape-holder testimonial-shape" data-aos="zoom-in-left" data-aos-once="true"><img src="image/testimonial-shape.svg" alt=""></div>
</section>-->


<!-- FAQ Section -->
<section class="faq-section position-relative">
  <div class="container">
  <!-- faq accordionExample -->
  <!-- <div class="faq-accordion">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title"><h2>Frequently Asked Questions</h2></div>
  
        <div class="accordion faq-accordion space-db--10" id="accordionExample2">
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <button class="faq-head" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
              <h2>Will I get full access to the course after purchasing?</h2>
              <i class="icon icon-minimal-down"></i>
            </button>
        
            <div id="faq1" class="collapse show" aria-labelledby="faq-heading1" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200" data-aos-once="true">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">
                  <h2>Do you give money back guarantee?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq2" class="collapse" aria-labelledby="faq-heading2" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="400">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                  <h2>How can I submit my questions after joining?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq3" class="collapse" aria-labelledby="faq-heading3" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">
                  <h2>Do you offer a discount?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq4" class="collapse" aria-labelledby="faq-heading4" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="">
    <div class="section-title"  id="contactus"><h2>Contact Us</h2></div>
    <div class="row">
      <div class="col-lg-6 col-md-6" data-aos="zoom-in-right"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="content">
          <h2>Get <span class="text--primary fs-inherit">In Touch</span> </h2>
          <!-- <p>Create custom landing pages with Shades that convert more visitors than any website, no coding required.</p> -->
          <div style="width: 100%; height: 500px;">
            <!-- Form -->

            <form name="contactForm" action="sendmail.php" method="POST" class="form-container"
            onsubmit="return validateForm()">
            <div class="form-group">
                <label for="firstName" class="bmd-label-floating">First Name</label>
                <input type="text" name="firstName" class="form-control" required id="firstName">
                <div class="error-label" id="firstNameErr"></div>
            </div>

            <div class="form-group">
                <label for="lastname" class="bmd-label-floating">Last Name</label>
                <input type="text" name="lastName" required class="form-control" id="lastName">
                <div class="error-label" id="lastNameErr"></div>
            </div>

            <div class="form-group">
                <label for="email-address" class="bmd-label-floating">Email</label>
                <input type="email" name="email" required class="form-control" id="email-address">
                <div class="error-label" id="emailErr"></div>
            </div>

            <div class="form-group is-focused-force">
                <label for="phone-number" class="bmd-label-floating">Phone Number</label>
                <input type="tel" name="phone" required class="form-control" id="phone-number">
                <div class="error-label" id="phoneErr"></div>
            </div>
            
            <div class="form-group is-focused-force">
              <label for="phone-number" class="bmd-label-floating">Message</label>
              <textarea class="textarea"  name="message"></textarea>
              <!-- <div class="error-label" id="phoneErr"></div> -->
          </div>

            <input type="submit" name="submit" class="primary-btn btn--hover-shine  submit" value="Submit" />
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6" data-aos="zoom-in-left"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="h-100">
          <!-- <img src="image/guarnatee.png" alt=""> -->
          <div class="blankSeparator">
          </div>
          <div class="contactUs_address">
            <h3>S.A GLOBAL LTD </h3>
            <p>Atlanta Business Company, Prime Economic Zone,<br> Phase 1, Masoro, Kigali, Rwanda</p>
            <p>Phone: 890-212-1212</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="shape-holder faq-shape" data-aos="zoom-in-right" data-aos-once="true"><img src="image/faq-shape.svg" alt=""></div>
</section>



<!-- Footer Section -->
<div class="footer-section position-relative">
  <div class="container margin-decrese">
      <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8 col-xl-7" data-aos="flip-down" data-aos-delay="55" data-aos-duration="2000" data-aos-once="true">
            <div class="footer-content">
                <span class="title-small-text">Who are we?</span>
                <h2 id="aboutus">About Us</h2>
                <p>The Laundry detergent business unit in Kigali, Rwanda from S.A Global Ltd is new and only unit in Africa from the company, It all started with a product called Ozzy detergent powder. In 2020, Subarno Paul and Anirban Mitra founded the company S.A Global Ltd.</p>
                <p>We are an independent company, with  years of experience in  producing high quality laundry care products. We are in this business with Rwanda's leading FMCG suppliers and distributors.</p>
                <div class="about-hero col-md-12">
                  <ul class="col-md-12">
                    <li class="col-md-6">
                      <img src="image/about/anirban.jpg" />
                    </li>
                    <li class="col-md-6">
                      <img src="image/about/subarno.jpeg" />
                    </li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <span class="section-devider mt--130"></span>
      <div class="row mt--70">
          <div class="col-lg-4 col-xl-4 col-sm-6 col-margin">
              <span class="ft-title-sm">About</span>
              <div class="row">
                <div class="col-lg-5 col-4">
                    <ul class="footer-list">
                        <li><a href="#aboutus">About</a></li>
                        <li><a href="#contactus">Contact Us</a></li>
                       
                      </ul>
                </div>

                <div class="col-lg-7 col-8">
                  <!-- <span class="ft-title-sm">About</span> -->
                    <ul class="footer-list">
                        <li><a href="#productline">Products</a></li>
                        <li><a href="#">Help &amp; Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                      </ul>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-sm-6 col-margin">
              <span class="ft-title-sm">Products</span>
              <ul class="footer-list">
                <li><a href="#productline">OZZY</a></li>
              </ul>
          </div>
          <div class="col-lg-5 col-xl-5 col-margin">
            <div class="ft-newsletter-box">
                <span class="ft-title-sm">Subscribe to our newsletter</span>
                <p>Subscribe to get lastest offers, news and events announcements. No spam in your inbox.</p>
                <form action="">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your email address">
                    <button class="submit-btn"><i class="icon icon-tail-right"></i></button>
                  </div>
                </form>
            </div>
          </div>
        </div>
  </div>
  <div class="shape-holder footer-shape-1" data-aos="zoom-in-left" data-aos-once="true"><img src="image/cta-shape.svg" alt=""></div>
  <div class="shape-holder footer-shape-2" data-aos="zoom-in-right" data-aos-once="true"><img src="image/footer-shape.svg" alt=""></div>
</div>
</div>
  <!-- Vendor JS-->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/jquery/jquery-migrate.min.js"></script>
  <script src="./plugins/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>

  <!-- Plugins JS -->
  <script src="./plugins/meanmenu/jquery.meanmenu.js"></script>
  <script src="./plugins/slick-1.8.1/slick.min.js"></script>
  <script src="./plugins/fancybox-master/jquery.fancybox.min.js"></script>
  <script src="./plugins/aos-animation/aos.js"></script>

  <!-- Custom JS -->
  <script src="./js/active.js"></script>
</body>

</html>
