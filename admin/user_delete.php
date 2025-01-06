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
	include ('config.php');

	//$id=$_GET['id'];
	$id=$_GET['id'];
	$query="DELETE FROM admin WHERE id='$id' ";
	$run=mysqli_query($con,$query);
	if ($run > 0) {
		?>
			<script>
				alert('Data Delete Successfully ...!')
				window.open('list_user','_self')
			</script>
		<?php
	}
	else{
		?>
			<script>
				alert('Something Went Wrong ...!')
				window.open('list_user','_self')
			</script>
		<?php
	}
?>