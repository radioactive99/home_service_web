<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>project</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- BOOTSTRAP LINK -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- GOOGLE FONT LINK -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINK -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- HEADER START -->
<?php session_start(); ?>
<div class="container-fluid">
    <div class="row booking fixed-top" style="background-color: rgb(219,226,226);">
        <div class="col-md-12 text-center">
            <div class="booking ">
                <h4 class="font-weight-bold  p-1">Book Service <span style="font-size: 20px;" class="text-success pl-2"><i class="fa fa-phone" aria-hidden="true"></i> 9512140869 (9AM to 6PM)</span></h4>
            </div>
        </div>
    </div>
</div>
 <nav class="navbar  navbar-expand-lg ">
        
        <a class="navbar-brand" href="index.php"><i class="fa fa-home pr-3 text-white" style="font-size: 50px;" aria-hidden="true"></i>Happy Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item ">
                <a class="nav-link " href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link activ"  href="about.php">About</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link activ"  href="contact.php">ContactUs</a>
            </li>
            
            <?php 
                if(isset($_SESSION['firstname'])){
                    echo '<li class="nav-item"> 
                    <a class="nav-link activ"  href="customer_logout.php">Log Out</a>
                    </li>';
                }else{
                    echo  '<li class="nav-item"> 
                    <a class="nav-link activ"  href="login.php">Log In</a>
                    </li> ';
                }
            ?>
            
            </ul>
        </div>
    </nav>

        <div class="container-fluid">
        <div class="row user mt-2">
            <div class="col-md-12 text-center ">
                <?php 
                    if(isset($_SESSION['firstname'])){
                        echo "Hello " .$_SESSION['firstname'];
                    }else{
                        echo '<p class="p-0 m-0">Hello</p>';
                    }
                    
                ?>
                <p class="p-0 m-0"> You are technician ? If yes, Become Our Service Partner <a href="regiser-technician.php">Register Here</a> </p>           
            </div>
        </div>

        </div>
        <hr class="mb-0">
    <!-- HEADER END -->
