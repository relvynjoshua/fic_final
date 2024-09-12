<!DOCTYPE html>
   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="" />

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />

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
                              <li><a href="{{ url('/news') }}" class="nav-link">News</a></li>
                              <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                              <li><a href="{{ url('/sign-in-up') }}" class="nav-link">Login</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-3 d-none d-lg-block d-md-none text-right">
                        <a href="#" class="header-search" data-toggle="modal" data-target=".header-search-modal"><i
                              class="icofont-search-2"></i></a>
                     </div>

                     <!-- search modal -->
                     <div class="modal fade header-search-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <button type="button" class="close" data-dismiss="modal"><i
                                       class="icofont-close-line"></i></button>
                                 <form class="header-search-box">
                                    <div class="header-search-body row no-gutters align-items-center">
                                       <div class="col">
                                          <input class="form-control form-control-lg form-control" type="search"
                                             placeholder="Search...">
                                       </div>
                                       <div class="col-auto">
                                          <button class="btn btn-lg header-search-btn" type="submit"><i
                                                class="icofont-search-2"></i></button>
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
                           <img class="img-fluid" src="{{asset('img/fic.jpg') }}" alt="">
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
                        <p>fic@gmail.com</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-headphone-alt-3"></i>
                        </div>
                        <h5>Call For Inquiry</h5>
                        <p>09090909090</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-eye-open"></i>
                        </div>
                        <h5>Opening hours</h5>
                        <p>Mon - Fri : 8:00 - 5:00</p>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END LOGO AREA -->

<<<<<<< HEAD
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
                           <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
