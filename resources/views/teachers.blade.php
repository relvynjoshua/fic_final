<!DOCTYPE html>
<html lang="zxx">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

      <!--Page Title-->
      <title>NMFIC - Mock Website</title>
      
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

   <body>
      
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
                              <li><a href="index.blade.php" class="nav-link">Home</a></li>
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
                                    <li class="active"><a href="teachers.blade.php">Administration</a></li>
                                    <li><a href="faq.blade.php">FAQ</a></li>
                                 </ul>
                              </li>
                              <li><a class="nav-link" href="blog.blade.php">News</a></li>
                              <li><a href="contact.blade.php" class="nav-link">Contact</a></li>
                              <li><a href="contact.blade.php" class="nav-link">Admin</a></li>
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
                        <img class="img-fluid" src="assets/img/fic.jpg" alt="">
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
                           <li><a href="#"><i class="icofont-facebook"></i></a></li>
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
                           <li><a href="#"><i class="icofont-phone"></i>088-856-1738</a></li>
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

      <!-- START PAGEBREDCUMS -->
      <div class="page-banner page-banner-overlay" data-background="assets/img/groupphoto.jpg">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Administration</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="#">Home</a> Administration</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START INTRODUCTION SECTION -->
      <section id="teacherintro" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-lg-0 mb-5">
                  <div class="tea-intro-sec">
                     <h6 class="theme-color">NMFIC Manager</h6>
                     <h2 class="mb-4">Therese June Aranas, PHD</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <div class="team-memeber-social-wrap mt-4 wow fadeInUp">
                        <ul class="team-member-social">
                           <li><a href="#"><i class="icofont-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                           <li><a href="#"><i class="icofont-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="tea-intro-img float-lg-right float-md-right float-none">
                     <img class="img-fluid" src="assets/img/team/sevenseven.png" alt="">
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- END INTRODUCTION SECTION -->

      <!-- START ADMINISTRATION PAGE SECTION -->
      <section id="teachers" class="section-padding pt-0">
         <div class="auto-container">
            <div class="row">
               <div class="col-12 text-left">
                  <div class="section-title section-title-left">
                     <h6 class="theme-color"></h6>
                     <h2>Administration</h2>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row">
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/bossamo.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Asst Prof. Peter Jon Mendoza</h4>
                              <p>Head, Administrative Unit</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/threethree.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Krizzia Marie M. Emata</h4>
                              <p>Administrative Aide</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/eighteight.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Asst. Prof. Erlyn Grace Aguilar</h4>
                              <p>Head, Lab Analysis Unit</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/ninenine.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Ramil E. Gulle</h4>
                              <p>Laboratory Technician</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/fivefive.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Marlou C. Saculinggan</h4>
                              <p>Laboratory Technician</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/twotwo.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Fabio D. Guno Jr.</h4>
                              <p>Technical Researcher</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12 mb-lg-4 mb-md-0 mb-4">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/oneone.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Charina Mae Golosinda</h4>
                              <p>Research Assistant</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end single team item  -->
               <div class="col-lg-3 col-md-4 col-12">
                  <div class="single-team-wrapper">
                     <div class="single-team-member">
                        <img class="img-fluid" src="assets/img/team/fourfour.png" alt="">
                        <div class="single-team-member-content">
                           <ul class="single-team-member-social">
                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                              <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           </ul>
                           <div class="single-team-member-text">
                              <h4>Joeres C. Bete</h4>
                              <p>Utility Maintenance</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              <!-- end single team item  -->
              <div class="col-lg-3 col-md-4 col-12 mb-4">
               <div class="single-team-wrapper">
                  <div class="single-team-member">
                     <img class="img-fluid" src="assets/img/team/sixsix.png" alt="">
                     <div class="single-team-member-content">
                        <ul class="single-team-member-social">
                           <li><a href="#"><i class="icofont-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                           <li><a href="#"><i class="icofont-youtube"></i></a></li>
                        </ul>
                        <div class="single-team-member-text">
                           <h4>Assoc. Prof. Wilva Andoy </h4>
                           <p>Tech Researcher</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single team item  -->
            <div class="col-lg-3 col-md-4 col-12 mb-4">
               <div class="single-team-wrapper">
                  <div class="single-team-member">
                     <img class="img-fluid" src="assets/img/team/10.png" alt="">
                     <div class="single-team-member-content">
                        <ul class="single-team-member-social">
                           <li><a href="#"><i class="icofont-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                           <li><a href="#"><i class="icofont-youtube"></i></a></li>
                        </ul>
                        <div class="single-team-member-text">
                           <h4>Ms. Micah D. Vallejera</h4>
                           <p>Laboratory Technician Lab Analysis Unit</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single team item  -->
            </div>
         </div>
      </section>
      <!-- END ADMINISTRATION PAGE SECTION -->

         <!-- START FOOTER -->
         <footer class="footer-section">
            <div id="top-footer" class="overlay-2 section-back-image-2" data-background="assets/img/bg/fic-footer.jpg">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="footer-widget-title col-12 p-0">
                           <div class="logo">
                              <a href="index.blade.php">
                                 <img class="img-fluid" src="assets/img/ff.png" alt="">
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
                              <img src="assets/img/NMFIC2.jpg" alt="" class="img-fluid">
                              <h6 class="recTitle">
                                 <a href="#">USTP CDO COVID-19 Initiative</a>
                              </h6>
                              <p class="posted-on">1 APRIL 2020</p>
                           </div>
                           <div class="singleRecpost">
                              <img src="assets/img/NMFIC4.jpg" alt="" class="img-fluid">
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
                              <li><a href="index.blade.php">Home</a></li>
                              <li><a href="about.blade.php">About Us</a></li>
                              <li><a href="contact.blade.php">Contact Us</a></li>
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