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
    <title>Technical Advisory Evaluation Form</title>

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
    color: #F66D34;
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
    border: 1px solid #F03322;
    font-weight: bold;
    color: #000000;
}

h1 {
    color: #ffffff;
    text-align: center; 
    margin-right: 300px;
    font-size: 36px;
}

/*------------------------------------------------------------------------------------ */

.container1-wrapper {
    display: flex;
    flex-direction: row;
    padding: 20px;
    max-width:100%;
    margin: auto;
    margin-top: 30px;
    gap: 10px;
    box-sizing: border-box;
}

.container1 {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    flex: 1 1 400px;
    max-width: 30%;
    height:400px;
}

.container1 h2 {
            border-bottom: 2px solid #F66D34;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #F66D34;
            text-align: center;
            font-size: 30px;
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
    font-size: 12px; 
    color: #333; 
}

/*------------------------------------------------------------------------------------ */

.container1, #TechnicalAdForm {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    flex: 1; 
    box-sizing: border-box; 
    min-width: 0; 
}

.section {
    margin-bottom: 20px;
    padding:10px;
}

.section h3 {
    margin-bottom: 10px;
    font-size: 1.5em;
    color: #F66D34;
    border-bottom: 2px solid #F66D34;
    padding-bottom: 5px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-group input[type="date"] {
    padding: 8px;
}

.form-group input[type="text"],
.form-group input[type="tel"],
.form-group input[type="email"] {
    margin-bottom: 10px;
}

.form-group textarea {
    resize: vertical;
}

.checkbox-container {
    margin-bottom: 10px;
}

.checkbox-container input[type="checkbox"] {
    margin-right: 10px;
}

.question-group {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.question-group h4 {
    margin: 0;
    flex: 1;
    font-size: 18px;
    font-weight: bold;
}

.rating-options {
    display: flex;
    flex-wrap: wrap;
    margin-left: 20px;
}

.rating-options label {
    margin-right: 10px;
    margin-left: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background: #F66D34;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: background 0.3s;
}

.btn:hover {
    background: #F66D34;
}

.welcome-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

textarea {
    height: auto;
}

input[type="text"], input[type="tel"], input[type="email"], input[type="date"] {
    height: 40px;
}
</style>
</head>


    <div class="header">
        <a href="{{ url('/manual-004') }}">
            <img src="assets/img/fic.jpg" alt="Logo" class="clickable-img">
        </a>
        <div class="document-code">FM-USTP-FIC-03</div>
        <h1>Technical Advisory Services Evaluation Form</h1>
    </div>

    <div class="container1-wrapper">
        <div class="container1">
            <h2>How to Fill Out the Form</h2>
            <p>Follow these steps to complete the reservation form:</p>

            <ol>
                <li>Fill out the date information in Section I.</li>
                <li>Select the type of reservation in Section II.</li>
                <li>Provide detailed information in Section III.</li>
                <li>Fill in the preparer's information in Section IV.</li>
            </ol>
        </div>
   
        <div id="TechnicalAdForm"> 
            <div class="section">
                <h3>Client Information</h3>
                <div class="form-group">
                    <label for="clientName">Client Name:</label>
                    <input type="text" id="clientName" name="clientName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="clientName">Gender:</label>
                    <input type="text" id="Gender" name="Gender" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="technicalservicestitle">Technical Services Title:</label>
                    <input type="text" id="technicalservicestitle" name="technicalservicestitle" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Date">Date:</label>
                    <input type ="date" name="companyAddress" rows="4" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label for="expertFaculty">Name of Expert/Faculty:</label>
                    <input type="text" id="expertFaculty" name="expertFaculty" class="form-control" required>
                </div>
            </div>

            <div class="section">
                <h3>I. TECHNICAL ADVISORY SERVICES </h3>
                <div class="form-group">
                    <form action="/submit-survey" method="post">
                        <div class="question-group">
                            <h4>1. Friendliness/courtesy of the expert/faculty</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="friendliness" value="5"> 5</label>
                                <label><input type="radio" name="friendliness" value="4"> 4</label>
                                <label><input type="radio" name="friendliness" value="3"> 3</label>
                                <label><input type="radio" name="friendliness" value="2"> 2</label>
                                <label><input type="radio" name="friendliness" value="1"> 1</label>
                                <label><input type="radio" name="friendliness" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>2. Explanations the expert/faculty gave you about your technical problems or questions</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="explanations" value="5"> 5</label>
                                <label><input type="radio" name="explanations" value="4"> 4</label>
                                <label><input type="radio" name="explanations" value="3"> 3</label>
                                <label><input type="radio" name="explanations" value="2"> 2</label>
                                <label><input type="radio" name="explanations" value="1"> 1</label>
                                <label><input type="radio" name="explanations" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>3. Concern the expert/faculty showed for your problems or questions</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="concern" value="5"> 5</label>
                                <label><input type="radio" name="concern" value="4"> 4</label>
                                <label><input type="radio" name="concern" value="3"> 3</label>
                                <label><input type="radio" name="concern" value="2"> 2</label>
                                <label><input type="radio" name="concern" value="1"> 1</label>
                                <label><input type="radio" name="concern" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>4. Expert efforts to include you in decisions about the solution of the technical problem or question</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="efforts" value="5"> 5</label>
                                <label><input type="radio" name="efforts" value="4"> 4</label>
                                <label><input type="radio" name="efforts" value="3"> 3</label>
                                <label><input type="radio" name="efforts" value="2"> 2</label>
                                <label><input type="radio" name="efforts" value="1"> 1</label>
                                <label><input type="radio" name="efforts" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>5. Information the expert gave you about solution or advice (if any)</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="information" value="5"> 5</label>
                                <label><input type="radio" name="information" value="4"> 4</label>
                                <label><input type="radio" name="information" value="3"> 3</label>
                                <label><input type="radio" name="information" value="2"> 2</label>
                                <label><input type="radio" name="information" value="1"> 1</label>
                                <label><input type="radio" name="information" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>6. Instructions the expert gave you about follow-up discussion/meetings</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="instructions" value="5"> 5</label>
                                <label><input type="radio" name="instructions" value="4"> 4</label>
                                <label><input type="radio" name="instructions" value="3"> 3</label>
                                <label><input type="radio" name="instructions" value="2"> 2</label>
                                <label><input type="radio" name="instructions" value="1"> 1</label>
                                <label><input type="radio" name="instructions" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>7. Degree to which expertise talked with using words you could understand</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="expertise" value="5"> 5</label>
                                <label><input type="radio" name="expertise" value="4"> 4</label>
                                <label><input type="radio" name="expertise" value="3"> 3</label>
                                <label><input type="radio" name="expertise" value="2"> 2</label>
                                <label><input type="radio" name="expertise" value="1"> 1</label>
                                <label><input type="radio" name="expertise" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>8. Amount of time the expert/faculty spent with you</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="time" value="5"> 5</label>
                                <label><input type="radio" name="time" value="4"> 4</label>
                                <label><input type="radio" name="time" value="3"> 3</label>
                                <label><input type="radio" name="time" value="2"> 2</label>
                                <label><input type="radio" name="time" value="1"> 1</label>
                                <label><input type="radio" name="time" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>9. Your confidence in his expertise</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="confidence" value="5"> 5</label>
                                <label><input type="radio" name="confidence" value="4"> 4</label>
                                <label><input type="radio" name="confidence" value="3"> 3</label>
                                <label><input type="radio" name="confidence" value="2"> 2</label>
                                <label><input type="radio" name="confidence" value="1"> 1</label>
                                <label><input type="radio" name="confidence" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>10. Timeliness of the service delivery</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="timeliness" value="5"> 5</label>
                                <label><input type="radio" name="timeliness" value="4"> 4</label>
                                <label><input type="radio" name="timeliness" value="3"> 3</label>
                                <label><input type="radio" name="timeliness" value="2"> 2</label>
                                <label><input type="radio" name="timeliness" value="1"> 1</label>
                                <label><input type="radio" name="timeliness" value="0"> 0</label>
                            </div>
                        </div>
                        
                        <div class="question-group">
                            <h4>11. Likelihood of you recommending this expert or faculty to others</h4>
                            <div class="rating-options">
                                <label><input type="radio" name="recommendation" value="5"> 5</label>
                                <label><input type="radio" name="recommendation" value="4"> 4</label>
                                <label><input type="radio" name="recommendation" value="3"> 3</label>
                                <label><input type="radio" name="recommendation" value="2"> 2</label>
                                <label><input type="radio" name="recommendation" value="1"> 1</label>
                                <label><input type="radio" name="recommendation" value="0"> 0</label>
                            </div>
                        </div>

                        <label for="NameSig">Name/Signature of CLIENT/EVALUATOR:</label>
                        <input type="text" id="NameSig" name="NameSig"><br>
                
            <div class="welcome-btn">
                <a href="{{ url('/manual-004') }}" class="btn"><i class="icofont icofont-caret-left"></i>Go Back</a>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

   
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