=======
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
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-lg-right text-center">
                     <div class="top-menu">
                        <ul>
                           <li><a href="#"><i class="icofont-location-pin"></i>Claro M. Recto Ave, Cagayan de Oro, 9000
                                 Misamis Oriental</a></li>
                           <li><a href="#"><i class="icofont-phone"></i>09090909090</a></li>
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
      <div class="page-banner page-banner-overlay" data-background="{{asset('img/bg/banner-bg.jpg') }}">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Latest Post</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="#">Home</a> Blog </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START BLOG PAGE WELCOME SECTION -->
      <section id="bloglist" class="section-padding">
         <div class="auto-container">
            <div class="row mb-lg-5 mb-0">
               <div class="col-lg-8 col-md-8 col-12">
                  <div class="single-blog-post wow fadeInUp">
                     <div class="single-blog-post-wrap">
                        <div class="single-blog-post-icon">
                           <i class="icofont-file-wmv"></i>
                        </div>
                        <div class="single-blog-post-content">
                           <h4 class="single-blog-post-title">
                              <a href="#">News 1</a>
                           </h4>
                           <div class="single-blog-post-gallery">
                              <div class="gallery-slides-wrapper owl-carousel owl-theme">
                                 <div class="item">
                                    <div class="gallery-slides-inner">
                                       <figure>
                                          <img class="img-fluid" src="{{asset('img/service/1.jpg') }}" alt="">
                                          <figcaption class="overlay text-center">Image Caption One.</figcaption>
                                       </figure>
                                    </div>
                                 </div>
                                 <!-- end single item -->
                                 <div class="item">
                                    <div class="gallery-slides-inner">
                                       <figure>
                                          <img class="img-fluid" src="{{asset('img/service/2.jpg') }}" alt="">
                                          <figcaption class="overlay text-center">Image Caption two.</figcaption>
                                       </figure>
                                    </div>
                                 </div>
                                 <!-- end single item -->
                                 <div class="item">
                                    <div class="gallery-slides-inner">
                                       <figure>
                                          <img class="img-fluid" src="{{asset('img/service/3.jpg') }}" alt="">
                                          <figcaption class="overlay text-center">Image Caption Three.</figcaption>
                                       </figure>
                                    </div>
                                 </div>
                                 <!-- end single item -->
                                 <div class="item">
                                    <div class="gallery-slides-inner">
                                       <figure>
                                          <img class="img-fluid" src="{{asset('img/service/4.jpg') }}" alt="">
                                          <figcaption class="overlay text-center">Image Caption Four.</figcaption>
                                       </figure>
                                    </div>
                                 </div>
                                 <!-- end single item -->
                                 <div class="item">
                                    <div class="gallery-slides-inner">
                                       <figure>
                                          <img class="img-fluid" src="{{asset('img/service/5.jpg') }}" alt="">
                                          <figcaption class="overlay text-center">Image Caption Five.</figcaption>
                                       </figure>
                                    </div>
                                 </div>
                                 <!-- end single item -->
                              </div>
                              <!-- end service slides -->
                           </div>
                           <p>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                              architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.
                           </p>
                           <a href="#" class="blog-read-more-btn">Read More</a>
                        </div>
                     </div>
                  </div>
                  <!-- end single blog post -->
                  <div class="single-blog-post wow fadeInUp">
                     <div class="single-blog-post-wrap">
                        <div class="single-blog-post-icon">
                           <i class="icofont-photobucket"></i>
                        </div>
                        <div class="single-blog-post-content">
                           <h4 class="single-blog-post-title">
                              <a href="#">News 2</a>
                           </h4>
                           <div class="single-blog-post-img">
                              <img class="img-fluid" src="{{asset('img/blog/1.jpg') }}" alt="">
                           </div>
                           <p>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                              architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.
                           </p>
                           <a href="#" class="blog-read-more-btn">Read More</a>
                        </div>
                     </div>
                  </div>
                  <!-- end single blog post -->
                  <div class="single-blog-post wow fadeInUp">
                     <div class="single-blog-post-wrap">
                        <div class="single-blog-post-icon">
                           <i class="icofont-youtube"></i>
                        </div>
                        <div class="single-blog-post-content">
                           <h4 class="single-blog-post-title">
                              <a href="#">News 3</a>
                           </h4>
                           <div class="single-blog-post-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                 <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/Oq61TxejZ5g"></iframe>
                              </div>
                           </div>
                           <p>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                              laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                              architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.
                           </p>
                           <a href="#" class="blog-read-more-btn">Read More</a>
                        </div>
                     </div>
                  </div>
                  <!-- end single blog post -->

                  <!-- blog pagination -->
                  <div class="row wow fadeInUp mt-5">
                     <div class="col-12">
                        <div class="site-pagination">
                           <div class="navbar justify-content-center">
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                       <i class="icofont-caret-left"></i>
                                    </a>
                                 </li>
                                 <li class="page-item"><a class="page-link bo-tl" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link bo-tl" href="#">2</a></li>
                                 <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"><a class="page-link" href="#">. . .</a></li>
                                 <li class="page-item"><a class="page-link bo-tl" href="#">8</a></li>
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                       <i class="icofont-caret-right"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end blog pagination -->
               </div>
               <!-- end col -->

               <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-md-0 mt-5 pl-lg-5 pl-md-5 pl-0">
                  <div class="sidebar-widget wid_sea mb-5">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Web Search</h5>
                        </div>
                        <form class="search-box">
                           <div class="search-body row no-gutters align-items-center">
                              <div class="col">
                                 <input class="form-control form-control-lg search-box-form-control" type="search"
                                    placeholder="Search...">
                              </div>
                              <!--end of col-->
                              <div class="col-auto">
                                 <button class="btn btn-lg btn-search" type="submit"><i
                                       class="icofont-search-2"></i></button>
                              </div>
                              <!--end of col-->
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
                  <div class="sidebar-widget post_wid mb-5">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Recent Post</h5>
                        </div>
                        <div class="singleRecpost">
                           <img src="{{asset('img/blog/1.jpg') }}" alt="" class="img-fluid">
                           <h6 class="recTitle"><a href="#">News Title</a></h6>
                           <p class="posted-on">3 DEC 2021</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="{{asset('img/blog/2.jpg') }}" alt="" class="img-fluid">
                           <h6 class="recTitle"><a href="#">News Title</a></h6>
                           <p class="posted-on">3 DEC 2021</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="{{asset('img/blog/3.jpg') }}" alt="" class="img-fluid">
                           <h6 class="recTitle"><a href="#">News Title</a></h6>
                           <p class="posted-on">3 DEC 2021</p>
                        </div>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
                  <div class="sidebar-widget cat_wid service-links mb-5">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Popular Categories</h5>
                        </div>
                        <ul>
                           <li><a href="#"><i class="icofont-circled-right"></i>News Title</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i>News Title</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
                  <div class="sidebar-widget gal_wid mb-5">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Photo Gallery</h5>
                        </div>
                        <div class="single-gallery-wrap">
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/gallery/1.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/gallery/2.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/gallery/3.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/gallery/4.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/gallery/5.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('../') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/service/1.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/service/2.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                           <div class="single-gallery">
                              <a href="#"><img class="img-fluid" src="{{ asset('img/service/3.jpg') }}" alt=""></a>
                              <a href="#" class="icon"><i class="icofont-link"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
                  <div class="sidebar-widget pro_wid mb-5">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Promo Box</h5>
                        </div>
                        <div class="pro-box overlay">
                           <img class="img-fluid" src="{{asset('img/bg/promo-box-img.jpg') }}" alt="">
                           <div class="pro-box-inner text-center">
                              <h4>New Offers <br> Going On</h4>
                              <a href="#">GET IT <i class="fas fa-caret-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
                  <div class="sidebar-widget tag_wid">
                     <div class="sidebar-widget-inner">
                        <div class="sidebar-widget-title">
                           <h5>Tag Cloud</h5>
                        </div>
                        <div class="tag-list">
                           <span><a href="#">research</a></span>
                           <span><a href="#">food</a></span>
                           <span><a href="#">facilities</a></span>
                           <span><a href="#">mentor</a></span>
                           <span><a href="#">machine</a></span>
                        </div>
                     </div>
                  </div>
                  <!-- end sidebar widget -->
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- END BLOG PAGE WELCOME SECTION -->

      <!-- START NEWSLETTER SECTION -->
      <section id="hnewsletter" class="hnewslettr-padding bg-theme">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-12 mb-lg-0 mb-4">
                  <div class="hnewslettr-left">
                     <h2>Inquire</h2>
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
         <div id="top-footer" class="overlay-2 section-back-image-2"
            data-background="{{asset('img/bg/footer-bg.jpg') }}">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <div class="logo">
                           <a href="{{ url('/') }}">
