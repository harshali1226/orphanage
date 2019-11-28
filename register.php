<?php
session_start();
	require 'config.php';
	if (isset($_POST['submit'])) {
		//echo '<script>alert("Sign up Clicked")</script>';
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];

		if ($password==$cpassword) {
			$query="select * from user WHERE username='$username'";
			$query_run=mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0){
				//There is already a user
				echo "<script>alert('Username already exists... choose another username')</script>";
				header('location:register.html');								
			}
			else
			{
				$query="insert into user values('$name','$username','$password','$email')";
				$query_run=mysqli_query($con,$query);

				if($query_run){
					//echo "<script>alert('User regisetered...')</script>";
					header('location:login.html');
				}
			
			}
		}
		else{
			echo "<script>alert('Passwords do not match!!!')</script>";	
		}
	}
?>