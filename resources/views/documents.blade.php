<!DOCTYPE html>
<html lang="en">

    <head>
        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
        <!--Favicons-->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
  
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

     <style>
        /* Change button border color for Documents and Data Log Sheets */
        .download-section ul li a button {
            background-color: transparent;
            color: black; /* Set text color to black */
            padding: 10px;
            text-decoration: none;
            display: inline-block;
            margin: 5px 0;
            border-radius: 4px;
            border: 2px solid #F66D34; /* Border color */
            min-width: 1140px; 
            max-width: 200px;    
        }
        
        .download-section ul li a button:hover {
            background-color: #ff9465;
            color: white; /* Keep text color black on hover */
            border-color: #ff9465; /* Border color on hover */
        }
    </style>
    
    
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
                        <img class="img-fluid" src="{{ asset('assets/img/fic.jpg') }}" alt="">
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


        <!-- START ABOUT PAGE WELCOME SECTION -->
        <section id="pabout" class="about-wel-padding">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="welcome-section-title">
                            <h6 class="theme-color">NMFIC Resources</h6>
                            <h2>Documents </h2>
                            <p>Here are the documents used in the NMFIC, from reservation forms, minutes of meeting, to the statement of account. Processes can be conducted through Face to Face submission or Online submission.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </section>
        <!-- END ABOUT PAGE WELCOME SECTION -->


        <!-- START DOCUMENTS AREA -->
        <div class="auto-container">
            <h1>Downloads</h1>
            <div class="download-section">
                <p>You can download these files.</p>
                <ul>
                    <hr class="wp-block-seperator">
                    <h2>Forms</h2>
                    <li>
                        <a href="assets/downloadable/DPM-USTP-FIC-001 CONDUCT OF EXTERNALLY REQUESTED CONSULTATION_12-01-2021.pdf" download>
                            <button>EXTERNALLY REQUESTED CONSULTATION</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/DPM-USTP-FIC-002 CLIENT-INITIATED FOOD PRODUCT DEVELOPMENT_edited 11-15-2021.pdf" download>
                            <button>CLIENT-INITIATED FOOD PRODUCT DEVELOPMENT</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/DPM-USTP-FIC-003-RESEARCHER-INITIATED-FOOD-PRODUCT-DEVELOPMENT_new.pdf" download>
                            <button>RESEARCHER-INITIATED FOOD PRODUCT DEVELOPMENT</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/DPM-USTP-FIC-004-RENTAL of EQUIPMENT_new.pdf" download>
                            <button>RENTAL of EQUIPMENT</button>
                        </a>
                    </li>
                    <hr class="wp-block-seperator">
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-01 FPD Request Form.pdf" download>
                            <button>FPD Request Form</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-02 Consultation Advisory Request Form.pdf" download>
                            <button>Consultation/Advisory Request Form</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-03 Technical Advisory Services Evaluation Form.pdf" download>
                            <button>Technical Advisory Services Evaluation Form</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-04-Minutes of Meeting.pdf" download>
                            <button>Minutes of Meeting</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-05-Product Development Proposal.pdf" download>
                            <button>Product Development Proposal</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-06-Package of Technology.pdf" download>
                            <button>Package of Technology</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-07-Job Order Request.pdf" download>
                            <button>Job Order Rquest Form</button>
                        </a>
                    </li>
                    <li>
                        <a href="assets/downloadable/FM-USTP-FIC-08-Statement of Account.pdf" download>
                            <button>Statement of Account</button>
                        </a>
                    </li>
                </ul>
                <ul>
                    <hr class="wp-block-seperator">
                    <h2>Data Log Sheet</h2>
                    <li>
                        <a href="path/to/students_handbook.pdf" download>
                            <button>Download Students' Handbook – 2017 Revised</button>
                        </a>
                    </li>
                    <li>
                        <a href="path/to/university_code.pdf" download>
                            <button>Download University Code – 2017 Revised</button>
                        </a>
                    </li>
                    <li>
                        <a href="path/to/guidelines_review_compliance.pdf" download>
                            <button>Download Guidelines in the Review and Compliance Procedures</button>
                        </a>
                    </li>
                    <li>
                        <a href="path/to/joint_affidavit.pdf" download>
                            <button>Download Joint Affidavit on Shared Responsibility</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END DOCUMENTS AREA -->


        <!-- START FOOTER -->
        <footer class="footer-section">
            <div id="top-footer" class="overlay-2 section-back-image-2" data-background="{{ asset('assets/img/bg/fic-footer.jpg') }}">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                        <div class="footer-widget-title col-12 p-0">
                        <div class="logo">
                            <a href="index.blade.php">
                                <img class="img-fluid" src="{{ asset('assets/img/ff.png') }}" alt="">
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
                            <img src="{{ asset('assets/img/NMFIC2.jpg') }}" alt="" class="img-fluid">
                            <h6 class="recTitle">
                                <a href="#">USTP CDO COVID-19 Initiative</a>
                            </h6>
                            <p class="posted-on">1 APRIL 2020</p>
                        </div>
                        <div class="singleRecpost">
                            <img src="{{ asset('assets/img/NMFIC4.jpg') }}" alt="" class="img-fluid">
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