<?php 
  if (isset($_SESSION['user'])){
    $username=$_SESSION['user']['username'];
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Python_training</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/logo-nav.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>">
             <h4> Django Training </h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <?php
                  if(!empty($user)){
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>training">Training
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>tutorial" target="blank">Tutorial</a>
                </li>
                <?php
                  }
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>contact">Contact</a>
                </li>
                <?php
                  if(empty($user)){
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>register">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>login">Login</a>
                </li>
                <?php
                 } else {
                ?>
                <li class="nav-item">
                  <a class="nav-link"><b><?php echo "" . $username; ?> </b></a>
                </li>
                  <a class="nav-link" href="<?php echo base_url()?>logout">(Logout)</a>
                
                
                <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </nav>
