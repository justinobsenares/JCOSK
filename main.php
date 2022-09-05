<!DOCTYPE html>
<html lang="en">
<head>
<?php
  session_start();
   if(isset($_SESSION['username_REG'])){
   }else{
   header("Location: index2.php");
 }


?>
	<title>JCOSK Website</title>
     <link rel="icon" href="logos.png">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/sm.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body>
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>  
          </div>
     </section>
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <img id="logo" src="images/logo.png" width="50" height="50"></img>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Vission&Mission</a></li>
                         <li><a href="#about" class="smoothScroll">Services</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Testimonial</a></li>
                         <li><a href="Ministry.php" class="smoothScroll">Ministry</a></li>
                         <li><a href="ScheduleUser.php" class="smoothScroll">Schedule</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li id="login"><a href="logout.php" class="smoothScroll"><b>Logout</b></a></li>
                         <li id="signup"><a href="" class="smoothScroll"><b>Sign Up</b></a></li>
                    </ul>
               </div>

          </div>
     </section>
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>Welcome to Our Church</h3>
                              <h1><b>We love God. We belive in God.</b></h1>
                              <form action="" method="get" class="online-form">
                                   <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                   <button type="submit" class="form-control">Join Us</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Vission & Mission</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Our Vission</a></li>
                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Our Mission</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Vision</h2>
                                        <p class="vision">JESUS CHRIST OUR SOUL KEEPER CHURCH IS A CHANNEL OF BLESSING TO ANY INDIVIDUAL, FAMILY, CHURCHES, COMMUNITIES, AND NATION UNTIL JESUS COMES.<br>
                                   <br>
                              <br>
                         <br>
                    </p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Mission</h2>
                                        <p>JESUS CHRIST OUR SOUL KEEPER CHURCH DEMONSTRATE A HOLISTIC APPROACH IN THE FULFILLMENT OF GOD'S MANDATE IN THEIR LIVES.<br>
                                   <br>
                              <br>
                         <br></p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="./JCOSKC.png" class="img-responsive">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1 id="s">Our Services</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="images/home-bg.jpeg" class="img-responsive" alt="Wedding">
                              <div class="team-info team-thumb-up">
                                   <h2>Wedding</h2>   
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <div class="team-info team-thumb-down">
                                   <h2>Marriage</h2>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                              <img src="images/home-bg.jpeg" class="img-responsive" alt="Marriage">
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="images/home-bg.jpeg" class="img-responsive" alt="Baptism">
                              <div class="team-info team-thumb-up">
                                   <h2>Baptism</h2>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="images/home-bg.jpeg" class="img-responsive" alt="Wedding">
                              <div class="team-info team-thumb-up">
                                   <h2>Child Dedication</h2>   
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="images/home-bg.jpeg" class="img-responsive" alt="Baptism">
                              <div class="team-info team-thumb-up">
                                   <h2>Sermons</h2>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">
                              
                              <div class="section-title">
                                   <h1 id="tab05">Testimonial</h1>
                              </div>

                              <div class="owl-carousel owl-theme">
                                   <div class="item">
                                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h3>
                                        <div class="testimonial-item">
                                             <img src="images/home-bg.jpeg" class="img-responsive" alt="Michael">
                                             <h4>Justin</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Donec pretium tristique elit eget sodales. Pellentesque posuere.</h3>
                                        <div class="testimonial-item">
                                             <img src="images/home-bg.jpeg" class="img-responsive" alt="Sofia">
                                             <h4>Kim</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor.</h3>
                                        <div class="testimonial-item">
                                             <img src="images/home-bg.jpeg" class="img-responsive" alt="Monica">
                                             <h4>Ejer</h4>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h1>Contact Us</h1>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Full name" name="name" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Email address" name="email" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Your message" name="message" required></textarea>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>       
     <footer class="footer">
          <div class="container">
               <div class="row" Style="display: flex;flex-wrap: wrap;">
                    <div class="footer-col">
                         <h4>Discover</h4>
                         <ul>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">Help</a></li>
                              <li><a href="#">How it works</a></li>
                              <li><a href="#">Subscribe</a></li>
                              <li><a href="#">Contact Us</a></li>
                         </ul>
                    </div>
                    <div class="footer-col">
                         <h4>Navigation</h4>
                         <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Service</a></li>
                              <li><a href="#">Features</a></li>
                              
                         </ul>
                    </div>
                    <div class="footer-col">
                         <h4>follow us</h4>
                         <div class="social-links">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                    </div>
               </div>
          </div>
    </footer>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>