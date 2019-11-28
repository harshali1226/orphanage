<?php
session_start();
require 'config.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=='admin' and $password==12345){
        header('location:admin.php');
    }

    $query="select * FROM user WHERE username='$username' AND password='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0){
				header('location:index.php');
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $username; 				
				//header("location:feedbackcross.php");
			}
			else{
				echo "<script>alert('Invalid credentials')</script>";
				//header("location:index.php");
			}
}
?>