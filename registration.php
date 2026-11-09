<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trust</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- ICON STROKE -->
    <link href="css/icon-stroke.css" rel="stylesheet">
    <!-- MENU -->
    <link rel="stylesheet" href="css/menuzord.css"> 
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">    
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">    
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css"> 
    <!-- Portfolio Filter -->
    <link rel="stylesheet" href="css/bootFolio.css">
    <!-- Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- JQUERY UI STYLE -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- MAIN STYLE -->
    <link href="css/main.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <script src="js/jquery-1.11.3.min.js"></script>

        <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: red;}
#News {background-color: green;}
</style>
</head>
<body>
<?php include 'header.php'; ?>

    <section class="page-title-area blog-page-title-bg" style="padding-top: 162px;">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
              </div>
              <div class="col-md-6 col-sm-6">
                <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
              </div>
           
           
           
            <div id="Home" class="tabcontent">
              <h3>Home</h3>
              <p>Home is where the heart is..</p>
            </div>

            <div id="News" class="tabcontent">
              <h3>News</h3>
              <p>Some news this fine day!</p> 
            </div>

          </div>
         </div>
    </section>

   <?php include 'footer.php'; ?>

   <script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Include owl-carousel js plugin -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/menuzord.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.counterup.js"></script> 
    <script src="js/waypoints.min.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.bootFolio.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/rev-slider.js"></script>
    <script src="js/main.js"></script> 

</body>
</html>