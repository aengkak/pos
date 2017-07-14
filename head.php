<?php
session_start();
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include "inc/koneksi.php";
if (!isset($_SESSION['USERNAME']))
{
	header('location:login.html');
}
$cash = $_POST['bayar'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
    <title>G</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
<body class="sidebar-mini fixed">
<div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="index.html" class="logo">G</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="assets/images/user.png" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['USERNAME'] ;?></p>
              <p class="designation"><?php echo $_SESSION['LEVEL'] ;?></p>
            </div>
          </div>
          <?php include "menu.php"; ?>
        </section>
      </aside>