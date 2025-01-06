<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'vrscans');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $stmt = $con->prepare("SELECT password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $name); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

    
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user'] = $name; 
            header("Location: index");
            exit();
        } else {
            echo "<script>alert('Invalid username or password!');</script>";
        }
    } else {
        echo "<script>alert('User not found!');</script>";
    }

    $stmt->close(); 
}

$con->close(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>VR Scans & Labs </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="VR Scans " />
      <meta name="keywords" content="VR Scans  " />
      <meta name="author" content="codedthemes">
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
      <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
       <link rel="stylesheet" type="text/css" href="assets/css/login.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      
    
      <script>
      

        function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');


    
}

var pwShown = 0;

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("eye").addEventListener("click", function () {
        var pwd = document.getElementById("pwd");
        if (pwd.type === "password") {
            pwd.type = "text";
        } else {
            pwd.type = "password";
        }
    });
});


      </script>
   
    
  </head>

  <body>
    <div class="fixed-button">
    
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

            <!-- <nav class="navbar header-navbar pcoded-header bg-info ">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           
                       </div>
                       <a href="index.php" class="ml-3">
                           <h4 class="mr-5">Admin dashboard</h4>
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                      
                   </div>
               </div>
           </nav> -->
                            <div class="main-body mt-5">
                                <div class="page-wrapper">
                                    
                                  <?php if(isset($_POST['login']))
                                    {?>
                                      <div class="alert alert-success">
                                          <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Well done!</strong> <?php echo $_SESSION['msg'];?>
                                     </div>
                                    <?php } ?>

                                    <div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form action="" method="post">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>login here using your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input"  name="name" id="txt-input" type="text" placeholder="@UserName" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password"  name="password"  placeholder="Password" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in" name="login"> Log In </button>
   </div>

     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>



                                    <!-- <div class="page-body"> 
                                      <div class="row justify-content-center">

                                            <div class="col-sm-7">
                                                <div class="card shadow-lg">
                                                  <div class="card-header bg-primary">
                                                    <div class="title">
                                                      <h3 class="text-white">Login</h3>
                                                    </div>
                                                  </div>
                                                  <div class="card-body font-weight-bold">
                                                      <form action="" method="post">
                                                        <label for="">UserName:</label>
                                                        <div class="form-group">
                                                          <input type="text" name="name" class="form-control" placeholder="Admin user Name">
                                                        </div>
                                                         <label for="">Password :</label>
                                                        <div class="form-group">
                                                          <input type="password" name="password" class="form-control" placeholder="Enter Admin Password ">
                                                        </div>

                                                        <div class="form-group">
                                                          <button type="submit" name="login" class="btn btn-block btn-info btn-sm font-weight-bold">Login</button>
                                                        </div>
                                                      </form>

                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                      </div> -->

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
