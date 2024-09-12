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
      <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />

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
                              <li class="active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                              <li><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                              <li class="dropdown"><a class="nav-link" href="{{ url('/services') }}">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{{ url('/documents') }}">Documents</a></li>
                                    <li><a href="{{ url('/form-page') }}">Forms</a></li>
                                    <li><a href="{{ url('/single-service') }}">Facilities</a></li>
                                 </ul>    
                              </li>
                              <li><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
                              <li class="dropdown"><a class="nav-link" href="#">Pages</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{{ url('/administration') }}">Administration</a></li>
                                    <li><a href="{{ url('/') }}">FAQ</a></li>
                                 </ul>
                              </li>
                              <li><a href="{{ url('/news') }}" class="nav-link" >News</a></li>
                              <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                              <li><a href="{{ url('/sign-in-up') }}" class="nav-link">Login</a></li>
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
                        <a href="{{ url('/') }}">
<<<<<<< HEAD
                        <img class="img-fluid" src="{{ asset('/img/fic.jpg') }}" alt="">
=======
                        <img class="img-fluid" src="{{ asset('assets/img/fic.jpg') }}" alt="">
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
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
                        <p>Mon - Fri : 09:00 - 16:00</p>
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

      <!-- START PAGEBREDCUMS -->
      <div class="page-banner page-banner-overlay" data-background="{{ asset('/img/bldg/bldg3.jpg') }}">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Facilities</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="{{ url('/') }}">Home</a> <a href="{{ url('/services') }}"> Services</a> Facilities</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START PORTFOLIO PAGE SECTION -->
      <section id="galleryPage" class="section-padding">
         <div class="auto-container">
            <div class="row mb-5">
               <div class="col-12 mx-auto text-center wow fadeInDown">
                  <div class="portfolio-filter-menu">
                     <ul>
                        <li class="filter active"  data-filter="*">All</li>
                        <li class="filter"  data-filter=".one">Products</li>
                        <li class="filter"  data-filter=".two">Laboratory</li>
                        <li class="filter"  data-filter=".three">Equipments</li>
                        <li class="filter"  data-filter=".four">Others</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- end portfolio menu list -->
            <div class="row project-list">
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/1.png') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/1.png') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/2.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/2.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/3.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/3.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/4.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/4.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/5.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/5.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/6.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/6.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/7.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/7') }}.jpg" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/8.jpg') }}" alt="" />
                     <figcaption>
                        <h3>PRODUCTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/8.jpg') }}" data-title="PRODUCTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 three">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/equip1.jpg') }}" alt="" />
                     <figcaption>
                        <h3>EQUIPMENTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="/img/Facilities/equip1.jpg" data-title="EQUIPMENTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 three">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/equip2.jpg') }}" alt="" />
                     <figcaption>
                        <h3>EQUIPMENTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/equip2.jpg') }}" data-title="EQUIPMENTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 three">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/equip3.jpg') }}" alt="" />
                     <figcaption>
                        <h3>EQUIPMENTS</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/equip3.jpg') }}" data-title="EQUIPMENTS" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 two">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/lab1.jpg') }}" alt="" />
                     <figcaption>
                        <h3>LABORATORY</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/lab1.jpg') }}" data-title="LABORATORY" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 two">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="{{ asset('/img/Facilities/lab2.jpg') }}" alt="" />
                     <figcaption>
                        <h3>LABORATORY</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="{{ asset('/img/Facilities/lab2.jpg') }}" data-title="LABORATORY" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="https://www.facebook.com/nmficustpcdo/photos_by" target="_blank"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>      
               <!--  end single item -->
      </section>
      <!-- END PORTFOLIO PAGE SECTION -->






      <!-- START CALL TO ACTION SECTION -->
      <section id="calltoactiontwo" class="callto-action-padding bg-theme">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-9 col-md-6 col-12 mb-lg-0 mb-4">
                  <div class="callto-action-left">
                     <h2></h2>
                     <p>NORTHERN MINDANAO FOOD INNOVATION CENTER FACILITIES</p>
                  </div>
               </div>
         </div>
      </section>
      <!-- START CALL TO ACTION SECTION -->

           <!-- START FOOTER -->
           <footer class="footer-section">
            <div id="top-footer" class="overlay-2 section-back-image-2" data-background="{{ asset('/img/bg/fic-footer.jpg') }}">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="footer-widget-title col-12 p-0">
                           <div class="logo">
                              <a href="index.blade.php">
                                 <img class="img-fluid" src="{{ asset('/img/ff.png') }}" alt="">
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
                              <img src="{{ asset('/img/NMFIC2.jpg') }}" alt="" class="img-fluid">
                              <h6 class="recTitle">
                                 <a href="#">USTP CDO COVID-19 Initiative</a>
                              </h6>
                              <p class="posted-on">1 APRIL 2020</p>
                           </div>
                           <div class="singleRecpost">
                              <img src="{{ asset('/img/NMFIC4.jpg') }}" alt="" class="img-fluid">
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
                              <li><a href="{{ url('/documents') }}"><i class="icofont-circled-right"></i> Documents</a></li>
                              <li><a href="{{ url('/services') }}"><i class="icofont-circled-right"></i> Latest Services</a></li>
                              <li><a href="{{ url('/administration') }}"><i class="icofont-circled-right"></i> Administration</a></li>
                              <li><a href="{{ url('/gallery') }}"><i class="icofont-circled-right"></i> Image Gallery</a></li>
                              <li><a href="{{ url('/') }}"><i class="icofont-circled-right"></i> FAQs</a></li>
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