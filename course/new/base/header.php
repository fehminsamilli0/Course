<?php ob_start(); session_start(); ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <?php 

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
  require_once '../settings/class/odenis.php';
  require_once '../settings/class/blog.php';
  require_once '../settings/class/xidmetler.php';
  require_once '../settings/class/portfolio.php';

  $umumi = new General();
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Yup Technology | 2019</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="assets/css/site.min599c.css?v4.0.2">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="../global/css/skintools.min599c.css?v4.0.2">
  <script src="assets/js/Plugin/skintools.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="../global/vendor/animsition/animsition.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="../global/vendor/chartist/chartist.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/jvectormap/jquery-jvectormap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/dashboard/v1.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="../global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <link rel="stylesheet" href="../global/fonts/font-awesome/font-awesome.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/fonts/weather-icons/weather-icons.min599c.css?v4.0.2">
  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/pages/profile.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="../global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/tables/datatable.min599c.css?v4.0.2">
  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/8013c9a5df.js"></script>
  <script src="../global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition dashboard">


  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md"
  role="navigation">

  <div class="navbar-header">
    <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
    data-toggle="menubar">
    <span class="sr-only">Toggle navigation</span>
    <span class="hamburger-bar"></span>
  </button>
  <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
  data-toggle="collapse">
  <i class="icon wb-more-horizontal" aria-hidden="true"></i>
</button>
<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
  <img class="navbar-brand-logo" src="assets/images/logo.png" title="Remark">
  <span class="navbar-brand-text hidden-xs-down"> Yup Technology</span>
</div>

</div>

<div class="navbar-container container-fluid">
  <!-- Navbar Collapse -->
  <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
    <!-- Navbar Toolbar -->
    <ul class="nav navbar-toolbar">
      <li class="nav-item hidden-float" id="toggleMenubar">
        <a class="nav-link" data-toggle="menubar" href="#" role="button">
          <i class="icon hamburger hamburger-arrow-left">
            <span class="sr-only">Toggle menubar</span>
            <span class="hamburger-bar"></span>
          </i>
        </a>
      </li>
    </ul>
    <!-- End Navbar Toolbar -->

    <!-- Navbar Toolbar Right -->
    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
        data-animation="scale-up" role="button">
        <span class="avatar avatar-online">
          <img src="../global/portraits/5.jpg" alt="...">
          <i></i>
        </span>
      </a>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
        <div class="dropdown-divider" role="presentation"></div>
        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
      aria-expanded="false" data-animation="scale-up" role="button">
      <i class="icon wb-bell" aria-hidden="true"></i>
      <span class="badge badge-pill badge-danger up">5</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
      <div class="dropdown-menu-header">
        <h5>NOTIFICATIONS</h5>
        <span class="badge badge-round badge-danger">New 5</span>
      </div>

      <div class="list-group">
        <div data-role="container">
          <div data-role="content">
            <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
              <div class="media">
                <div class="pr-10">
                  <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">A new order has been placed</h6>
                  <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                </div>
              </div>
            </a>
            <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
              <div class="media">
                <div class="pr-10">
                  <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Completed the task</h6>
                  <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                </div>
              </div>
            </a>
            <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
              <div class="media">
                <div class="pr-10">
                  <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Settings updated</h6>
                  <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                </div>
              </div>
            </a>
            <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
              <div class="media">
                <div class="pr-10">
                  <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Event started</h6>
                  <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                </div>
              </div>
            </a>
            <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
              <div class="media">
                <div class="pr-10">
                  <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Message received</h6>
                  <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="dropdown-menu-footer">
        <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
          <i class="icon wb-settings" aria-hidden="true"></i>
        </a>
        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
          All notifications
        </a>
      </div>
    </div>
  </li>
</ul>
<!-- End Navbar Toolbar Right -->
</div>
<!-- End Navbar Collapse -->

<!-- Site Navbar Seach -->
<div class="collapse navbar-search-overlap" id="site-navbar-search">
  <form role="search">
    <div class="form-group">
      <div class="input-search">
        <i class="input-search-icon wb-search" aria-hidden="true"></i>
        <input type="text" class="form-control" name="site-search" placeholder="Search...">
        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
        data-toggle="collapse" aria-label="Close"></button>
      </div>
    </div>
  </form>
</div>
<!-- End Site Navbar Seach -->
</div>
</nav>