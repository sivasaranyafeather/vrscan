<!DOCTYPE html>
<html lang="en">

<head>
    <title>VR Scans & Labs</title>
    
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="VR Scans & Labs" />
      <meta name="keywords" content="VR Scans & Labs" />
     
      <!-- Favicon icon -->
      <link rel="icon" href="logo/logo-icon.png" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <script src="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css"></script>
   
    <script>
      $(document).ready(function() 
      {
        $('#mytable').DataTable();
      } );
    </script>
  </head>

  <body>
    <!--<div class="fixed-button">
    <a href="index.php" target="_blank" class="btn btn-md btn-primary">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
    </a>
    </div>-->
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header bg-info " style="background: linear-gradient(to right, #f3da0b, #f3da0b);">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!"  >
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           
                       </div>
                       <a href="index.php" class="ml-3 bg-white">
                           <img src="logo/logo.jpg" alt="" width="100px" height="40px">
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                      
                       <ul class="nav-right">
                           <li class="user-profile header-notification">
                               <a href="#!">
                               
                                   <span><?php  echo $_SESSION['user']; ?></span>
                                   <a href="logout.php">
                                           <i class="ti-user"></i> LogOut
                                       </a></i>
                                
                               </a>
                              
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                             <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php" style="background: linear-gradient(to right, #f3da0b, #f3da0b);">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                   
                                    
                                </li>
                            </ul>
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">
                            Image &amp; ManageMent</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Images</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="list_data.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">List Images</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="adduser.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="list_user.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">List User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                               
                               

                            </ul>


                            
                        </div>
                    </nav>