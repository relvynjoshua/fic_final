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
    <title>Food Product Development Request Form</title>

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
    color:#F66D34;
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

h1 {
    color: #ffffff;
    text-align: center; 
    margin-right: 320px;
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

.container1, #fpdForm {
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

form {
width: 80%;
margin-bottom: 15px;
padding: 20px;
}

label {
display: block;
margin-bottom: 5px;
padding: 5px;
font-weight: bold;
color: #333;
}

.address-group {
  margin-left: 6px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.address-group label {
  display: block;
  margin-bottom: 5px;
}

.address-group input {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="text"], input[type="email"], textarea {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 3px;
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
</style>
</head>


    <div class="header">
        <a href="{{ url('/manual-003') }}">
            <img src="assets/img/fic.jpg" alt="Logo" class="clickable-img">
        </a>
        <div class="document-code">FM-USTP-FIC-001</div>
        <h1>Food Product Development Request Form</h1>
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
                <li>Review form.</li>
                <li>Submit form.</li>
            </ol>
        </div>
   
        <form>
            <div id="fpdForm"> 
                <div class="section">
                    <h3>I. Company Profile</h3>
                    <label for="companyName">Company Name:</label>
                    <input type="text" id="companyName" name="companyName"><br><br>

                    <label for="address">Office / Plant Address:</label>
                    <div class="address-group">
                        <label for="unitBldg">Unit / Bldg. No.:</label>
                        <input type="text" id="unitBldg" name="unitBldg">
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street">
                        <label for="barangay">Barangay:</label>
                        <input type="text" id="barangay" name="barangay">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city">
                        <label for="province">Province:</label>
                        <input type="text" id="province" name="province">
                        <label for="zip">Zip Code:</label>
                        <input type="text" id="zip" name="zip">
                      </div><br>

                    <label for="contactDetails">Company Contact Details:</label>
                    <div class="address-group">
                        <label for="telephone">Telephone No.:</label>
                        <input type="text" id="telephone" name="telephone">
                        <label for="mobile">Mobile No.:</label>
                        <input type="text" id="mobile" name="mobile">
                        <label for="fax">Fax No.:</label>
                        <input type="text" id="fax" name="fax"><br>

                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email">
                        <label for="website">Website:</label>
                        <input type="url" id="website" name="website">
                    </div><br>

                    <label>Type of Company:</label>
                    <div class="address-group">
                        <input type="checkbox" id="sole" name="companyType" value="Sole Proprietorship">
                        <label for="sole">Sole Proprietorship</label><br>
                        <input type="checkbox" id="partnership" name="companyType" value="Partnership">
                        <label for="corporation">Corporation</label>
                        <input type="checkbox" id="familyOwned" name="companyType" value="Family Owned">
                        <label for="familyOwned">Family Owned</label>
                        <input type="checkbox" id="startup" name="companyType" value="Start-up">
                        <label for="startup">Start-up</label><br>
                        <input type="checkbox" id="lgu" name="companyType" value="LGU">
                        <label for="lgu">LGU</label>
                        <input type="checkbox" id="ngo" name="companyType" value="NGO">
                        <label for="ngo">NGO</label>
                        <input type="checkbox" id="otherCompanyType" name="companyType" value="Others">
                        <label for="otherCompanyType">Others:</label>
                        <input type="text" id="otherCompanyTypeText" name="otherCompanyTypeText"><br><br>
                    </div><br>

                    <label>Number of Employees:</label>
                    <div class="address-group">
                        <input type="radio" id="1to9" name="employees" value="1 to 9"><br>
                        <label for="1to9">1 to 9</label>
                        <input type="radio" id="10to99" name="employees" value="10 to 99"><br>
                        <label for="10to99">10 to 99</label>
                        <input type="radio" id="100to199" name="employees" value="100 to 199"><br>
                        <label for="100to199">100 to 199</label>
                        <input type="radio" id="200andAbove" name="employees" value="200 and above"><br>
                        <label for="200andAbove">200 and above</label>
                        <input type="radio" id="otherEmployees" name="employees" value="Others"><br>
                        <label for="otherEmployees">Others:</label>
                        <input type="text" id="otherEmployeesText" name="otherEmployeesText" rows="2">
                    </div><br>
            
                    <label>Asset Size (PhP):</label>
                    <div class="address-group">
                        <input type="radio" id="upTo3M" name="assetSize" value="Up to 3,000,000">
                        <label for="upTo3M">Up to 3,000,000</label>
                        <input type="radio" id="3Mto15M" name="assetSize" value="3,000,001 to 15,000,000">
                        <label for="3Mto15M">3,000,001 to 15,000,000</label>
                        <input type="radio" id="15Mto100M" name="assetSize" value="15,000,001 to 100,000,000">
                        <label for="15Mto100M">15,000,001 to 100,000,000</label>
                        <input type="radio" id="over100M" name="assetSize" value="100,000,000 and above">
                        <label for="over100M">100,000,000 and above</label><br><br>
                    </div><br>

                    <label for="background">Brief Background of the Company:</label>
                    <textarea id="background" name="background" rows="4" placeholder="Include vision, mission, date established, formation reason, members, or any other important information."></textarea><br><br>
                </div> 

                <div class="section">
                    <h3>II. Personal Profile</h3>
                    <label for="lastName">Representative Name:</label>
                    <div class="address-group">
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name"><br><br>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name"><br><br>
                        <input type="text" id="middleName" name="middleName" placeholder="Middle Name"><br>
                    </div><br>
                    
                    <label>Identification:</label>
                    <div class="address-group">
                    <input type="checkbox" id="female" name="identification" value="Female"><br>
                        <label for="female">Female</label>
                        <input type="checkbox" id="male" name="identification" value="Male"><br>
                        <label for="male">Male</label>
                        <input type="checkbox" id="pwd" name="identification" value="PWD"><br>
                        <label for="pwd">PWD</label>
                        <input type="checkbox" id="seniorCitizen" name="identification" value="Senior Citizen"><br>
                        <label for="seniorCitizen">Senior Citizen</label>
                        <input type="checkbox" id="ofw" name="identification" value="OFW"><br>
                        <label for="ofw">OFW</label>
                        <input type="checkbox" id="otherIdentification" name="identification" value="Others"><br>
                        <label for="otherIdentification">Others:</label>
                        <input type="text" id="otherIdentificationText" name="otherIdentificationText">
                    </div><br>
                    
                    <label for="position">Position / Designation:</label>
                    <div class="address-group">
                        <input type="checkbox" id="proprietor" name="position" value="Proprietor"><br>
                        <label for="proprietor">Proprietor</label>
                        <input type="checkbox" id="manager" name="position" value="Manager"><br>
                        <label for="manager">Manager</label>
                        <input type="checkbox" id="productDevStaff" name="position" value="Product Development Staff"><br>
                        <label for="productDevStaff">Product Development Staff</label>
                        <input type="checkbox" id="adminStaff" name="position" value="Admin Staff"><br>
                        <label for="adminStaff">Admin Staff</label>
                        <input type="checkbox" id="otherPosition" name="position" value="Others"><br>
                        <label for="otherPosition">Others:</label>
                        <input type="text" id="otherPositionText" name="otherPositionText">
                    </div><br>
                
                    <label for="address">Address:</label>
                    <div class="address-group">
                        <input type="checkbox" id="sameAsCompanyAddress" name="sameAsCompanyAddress"><br>
                        <label for="sameAsCompanyAddress">Same as Company Address</label><br><br>
                        <label for="unitBldg">Unit / Bldg. No.:</label>
                        <input type="text" id="unitBldg" name="unitBldg">
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street">
                        <label for="barangay">Barangay:</label>
                        <input type="text" id="barangay" name="barangay">
                    </div><br>

                    <label for="city">City:</label>
                    <div class="address-group">
                        <input type="text" id="city" name="city"><br>
                        <label for="province">Province:</label>
                        <input type="text" id="province" name="province"><br>
                        <label for="zip">Zip Code:</label>
                        <input type="text" id="zip" name="zip">
                    </div><br>
                    
                    <label for="contactDetails">Contact Details:</label>
                    <div class="address-group">
                        <input type="checkbox" id="sameAsCompanyContact" name="sameAsCompanyContact"><br>
                        <label for="sameAsCompanyContact">Same as Company Contact Details</label><br><br>
                        <label for="telephone">Telephone No.:</label>
                        <input type="text" id="telephone" name="telephone"><br>
                        <label for="mobile">Mobile No.:</label>
                        <input type="text" id="mobile" name="mobile"><br><br>
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email"><br><br>
                    </div><br>

                <div class="section">
                    <h3>III. PRODUCT DESCRIPTION</h3>
                    <label>Specific service to be availed:</label>
                    <div class="address-group">
                        <input type="checkbox" id="newProduct" name="service" value="New Product"><br>
                        <label for="newProduct">New Product</label>
                        <input type="checkbox" id="productStandardization" name="service" value="Product Standardization"><br>
                        <label for="productStandardization">Product Standardization</label>
                        <input type="checkbox" id="formulationDev" name="service" value="Formulation Development"><br>
                        <label for="formulationDev">Formulation Development</label>
                        <input type="checkbox" id="processDev" name="service" value="Process Development"><br>
                        <label for="processDev">Process Development</label>
                        <input type="checkbox" id="otherService" name="service" value="Others"><br>
                        <label for="otherService">Others:</label>
                        <input type="text" id="otherServiceText" name="otherServiceText">
                    </div><br>

                    <label for="product_name">Product Name:</label>
                    <input type="text" id="product_name" name="product_name" required><br>

                    <label for="purpose">Purpose of Activity:
                    (ex. Shelf-life extension, new product line, community assistance,nutritional improvement, value-adding, etc.)</label>
                    <textarea id="purpose" name="purpose" required></textarea><br>

                    <label for="product_specification">Product Specification / Expected Output:
                    (indicate the basic ingredients of the product, packaging to be used, method of cooking, or other details necessary to meet the expected output.)</label>
                    <textarea id="product_specification" name="product_specification" required></textarea><br>
                </div>

                <div class="section">
                    <h3>IV. I declare that the form has been accomplished by me, and is true and correct.</h3>
                    <label for="applicant_name">Name:</label>
                    <input type="text" id="applicant_name" name="applicant_name" required><br>
                
                    <label for="signature"style="display: inline;">Signature:</label>
                    <input type="text" id="signature" name="signature"  style="display: inline;" required><br><br>
                
                    <label for="date_accomplished"style="display: inline;"> Date Accomplished:</label>
                    <input type="date" id="date_accomplished" name="date_accomplished" style="display: inline;" required><br><br><br>

                <h3>----------------------------- To be accomplished by NMFIC Staff ----------------------------- </h3>
                    <label for="received_by">Received By:</label>
                    <input type="text" id="received_by" name="received_by"><br>
                
                    <label for="staff_signature">Signature:</label>
                    <input type="text" id="staff_signature" name="staff_signature" required><br><br>

                    <label for="date_received" style="display: inline;">Date Received:</label>
                    <input type="date" id="date_received" name="date_received" style="display: inline;"><br><br>

                
                    <label for="faculty_in_charge">Faculty in Charge / Researchers:</label>
                    <input type="text" id="faculty_in_charge" name="faculty_in_charge"><br>
                
                    <label for="remarks">Remarks:</label>
                    <textarea id="remarks" name="remarks"></textarea><br>
                
                    <label for="noted_by">Noted By:</label>
                    <input type="text" id="noted_by" name="noted_by"><br>
                
                    <label for="nmfic_manager">NMFIC Manager:</label>
                    <input type="text" id="nmfic_manager" name="nmfic_manager"><br>
                </div>

            <div class="welcome-btn">
                <a href="{{ url('/manual-003') }}" class="btn btn-primary"><i class="icofont icofont-caret-left"></i>Go Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
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