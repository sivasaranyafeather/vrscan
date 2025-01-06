<?php
session_start();

include 'config.php';



if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $hash = password_hash($password,  
          PASSWORD_DEFAULT);
          



    // Validation   
    if (empty($name) || empty($mail) || empty($password) ) {
        ?>
        <script>
            alert('username ,mail and password are required.');
        </script>
        <?php
    } else {
       
            $sql = "INSERT INTO admin (username, mail, password,role) VALUES ('$name', '$mail', '$hash','$role')";
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
                                        <h5 class="text-white">Add User</h5>
                                    </div>
                                </div>
                                <div class="card-body font-weight-bold">
                                    <form action="" method="post" enctype="multipart/form-data">
                                      
                                          <div class="form-group">
                                            <label for="name">User Name:</label>
                                            <input type="text" id="username" name="username" class="form-control" Required placeholder="Enter User Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Mail:</label>
                                            <input type="text" id="mail" name="mail" class="form-control" Required placeholder="Enter The Mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Password:</label>
                                            <input type="text" id="password" name="password" class="form-control" Required  placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Confrom Password:</label>
                                            <input type="text" id="c_password" name="c_password" class="form-control" Required placeholder="Confrom Password">
                                        </div>
                                         <div class="form-group">
                                            <label for="name">Role:</label>
                                           <Select name="role" id="role" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                           </Select>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="form-group">
                                            <button type="submit" name="submit" value="create" class="btn btn-info btn-block font-weight-bold">Add</button>
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
