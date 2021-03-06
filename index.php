<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <META HTTP-EQUIV="refresh" CONTENT="60;URL=logout.php">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        Database Dashboard FiveM
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="demo/demo.css" rel="stylesheet" />
</head>
<?php
session_start();







if (isset($_SESSION['id'])) {
    echo '
<body class="">
  <div class="wrapper">
  '; include('inc/sidebar.php'); echo '

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Database Dashboard FiveM</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <a href="logout.php" class="btn btn-danger pull-right">DECONNEXION</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        ';
    include("inc/config.php"); {
?>
<div class="row">
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <center>
                    <font style="font-size: 50px;">ARGENT TOTAL</font>
                    <br>
                    <font style="font-size: 50px;">
                        <?php 
    $reponse = $bdd->query('SELECT SUM(money+bank) AS total FROM users');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?>$
                    </font>
                </center>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <center>
                    <font style="font-size: 50px;">ARGENT BLANCHI</font>
                    <br>
                    <font style="font-size: 50px;">
                        <?php 
    $reponse = $bdd->query('SELECT SUM(amount) AS total FROM society_moneywash');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?>$
                    </font>
                </center>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <center>
                    <font style="font-size: 50px;">ARGENT SALE</font>
                    <br>
                    <font style="font-size: 50px;">
                        <?php 
    $reponse = $bdd->query('SELECT SUM(money) AS total FROM user_accounts');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?>$
                    </font>
                </center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">JOUEURS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM users');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?>
                        </font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">VEHICULES</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM owned_vehicles');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?>
                        </font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">BANNIS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM banlist');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">BATEAUX</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM owned_boats');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">AVIONS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM owned_aircrafts');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">MAISONS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM owned_properties');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">CARTES SIM</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM sim');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">APPELS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM phone_calls');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">SMS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM phone_messages');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">COMPTES TWITTER</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM twitter_accounts');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">LIKES TWITTER</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM twitter_likes');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">TWEETS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM twitter_tweets');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">PERMIS</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM user_licenses');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">VEHICULES VENDU</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM vehicle_sold');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <center>
                        <font style="font-size: 50px;">WHITELIST</font>
                        <br>
                        <font style="font-size: 50px;">
                            <?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM whitelist');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></font>
                    </center>
                </div>
            </div>
        </div>



        <?php
                                              }
    $reponse->closeCursor(); // Complete query
    echo '
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don\'t include it in your project! -->
  <script src="demo/demo.js"></script>
</body>';
} else {
    header("Location: login.php");
}
?>

        <script>
        function myFunction() {
            // Declare variables
            var input, filter, div, tr, td, i, txtValue;
            input = document.getElementById("search-box");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("li");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("p")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        </script>

</html>