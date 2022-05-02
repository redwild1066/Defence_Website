<?php 
    session_start();
    if( empty($_SESSION["email"]) ){
        header("Location: ./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Indian Army Database</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../extra/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="../css/nivo-lightbox.css" rel="stylesheet" />
  <link href="../css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="../css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="../css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="../css/animate.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet">

  <link id="bodybg" href="../extra/bodybg/bg1.css" rel="stylesheet" type="text/css" />

  <link id="t-colors" href="../extra/color/default.css" rel="stylesheet">
 
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Service Before Self </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">INDIAN ARMY</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

        </div>

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">

        </div>

      </div>
    </nav>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Defence Management System</title>
    
    <link href="../extra/resorce/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

    <style> 
     .hidden {
         display: none;
     }
    </style>

</head>

<body>


    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">

             <div class="brand-logo">
                <a >
                    <span class="brand-title">
                   
                    </span>
                </a>
            </div> 
        </div>

        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               <div class="text-center">
              
                 </div>
                
            </div>
        </div>

        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                   <br> <br>       
                    <li>
                        <a href="./dashboard.php"  >
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>


                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Soldier</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-Soldier.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Soldier</span></a></li>
                            <li><a href="./manage-Soldier.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Soldier</span></a></li>

                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Admin</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-admin.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Admin</span></a></li>
                            <li><a href="./manage-admin.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Admins</span></a></li>
                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Department</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-department.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Department</span></a></li>
                            <li><a href="./manage-department.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Department</span></a></li>
                        </ul>
                    </li>


                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Items</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-items.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Items</span></a></li>
                            <li><a href="./manage-items.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Items</span></a></li>
                        </ul>
                    </li>


                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Weapons</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-weapon.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Weapons</span></a></li>
                            <li><a href="./manage-weapon.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Weapons</span></a></li>
                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Dependant</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-dependant.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Dependant</span></a></li>
                            <li><a href="./manage-dependant.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Dependant</span></a></li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="./manage-leave.php" >
                            <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Soldier Leave</span>
                        </a>
                    </li>
                    <li>
                        <a href="./logout.php" >
                            <i class="icon-logout menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a href="./profile.php"  >
                            <img src="https://icon-library.net//images/icon-profile/icon-profile-20.jpg" width="14">
                            <i class="fa fa-user menu-icon"></i><span class="nav-text"> Profile</span>
                        </a>
                    </li>                 
                </ul>
            </div>
        </div>

        <div class="content-body">


        <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHead" class="modal-header">
                    <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span  aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p id="addMsg" class="text-center font-weight-bold"></p>
                </div>
                <div class="modal-footer ">
                    <div class="mx-auto">
                        <a type="button" id="linkBtn" href="#" class="btn btn-primary" >Add Expense For the Day</a>
                        <a type="button" id="closeBtn" href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="container-fluid">

            <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/jquery.scrollTo.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/stellar.js"></script>
<script src="../plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/nivo-lightbox.min.js"></script>
<script src="../js/custom.js"></script>
            