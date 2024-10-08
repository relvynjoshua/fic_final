<!DOCTYPE html>
<html lang="en">

<head>
  <!--Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Favicons-->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico') }}" />

  <!--Page Title-->
  <title>NMFIC Forms</title>

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
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h1 {
      color: #000000;
    }

    .faq-lis-heading h2 {
      font-size: 37px;
      font-weight: bold;
      color: #333;
      margin-top: 100px;
      margin-bottom: 10px;
    }

    .container-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .container {
      background-color: #F66D34;
      transition: color 0.3s, background-color 0.3s;
      color: #333;
      width: 250px;
      height: 300px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin: 10px;
      font-size: 28px;
      font-weight: bold;
    }

    .container:hover {
      color: #ffffff;
      background-color: #F66D34;
    }

    .container a {
      color: #fff;
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
    }

    .arrow-button {
      background-color: transparent;
      border: none;
      font-size: 20px;
      cursor: pointer;
      color: #000000;
    }

    #month-nav {
      margin-bottom: 20px;
    }

    #currentMonth {
      font-size: 24px;
      font-weight: bold;
      color: #000000;
      margin: 0 10px;
    }

    #calendar-container {
      width: 440px;
      height: 300px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    #calendar {
      width: 100%;
      height: 100%;
      border-collapse: collapse;
    }

    #calendar th,
    #calendar td {
      padding: 10px;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    #calendar th {
      background-color: #dd8c88;
      color: #fff;
      font-weight: bold;
    }

    #calendar td {
      cursor: pointer;
      text-align: center;
    }

    .unavailable {
      background-color: #fff;
      color: #EE2C22;
      font-weight: bold;
    }

    .available {
      background-color: #80EA01;
      color: #fff;
      font-weight: bold;
    }

    .current-date {
      background-color: #dd8c88;
      color: #fff;
      font-weight: bold;
    }

    .admin-controls {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .admin-controls input[type="date"] {
      margin-right: 10px;
    }

    .admin-controls button {
      margin-left: 10px;
      background-color: #6cf336;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body id="main">



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
                    <button type="button" class="close" data-dismiss="modal"><i class="icofont-close-line"></i></button>
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

<<<<<<< HEAD
    <!-- START LOGO AREA -->
    <div class="logo-area">
      <div class="auto-container">
        <div class="row">
          <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
            <div class="logo">
              <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{asset('img/fic.jpg') }}" alt="">
              </a>
=======
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
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
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
<<<<<<< HEAD
            <div class="header-info-box">
              <div class="header-info-icon">
                <i class="icofont-headphone-alt-3"></i>
              </div>
              <h5>Call For Inquiry</h5>
              <p>856-8159</p>
=======
            <!-- END NAVIGATION AREA --> 

            <!-- START LOGO AREA -->
            <div class="logo-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                        <div class="logo">
                        <a href="{{ url('/') }}">
                        <img class="img-fluid" src="{{asset ('img/fic.jpg') }}" alt="">
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
>>>>>>> 75b9998c15ca61820b543d4543bff0cf07577713
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
                <li><a href="#"><i class="icofont-location-pin"></i>Claro M. Recto Avenue, Lapasan 9000 Cagayan de Oro
                    City, Philippines</a></li>
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
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-lg-0 mb-5">
          <h1>FIC Calendar</h1>
          <div id="month-nav">
            <button id="prevMonth" class="arrow-button">◀</button>
            <span id="currentMonth"></span>
            <button id="nextMonth" class="arrow-button">▶</button>
          </div>

          <div id="calendar-container">
            <table id="calendar">
              <thead>
                <tr>
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat</th>
                </tr>
              </thead>
              <tbody id="calendar-body">
              </tbody>
            </table>
          </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="welcome-section-title">
            <h6 class="theme-color">NMFIC Forms</h6>
            <h2>Online Fill-up Forms </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utd labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab nisi ut aliquip ex ea
              commodo consequat. <br> Pellentesque Sed ut perspiciatis unde omnis iste nat error sitre voluptatem
              accusantium udema doloremque laudantium, totarmd aperiam.</p>
          </div>
        </div>
        <!-- end col -->
      </div>

      <div class="faq-lis-heading text-center">
        <h2>Select from these Forms below</h2>
        <P>Need help? Contact us</P>
      </div>

      <div class="container-wrapper">
        <a href="{{ url('/manual-001') }}" class="container">Conduct of Externally Requested Consultation</a>
        <a href="{{ url('/manual-002') }}" class="container">Client Initiated Food Product Development</a>
        <a href="{{ url('/manual-003') }}" class="container">Researcher Initiated Food Product Development</a>
        <a href="{{ url('/manual-004') }}" class="container">Rental of Equipment</a>
      </div>

  </section>
  <!-- END ABOUT PAGE WELCOME SECTION -->

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

  <script>
    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    let isAdmin = false; // Set to true for demonstration purposes, in a real application, this would be handled securely

    function generateCalendar(month, year) {
      let firstDay = new Date(year, month, 1);
      let lastDay = new Date(year, month + 1, 0);
      let startingDay = firstDay.getDay();
      let totalDays = lastDay.getDate();
      let rowCount = Math.ceil((totalDays + startingDay) / 7);

      let tbody = document.getElementById("calendar-body");
      tbody.innerHTML = '';

      let date = 1;
      for (let i = 0; i < rowCount; i++) {
        let row = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
          let cell = document.createElement("td");
          if ((i === 0 && j < startingDay) || date > totalDays) {
            row.appendChild(cell);
          } else {
            let currentDay = (date + startingDay - 1) % 7; // 0 for Sunday, 1 for Monday, ..., 6 for Saturday
            if (currentDay === 0 || currentDay === 6) { // If it's Sunday or Saturday, make it unavailable by default
              cell.classList.add("unavailable");
            }
            if (year === currentDate.getFullYear() && month === currentDate.getMonth() && date === currentDate.getDate()) {
              cell.classList.add("current-date");
            }
            cell.textContent = date;
            row.appendChild(cell);
            date++;
          }
        }
        tbody.appendChild(row);
      }

      document.getElementById("currentMonth").textContent = `${getMonthName(month)} ${year}`;
    }

    function getMonthName(month) {
      let monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"];
      return monthNames[month];
    }

    generateCalendar(currentMonth, currentYear);

    document.getElementById("prevMonth").addEventListener("click", () => {
      currentMonth--;
      if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
      }
      generateCalendar(currentMonth, currentYear);
    });

    document.getElementById("nextMonth").addEventListener("click", () => {
      currentMonth++;
      if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
      }
      generateCalendar(currentMonth, currentYear);
    });

    document.getElementById("setUnavailableDate").addEventListener("click", () => {
      let dateInput = document.getElementById("unavailableDate").value;
      let selectedDate = new Date(dateInput);
      let selectedDay = selectedDate.getDate();
      let selectedMonth = selectedDate.getMonth();
      let selectedYear = selectedDate.getFullYear();

      if (selectedMonth === currentMonth && selectedYear === currentYear) {
        let firstDay = new Date(selectedYear, selectedMonth, 1);
        let cellIndex = selectedDay + firstDay.getDay() - 1;
        let cell = document.querySelectorAll(`#calendar-body td`)[cellIndex];
        if (cell) {
          cell.classList.add("unavailable");
          cell.classList.remove("available");
        }
      }
    });

    document.getElementById("setAvailableDate").addEventListener("click", () => {
      let dateInput = document.getElementById("availableDate").value;
      let selectedDate = new Date(dateInput);
      let selectedDay = selectedDate.getDate();
      let selectedMonth = selectedDate.getMonth();
      let selectedYear = selectedDate.getFullYear();

      if (selectedMonth === currentMonth && selectedYear === currentYear) {
        let firstDay = new Date(selectedYear, selectedMonth, 1);
        let cellIndex = selectedDay + firstDay.getDay() - 1;
        let cell = document.querySelectorAll(`#calendar-body td`)[cellIndex];
        if (cell) {
          cell.classList.add("available");
          cell.classList.remove("unavailable");
        }
      }
    });

    if (!isAdmin) {
      document.getElementById("admin-controls").style.display = "none";
    }
  </script>
</body>

</html>