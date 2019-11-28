<?php
session_start();
$user=$_SESSION['username'];
//echo $user;
include 'config.php';
$x=$_GET['id'];

$sql = "SELECT * FROM children_details where id='$x'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo' ADOPTING FOR ' . $row['NAME'].' </h1>
    
    <form method="POST" action="adoptionsubmit.php?id='.$row["ID"].'">
    
                <div class="row">
                <div class="col-25">
                  <label for="email">E-mail</label>
                </div>
                <div class="col-75">
                  <input type="email" id="mail" name="email" placeholder="Your E-mail..">
                </div>
              </div>
              <div class="row">
                    <div class="col-25">
                      <label for="name">contact</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="contact" name="contact" placeholder="Your contact number..">
                    </div>
                  </div>
              
             
              
              <div class="row">
                <input type="submit" value="Submit" name="submit">
              </div>

</form>
    ';}?>
</body>
</html>