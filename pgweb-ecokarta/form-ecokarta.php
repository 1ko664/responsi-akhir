<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Trash of Jakarta in 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css"
        integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"
    integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_main">
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->
   <!-- contact section start -->
   <div class="input_section layout_padding">
    <div class="container">
        <h1 class="input_taital">Input Your Insight of Ecotourism Places Here!</h1>
        <div class="input_text">
            <form action="input-pgweb8.php" onsubmit="return validateForm()" method="post">
                <div class="form-group">
                    <label for="Location">Location:</label>
                    <input type="text" class="input-bt" id="Location" name="Location" value="">
                </div>

                <div class="form-group">
                    <label for="City">City:</label>
                    <input type="text" class="input-bt" id="City" name="City" value="">
                </div>

                <div class="form-group">
                    <label for="Description">Description:</label>
                    <input type="text" class="input-bt" id="Description" name="Description" value="">
                </div>

                <div class="submit_btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <p id="jml_pddk"></p>
    </div>
</div>

<script>
    function validateForm() {
        // Get form values
        var location = document.getElementById('Location').value;
        var city = document.getElementById('City').value;
        var description = document.getElementById('Description').value;

        // Check if any field is empty
        if (location.trim() === '' || city.trim() === '' || description.trim() === '') {
            alert('Please fill in all the fields');
            return false; // Prevent the form from submitting
        }

        // If all fields are filled, proceed with form submission
        let text = "Your Data has been uploaded";
        document.getElementById("jml_pddk").innerHTML = text;
        return false; // Prevent the form from submitting (remove this line if you want the form to submit)
    }
</script>
   <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
            <div class="location_main">
               <div class="call_text"><img src="images/call-icon.png" width="25"></div>
               <div class="call_text"><a>Call +6285719710779</a></div>
               <div class="call_text"><img src="images/mail-icon.png" width="28"></div>
               <div class="call_text"><a>ecokarta@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="https://www.instagram.com/minaar.ni/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
