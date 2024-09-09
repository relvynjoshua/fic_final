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
    <title>Consultation/Advisory Form</title>

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
    background-color: #F03322;
    color: #fff;
    position: relative;
}

.header img {
    max-width: 100px;
    margin-left: 20px; 
}

.header .back-button {
    background-color: #fff;
    color: #F03322;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.header .back-button:hover {
    background-color: #F03322;
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
    margin-right: 400px;
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
            border-bottom: 2px solid #F03322;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #F03322;
            text-align: center;
            font-size: 30px;
        }

.container1 p {
            margin: 10px 0 20px 0;
            color: #F03322;
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

.container1, #consultationForm {
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
    color: #F03322;
    border-bottom: 2px solid #F03322;
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

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background: #F03322;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: background 0.3s;
}

.btn:hover {
    background: #F03322;
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
        <a href="DPM-USTP-FIC-004.blade.php">
            <img src="assets/img/fic.jpg" alt="Logo" class="clickable-img">
        </a>
        <div class="document-code">FM-USTP-FIC-02</div>
        <h1>Consultation / Advisory Form</h1>
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
   
        <div id="consultationForm"> 
            <div class="section">
                <h3>I. Client Information</h3>
                <div class="form-group">
                    <label for="clientName">Client Name:</label>
                    <input type="text" id="clientName" name="clientName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="companyName">Company Name:</label>
                    <input type="text" id="companyName" name="companyName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="companyAddress">Company Address:</label>
                    <textarea id="companyAddress" name="companyAddress" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="contactDetails">Contact Details:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" class="form-control" required>
                </div>
            </div>

            <div class="section">
                <h3>II. Product Evaluation</h3>
                <div class="form-group">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="productType">Product Type:</label>
                    <input type="text" id="productType" name="productType" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="productIngredients">Product Ingredients (if applicable):</label>
                    <textarea id="productIngredients" name="productIngredients" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>For inquiries on:</label>
                    <div class="checkbox-container">
                        <input type="checkbox" id="formulation" name="inquiry[]" value="Formulation"> Formulation
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="processing" name="inquiry[]" value="Processing"> Processing
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="standardization" name="inquiry[]" value="Standardization"> Standardization
                    </div><br>
                    <div class="checkbox-container">
                        Others: <input type="text" id="otherInquiry" name="otherInquiry">
                    </div>
                </div>
            </div>

            <div class="section">
                <h3>III. Additional Information</h3>
                <label for="specificNeeds">Please specify your specific needs/concerns regarding the product:</label>
                <textarea id="specificNeeds" name="specificNeeds" rows="4" class="form-control" required></textarea>
            </div>

            <div class="section">
                <h3>IV. Evaluation Details (Optional)</h3>
                <p>**Please attach a copy of the product for evaluation (if applicable)**</p>
                <br>
                <div class="form-group">
                    <label for="dateEvaluation">Date of Evaluation (if applicable):</label>
                    <input type="date" id="dateEvaluation" name="dateEvaluation" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="evaluatorName">Evaluator's Name (if applicable):</label>
                    <input type="text" id="evaluatorName" name="evaluatorName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="recommendations">Recommendations (if applicable):</label>
                    <textarea id="recommendations" name="recommendations" rows="4" class="form-control" required></textarea>
                </div>
            </div>

            <div class="welcome-btn">
                <a href="DPM-USTP-FIC-004.blade.php class="btn"><i class="icofont icofont-caret-left"></i>Go Back</a>
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
