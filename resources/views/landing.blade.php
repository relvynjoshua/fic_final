<!DOCTYPE html>
<html lang="en">

    <head>
        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
        <!--Favicons-->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset ('img/favicon.ico') }}" />
  
        <!--Page Title-->
        <title>Admin Login</title>
        
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

        <style>
            .solid-box {
                width: 100%;
                background-color:#EE2C22;
                text-align: center;
                padding: 20px 0;
            }
        </style>
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
                                    <li><a href="teachers.blade.php">Administration</a></li>
                                    <li><a href="faq.blade.php">FAQ</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.blade.php" class="nav-link" >News</a></li>
                                <li><a href="contact.blade.php" class="nav-link">Contact</a></li>
                                <li class="active"><a href="admin.blade.php" class="nav-link">Login</a></li>
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
                        <img class="img-fluid" src="{{asset ('img/fic.jpg') }}" alt="">
                        </a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
            </div>
            <!-- END LOGO AREA -->
        </header>
        <!-- END HEADER SECTION -->

        <div id="auto-container">
            <div class="faq-lis-heading text-center">
                <div class="solid-box">
                    <h4 style="color:#fff"> 
                        Hello User!
                    </h4>
                    <br>
                    <a href="{{ url('/sign-in-up') }}" class="btn con-btn-login">Login/Register</a>
                </div>
            </div> 
        </div>


        <!-- START FOOTER -->
        <footer class="footer-section">
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