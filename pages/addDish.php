<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once('/xampp/phpMyAdmin/htdocs/web/includes/dbh.php');
$food_name = $_POST['name'];
$food_type = $_POST['type'];
$food_price = $_POST['price'];
$food_subtype = $_POST['subtype'];
$food_description = $_POST['description'];

if(isset($_POST['submit']))
    {
      $sql = "INSERT INTO food (food_name,food_price,food_type,food_subtype,food_description)VALUES('$food_name','$food_price','$food_type','$food_subtype','$food_description');";
      mysqli_query($conn, $sql);
      
      $sql = "SELECT * FROM `food` WHERE id ='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $newname = $row["id"];
      mysqli_query($conn, $sql);
      header("Location: /web/pages/modifyDish.php");
      $name = str_replace(' ', '', $food_name);
      $actual_link = "https://localhost/web/pages/qrDisplay.php?varname=$newname";
      exec ("/xampp/phpMyAdmin/htdocs/web/qrcode/main.py $actual_link $newname" );
      
        exit();
    }

?>
<style>
textarea
{
  width: 300px;
}

</style>
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
            <li class="nav-item dropdown">
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
            <a class="nav-social mr-2" href="/web/pages/adminLogin.php"><i class="fab fa-sketch" aria-hidden="true"></i></i></a></span>
          </div>
        </div>
      </nav>
    </header>
    <main>

      <!-- RESERVATIONS DESCRIPTION -->
      <div class="reservations-description container">
        <h1 id="title-1" class="special-title-1">ADMIN</h1>
        <h2 id="title-2" class="special-title-2">Add Dish</h2>
        <p id="description" class="mb-0">
        </p>
      </div>
      <!-- RESERVATIONS FORM -->
        <form method = post>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dishName">Dish Name:</label>
              <input name = "name" type="text" class="form-control" id="inputName" placeholder="Pizza">
            </div>
          </div>    
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="inputPrice">Price:</label>
              <input type="number" name="price" class="form-control" id="inputPrice" placeholder="4$">
            </div>
          </div>
          <div class="form-group col-md-5">
            <label for="inputType">Dish Type</label>
            <select id= "dishType" name ="type">
                <option value="drink">Drink</option>
                <option value="food">Food</option>
                <option value="dessert">Dessert</option>
            </select>
          </div>
          <div class="form-group col-md-5">
            <label for="inputType">Dish Sub Type</label>
            <select id= "subtype" name ="subtype">
                <option value="breakfast">Breakfast</option>
                <option value="burgers">Burgers</option>
                <option value="pasta">Pasta</option>
                <option value="pizzas">Pizzas</option>
                <option value="pies">Pies</option>
                <option value="salads">Salads</option>
                <option value="seafood">Sea Food</option>
                <option value="cakes">Cakes</option>
                <option value="cookies">Cookies</option>
                <option value="frozendesserts">Frozen Desserts</option>
                <option value="puddings">Puddings</option>
                <option value="pastries">Pastries</option>
                <option value="beers">Beers</option>
                <option value="coldbeverages">Cold Beverages</option>
                <option value="hotbeverages">Hot Beverages</option>
                <option value="milkshakes">Milkshakes</option>
                <option value="spirits">Spirits</option>
                <option value="wines">Wines</option>
            </select><br>
            <label name="description"for="textbox">Food description</label>
            <input type="text">

                
            </select>
          </div>
          <button type="submit" value = "SUBMIT" name="submit" class="btn btn-light">Add Dish</button>
        </form>

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
              AUST Bar &amp; Restaurant<br>
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
    <script src="../js/reservations-animations.js"></script>
    
  </body>
</html>