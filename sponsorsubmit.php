<?php
require 'config.php';

session_start();
$user=$_SESSION['username'];
$x=$_GET['id'];
echo $x;




if(isset($_POST['submit'])){
    $userr=$user;
    echo $userr;
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $childid=$x;
			$query_run=mysqli_query($con,$query);
			if(query_run)
			{
				$query="insert into sponsor values('$userr','$childid','$contact','$email')";
				$query_run=mysqli_query($con,$query);

				if($query_run){
					echo "<script>alert('User regisetered...')</script>";
					header('location:index.php');
				}
                else{
                    echo "<script>alert('Invalid Credentials')</script>";
                    header('location:adopt.php');
                }
			}
		
		
    }

    ?>