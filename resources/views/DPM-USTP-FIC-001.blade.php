<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>Conduct of Externally Requested Consultation</title>

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
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #F66D34;
    color: #fff;
    position: relative;
}

.header img {
    max-width: 100px;
    margin-left: 20px; 
}

.header .back-button {
    background-color: #fff;
    color:#F66D34 ;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.header .back-button:hover {
    background-color: #F66D34;
    color: #fff;
}

.header .back-button i {
    margin-right: 5px;
}

.header .document-code {
    position: absolute;
    top: 26px;
    right: 30px;
    background-color: #fff; 
    padding: 5px 10px; 
    border: 1px solid #F66D34;
    font-weight: bold;
    color: #000000;
}

.container {
    background-color: #fff;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.section {
    margin-bottom: 20px;
}

.section h3 {
    border-bottom: 2px solid #F66D34;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

h1 {
    color: #ffffff;
    text-align: center; 
    margin-right: 300px;
    font-size: 36px;
}

#instructions {
    display: none;
    background-color: #e9ecef;
    padding: 15px;
    border: 1px solid #F66D34;
    border-radius: 5px;
    margin-bottom: 20px;
}

.clickable-img {
    display: block;
    max-width: 100%; 
    height: auto; 
    cursor: pointer; 
    transition: transform 0.3s; 
}

.clickable-img:hover {
    transform: scale(1.05); 
}

/*------------------------------------------------------------------------------------ */

.container1-wrapper {
            display: flex;
            gap: 20px; 
            padding: 20px;
            max-width: 1200px; 
            margin: auto;
            margin-top: 30px; 
        }

.container1 {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            flex: 1; 
        }

.container1 h2 {
            border-bottom: 2px solid #F66D34;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #F66D34;
            text-align: center;
        }

.container1 p {
            margin: 10px 0 20px 0;
            color: #F66D34;
            text-align: center;
            margin-top: 40px;
            font-size: 18px;
            font-weight: bold;
        }

.container1 li {
    list-style-type: decimal; 
    padding-left: 20px; 
    margin: 20px 0; 
    font-size: 14px; 
    color: #333; 
}

ul li a {
    color: black; 
    font-size: 16px; 
    font-weight: 500; 
    transition: color 0.3s, background-color 0.3s;
    display: block; 
    padding: 10px; 
    border-radius: 4px;
    background-color: #fff; 
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

ul li a:hover {
    color: #ffffff; 
    background-color: #F66D34; 
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2); 
}

.download-icon {
    margin-left: 10px;
    color:#F66D34;
}
        
.download-link {
    text-decoration: none;
    color: #333;
}

.btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:#F66D34;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

.btn:hover {
            background-color: #F66D34;
        }

.welcome-btn {
            text-align: center;
            margin-top: 20px;
        }
</style>
</head>


<body>
    <div id="main">
        <div class="header">
            <a href="{{ url('/form-page') }}">
                <img src="assets/img/fic.jpg" alt="Logo" class="clickable-img">
            </a>
            <div class="document-code">DPM-USTP-FIC-001</div>
            <h1>Conduct of Externally Requested Consultation</h1>
        </div>

         
        <div class="container1-wrapper">
            <div class="container1">
                <h2>Process Flow / Details</h2>
                <p>Follow these steps to complete the reservation form:</p>

                <ol>
                    <li>Download the forms.</li>
                    <li>Fill Up the downloaded forms.</li>
                </ol>
            </div>


            <div class="container1">
                <h2>Forms Needed</h2>
                <p>Downloadable Forms:</p>

                <ul>
                    <li>
                        <a href="FM-USTP-FIC-07-Job Order Request.pdf" class="download-link" download> Job Order Request Form (FM-USTP-FIC-07)</a>
                    </li>

                    <li>
                        <a href="FM-USTP-FIC-08-Statement of Account.pdf" class="download-link" download> Statement of Account (FM-USTP-FIC-08)</a>
                    </li>
                    
                </ul>

                <div class="welcome-btn">
                    <a href="{{ url('/form-page') }}" class="btn"><i class="icofont icofont-caret-left"></i>Back</a>
    </div>

    <!-- JavaScript for additional functionality -->
    <script>
        function goBack() {
            window.location.href = '{{ url('/form-page') }}';
        }
    </script>

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