<?php
session_start();

include 'config.php';

if (!isset($_SESSION['user'])) {
  ?>
  <script>
    alert('Session denied. Please go to the login page.');
    window.open('login.php', '_self');
  </script>
  <?php
  exit();
}


if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $filename = $_FILES["productimage1"]["name"];
    $tempname = $_FILES["productimage1"]["tmp_name"];
    $folder = "../admin/image/" . $filename;
    $description = $_POST['description'];

    // Validation
    if (empty($name) || empty($filename)) {
        ?>
        <script>
            alert('Image and Name are required.');
        </script>
        <?php
    } else {
        // Move the uploaded file to the desired folder
        if (move_uploaded_file($tempname, $folder)) {
            $sql = "INSERT INTO gallery (imagename, image, description) VALUES ('$name', '$filename', '$description')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                ?>
                <script>
                    alert('Insert Successfully!');
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert('Not Inserted Values!');
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Failed to upload image.');
            </script>
            <?php
        }
    }
}
?>



<?php include 'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Medium-sized form container -->
                            <div class="card shadow-lg">
                                <div class="card-header bg-primary">
                                    <div class="title text-center">
                                        <h5 class="text-white">Add to Gallery</h5>
                                    </div>
                                </div>
                                <div class="card-body font-weight-bold">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        
                                        <!-- Image Name -->
                                        <div class="form-group">
                                            <label for="name">Image Name:</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter the Image Name">
                                        </div>
                                        <!-- Image Description -->
                                        <div class="form-group">
                                            <label for="description">Image Description:</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter the Image Description"></textarea>
                                        </div>
                                        <!-- Image File -->
                                        <div class="form-group">
                                            <label for="productimage1">Image:</label>
                                            <input type="file" id="productimage1" name="productimage1" class="form-control">
                                        </div>

                                        
                                        <!-- Submit Button -->
                                        <div class="form-group">
                                            <button type="submit" name="create" value="create" class="btn btn-info btn-block font-weight-bold">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Row -->
                </div>
            </div>
        </div>
    </div>       
</div>


<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<script type="text/javascript" src="assets/pages/todo/todo.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
