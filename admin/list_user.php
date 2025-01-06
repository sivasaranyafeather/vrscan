<?php
session_start();
include 'config.php';
if (!isset($_SESSION['user'])) {
  ?>
  <script>
    alert('Session denied. Please go to the login page.');
    window.open('login', '_self');
  </script>
  <?php
  exit();
}
?>

<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
     <style>
 

  th, td {
    overflow: hidden; 
    text-overflow: ellipsis; 
    white-space: nowrap; 
  }

 
</style>
  
</head>
<body>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card shadow-lg">
                                    <div class="card-header bg-primary">
                                        <div class="title">
                                            <h5 class="text-white">List Images :</h5>
                                        </div>
                                    </div>
                                    <div class="card-body font-weight-bold">
                                       <table class="table table-hover" id="mytable" style="width:100%; table-layout: fixed;">
                                       <thead>
                                         <tr>
                                          <th style="width:10%;">#</th>
                                          <th style="width:15%;text-align:center;">User Name</th>
                                          <th style="width:25%;text-align:center;">Mail</th>
                                          <th style="width:15%;text-align:center;">Role</th>
                                          <th style="width:25%;text-align:center;">Edit</th>
                                          <th style="width:10%;text-align:center;">Delete</th>
                                         </tr>
                                        </thead>
                                            <tbody>
                                                <?php
                                                $Query = "SELECT * FROM admin";
                                                $run = mysqli_query($con, $Query);
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($run)) {
                                                    $i++;
                                                  
                                                    ?>
                                                    <tr>
                                                        <td style="width:10%;"><?php echo $i; ?></td>
                                                        <td style="text-align:center;width:15%;">
                                                          <?php echo $row['username']; ?>
                                                        </td>
                                                      
                                                        <td style="width:25%;">
                                                              <?php echo $row['mail']; ?>
                                                        </td>
                                                          <td style="text-align:center;width:15%;"><?php echo $row['role']; ?></td>
                                                        <td style="width:25%;">
                                                            <a href="user_edit?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit & Change password </a>
                                                        </td>
                                                        <td style="width:10%;">
                                                            <a href="user_delete?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>       
    </div>       

    <!-- Required jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
         $('#mytable').DataTable();
        });
    </script>
    

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
