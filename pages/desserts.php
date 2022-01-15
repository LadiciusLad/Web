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
          <img src="/web/media/brand/logo-512x512.png" width="30" height="30" alt="Logo">
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

      <!-- DESSERTS: JUMBOTRON -->
      <div class="jumbotron desserts-jumbotron dark-overlay text-white">
        <img
          sizes="(max-width: 2560px) 100vw, 2560px"
          srcset="
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1536008631/website-template-3/cover-desserts-menu.jpg 320w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_584/v1536008631/website-template-3/cover-desserts-menu.jpg 584w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_792/v1536008631/website-template-3/cover-desserts-menu.jpg 792w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_972/v1536008631/website-template-3/cover-desserts-menu.jpg 972w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1141/v1536008631/website-template-3/cover-desserts-menu.jpg 1141w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1286/v1536008631/website-template-3/cover-desserts-menu.jpg 1286w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1426/v1536008631/website-template-3/cover-desserts-menu.jpg 1426w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1571/v1536008631/website-template-3/cover-desserts-menu.jpg 1571w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1700/v1536008631/website-template-3/cover-desserts-menu.jpg 1700w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1820/v1536008631/website-template-3/cover-desserts-menu.jpg 1820w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1941/v1536008631/website-template-3/cover-desserts-menu.jpg 1941w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2058/v1536008631/website-template-3/cover-desserts-menu.jpg 2058w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2174/v1536008631/website-template-3/cover-desserts-menu.jpg 2174w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2269/v1536008631/website-template-3/cover-desserts-menu.jpg 2269w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2375/v1536008631/website-template-3/cover-desserts-menu.jpg 2375w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2471/v1536008631/website-template-3/cover-desserts-menu.jpg 2471w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2553/v1536008631/website-template-3/cover-desserts-menu.jpg 2553w,
            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008631/website-template-3/cover-desserts-menu.jpg 2560w"
          src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008631/website-template-3/cover-desserts-menu.jpg"
          alt=""
    
          class="desserts-jumbotron-bg">
        <div class="desserts-jumbotron-caption container">
          <h1 id="title-1" class="special-title-2">Desserts Menu</h1>
          <div id="menu-icons">
            <div class="row">
              <div class="col-2">
                <a href="#cakes" class="smooth-scroll"><img class="menu-icon" src="../media/menu/desserts/icons/cakes.svg" alt="Cakes"></a>
                <h6 class="mt-3 mb-0  menu-icon-text">CAKES</h6>
              </div>
              <div class="col-2">
                <a href="#cookies" class="smooth-scroll"><img class="menu-icon" src="../media/menu/desserts/icons/cookies.svg" alt="Cookies"></a>
                <h6 class="mt-3 mb-0 menu-icon-text">COOKIES</h6>
              </div>
             
              <div class="col-2">
                <a href="#frozen-desserts" class="smooth-scroll"><img class="menu-icon" src="../media/menu/desserts/icons/frozen-desserts.svg" alt="Frozen desserts"></a>
                <h6 class="mt-3 mb-0  menu-icon-text">FROZEN DESSERTS</h6>
              
              </div>
              <div class="col-2">
                <a href="#pastries" class="smooth-scroll"><img class="menu-icon" src="../media/menu/desserts/icons/pastries.svg" alt="Pastries"></a>
                <h6 class="mt-3 mb-0  menu-icon-text">PASTRIES</h6>
              </div>
              <div class="col-2">
                <a href="#puddings" class="smooth-scroll"><img class="menu-icon" src="../media/menu/desserts/icons/puddings.svg" alt="Puddings"></a>
                <h6 class="mt-3 mb-0  menu-icon-text">PUDDINGS</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- DESSERTS: DESCRIPTIONS -->
      <div class="desserts-descriptions container">

        <!-- CAKES -->
        <div id="cakes" class="dessert-category">
          <h2 class="banner">CAKES</h2>
          <hr class="dessert-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='dessert' AND food_subtype = 'cakes';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img 
                          data-src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898527/website-template-3/cakes.jpg"
                          data-srcset="
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898527/website-template-3/cakes.jpg 1x,
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_300/v1537898527/website-template-3/cakes.jpg 2x"
                          alt="Cake"
                          class="rounded-circle lazyload">
                          </div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name">');echo $row["food_name"].'</span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam 
              at gravida lacus. Suspendisse laoreet ultrices ex, quis 
              efficitur justo rhoncus sit amet.
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="dessert-horizontal-rule">
        </div>

        <!-- COOKIES -->
        <div id="cookies" class="dessert-category">
          <h2 class="banner">COOKIES</h2>
          <hr class="dessert-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='dessert' AND food_subtype = 'cookies';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img 
                          data-src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898674/website-template-3/cookies.jpg"
                          data-srcset="
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898674/website-template-3/cookies.jpg 1x,
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_300/v1537898674/website-template-3/cookies.jpg 2x"
                          alt="Cookie"
                          class="rounded-circle lazyload">
                          </div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name">');echo $row["food_name"].'</span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam 
              at gravida lacus. Suspendisse laoreet ultrices ex, quis 
              efficitur justo rhoncus sit amet.
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="dessert-horizontal-rule">
        </div>

        <!-- FROZEN DESSERTS -->
        <div id="frozen-desserts" class="dessert-category">
          <h2 class="banner">FROZEN DESSERTS</h2>
          <hr class="dessert-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='dessert' AND food_subtype = 'frozendesserts';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img 
                          data-src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898921/website-template-3/frozen-desserts.jpg"
                          data-srcset="
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537898921/website-template-3/frozen-desserts.jpg 1x,
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_300/v1537898921/website-template-3/frozen-desserts.jpg 2x"
                          alt="Frozen dessert"
                          class="rounded-circle lazyload">
                          </div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name">');echo $row["food_name"].'</span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam 
              at gravida lacus. Suspendisse laoreet ultrices ex, quis 
              efficitur justo rhoncus sit amet.
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="dessert-horizontal-rule">
        </div>

      
        <!-- PASTRIES -->
        <div id="pastries" class="dessert-category">
          <h2 class="banner">PASTRIES</h2>
          <hr class="dessert-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='dessert' AND food_subtype = 'pastries';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img 
                          data-src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537899340/website-template-3/pastries.jpg"
                          data-srcset="
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537899340/website-template-3/pastries.jpg 1x,
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_300/v1537899340/website-template-3/pastries.jpg 2x"
                          alt="Pastry"
                          class="rounded-circle lazyload">
                          </div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name">');echo $row["food_name"].'</span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam 
              at gravida lacus. Suspendisse laoreet ultrices ex, quis 
              efficitur justo rhoncus sit amet.
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="dessert-horizontal-rule">
        </div>

        <!-- PUDDINGS -->
        <div id="puddings" class="dessert-category">
          <h2 class="banner">PUDDINGS</h2>
          <hr class="dessert-horizontal-rule">
          <?php
            
                $sql = "SELECT * FROM `food` WHERE food_type='dessert' AND food_subtype = 'puddings';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo('<hr class="food-horizontal-rule">
                        <div class="row align-items-center menu-item">
                          <div class="col-md-3 food-image">
                          <img 
                          data-src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537899494/website-template-3/puddings.jpg"
                          data-srcset="
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_150/v1537899494/website-template-3/puddings.jpg 1x,
                            https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_300/v1537899494/website-template-3/puddings.jpg 2x"
                          alt="Pudding"
                          class="rounded-circle lazyload">
                          </div><div class="col-md-9">
            <h3 class="food-title">
              <span class="food-name">');echo $row["food_name"].'</span>
              <span class="food-price float-right">';echo $row["food_price"].' $</span>
            </h3>
            <p class="food-ingredients">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam 
              at gravida lacus. Suspendisse laoreet ultrices ex, quis 
              efficitur justo rhoncus sit amet.
            </p>
          </div>';
                    }
                }
            ?>
          <hr class="dessert-horizontal-rule">
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