<?php
include 'config.php';
$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $filename = $_FILES["productimage1"]["name"];
    $tempname = $_FILES["productimage1"]["tmp_name"];
    $folder = "../admin/image/" . $filename;

    if (empty($name)) {
        ?>
        <script>
            alert('All fields are required.');
        </script>
        <?php
    } else {
        if (empty($filename)) {
            $sql = "UPDATE gallery SET imagename ='$name', description ='$description' WHERE id = '$id'";
        } else {
            if (move_uploaded_file($tempname, $folder)) {
                $sql = "UPDATE gallery SET imagename ='$name', image ='$filename', description ='$description' WHERE id = '$id'";
            } else {
                ?>
                <script>
                    alert('Failed to upload image.');
                </script>
                <?php
                exit;
            }
        }

        $result = mysqli_query($con, $sql);

        if ($result) {
            ?>
            <script>
                alert('Update Successfully!');
                window.open('list_data.php', '_self');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('Not Updated Values!');
                window.open('list_data.php', '_self');
            </script>
            <?php
        }
    }
}


    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>VR Scans </title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="VR Scans." />
      <meta name="keywords" content="VR Scans."/>
      
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
  </head>

  <body>
	  <div class="fixed-button">
		<a href="logo/pets.png" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> 
		</a>
	  </div>
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

            <nav class="navbar header-navbar pcoded-header" style="background: linear-gradient(to right, #f3da0b, #f3da0b);">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="index.php">
                           <img width="100px" height="40px" class="img-fluid" src="logo/logo.jpg" alt="Theme-Logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                          <!-- <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>-->
                           <!-- <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li> -->
                       </ul>
                         <ul class="nav-right">
                           <li class="user-profile header-notification">
                               <a href="#!">
                               
                                 
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
                        <div class="sidebar_toggle">
                          <a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active"  style="background: linear-gradient(to right, #f3da0b, #f3da0b);">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                   
                                    
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Image &amp; ManageMent</div>
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


                <div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-header bg-primary text-center">
                                    <h5 class="text-white">Update Image</h5>
                                </div>
                                <div class="card-body font-weight-bold">
                                    <?php 
                                    $Query = "SELECT * FROM gallery WHERE id='$id'";
                                    $run = mysqli_query($con, $Query);

                                    if (mysqli_num_rows($run) > 0) {
                                        while ($row = mysqli_fetch_assoc($run)) { 
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <!-- Image Name -->
                                        <div class="form-group">
                                            <label for="image-name">Image Name:</label>
                                            <input type="text" name="name" id="image-name" value="<?php echo $row['imagename']; ?>" class="form-control" placeholder="Enter the Image Name">
                                        </div>

                                        <!-- Image Description -->
                                        <div class="form-group">
                                            <label for="image-description">Image Description:</label>
                                            <textarea class="form-control" id="image-description" name="description" rows="4" placeholder="Enter a brief description of the image"><?php echo $row['description']; ?></textarea>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="form-group">
                                            <label for="image-upload">Upload New Image:</label>
                                            <input type="file" name="productimage1" id="image-upload" class="form-control">
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="form-group">
                                            <button type="submit" name="update" class="btn btn-info btn-block font-weight-bold">Update</button>
                                        </div>
                                    </form>
                                    <?php 
                                        } 
                                    } else {
                                        echo "<p class='text-danger text-center'>No record found for the given ID.</p>";
                                    } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     
                                         
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
