<?php 
session_start();
?>
<?php  
if (isset($_SESSION['admin_root'])) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culturavista</title>
    <link rel="shortcut icon" href="CV_Temp1__UpSz.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
    
    <!--Header Section Starts-->

    <header id="navbar">

        <div id="menu-bar" class="fas fa-bars"></div>
        
        <div class="logo-container">
            <a href="#" class="logo text-decoration-none">
                <img src="CV_Temp1__UpSz.png" alt="Culturavista Logo">
                Cultura<span>VISTA</span>
            </a>
        </div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#tour">Tours</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search Here">
            <label for="search-bar" class="fas fa-search"></label> 
        </form>
    </header>

    <!--Header Section Ends-->

    <!--Login Form Container-->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>
        
        <form action="login.php" method="post">
            <h3>Login</h3>
            <input type="text" required name="email" class="box" placeholder="Enter your Email">
            <input type="password" required name="password" class="box" placeholder="Enter your Password">
            <input type="submit" value="Login Now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember Me</label>
            <p>Forget password? <a href="#">Click Here</a></p>
            <p>Don't have an account? <a href="#" id="signup-btn">Register Now</a></p>
        </form>

    </div>

    <!-- Signup Form Container -->

    <div class="signup-form-container">

        <i class="fas fa-times" id="form-close-signup"></i>
        
        <form action="register.php" method="post">
            <h3>Sign Up</h3>
            <input type="text" name="username" class="box" placeholder="Enter your Username">
            <input type="email" name="email" class="box" placeholder="Enter your Email">
            <input type="password" name="password" class="box" placeholder="Enter your Password">
            <input type="tel" name="noHP" class="box" placeholder="Enter your Number Phone">
            <input type="submit" value="Register Now" class="btn">
        </form>
    </div>
    
    <!--Home Sections Starts-->
    <section class="home" id="home">

        <div class="content">
            <h3 class="fw-bold">Adventure is worthwhile</h3>
            <p class="fw-bold">Discover New Places With Us, Adventure Awaits</p>
        </div>

        <div class="video-container">
            <video src="video.mp4" id="video-slider" loop autoplay muted></video>
          
        </div>
       
    </section>

    <!--Home Section Ends-->

    <!-- Holiday Section Starts -->

    <section class="holiday warna-holiday" id="holiday">
      <div class="container">
        <div class="row d-flex">
            <div class="holiday-img col-12 col-md-12 col-lg-6 col-xl-6 holiday-left-reveal">
                <img src="Bali/Bali2.jpg" alt="">
            </div>
    
            <div class="holiday-text col-12 col-md-12 col-lg-6 col-xl-6 my-auto pt-5 pt-md-5 pt-lg-0 pt-xl-0 ps-5 holiday-right-reveal">
                <h5>Bali</h5>
                <h2>Have you enjoyed your Holiday</h2>
                <p>Bali is a tropical island located in Indonesia, known as a major tourism destination in the world. The island offers outstanding natural beauty, including white sand beaches, green terraced rice fields, majestic mountains, and dense forests. Besides its natural beauty, Bali is also famous for its rich culture and traditions, which include dance, music, and religious ceremonies.</p>
                
            </div>
        </div>
      </div>
    </section>
    
    
    <!-- Holiday Section Ends -->

    <!-- Tour Section Starts -->

    <section class="tour" id="tour">
        <div class="center-text">
            <h1>Popular Tours</h1>
        </div>

        <div id="sliderCardCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- Item 1 -->
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4 position-relative reveals-1">
                    <div class="card" id="JawaBarat">
                      <img src="Jawa Barat/JawaBarat.jpg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                            <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Jawa Barat</span></i></h6>
                            <h4 class="desc-corousel">Balagedog, Kabupaten Majalengka</h4>
                            <a href="jawabarat.php"><button class="btn">View</button></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 position-relative reveals-2">
                    <div class="card" id="JawaTengah">
                      <img src="Jawa Tengah/JawaTengah.jpg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Jawa Tengah</span></i></h6>
                            <h4 class="desc-corousel">Candi Prambanan, Kabupaten Klaten</h4>
                            <button class="btn">View</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 position-relative reveals-3">
                    <div class="card" id="JawaTimur">
                      <img src="Jawa Timur/JawaTimur.jpeg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Jawa Timur</span></i></h6>
                            <h4 class="desc-corousel">Landmark, Surabaya</h4>
                            <a href="jawatimur.html"><button class="btn">View</button></a>
                      </div>
                    </div>
                  </div>
                  <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
                </div>
              </div>
              
              <!-- Item 2 -->
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 position-relative">
                    <div class="card" id="Jakarta">
                      <img src="Jakarta/Jakarta.jpg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Jakarta</span></i></h6>
                            <h4 class="desc-corousel">Monas, Gambir, Central Jakarta City</h4>
                            <button class="btn">View</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="card" id="Yogyakarta">
                      <img src="Yogyakarta/Yogyakarta.jpg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Yogyakarta</span></i></h6>
                            <h4 class="desc-corousel">Embung Tambakboyo, Ngringin, Condongcatur, Kabupaten Sleman</h4>
                            <button class="btn">View</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="card" id="Bali">
                      <img src="Bali/Bali.jpg" class="card-img-top img-corousel" height="500" alt="...">
                      <div class="position-absolute bottom-0 p-5">
                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Bali</span></i></h6>
                            <h4 class="desc-corousel">Ulun Danu Beratan Temple</h4>
                            <button class="btn">View</button>
                      </div>
                    </div>
                  </div>
                  <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
                </div>
              </div>
              
              <!-- Tambahkan lebih banyak item card jika diperlukan -->
              
            </div>
            <button class="carousel-control-prev h-50 my-auto" type="button" data-bs-target="#sliderCardCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next h-50 my-auto" type="button" data-bs-target="#sliderCardCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <!-- Tour Section Ends -->
    
    <!-- Culture Section Starts -->

    <section class="culture warna-holiday">
        <div class="container">
        <div class="row d-flex">
            <div class="culture-text col-12 col-md-12 col-lg-6 col-xl-6 my-auto pe-5 ps-5 ps-md-5 ps-lg-0 ps-xl-0 holiday-left-reveal">
                <h5>INDONESIAN CULTURE</h5>
                <h2>Our culture here is very friendly to people</h2>
                <p>Indonesian culture, when viewed as a natural cultural heritage, can be likened to a rich and diverse ecological reserve. This cultural cagar budaya alam (natural cultural sanctuary) encompasses a vast expanse of traditions, beliefs, languages, and artistic expressions, much like the varied ecosystems within a natural reserve.</p>
            </div>
    
            <div class="culture-img col-12 col-md-12 col-lg-6 col-xl-6 holiday-right-reveal">
              <img src="indonesianculture.jpg" alt="">
            </div>
        </div>
      </div>
    </section>

    <!-- Culture Section Ends -->

    <section class="contact" id="contact">
        <div class="content mx-auto">
          <h2>Contact Us</h2>
          <p>Welcome to Culturavista!
            Do you have any questions, suggestions, or want to share your travel experiences? We'd love to hear from you! Feel free to reach out to our team via the contact form below.</p>
        </div>
        <div class="containers container">
          <div class="row">
              <div class="contactInfo col-12 col-md-12 col-lg-6 col-xl-6 holiday-left-reveal">
                <div class="box">
                  <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                  <div class="text">
                    <h3>Address</h3>
                    <p>Yogyakarta</p>
                  </div>
                </div>
                <div class="box">
                  <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="text">
                    <h3>Email</h3>
                    <p>OnDes@gmail.com</p>
                  </div>
                </div>
                <div class="box">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="text">
                    <h3>Phone</h3>
                    <p>+62812345678910</p>
                  </div>
                </div>
              </div>
              <div class="contactForm col-12 col-md-12 col-lg-6 col-xl-6 holiday-right-reveal">
                <form action="">
                  <h2>Send Message</h2>
                  <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
                  </div>
                  <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                  </div>
                  <div class="inputBox">
                    <textarea required="required"></textarea>
                    <span>Type your message...</span>
                  </div>
                  <div class="inputBox">
                    <input type="submit" name="" value="Send">
                  </div>
                </form>
              </div>
          </div>
        
        </div>
          
    </section>

    <!-- Footer Section Start -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Company</h3>
                <a href="#">About Us</a>
                <a href="#">Our Services</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Affliate Program</a>
            </div>

            <div class="box">
                <h3>Get Help</h3>
               <a href="#">FAQ</a>
               <a href="#">Shipping</a>
               <a href="#">Returns</a>
            </div>

            <div class="box">
                <h3>Office</h3>
                <p>Yogyakarta</p>
                <p>OnDes@gmail.com</p>
                <p>+62812345678910</p>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <div class="wrapper row">

                  <div class="px-5 col-2 col-md-2 cold-lg-2 col-xl-2 icon facebook">
                    <div class="tooltip">Facebook</div>
                    <span><i class="fab fa-facebook-f"></i></span>
                  </div>
        
                  <div class="px-5 col-2 col-md-2 cold-lg-2 col-xl-2 icon twitter">
                    <div class="tooltip">Twitter</div>
                    <span><i class="fab fa-twitter"></i></span>
                  </div>

                  <div class="px-5 col-2 col-md-2 cold-lg-2 col-xl-2 icon whatsapp">
                    <div class="tooltip">WhatsApp</div>
                    <span><i class="fab fa-whatsapp"></i></span>
                  </div>
        
                  <div class="px-5 col-2 col-md-2 cold-lg-2 col-xl-2 icon instagram">
                    <div class="tooltip">Instagram</div>
                    <span><i class="fab fa-instagram"></i></span>
                  </div>
               
                  <div class="px-5 col-2 col-md-2 cold-lg-2 col-xl-2 icon youtube">
                    <div class="tooltip">YouTube</div>
                    <span><i class="fab fa-youtube"></i></span>
                  </div>
        
                </div>
            </div>

        </div>
        
        <h1 class="credit"> Created by <span> OnDes Team </span> | All Rights Reserved! </h1>

    </section>
    <!-- Footer Section End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
<?php} else {
    ?>
    <?php
}
?>
