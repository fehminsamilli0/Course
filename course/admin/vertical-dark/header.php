<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   ob_start();
   session_start();

   date_default_timezone_set("Asia/Baku");
   require_once '../settings/db.php';

   /*class*/
   require_once '../settings/class/umumi.php';
   require_once '../settings/class/nizam.php';
   require_once '../settings/class/SimpleImage.php';
   require_once '../settings/class/haqqinda.php';
   require_once '../settings/class/slider.php';
   require_once '../settings/class/telimler.php';
   require_once '../settings/class/isci.php';
   require_once '../settings/class/telebe.php';

   $umumi = new General();

   ?>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
   <title>Yup Technology | 2017 - <?= date("Y") ?></title>
   <link rel="shortcut icon" href="assets/images/favicon.ico" />
   <link rel="stylesheet" href="../plugins/morris/morris.css" />
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
   <!-- DataTables -->
   <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
   <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
   <!-- Responsive datatable examples -->
   <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/icons.css" rel="stylesheet" type="text/css" /> 
   <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <!-- Begin page -->
   <div id="wrapper">
      <!-- Top Bar Start -->
      <div class="topbar">
         <!-- LOGO -->
         <div class="topbar-left"><a href="index.php" class="logo"><span style="color: #FFF; text-shadow: 1px 1px 50px blue;"> Yup Technology </span></a></div>
         <nav class="navbar-custom">
            <ul class="navbar-right d-flex list-inline float-right mb-0">

               <li class="dropdown notification-list">
                  <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ti-bell noti-icon"></i> <span class="badge badge-pill badge-danger noti-icon-badge">3</span></a>
               </li>
               <li class="dropdown notification-list">
                  <div class="dropdown notification-list nav-pro-img">
                     <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
                     <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                        <!-- item--> <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> <a class="dropdown-item" href="#">
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                        </div>
                     </div>
                  </li>
               </ul>
               <ul class="list-inline menu-left mb-0">
                  <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
               </ul>
            </nav>
         </div>
         <!-- Top Bar End --><!-- ========== Left Sidebar Start ========== -->