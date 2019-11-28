<?php
session_start();
	require 'config.php';
		if(isset($_POST["submit"])){
			$id=$_POST["id"];
			$name=$_POST["name"];
			$dob=$_POST["dob"];
			$story = (empty($_POST['story']))? NULL : $_POST['story'];
#$story=$_POST["story"];
			$gender=$_POST["gender"];
			$sponsored = (empty($_POST['sponsored']))? 'NO' : $_POST['sponsored'];
			$adopted = (empty($_POST['adopted']))? 'NO' : $_POST['adopted'];

			$query_run=mysqli_query($con,$query);
			$query="select * from children_details WHERE name='$name'";
			if(mysqli_num_rows($query_run)>0){
				echo "<script>alert('child already exists... choose another child')</script>";			
				//header("location:feedbackcross.php");
			}
			else{
				$query="insert into children_details values('$id','$name','$dob','$story','$gender','$sponsored','$adopted')";
				$query_run=mysqli_query($con,$query);

				if($query_run){
					echo "<script>alert('Child details regisetered...')</script>";
					header('location:admin.php');
				}
				else{
					echo "<script>alert('Error!')</script>";
				}
			}

//$stmt = $con->prepare("INSERT INTO children_details (ID,NAME,DOB,DESCRIPTION,GENDER,SPONSORED,ADOPTED) VALUES (?,?,?,?,?,?,?)");
//$stmt->bind_param( $id, $name, $dob, $story, $gender, $sponsored, $adopted);
mkdir("child_pics/$id");
echo "done";


//$stmt->execute();
//$stmt->close();
$con->close();
}