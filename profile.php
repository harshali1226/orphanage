<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['username']."'s profile"; ?></title>
</head>
<body>
    
    <html>
    <head>
        <title>Profile</title>
        
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <style>
            *{
                 margin: 0;
                 padding: 0;
             }
             .form-container{
                 position: absolute;
                 top: 30vh;
                 background-color: #fff;
                 padding: 30px;
                 border-radius: 10px;
                 box-shadow: 0px 0px 10px 0px #000;
                 width: auto;
             }
              
             .bg{
                 background: url('profilepic.jpg') no-repeat;
                 width: 100%;
                 height: 100vh;
                 background-size:100%;

             }
          @media only screen and (max-width:678px){
                 .bg{
                     background-size: 300%;
                 }
                 .form-container{
                     top: 3vh;
                     padding: 10px;
                 }}
             
        </style>
            
    </head>
    <script>
            function alertbox(){
                alert("user registered");
            }
    </script>    
        <body>
            <?php
    $user=$_SESSION['username']; 
    $sql = "SELECT * FROM user where username='$user'";
    $result = $con->query($sql);
    
        // output data of each row
    $row = $result->fetch_assoc();
    ?> 
 
         
        <section class="container-fluid bg">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                   
                   
                    <div class="form-container">
                       

                        <div class="form-group">
                            <h5> <?php  echo "USERNAME: ". $user ?></h5>
                          </div>  
                        <div class="form-group">
                            <h5> <?php echo "PASSWORD: ".$row['password'] ?></h5>
                                 </div>
                     
                         

                   <a href="logout.php" class="btn btn-outline-primary">Logout? </a>
                            
                    </div> 
                </section>
            </section>
        </section>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  


    
    
    

    

</body>
</html>