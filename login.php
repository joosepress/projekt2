<?php
	require_once("database.php");
	session_start();

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$myusername = mysqli_real_escape_string($connection,$_POST['username']);
			$mypassword = mysqli_real_escape_string($connection,$_POST['password']);

			$sql = "SELECT user_id FROM users WHERE username='$myusername' and password='$mypassword'";
			$result = mysqli_query($connection,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			#$active = $row['active'];

			$count = mysqli_num_rows($result);

			// If result matched $myusername and $mypassword, table row must be 1 row

			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
                header("location:mainpage.php?sortbytime");
			}
			else {
				echo "Your Login Name or Password is invalid";
			}
		}
?>