<<<<<<< HEAD
                              <img class="img-fluid" src="{{asset('img/ff.png') }}" alt="">
=======
                              <img class="img-fluid" src="{{asset ('img/ff.png') }}" alt="">
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
                           </a>
                        </div>
                     </div>
                     <div class="footer-widget-inner">
                        <p>Pellentesque Sed ut perspiciatisd oms iste natus error sitr undelr voluptateml accusantium
                           udema dolore lomquede laudantium, totarmd aperiam, eaquere ipsa quae ab illa inventore
                           veritatis etr quasi lorem architecto.</p>
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
                           <img src="{{asset('img/blog/1.jpg') }}" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">News Title</a>
                           </h6>
                           <p class="posted-on">18 MAY 2021</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="{{asset('img/blog/2.jpg') }}" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">News Title</a>
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
<<<<<<< HEAD
                        <ul>
                           <li><a href="{{ url('/documents') }}"><i class="icofont-circled-right"></i> Documents</a>
                           </li>
                           <li><a href="{{ url('/services') }}"><i class="icofont-circled-right"></i> Latest
                                 Services</a></li>
                           <li><a href="{{ url('/administration') }}"><i class="icofont-circled-right"></i>
                                 Administration</a></li>
                           <li><a href="{{ url('/gallery') }}"><i class="icofont-circled-right"></i> Image Gallery</a>
                           </li>
                           <li><a href="{{ url('/') }}"><i class="icofont-circled-right"></i> FAQs</a></li>
                        </ul>
=======
                           <ul>
                              <li><a href="{{ url('/documents') }}"><i class="icofont-circled-right"></i> Documents</a></li>
                              <li><a href="{{ url('/services') }}"><i class="icofont-circled-right"></i> Latest Services</a></li>
                              <li><a href="{{ url('/administration') }}"><i class="icofont-circled-right"></i> Administration</a></li>
                              <li><a href="{{ url('/gallery') }}"><i class="icofont-circled-right"></i> Image Gallery</a></li>
                              <li><a href="{{ url('/') }}"><i class="icofont-circled-right"></i> FAQs</a></li>
                           </ul>
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
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
                                 <p>nmfic@ustp.edu.ph</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-clock-time"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Mon - Fri: 8:00 - 5:00</p>
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
<<<<<<< HEAD
                        <ul>
                           <li><a href="{{ url('/index') }}">Home</a></li>
                           <li><a href="{{ url('/about') }}">About Us</a></li>
                           <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                        </ul>
=======
                           <ul>
                              <li><a href="{{ url('/index') }}">Home</a></li>
                              <li><a href="{{ url('/about') }}">About Us</a></li>
                              <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                           </ul>
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
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