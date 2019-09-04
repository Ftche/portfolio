<?php

?>
<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TCHEWA Franklin • Développeur web / Architecte logiciel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts    -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <!--     icons     -->
  <link rel="stylesheet" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/F1.png">
          </div>
        </a>
        <a href="/" class="simple-text logo-normal">
          TCHEWA Franklin
          <!-- <div class="logo-image-big">
            <img src="./assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./parcours.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Parcours</p>
            </a>
          </li>
          <li class="active ">
            <a href="./map.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Localisation</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="nc-icon nc-support-17"></i>
              <p>Services</p>
            </a>
          </li>
          <!-- <li >
              <a href="./tables.php">
                <i class="nc-icon nc-tile-56"></i>
                <p>Projets</p>
              </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">PORTFOLIO</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li>
                <a href="https://twitter.com/FrankCheChe">
                  <i class="fa fa-twitter" style=" margin-right: 4px;"></i>
                </a>
              </li>
              <li>
                <a href="https://github.com/Ftche">
                  <i class="fa fa-github" style=" margin-right: 4px;"></i>
                </a>
              </li>
              <li>
                <a href="https://www.pinterest.fr/contacttche/">
                  <i class="fa fa-pinterest" style=" margin-right: 4px;"></i>
                </a>
              </li>
              <li>
                <a href="https://dribbble.com/FTche">
                  <i class="fa fa-dribbble" style=" margin-right: 4px;"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/franklin-tchewa-3ab750110/">
                  <i class="fa fa-linkedin" style=" margin-right: 4px;"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/tchewa_franklin/">
                  <i class="fa fa-instagram" style=" margin-right: 4px;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.7026321225826!2d9.779342415192836!3d4.08084959703263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d0a8005a323%3A0x442fdbf45b288294!2sStade%20IUC!5e0!3m2!1sfr!2scm!4v1567175005675!5m2!1sfr!2scm" width="1500" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                </script>, Designed With <i class="fa fa-heart heart"></i> by Tchetche
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>