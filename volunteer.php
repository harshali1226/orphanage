
<?php

if(isset($_POST['contactSubmit'])){
  $fullName = $_POST["name"] ;
  $email = $_POST["email"];
	$formMessage = $_POST["msg"];
  echo $fullName;
}?>


<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>VOLUNTEER</title>
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

    <style>
     * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active1, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
    </style>
  </head>
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
          <li class="nav-item"><a href="children.php" class="nav-link" >Children</a></li>
          <li class="nav-item"><a href="donate.html" class="nav-link" >Donate</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/pic_10.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Looking to Volunteer?</h1>
            <h2 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="color:white;">See How You Can Make A Difference</h2>

          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 d-flex ftco-animate">
                        <div class="img img-about align-self-stretch" style="background-image: url(images/pic_8.jpg); width: 100%;"></div>
                    </div>
                    <div class="col-md-6 pl-md-5 ftco-animate">
                        <h2 class="mb-4">Volunteer Work</h2>
                        <p>Generally we like to find out from a volunteer what area of ‘work’ might interest them the most. 
                            That said, we are not always able to provide the exact job that a volunteer might want to do.
                             We want your time with us to be productive, beneficial and enjoyable for everyone. 
                            Volunteer work can be things like:</p>
                        <p><ul><li>Reading to children / Library management</li>
                               <li>Helping out on the farm/workshop</li>
                               <li> Painting & construction</li>
                               <li> Gardening & landscaping</li>
                                <li>Running activities/games</li>
                                <li>Cooking or cleaning</li></ul></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section">
                <div class="container">
                    <div class="row d-flex"><div class="col-md-6 pl-md-5 ftco-animate">
                            <h2 class="mb-4">Get Involved</h2>
                            <p>More and more these days people are looking for ways to volunteer in India, 
                                there is something about this country that has an appeal for those who are 
                                wanting to do good in the world.</p>
                            <p>There is a huge multitude of ways that visitors and volunteers can help out here on our orphanage. 
                                Occasionally things go so well that volunteers end up
                                 returning time and time again… some even end up joining us on staff.</p>
                                 <p>We prefer to individually work out somewhat of a timetable for each visitor that fits in with our 
                                     children’s home duties, 
                                     school and tuition timetables.</p>
                        </div>
                        <div class="col-md-6 d-flex ftco-animate">
                                <div class="img img-about align-self-stretch" style="background-image: url(images/pic_7.png); width: 100%;"></div>
                            </div>
                    </div>
                </div>
            </section>

        <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <form class="volunter-form" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message" name="msg"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" name="volun_submit" class="btn btn-white py-3 px-5">
                </div>
              </form>
                </div>    			
                </div>
            </div>
        </section>

<br><br>
        <div class="slideshow-container">
                        <div class="row justify-content-center mb-5 pb-3">
                                <div class="col-md-7 heading-section ftco-animate text-center">

                                    <h2 class="mb-4">hear from our volunteers </h2>
                                  </div>
                                </div>
                    <div class="mySlides" >
                  <img src="images\person_7.jpg" alt="HTML5 Icon" width="150" height="150" style="border-radius:50%; margin-top:-50px;">
<br>
<p class="author">Raj & Simran</p>

                      <q>We had the amazing opportunity of getting to know the children whilst playing games and 
                          helping them with their chores. We had set out (India our first stop) on a 7 month trip around 
                          the world (volunteering for the most part) and we expected to have our lives changed. 
                          We didn’t realize just how much our hearts would be impacted and how hard it would be to leave this special place.</q>
                    </div>
                    
                    <div class="mySlides">
                      <img src="images\person_7.jpg" alt="HTML5 Icon" width="150" height="150" style="border-radius:50%; margin-top:-50px;">
                      <br>
                      <p class="author">Rahul</p>

                      <q>Dancing with children in the first monsoon rain is the best dance of all. The most knowing eye
                           gaze comes from a baby girl during a formula feed. Togetherness begins on the first page of a
                            good storybook, no matter your age. A big pile of small jandals at my door means it’s time to 
                            create some crafts together. 
                          Having a cheekiness and zest for life makes rolling 100 chapatti everyday easier!</q>
                      
                    </div>
                    
                    <div class="mySlides">
                      <img src="images\person_7.jpg" alt="HTML5 Icon" width="150" height="150" style="border-radius:50%; margin-top:-50px;">
                      <br>
                      <p class="author">Anjali</p>

                      <q>The best way to describe my time on the mission is life changing. The impact it has had on my 
                          life is huge and will last forever. The children are the face of joy, sharing God’s love to all they meet. 
                          I found great support in Clifton and the team as they shared with me their wisdom and helped me grow in myself.</q>
                      
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                    </div>
                    
                    <div class="dot-container">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                

    <footer class="ftco-footer ftco-section img">
            <div class="overlay"></div>
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-5">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">About Us</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    <li><a href="index.php" class="py-2 d-block">Home</a></li>
                    <li><a href="about.html" class="py-2 d-block">About</a></li>
                    <li><a href="donate.html" class="py-2 d-block">Donate</a></li>
                    <li><a href="event.html" class="py-2 d-block">Event</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                      <ul>
                        <li><span class="icon icon-map-marker"></span><span class="text">203 St. Mountain View, Saki Naka, Mumbai, India</span></li>
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
      <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active1", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active1";
            }
            </script>
        
      </body>
    </html>