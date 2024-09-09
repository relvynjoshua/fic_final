<!DOCTYPE html>
<html lang="en">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.ico" />

      <!--Page Title-->
      <title>NMFIC</title>
      
      <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/meanmenu.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/venobox.min.css') }}" rel="stylesheet">
   </head>

   <body id="main">
      
      <!-- START PRELOADER -->
      <div id="page-preloader">
         <div class="loader"></div>
         <div class="loa-shadow"></div>
      </div>
      <!-- END PRELOADER -->

      <!-- START HEADER SECTION -->
      <header class="main-header">
         
         <!-- START NAVIGATION AREA -->
         <div class="sticky-menu">
            <div class="mainmenu-area">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-9 d-none d-lg-block d-md-none">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                           <ul class="navbar-nav">
                              <li class="active"><a href="index.blade.php" class="nav-link">Home</a></li>
                              <li><a href="about.blade.php" class="nav-link">About Us</a></li>
                              <li class="dropdown"><a class="nav-link" href="services.blade.php">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="documents.blade.php">Documents</a></li>
                                    <li><a href="form-page.blade.php">Forms</a></li>
                                    <li><a href="single-service.blade.php">Facilities</a></li>
                                 </ul>    
                              </li>
                              <li><a href="gallery.blade.php" class="nav-link">Gallery</a></li>
                              <li class="dropdown"><a class="nav-link" href="#">Pages</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="teachers.blade.php">Administration</a></li>
                                    <li><a href="faq.blade.php">FAQ</a></li>
                                 </ul>
                              </li>
                              <li><a href="blog.blade.php" class="nav-link" >News</a></li>
                              <li><a href="contact.blade.php" class="nav-link">Contact</a></li>
                              <li><a href="admin.blade.php" class="nav-link">Admin</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-3 d-none d-lg-block d-md-none text-right">
                        <a href="#" class="header-search"  data-toggle="modal" data-target=".header-search-modal"><i class="icofont-search-2"></i></a>
                     </div>

                     <!-- search modal -->
                     <div class="modal fade header-search-modal" tabindex="-1" role="dialog">
                       <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                           <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal"><i class="icofont-close-line"></i></button>
                              <form class="header-search-box">
                                <div class="header-search-body row no-gutters align-items-center">
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control" type="search" placeholder="Search...">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-lg header-search-btn" type="submit"><i class="icofont-search-2"></i></button>
                                    </div>
                                </div>
                              </form>
                           </div>
                         </div>
                       </div>
                     </div>
                     <!-- end search modal -->

                  </div>
               </div>
            </div>
         </div>
         <!-- END NAVIGATION AREA --> 

         <!-- START LOGO AREA -->
         <div class="logo-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                     <div class="logo">
                        <a href="index.blade.php">
                        <img class="img-fluid" src="{{ asset('img/fic.jpg') }}" alt="">
                        </a>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-9 col-12">
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-envelope"></i>
                        </div>
                        <h5>Connect With Us</h5>
                        <p>ustp.fic.edu.ph</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-headphone-alt-3"></i>
                        </div>
                        <h5>Call For Inquiry</h5>
                        <p>856-8159</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-eye-open"></i>
                        </div>
                        <h5>Opening hours</h5>
                        <p>Mon - Fri : 08:00 - 5:00</p>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END LOGO AREA -->

         <!-- START TOP AREA -->
         <div class="top-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                     <div class="header-social">
                        <ul>
                           <li><a href="https://www.facebook.com/nmficustpcdo"><i class="icofont-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-lg-right text-center">
                     <div class="top-menu">
                        <ul>
                           <li><a href="#"><i class="icofont-location-pin"></i>Claro M. Recto Avenue, Lapasan 9000 Cagayan de Oro City, Philippines</a></li>
                           <li><a href="#"><i class="icofont-phone"></i>856-8159</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END TOP AREA -->
      </header>
      <!-- END HEADER SECTION -->

      <!-- START SLIDER SECTION -->
      <section class="slider-section">
         <div class="home-slides owl-carousel owl-theme">
            <div class="home-single-slide" data-background="{{ asset('img/bldg/bldg1_day.jpg') }}">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <!--
                              <h4>USTP - FIC</h4>
                              <h2></h2>
                              <p>To upgrade manufacturing operations and <br>processing systems through
                                 application of new technologies</p>
                              -->
                              <div class="home-single-slide-button mt-4">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
            <div class="home-single-slide" data-background="public/img/bldg/logo_day2.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <!--
                              <h4>USTP - FIC</h4>
                              <h2></h2>
                              <p>Transforming concepts into products<br></p>
                              -->
                              <div class="home-single-slide-button mt-4">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
            <div class="home-single-slide" data-background="public/img/bldg/bldg1_night.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <!--
                              <h4>USTP - FIC</h4>
                              <h2></h2>
                              <p>optimizing resource value through innovation <br>and diversification</p>
                              -->
                              <div class="home-single-slide-button mt-4">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
            <div class="home-single-slide" data-background="public/img/bldg/logo_night.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <!--
                              <h4>USTP - FIC</h4>
                              <h2></h2>
                              <p>optimizing resource value through innovation <br>and diversification</p>
                              -->
                              <div class="home-single-slide-button mt-4">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
         </div>
      </section>
      <!-- END SLIDER SECTION  -->

      <!-- START WELCOME SECTION -->
      <section id="habout" class="welcome-section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-lg-0 mb-5">
                  <div class="about-wel-des">
                     <h6 class="theme-color"><i class="icofont-plus"></i> Food Innovation Center Info</h6>
                     <h2 class="my-4">ABOUT US</h2>
                     <p>The Northern Mindanao Food Innovation Center (NMFIC) was established in 2015 through the collaboration of DOST, DTI, USTP (formerly MUST), FOPANORMIN, and the Office of the 2nd Congressional District of CDO. The Center which is located at the University of Science and Technology of Southern Philippines (USTP) Cagayan de Oro Campus serves as a technology hub for innovations, research and development (R&D), and support services for the food industry in Northern Mindanao.</p>

                     <p class="my-4"><b>It is envisioned that through the Center, support technical expertise, relevant science and technology (S&T) services, infrastructure and facility requirements, will be more accessible for the micro-, small- and medium-scale enterprises (MSMEs) in the food industry at the countryside.</b></p>

                     
                     <div class="about-btn wow fadeInUp">
                        <a href="#" class="about-us-into-btn-2 mr-2">Read More</a>
                        <a href="#" class="about-us-into-btn-icon"><i class="icofont icofont-caret-right"></i></a>
                     </div>
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="about-wel-img-sec img-overlay">
                     <a class="venobox" data-autoplay="true" data-vbtype="video" data-title="Intro Video" data-gall="videoh" href="https://www.youtube.com/embed/Oq61TxejZ5g"><i class="icofont-play-alt-2"></i></a>
                     <div class="img-wrap">
                        <img class="img-fluid" src="public/img/bg/home-about-img.jpg" alt="">
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END WELCOME SECTION -->

      <!-- START SERVICES SECTION -->
      <section id="services" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h2>Current Achievements</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-building-alt"></i> 
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Advance Technologies</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="single-service.blade.php">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-user"></i>
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Amazing Administration</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="teachers.blade.php">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-award"></i>
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Recognition and Awards</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="gallery.blade.php">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END SERVICES SECTION -->

      <!-- START COUNTER SECTION -->
      <section id="counter" class="counter-padding overlay section-back-image" data-background="public/img/bg/ustp3.png">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-12 mx-lg-auto mx-md-auto mx-0">
                  <div class="counter-info">
                     <div class="counter-icon">
                        <i class="icofont-history"></i>
                     </div>
                     <div class="counter-des">
                        <h2><span>Innovating food, </span> <br> for the future</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5 wow fadeInUp">
               <div class="col-lg-8 col-md-8 col-12 mx-lg-auto mx-md-auto mx-0 text-lg-left text-md-left text-center">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">121</h4>
                           <p>Research Studies</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">342</h4>
                           <p>Food Innovated</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">434</h4>
                           <p>Satisfied Partners</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-counter-item">
                           <h4 class="timer">562</h4>
                           <p>Successful Events</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END COUNTER SECTION -->

      <!-- START TEAM SECTION -->
      <section id="team" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h2>Our Administration</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col">
                  <div class="team-slides owl-carousel owl-theme">
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/sevenseven.png" alt="">
                           <div class="single-team-member-content">
                              
                              <div class="single-team-member-text">
                                 <h4>Therese June Aranas, PHD</h4>
                                 <p>NMFIC Manager</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/bossamo.png" alt="">
                           <div class="single-team-member-content">

                              <div class="single-team-member-text">
                                 <h4>Asst Prof. Peter Jon Mendoza</h4>
                                 <p>Head, Administrative Unit </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/threethree.png" alt="">
                           <div class="single-team-member-content">
      
                              <div class="single-team-member-text">
                                 <h4>Krizzia Marie M. Emata</h4>
                                 <p>Administrative Aide</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/eighteight.png" alt="">
                           <div class="single-team-member-content">
                              
                              <div class="single-team-member-text">
                                 <h4>Asst. Prof. Erlyn Grace Aguilar</h4>
                                 <p>Head, Lab Analysis Unit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/ninenine.png" alt="">
                           <div class="single-team-member-content">
                              
                              <div class="single-team-member-text">
                                 <h4>Ramil E. Gulle</h4>
                                 <p>Laboratory Technician</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/fivefive.png" alt="">
                           <div class="single-team-member-content">
                             
                              <div class="single-team-member-text">
                                 <h4>Marlou C. Saculinggan</h4>
                                 <p>Laboratory Technician</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/twotwo.png" alt="">
                           <div class="single-team-member-content">
                              
                              <div class="single-team-member-text">
                                 <h4>Fabio D. Guno Jr.</h4>
                                 <p>Technical Researcher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/oneone.png" alt="">
                           <div class="single-team-member-content">
                              
                              <div class="single-team-member-text">
                                 <h4>Charina Mae Golosinda</h4>
                                 <p>Research Assistant</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/fourfour.png" alt="">
                           <div class="single-team-member-content">
                             
                              <div class="single-team-member-text">
                                 <h4>Joeres C. Bete</h4>
                                 <p>Utility Maintenance</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/sixsix.png" alt="">
                           <div class="single-team-member-content">
                             
                              <div class="single-team-member-text">
                                 <h4>Assoc. Prof. Wilva Andoy</h4>
                                 <p>Tech Researcher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="public/img/team/10.png" alt="">
                           <div class="single-team-member-content">
                             
                              <div class="single-team-member-text">
                                 <h4>Ms. Micah D. Vallejera</h4>
                                 <p>Laboratory Technician Lab Analysis Unit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END TEAM SECTION -->

      <!-- START TESTIMONIAL & FAQ SECTION -->
      <section id="testimonial" class="section-padding overlay section-back-image" data-background="public/img/bg/ustp4.png">
         <div class="auto-container">
            <div class="row ml-lg-4 ml-md-4 ml-0 mr-lg-4 mr-md-4 mr-0">
               <div class="col-lg-6 col-md-12 col-12 mb-lg-0 mb-md-5 mb-5">
                  <div class="section-title white-title section-title-left">
                     <h2>FEEDBACKS</h2>
                  </div>
                  <!-- end section title -->
                  <div class="owl-carousel owl-theme testimonial-wrapper">
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='public/img/testimonial/person.jpg'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>Food Innovation for the future!</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Jone Doe</strong> - Aspiring Innovator</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='public/img/testimonial/person2.jpg'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>Great investment! Looking forward to progress!</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Mark Doe</strong> - Stakeholder</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='public/img/testimonial/person3.jpg'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>Everything is just wonderful! Amazing technology!</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Mahan Selon</strong> - Intrigued Customer</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-12 col-12 mt-lg-0 mt-4">
                  <div class="section-title white-title section-title-left">
                     <h2>Frequently Asked Question</h2>
                  </div>
                  <!-- end section title -->
                  <div class="panel-group faq-home-accor" id="accordion">
                     <div class="panel panel-default mb-3">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">Where is the NMFIC located? <i class=" text-white icofont icofont-minus"></i></a>
                           </h5>
                        </div>
                        <div id="panel1" class="panel-collapse collapse show">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default mb-3">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">What services does the NMFIC provide? <i class=" text-white icofont icofont-plus"></i></a>
                           </h5>
                        </div>
                        <div id="panel2" class="panel-collapse collapse">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">Where can I contact them? <i class=" text-white icofont icofont-plus"></i></a>
                           </h5>
                        </div>
                        <div id="panel3" class="panel-collapse collapse">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!--  end row -->
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END TESTIMONIAL & FAQ SECTION -->

      <!-- START PORTFOLIO SECTION -->
      <section id="portfolio" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">We love our work</h6>
                     <h2>Image Gallery</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col-12 mx-auto text-center wow fadeInDown">
                  <div class="portfolio-filter-menu">
                     <ul>
                        <li class="filter active"  data-filter="*">All</li>
                        <li class="filter"  data-filter=".one">Production</li>
                        <li class="filter"  data-filter=".two">Awards</li>
                        <li class="filter"  data-filter=".three">Booths</li>
                        <li class="filter"  data-filter=".four">Administration</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- end portfolio menu list -->
            <div class="row project-list">
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 two">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC.jpg" alt="" />
                     <figcaption>
                        <h3>NMFIC Awards</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC1.jpg" alt="" />
                     <figcaption>
                        <h3>Administration</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC1.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 two four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC2.jpg" alt="" />
                     <figcaption>
                        <h3>Amazing Innovators</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC2.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 two mb-md-4 mb-4 one three">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC3.jpg" alt="" />
                     <figcaption>
                        <h3>Food Production</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC3.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-4 two one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC4.jpg" alt="" />
                     <figcaption>
                        <h3>Food Production</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC4.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 one three four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="public/img/NMFIC5.jpg" alt="" />
                     <figcaption>
                        <h3>NMFIC Booth</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="public/img/NMFIC5.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
            </div>
            <div class="row mt-4">
               <div class="col-12 mx-auto text-center wow fadeInDown">
                  <a href="gallery.blade.php" class="port-btn">Load More <i class="icofont-bubble-right"></i></a>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END PORTFOLIO SECTION -->

      <!-- START BLOG SECTION -->
      <section id="blog" class="section-padding bg-gray">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">Sometime we want to share</h6>
                     <h2>Latest News</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col">
                  <div class="blog-slides owl-carousel owl-theme">
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="public/img/blog/FIC.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 18, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="public/img/testimonial/person.jpg" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">USTP - FIC</a></span>
                                 <span>Service, Progress</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Food donation for COVID-19 frontliners</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="public/img/blog/FIC2.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 17, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="public/img/testimonial/person2.jpg" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">USTP - FIC</a></span>
                                 <span>Learn, Progress</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Discussions in the FIC building</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="public/img/blog/FIC3.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 16, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="public/img/testimonial/person3.jpg" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">USTP - FIC</a></span>
                                 <span>Service, Progress</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">FIC initiative for COVID-19 frontliners</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="public/img/blog/FIC4.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 15, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="public/img/testimonial/person4.jpg" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">USTP - FIC</a></span>
                                 <span>News, Progress</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">FIC building renovation</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END BLOG SECTION -->

      <!-- START FOOTER -->
      <footer class="footer-section">
         <div id="top-footer" class="overlay-2 section-back-image-2" data-background="public/img/bg/fic-footer.jpg">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <div class="logo">
                           <a href="index.blade.php">
                              <img class="img-fluid" src="public/img/ff.png" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="img-menu float-lg-left float-none mt-3">
                           <div class="footer-social">
                              <ul>
                                 <li><a class="social-fb" href="https://www.facebook.com/nmficustpcdo"><i class="icofont-facebook"></i></a></li>
                                 <li><a class="social-tw" href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a class="social-gp" href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Latest Posts</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="singleRecpost">
                           <img src="public/img/NMFIC2.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">USTP CDO COVID-19 Initiative</a>
                           </h6>
                           <p class="posted-on">1 APRIL 2020</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="public/img/NMFIC4.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">FIC produced snacks for COVID-19 frontliners</a>
                           </h6>
                           <p class="posted-on">13 APRIL 2020</p>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Useful Links</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <ul>
                           <li><a href="documents.blade.php"><i class="icofont-circled-right"></i> Documents</a></li>
                           <li><a href="services.blade.php"><i class="icofont-circled-right"></i> Latest Services</a></li>
                           <li><a href="admin.blade.php"><i class="icofont-circled-right"></i> Administration</a></li>
                           <li><a href="gallery.blade.php"><i class="icofont-circled-right"></i> Image Gallery</a></li>
                           <li><a href="faq.blade.php"><i class="icofont-circled-right"></i> FAQs</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-0">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Get In Touch</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="footer-contact-widget">
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-pin"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Claro M. Recto Ave, Cagayan de Oro</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-smart-phone"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>+639667811333</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-envelope"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>ustp.fic.edu.ph</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-clock-time"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Mon - Fri : 08:00 - 05:00</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <div id="bottom-footer" class="bg-gray">
            <div class="auto-container">
               <div class="row mb-lg-0 mb-md-4 mb-4">
                  <div class="col-lg-6 col-md-12 col-12">
                     <p class="copyright-text">Copyright © 2024 <a href="#">USTP - FIC</a> | All Rights Reserved</p>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="footer-menu">
                        <ul>
                           <li><a href="{{ url('/index') }}">Home</a></li>
                           <li><a href="{{ url('/about') }}">About Us</a></li>
                           <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
      </footer>
      <!-- END FOOTER -->

      <!-- Latest jQuery -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="{{ asset('js/form-contact.js') }}"></script>
      <script src="{{ asset('js/isotope.3.0.6.min.js') }}"></script>
      <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
      <script src="{{ asset('js/jquery.appear.js') }}"></script>
      <script src="{{ asset('js/jquery.inview.min.js') }}"></script>
      <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
      <script src="{{ asset('js/jquery.sticky.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/popper.js') }}"></script>
      <script src="{{ asset('js/scripts.js') }}"></script>
      <script src="{{ asset('js/scrolltopcontrol.js') }}"></script>
      <script src="{{ asset('js/venobox.min.js') }}"></script>
      <script src="{{ asset('js/wow.min.js') }}"></script>
   </body>
</html>