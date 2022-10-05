<?php
session_start();
if (!isset($_SESSION["userlogin"])) {
  header("location:index.php?login=false");
}

require("../database/Model.php");

$model = new Model();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard - Enquery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
    .hide {
      display: none;
    }

    .pointer{
      cursor: pointer;
    }

    .pointer:hover{
      transform: scale(1.08);
    }
  </style>
</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
          <h2 class="h5">RUDRAKSH</h2><span>Admin</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="dashboard.php" class="brand-small text-center"> <strong>R</strong><strong class="text-primary">A</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <li><a href="dashboard.php"> <i class="icon-home"></i>Home </a></li>
          <li><a href="enq.php"> <i class="icon-grid"></i>Enqueries </a></li>
          <li class="active"><a href="elig.php"> <i class="fa fa-bar-chart"></i>Eligibilities </a></li>
          <li><a href="#" id="btnlogout"><i class="fa fa-lock"></i>Log out </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page">
      <div class="container-fluid">
        <div class="container mt-4">
          <div class="card">
            <div class="card-header">
              <h4>Enquries Requests</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Age</th>
                      <th>Edcuation</th>
                      <th>Experince</th>
                      <th>Visa</th>
                      <th>Country</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $posts_data = $model->getEligibilities();
                      $posts = $posts_data->fetchAll(PDO::FETCH_OBJ);
                      $counter = 1;
                      foreach ($posts as $post) {
                        $date = date("m/d/Y",$post->regdate);
                        echo "<tr>
                          <td>$counter</td>
                          <td>$post->name</td>
                          <td>$post->phone</td>
                          <td>$post->email</td>
                          <td>$post->age</td>
                          <td>$post->education</td>
                          <td>$post->experince</td>
                          <td>$post->visa</td>
                          <td>$post->country</td>
                          <td>$date</td>
                          <td><span class='fa fa-trash text-danger fa-2x pointer postDelete' data-href='$post->id'></span></td>
                        </tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- fotter starts -->
    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <p>RUDRAKH GROUP</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/charts-home.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
  <script>
    $(document).ready(function() {
      // delete post
      $(document).on("click",".postDelete",function(){
        id = $(this).attr("data-href");
        ths = $(this);
        $.post("../database/controller.php",{deleteelg:true,id:id},function(data){
          console.log(data);
          $(ths).parent().parent().fadeOut();
        });
      });

      // logout
      $("#btnlogout").on("click",function(e){
        e.preventDefault();
        $.post("../database/controller.php",{logout:true},function(data){
          window.location.replace("index.php");
        });
      });
    });
  </script>
</body>

</html>