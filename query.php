<!-- <?php// include('database.php'); ?> -->

<?php 
include_once('database.php'); //include database.php page for database connection
if (isset($_POST['canteen'])) {
		$user_Id = mysqli_real_escape_string($db,$_POST['user_Id']);
		$user_Name = mysqli_real_escape_string($db,$_POST['user_Name']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
	

		$sql = "INSERT INTO user(user_Id, user_Name, password) VALUES('$user_Id', '$user_Name', '$password')";
		mysqli_query($db,$sql);
		header('login.html');
		}

 ?>