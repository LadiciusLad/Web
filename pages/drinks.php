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

      <!-- DRINKS: JUMBOTRON -->
      <div class="jumbotron drinks-jumbotron dark-overlay text-white">
        <img
          sizes="(max-width: 2560px) 100vw, 2560px"
          srcset="
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1536008791/website-template-3/cover-drinks-menu.jpg 320w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_491/v1536008791/website-template-3/cover-drinks-menu.jpg 491w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_623/v1536008791/website-template-3/cover-drinks-menu.jpg 623w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_744/v1536008791/website-template-3/cover-drinks-menu.jpg 744w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_849/v1536008791/website-template-3/cover-drinks-menu.jpg 849w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_935/v1536008791/website-template-3/cover-drinks-menu.jpg 935w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1018/v1536008791/website-template-3/cover-drinks-menu.jpg 1018w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1106/v1536008791/website-template-3/cover-drinks-menu.jpg 1106w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1189/v1536008791/website-template-3/cover-drinks-menu.jpg 1189w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1262/v1536008791/website-template-3/cover-drinks-menu.jpg 1262w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1333/v1536008791/website-template-3/cover-drinks-menu.jpg 1333w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1406/v1536008791/website-template-3/cover-drinks-menu.jpg 1406w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1475/v1536008791/website-template-3/cover-drinks-menu.jpg 1475w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1543/v1536008791/website-template-3/cover-drinks-menu.jpg 1543w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1613/v1536008791/website-template-3/cover-drinks-menu.jpg 1613w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1676/v1536008791/website-template-3/cover-drinks-menu.jpg 1676w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1740/v1536008791/website-template-3/cover-drinks-menu.jpg 1740w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1807/v1536008791/website-template-3/cover-drinks-menu.jpg 1807w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1867/v1536008791/website-template-3/cover-drinks-menu.jpg 1867w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1927/v1536008791/website-template-3/cover-drinks-menu.jpg 1927w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1987/v1536008791/website-template-3/cover-drinks-menu.jpg 1987w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2044/v1536008791/website-template-3/cover-drinks-menu.jpg 2044w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2101/v1536008791/website-template-3/cover-drinks-menu.jpg 2101w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2161/v1536008791/website-template-3/cover-drinks-menu.jpg 2161w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2214/v1536008791/website-template-3/cover-drinks-menu.jpg 2214w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2274/v1536008791/website-template-3/cover-drinks-menu.jpg 2274w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2329/v1536008791/website-template-3/cover-drinks-menu.jpg 2329w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2382/v1536008791/website-template-3/cover-drinks-menu.jpg 2382w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2441/v1536008791/website-template-3/cover-drinks-menu.jpg 2441w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2495/v1536008791/website-template-3/cover-drinks-menu.jpg 2495w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2551/v1536008791/website-template-3/cover-drinks-menu.jpg 2551w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2559/v1536008791/website-template-3/cover-drinks-menu.jpg 2559w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008791/website-template-3/cover-drinks-menu.jpg 2560w"
          src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008791/website-template-3/cover-drinks-menu.jpg"
          alt=""
          class="drinks-jumbotron-bg">
        <div class="drinks-jumbotron-caption container">
          <h1 id="title-1" class="special-title-2">Drinks Menu</h1>
          <div id="menu-icons">
            <div class="row">
              
            
              <div class="col-3">
                <a href="#beers" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/beers.svg" alt="Beers"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">BEERS</h6>
              </div>
              <div class="col-3">
                <a href="#cold-beverages" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/cold-beverages.svg" alt="Cold beverages"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">COLD BEVERAGES</h6>
              </div>
              <div class="col-3">
                <a href="#hot-beverages" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/hot-beverages.svg" alt="Hot beverages"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">HOT BEVERAGES</h6>
              </div>

              <div class="col-3">
                <a href="#milkshakes" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/milkshakes.svg" alt="Milkshakes"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">MILKSHAKES</h6>
              </div>
            </div>
        
            <div class="row mt-5">
            <div class="col-3"></div>
              <div class="col-3">
                <a href="#spirits" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/spirits.svg" alt="Spirits"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">SPIRITS</h6>
              </div>
              
              <div class="col-3">
                <a href="#wines" class="smooth-scroll"><img class="menu-icon" src="../media/menu/drinks/icons/wines.svg" alt="Wines"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">WINES</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- DRINK: DESCRIPTIONS -->
      <div class="drinks-descriptions container">
        <!-- BEERS -->
        <div id="beers" class="drink-category">
          <h2 class="banner">BEERS</h2>
          
          <div class="menu-item">
             <?php
            
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'beers';";
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
                        ';echo $row["food_ingredients"].'
                        </p>
           </div>';
                }
            }
        ?>
          <hr class="drink-horizontal-rule">
          </div>
        
        

        <!-- COLD BEVERAGES -->
        <div id="cold-beverages" class="drink-category">
          <h2 class="banner">COLD BEVERAGES</h2>
          <hr class="drink-horizontal-rule">
          <div class="menu-item">
          <?php
            
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'coldbeverages';";
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
        ';echo $row["food_ingredients"].'
        </p>
      </div>';
                }
            }
        ?>
          <hr class="drink-horizontal-rule">
          </div>
        <!-- HOT BEVERAGES -->
        <div id="hot-beverages" class="drink-category">
          <h2 class="banner">HOT BEVERAGES</h2>
          <hr class="drink-horizontal-rule">
          <div class="menu-item">
          <?php
            
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'hotbeverages';";
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
        ';echo $row["food_ingredients"].'
        </p>
      </div>';
                }
            }
        ?>
          <hr class="drink-horizontal-rule">
        </div>
          
        <!-- MILKSHAKES -->
        <div id="milkshakes" class="drink-category">
          <h2 class="banner">MILKSHAKES</h2>
          <hr class="drink-horizontal-rule">
          <div class="menu-item">
          <?php
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'milkshakes';";
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
        ';echo $row["food_ingredients"].'
        </p>
      </div>';
                }
            }
        ?>
          <hr class="drink-horizontal-rule">
        </div>
        <!-- SPIRITS -->
        <div id="spirits" class="drink-category">
          <h2 class="banner">SPIRITS</h2>
          <hr class="drink-horizontal-rule">
          <div class="menu-item">
          <?php
            
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'spirits';";
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
        ';echo $row["food_ingredients"].'
        </p>
      </div>';
                }
            }
        ?>
          <hr class="drink-horizontal-rule">
        </div>

        <!-- WINES -->
        <div id="wines" class="drink-category">
          <h2 class="banner">WINES</h2>
          <hr class="drink-horizontal-rule">
          <div class="menu-item">          <?php
            
            $sql = "SELECT * FROM `food` WHERE food_type='drink' AND food_subtype = 'wines';";
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
        ';echo $row["food_ingredients"].'
        </p>
      </div>';
                }
            }
        ?>
        <hr class="drink-horizontal-rule">
          </div>
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