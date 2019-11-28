<?php
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
                *{
                     margin: 0;
                     padding: 0;
                 }
                 .form-container{
                     position: absolute;
                     top: 10vh;
                     background-color: #fff;
                     padding: 30px;
                     border-radius: 10px;
                     box-shadow: 0px 0px 10px 0px #000;
                 }
                  
                 .bg{
                     background: url('images/b4.jpg') no-repeat;
                     width: 100%;
                     height: 100vh;
                     background-size: 100%;
    
                 }
              @media only screen and (max-width:678px){
                     .bg{
                         background-size: 300%;
                     }
                     .form-container{
                         top: 3vh;
                         padding: 10px;
                     }
              }
            </style>
</head>

<body>
<center>




            <section class="container-fluid bg">
                <section class="row justify-content-center">
                    <section class="col-12 col-sm-6 col-md-3">
                       <!-- <form action="login.php" method="POST">
                <label>Username</label><br><br>
                <input type="text" name="username" placeholder="Username"><br><br>
                <label>Password</label><br><br>
                <input type="password" name="password" placeholder="password"><br><br>
                <input type="submit" name="login" value="Login">
                <a href="register.html"><input type="button" name="register" value="Register"></a>
            </form>-->
                        <form form action="login.php" method="POST" class="form-container">
                            <h4 class="text-center font-weight-bold"></h4>
                              <div class="form-group">
                                  
                                <label for="exampleInputEmail1"></label>
                                <h3>NAME:<?php echo $row['NAME']; ?></h3>
                                </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1"></label>
                                <h3>DOB:<?php echo $row['DOB']; ?> </h3>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1"></label>
                                <h3>GENDER:<?php echo $row['GENDER']; ?> </h3>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1"></label>
                                <h3>ABOUT:</h3>
                                <h4><?php echo $row['DESCRIPTION']; ?> </h4>    

                              </div>
                              <a href="register.html" class="btn btn-primary" name="register">Adopt</a>
                              
                              <a href="register.html" class="btn btn-primary" name="register">Sponsor</a>
                            </form>
                    </section>
                </section>
            </section>
            
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
        </body>
    </html>

</center>
</body>
</html>
