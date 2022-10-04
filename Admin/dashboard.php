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
  <title>Dashboard</title>
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
          <li><a href="elig.php"> <i class="fa fa-bar-chart"></i>Eligibilities </a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page">

    <section class="forms">
      <div class="container-fluid">
        <!-- Page Header-->
        <header>
          <h1 class="h3 display">Blog Posts </h1>
        </header>
        <div class="container">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Add new post</h4>
            </div>
            <div class="card-body">
              <p>Give happy news to your recpective customers.</p>
              <form enctype="multipart/form-data" id="postform">
                <div class="row">
                  <div class="form-group col">
                    <label>Title</label>
                    <input type="text" placeholder="Title" name="title" class="form-control" required>
                  </div>
                  <div class="form-group col">
                    <label><span class="fa fa-upload"></span> Image</label>
                    <input type="file" name="img" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <textarea placeholder="Details" name="desc" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" type="submit" id="btnaddpost">
                    <span class="fa fa-send"></span> Add Post
                  </button>
                  <span class="fa fa-spinner fa-spin fa-2x hide ml-2" id="loader"></span>
                </div>
                <input type="hidden" name="addpost">
              </form>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h4>Posts</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Details</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $posts_data = $model->getPosts();
                      $posts = $posts_data->fetchAll(PDO::FETCH_OBJ);
                      $counter = 1;
                      foreach ($posts as $post) {
                        echo "<tr>
                          <td>$counter</td>
                          <td>$post->title</td>
                          <td>$post->details</td>
                          <td><span class='fa fa-trash text-danger fa-2x pointer postDelete' data-href='$post->id' id='$post->attachment'></span></td>
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
    </section>

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
      // add post
      $("#postform").on("submit", function(e) {
        e.preventDefault();
        $("#btnaddpost").hide();
        $("#loader").removeClass();
        $.ajax({
          url: "../database/controller.php",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            console.log(data);
            $("#btnaddpost").show();
            $("#loader").addClass();
          }
        });
      });

      // delete post
      $(document).on("click",".postDelete",function(){
        id = $(this).attr("data-href");
        img = $(this).attr("id");
        ths = $(this);
        $.post("../database/controller.php",{deletepost:true,id:id,img:img},function(data){
          console.log(data);
          $(ths).parent().parent().fadeOut();
        });
      });
    });
  </script>
</body>

</html>