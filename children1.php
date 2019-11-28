<?php
session_start();
require 'config.php';
if(isset($_POST['submit'])){
    $childname=$_POST['childname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    $query="select * FROM adoption WHERE childname='$childname'";
	$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0){
			echo "<script>alert('already registered!')<script>";			
				//header("location:feedbackcross.php");
			}
			else{
				echo "<script>alert('Invalid credentials')</script>";
				//header("location:index.php");
			}
}
?>
}
?>