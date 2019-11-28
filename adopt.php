<?php
session_start();
require 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $childname=$_POST['childname'];
			$query_run=mysqli_query($con,$query);
			if(query_run)
			{
				$query="insert into adopt values('$name','$email','$contact','$childname')";
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