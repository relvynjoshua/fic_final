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

         <!-- START LOGO AREA -->
         <div class="logo-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                     <div class="logo">
                        <a href="index.html">
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
                        <p>123-456-789</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-eye-open"></i>
                        </div>
                        <h5>Opening hours</h5>
                        <p>Mon - Fri : 09:00 - 16:00</p>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END LOGO AREA -->

         <!-- START NAVIGATION AREA -->
         <div class="sticky-menu">
            <div class="mainmenu-area">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-9 d-none d-lg-block d-md-none">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                           <ul class="navbar-nav">
                              <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                              <li><a href="about.html" class="nav-link">About Us</a></li>
                              <li class="dropdown"><a class="nav-link" href="services.html">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="single-service.html">Documents</a></li>
                                    <li><a href="single-service.html">Facilities</a></li>
                                    <li><a href="single-service.html">Online Inquiries</a></li>
                                 </ul>    
                              </li>
                              <li><a href="gallery.html" class="nav-link">Gallery</a></li>
                              <li class="dropdown"><a class="nav-link" href="#">Pages</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="teachers.html">Administration</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown"><a class="nav-link" href="blog.html">News</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">News List</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                </ul>
                              </li>
                              <li><a href="contact.html" class="nav-link">Contact</a></li>
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
      </header>
      <!-- END HEADER SECTION -->

      <!-- START PAGEBREDCUMS -->
      <div class="page-banner page-banner-overlay" data-background="assets/img/bg/banner-bg.jpg">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Error Page</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="#">Home</a> 404</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START ERROR PAGE SECTION -->
      <section id="error" class="section-padding">
         <div class="auto-container">
            <div class="row text-center">
               <div class="col-lg-8 col-md-8 col-12 mx-auto">
                  <div class="error-page-wrap">
                      <h3>4<i class="icofont icofont-optic"></i>4</h3>
                     <h4>Oops! Page Not Found</h4>
                     <p>Page you are looking for counld not be found</p>
                     <a href="#" class="error-btn"><i class="icofont icofont-ui-home"></i>Back to home</a>
                     <div class="search-box-wrap mt-5 wow fadeInUp">
                        <form class="search-box shadow mt-5">
                          <div class="search-body row no-gutters align-items-center">
                              <div class="col">
                                  <input class="form-control form-control-lg search-box-form-control" type="search" placeholder="Search again...">
                              </div>
                              <!--end of col-->
                              <div class="col-auto">
                                  <button class="btn btn-lg btn-search" type="submit">Search</button>
                              </div>
                              <!--end of col-->
                          </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- END ERROR PAGE SECTION -->

      <!-- START NEWSLETTER SECTION -->
      <section id="hnewsletter" class="hnewslettr-padding bg-theme">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-12 mb-lg-0 mb-4">
                  <div class="hnewslettr-left">
                     <h2>Subscribe to our Newsletter</h2>
                     <p>Enter your email and we'll send you details about new courses and events.</p>
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-5 mt-3">
                  <div class="hnewslettr-form">
                     <form action="#" method="post">
                        <div class="form-group">
                           <span class="form-icon"><i class="icofont-envelope"></i></span>
                           <input name="semail" class="form-control" placeholder="Your Email Address" type="email">
                           <button type="submit" class="btn news-btn">Subscribe</button>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- START NEWSLETTER SECTION -->

      <!-- START FOOTER -->
      <footer class="footer-section">
         <div id="top-footer" class="overlay-2 section-back-image-2" data-background="assets/img/bg/footer-bg.jpg">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <div class="logo">
                           <a href="index.html">
                              <img class="img-fluid" src="assets/img/logo.png" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="footer-widget-inner">
                        <p>Pellentesque Sed ut perspiciatisd oms iste natus error sitr undelr voluptateml accusantium udema dolore lomquede laudantium, totarmd aperiam, eaquere ipsa quae ab illa inventore veritatis etr quasi lorem architecto.</p>
                        <div class="img-menu float-lg-left float-none mt-3">
                           <div class="footer-social">
                              <ul>
                                 <li><a class="social-fb" href="#"><i class="icofont-instagram"></i></a></li>
                                 <li><a class="social-tw" href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a class="social-gp" href="#"><i class="icofont-youtube"></i></a></li>
                                 <li><a class="social-fb" href="#"><i class="icofont-linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Latest Post</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="singleRecpost">
                           <img src="assets/img/blog/1.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">Designing Learner-Centered Classroom</a>
                           </h6>
                           <p class="posted-on">18 MAY 2021</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="assets/img/blog/2.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">Building an environment for learning</a>
                           </h6>
                           <p class="posted-on">17 MAY 2021</p>
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
                           <li><a href="#"><i class="icofont-circled-right"></i> Our Classes</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Latest Services</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Our Teachers</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Image Gallery</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Frequently Question</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Client Testimonial</a></li>
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
                                 <p>Brooklyn, NY 11212</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-smart-phone"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>123-456-0975</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-envelope"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>info@yoursite.com</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-clock-time"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Mon - Sun : 09:00 - 18:00</p>
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
                     <p class="copyright-text">Copyright © 2021 <a href="#">USTP - FIC</a> | All Rights Reserved</p>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="footer-menu">
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Contact Us</a></li>
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