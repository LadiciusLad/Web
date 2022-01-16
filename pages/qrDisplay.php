<style>
.button {
    background-color: #008CBA; /* Blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.editButton
{
    padding-left: 100%;
    float:initial;

}
.food-name
{
    margin-right: 80px !important;
}
.mainForum
{
  text-align: center;
  align-items: center;
  margin-left: 25%;
  margin-right: 25%;
  margin-top:10%;
  margin-bottom: 10%;
}
.qrcode
{
  margin-top: 40px;
  margin-bottom: 40px;
}
</style>


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once('/xampp/phpMyAdmin/htdocs/web/includes/dbh.php');
$food_name = $_POST['name'];
$food_type = $_POST['type'];
$food_price = $_POST['price'];
$food_subtype = $_POST['subtype'];
$food_description = $_POST['description'];
$id = $_GET['varname'];



if(isset($_POST['submit']))
    {
      header("Location: /web/pages/modifyDish.php");

    }
    
?>
<!doctype html>

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
        <a class="navbar-brand animated pulse" href="#">
          <img src="/web/media/brand/logo-512x512.png" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/web/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/web/pages/food.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/web/pages/food.php">Food</a>
                <a class="dropdown-item" href="/web/pages/desserts.php">Desserts</a>
                <a class="dropdown-item" href="/web/pages/drinks.php">Drinks</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/web/pages/about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/web/pages/album.html">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/web/pages/reservations.html">Reservations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/web/pages/contact.html">Contact</a>
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
    <?php

$sql = "SELECT * FROM `food` WHERE id ='$id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
?>
<div class="mainForum">
<h3 class="special-title-2"><?php echo $row["food_name"];?></h3>
<h4>Name : <?php echo $row["food_name"];?></h4><br>
<h4>Price :  <?php echo $row["food_price"];?> $</h4><br>
<h4>Type : <?php echo $row["food_type"];?></h4><br>
<h4>Sub Type : <?php echo $row["food_subtype"];?></h4><br>
<h4>Description : <?php echo $row["food_description"];?></h4><br>
<img class="qrcode"src="/web/qrcode/<?php echo$row["id"]?>.jpg" width="300" height="300"><br> 
<button class="button button2" id="oderbtn" onclick="order()">Order</button>

  </div>
    </main>

    <footer class="page-footer">
      <div class="container">
        <a class="navbar-brand animated pulse d-block text-center m-0 p-0" href="#">
          <img  src="/web/media/brand/logo-512x512.png" width="50" height="50" alt="Logo">
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
              news and special offers at Abo Makiye.
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
        © 2022 AUST bar &amp; Restaurant. All rights reserved.<br>
       
      </div>
    </footer>
    <a id="back-to-top" class="back-to-top smooth-scroll" href="#top">
      <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- lazySizes -->
    <script src="js/lazysizes.min.js" async=""></script>
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
    <script src="js/site.js"></script>
    <script src="js/homepage-animations.js"></script>
  </body>
</html>
<script>

function order() {
  alert("Successfully ordered 1 <?php   echo $row["food_name"] ; ?>")
  location.href = "/web/pages/modifyDish.php";
}

</script>