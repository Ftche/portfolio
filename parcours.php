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
          <li class="active ">
            <a href="./parcours.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Parcours</p>
            </a>
          </li>
          <li>
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
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Parcours Professionnelles</h5>
                <p class="card-category">EXPERIENCES </p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Chef Pôle Technologie Web - Employé</p>
                              <p class="card-title">IUC - SEED
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i> Novembre 2017 - Présent
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-laptop text-success"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Développeur Junior - Employé</p>
                              <p class="card-title">IUC - SEED
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i>Juin 2016 - Novembre 2017
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-cloud-upload-94 text-success"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Responsable Web - Stage Pro</p>
                              <p class="card-title">IUC - SEED
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i>Novembre 2015 - Juin 2016
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-cloud-upload-94 text-success"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Développeur Web - Stage Acad</p>
                              <p class="card-title">IUC - SEED
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i>Juin 2015 - Août 2015
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-palette text-success"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Graphiste de production - Stage Pro</p>
                              <p class="card-title">ESP - YAOUNDE
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i>Avril 2013 - Mai 2013
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="card card-stats ">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                              <i class="nc-icon nc-palette text-success"></i>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="numbers">
                              <p class="card-category">Graphiste de production - Stage Acad</p>
                              <p class="card-title">ESP - YAOUNDE
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                        <div class="stats">
                          <i class="fa fa-clock-o"></i>Août 2012 - Octobre 2012
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Les différentes entreprises et postes occupés
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Parcours Académiques</h5>
                <p class="card-category">FORMATIONS</p>
              </div>
              <div class="card-body ">
                <div class="card mb-12">
                  <div class="row no-gutters">
                    <div class="col-md-1">
                      <img src="./assets/img/logo_univ_ngaoundere.jpg" class="img-thumbnail " alt="IME" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Master Professionnel</h5>
                        <p class="card-text">
                          Management des Systèmes d'Informations,
                          Diplome délivré par l'Université de Ngaoundéré
                        </p>
                        <p class="card-text"><small class="text-muted">IME - DOUALA | CMR, 2017 - 2019</small></p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <span class=" alert alert-primary">IME</span>
                      <span class=" alert alert-danger">Université de Ngaoundéré</span>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-md-1">
                      <img src="./assets/img/logo_univ_dschang.jpg" class="img-thumbnail " alt="IUC" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Licence Professionnelle </h5>
                        <p class="card-text">
                          Génie Logiciel,
                          Diplome délivré par l'Université de Dschang
                        </p>
                        <p class="card-text"><small class="text-muted">IUC & UDs - DOUALA | CMR, 2015 - 2016</small></p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <span class=" alert alert-success">IME</span>
                      <span class=" alert alert-warning">Université de Dschang</span>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-md-1">
                      <img src="./assets/img/iuc.png" class="img-thumbnail " alt="IUC" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Diplôme d'Etude Collégiale </h5>
                        <p class="card-text">
                          Programmation et Analyse,
                          Diplome délivré par le Collège communautaire du Nouveau-Brunswick (CCNB-Canada)
                        </p>
                        <p class="card-text"><small class="text-muted">IUC - DOUALA | CMR, 2013 - 2015</small></p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <span class=" alert alert-success">IUC</span>
                      <span class=" alert alert-warning">CCNB - Canada</span>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-md-1">
                      <img src="./assets/img/LOGO_Pagne_vert-min.png" class="img-thumbnail " alt="MINEFOP" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Diplôme de Qualification Professionnelle </h5>
                        <p class="card-text">
                          Graphisme de production,
                          Diplome délivré par le Le Ministère de l'Emploi et de la Formation Professionnelle
                        </p>
                        <p class="card-text"><small class="text-muted">MINEFOP - YAOUNDE | CMR, 2011 - 2012</small></p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <span class=" alert alert-success">MINEFOP</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Les différentes établissements et diplômes obtenus
                </div>
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
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>