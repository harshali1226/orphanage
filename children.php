<?php
session_start();
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CHILDREN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      
      <meta charset="utf-8">
        <link rel="stylesheet" href="miniproject.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
    <style>
        
.containeer{
    margin-top: 8%;
    margin-right: 10%;
    margin-left: 10%;
}

.card:hover{
    -webkit-box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75);
    -moz-box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75);
    box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75);
    
}
    </style>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">khilta bachpan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="donate.html" class="nav-link" >Volunteer</a></li>
          <li class="nav-item"><a href="donate.html" class="nav-link" >Donate</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/image_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Sunshine</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
       <div class="container">
                <div class="row">
                    
                    <?php
                    $query="select * from children_details";
                    $query_run=mysqli_query($con,$query);
                    $number=mysqli_num_rows($query_run);
                    
                    
                    if ($query_run)
                      {
                      // Fetch one and one row
                      while ($row=mysqli_fetch_row($query_run))
                        {
                          $dir="child_pics/$row[0]";
                          $files = scandir ($dir);
                          $firstFile = "$dir/$files[2]";
//                          $file = readdir($dh);
                          //echo $firstFile ;
                          ?>
                          <div class="col-4-lg ml-5 mb-4">
                          <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src=<?php echo $firstFile ?> alt="Card image cap" height="190" width="286">
                          <div class="card-body">
                          <h5 class="card-title"> <?php echo $row[1]; ?></h5>
                          <p class="card-text"><?php echo $row[3]; ?></p>
                          <?php echo '<a href="childinfo.php?id='.$row[0].'"  class="btn btn-outline-primary">Know more</a> ';?>
                          <?php echo '<a href="sponsor.php?id='.$row[0].'"  class="btn btn-outline-primary">Sponsor</a> ';?>
                          <?php echo '<a href="adoption.php?id='.$row[0].'"  class="btn btn-outline-primary mt-2" >Adopt</a> ';?>
                      </div>
                  </div>
                      </div>
                       <?php
                        }}?>
            
                    

                  
                </div>
            </div>
            </section>
            
            <script>
                $(document).ready(function(){
                    $('.col-4-lg').hover(
                        function(){
                            $(this).animate({
                                marginTop:"-=1%",
                            },200);
                        },
                            function(){
                                $(this).animate({
                                marginTop:"0%"
                                
                            },200);
                    });
                });
            </script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
		

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-5">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">About Us</h2>
                <p>Khilta Bachpan is an NGO.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
           
            <div class="col-md-3">
               <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Site Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Home</a></li>
                  <li><a href="#" class="py-2 d-block">About</a></li>
                  <li><a href="#" class="py-2 d-block">Donate</a></li>
                  <li><a href="#" class="py-2 d-block">Event</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul
                    <li><span class="icon icon-map-marker"></span><span class="text"> 203,St. Mountain View, Saki Naka,Mumbai,India</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khiltabachpan@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>