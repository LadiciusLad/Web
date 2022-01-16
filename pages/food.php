<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once('/xampp/phpMyAdmin/htdocs/web/includes/dbh.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AUST Bar &amp; Restaurant</title>
    <!-- Web app manifest -->
    <link rel='manifest' href='../manifest.json'>
    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d994108362.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Default stylesheet -->
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body id="top">
    <header>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand animated pulse" href="../index.php">
          <img src="../media/brand/logo-512x512.png" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="food.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="food.php">Food</a>
                <a class="dropdown-item" href="desserts.php">Desserts</a>
                <a class="dropdown-item" href="drinks.php">Drinks</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="album.html">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservations.html">Reservations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a class="nav-social mr-2" href="https://github.com/LadiciusLad"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="nav-social mr-2" href="https://github.com/LadiciusLad"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="nav-social" href="https://github.com/LadiciusLad"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <a class="nav-social" href="/web/pages/adminLogin.php"><i class="fab fa-sketch" aria-hidden="true"></i></i></a>
          </div>
        </div>
      </nav>
    </header>
    <main>

      <!-- FOOD: JUMBOTRON -->
      <div class="jumbotron food-jumbotron dark-overlay text-white">
        <img
          sizes="(max-width: 2560px) 100vw, 2560px"
          srcset="
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1536008489/website-template-3/cover-food-menu.jpg 320w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_492/v1536008489/website-template-3/cover-food-menu.jpg 492w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_627/v1536008489/website-template-3/cover-food-menu.jpg 627w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_743/v1536008489/website-template-3/cover-food-menu.jpg 743w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_853/v1536008489/website-template-3/cover-food-menu.jpg 853w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_953/v1536008489/website-template-3/cover-food-menu.jpg 953w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1040/v1536008489/website-template-3/cover-food-menu.jpg 1040w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1120/v1536008489/website-template-3/cover-food-menu.jpg 1120w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1196/v1536008489/website-template-3/cover-food-menu.jpg 1196w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1273/v1536008489/website-template-3/cover-food-menu.jpg 1273w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1348/v1536008489/website-template-3/cover-food-menu.jpg 1348w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1416/v1536008489/website-template-3/cover-food-menu.jpg 1416w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1483/v1536008489/website-template-3/cover-food-menu.jpg 1483w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1543/v1536008489/website-template-3/cover-food-menu.jpg 1543w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1603/v1536008489/website-template-3/cover-food-menu.jpg 1603w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1665/v1536008489/website-template-3/cover-food-menu.jpg 1665w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1727/v1536008489/website-template-3/cover-food-menu.jpg 1727w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1787/v1536008489/website-template-3/cover-food-menu.jpg 1787w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1847/v1536008489/website-template-3/cover-food-menu.jpg 1847w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1900/v1536008489/website-template-3/cover-food-menu.jpg 1900w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1947/v1536008489/website-template-3/cover-food-menu.jpg 1947w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2001/v1536008489/website-template-3/cover-food-menu.jpg 2001w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2051/v1536008489/website-template-3/cover-food-menu.jpg 2051w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2104/v1536008489/website-template-3/cover-food-menu.jpg 2104w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2157/v1536008489/website-template-3/cover-food-menu.jpg 2157w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2203/v1536008489/website-template-3/cover-food-menu.jpg 2203w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2251/v1536008489/website-template-3/cover-food-menu.jpg 2251w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2299/v1536008489/website-template-3/cover-food-menu.jpg 2299w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2343/v1536008489/website-template-3/cover-food-menu.jpg 2343w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2389/v1536008489/website-template-3/cover-food-menu.jpg 2389w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2439/v1536008489/website-template-3/cover-food-menu.jpg 2439w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2486/v1536008489/website-template-3/cover-food-menu.jpg 2486w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2526/v1536008489/website-template-3/cover-food-menu.jpg 2526w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2558/v1536008489/website-template-3/cover-food-menu.jpg 2558w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008489/website-template-3/cover-food-menu.jpg 2560w"
          src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008489/website-template-3/cover-food-menu.jpg"
          alt=""
          class="food-jumbotron-bg">
        <div class="food-jumbotron-caption container">
          <h1 id="title-1" class="special-title-2">Food Menu</h1>
          <div id="menu-icons">
            <div class="row">
              <div class="col-3">
                <a href="#breakfasts" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/breakfasts.svg" alt="Breakfasts"></a>
                <h6 class="menu-icon-text mt-3 mb-0">BREAKFASTS</h6>
              </div>
              <div class="col-3">
                <a href="#burgers" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/burgers.svg" alt="Burgers"></a>
                <h6 class="menu-icon-text mt-3 mb-0">BURGERS</h6>
              </div>      
              <div class="col-3">
                <a href="#seafood" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/seafood.svg" alt="Seafood"></a>
                <h6 class="menu-icon-text mt-3 mb-0">SEAFOOD</h6>
              </div>  
              <div class="col-3">
                <a href="#salads" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/salads.svg" alt="Salads"></a>
                <h6 class="menu-icon-text mt-3 mb-0">SALADS</h6>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-3">
                <a href="#pasta" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/pasta.svg" alt="Pasta"></a>
                <h6 class="menu-icon-text mt-3 mb-0">PASTA</h6>
              </div>
              <div class="col-3">
                <a href="#pies" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/pies.svg" alt="Pies"></a>
                <h6 class="menu-icon-text mt-3 mb-0">PIES</h6>
              </div>
              <div class="col-3">
                <a href="#pizzas" class="smooth-scroll"><img class="menu-icon" src="../media/menu/food/icons/pizzas.svg" alt="Pizzas"></a>
                <h6 class="menu-icon-text mt-3 mb-0">PIZZAS</h6>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- FOOD: DESCRIPTIONS -->
      <div class="food-descriptions container">
        
        <!-- BREAKFASTS -->
        <div id="breakfasts" class="food-category">
          <h2 class="banner">BREAKFASTS</h2>
            <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'breakfast';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                          </div></div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          </div>
        <!-- BURGERS -->
        <div id="burgers" class="food-category">
          <h2 class="banner">BURGERS</h2>
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'burgers';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>
        <!-- PASTA -->
        <div id="pasta" class="food-category">
          <h2 class="banner">PASTA</h2>
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'pasta';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>

        <!-- PIES -->
        <div id="pies" class="food-category">
          <h2 class="banner">PIES</h2>
          <hr class="food-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'pies';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>

        <!-- PIZZAS -->
        <div id="pizzas" class="food-category">
          <h2 class="banner">PIZZAS</h2>
          <hr class="food-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'pizzas';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
          ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>

        <!-- SALADS -->
        <div id="salads" class="food-category">
          <h2 class="banner">SALADS</h2>
          <hr class="food-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'salads';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>

        <!-- SEAFOOD -->
        <div id="seafood" class="food-category">
          <h2 class="banner">SEAFOOD</h2>
          <hr class="food-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='food' AND food_subtype = 'seafood';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo('<hr class="food-horizontal-rule">
                      <div class="row align-items-center menu-item">
                        <div class="col-md-3 food-image">
                        <img class="qrcode" src="/web/qrcode/');echo$row["id"].'.jpg" width="200" height="200"> 
                        </div></div><div class="col-md-9">
          <h3 class="food-title">
            <span class="food-name"><a href="/web/pages/qrDisplay.php?varname=';echo $row["id"].'" >';echo $row["food_name"].'</a></span>
            <span class="food-price float-right">';echo $row["food_price"].' $</span>
          </h3>
            <p class="food-ingredients">
            ';echo $row["food_description"].'
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="food-horizontal-rule">
        </div>

      </div>


    </main>
    <footer class="page-footer">
      <div class="container">
        <a class="navbar-brand animated pulse d-block text-center m-0 p-0" href="#">
          <img src="../media/brand/logo-512x512.png" width="50" height="50" alt="Logo">
        </a>
        <div class="row">
          <div class="col-md-3">
            <h5 class="page-footer-title">OPENING HOURS</h5>
            <p class="mb-0">Open daily from 8am</p> 
            <p class="mb-0">Bar: Daily from 8am - 12pm</p> 
            <p class="mb-0">Breakfast: Daily from 8am - 11am</p> 
            <p class="mb-0">Lunch: Daily from 12pm - 3pm</p>
            <p>Dinner: Daily from 6pm - 12pm</p>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">LOCATION</h5>
            <address>
              AUST Bar &amp; Seafood Restaurant<br>
              Baalbek<br>
              Bekaa<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890<br>
              <abbr title="Email">E:</abbr> info@AUST.com
            </address>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">FOLLOW US</h5>
            <div class="mb-3">
              <a class="footer-social" href="https://github.com/LadiciusLad" aria-label="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              
              <a class="footer-social" href="https://github.com/LadiciusLad" aria-label="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">NEWSLETTER</h5>
            <p>
              Complete the form to receive information on the latest events,
              news and special offers at AUST.
            </p>
            <form id="newsletter-form">
              <label class="sr-only" for="formEmail">Email</label>
              <input type="email" class="form-control form-control-sm rounded" id="formEmail" placeholder="name@example.com">
              <button type="submit" class="btn btn-sm btn-outline-light btn-block mt-2">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="page-footer-copyright container-fluid text-center">
        © 2022 AUST Bar &amp; Restaurant. All rights reserved.<br>
       
      </div>
    </footer>
    <a id="back-to-top" class="back-to-top smooth-scroll" href="#top">
      <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- lazySizes -->
    <script src="../js/lazysizes.min.js" async=""></script>
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <script 
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous">
    </script>
    <script src="../js/site.js"></script>
    <script src="../js/menu-animations.js"></script>
  </body>
</html>