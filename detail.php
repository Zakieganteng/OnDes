<?php
include "koneksi.php";
$id_blog_now = $_GET['id_blog'];
$result = mysqli_query($conn, "SELECT * FROM blog_table WHERE id_blog = '$id_blog_now'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Geologi Bandung</title>
    <link rel="shortcut icon" href="CV_Temp1__UpSz.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!--Header Section Starts-->

    <header class="py-0" id="navbar-detail">

        <div id="menu-bar" class="fas fa-bars"></div>
        
        <div class="logo-container">
            <a href="#" class="logo text-decoration-none">
                <img src="CV_Temp1__UpSz.png" alt="Culturavista Logo">
                Cultura<span>VISTA</span>
            </a>
        </div>

        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="index.html">Tours</a>
            <a href="index.html">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search d-none" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>
    </header>

    <!--Header Section Ends-->
    
    <!--Login Form Container-->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>
        
        <form action="">
            <h3>Login</h3>
            <input type="email" class="box" placeholder="Enter your Email" required>
            <input type="password" class="box" placeholder="Enter your Password" required>
            <input type="submit" value="Login Now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember" class="py-0">Remember Me</label>
            <p class="py-0">Forget password? <a href="#">Click Here</a></p>
            <p class="py-0">Don't have an account? <a href="#" id="signup-btn">Register Now</a></p>
        </form>
    </div>

    <!-- Signup Form Container -->

    <div class="signup-form-container">

        <i class="fas fa-times" id="form-close-signup"></i>
        
        <form action="">
            <h3>Sign Up</h3>
            <input type="text" class="box" placeholder="Enter your Username" required>
            <input type="email" class="box" placeholder="Enter your Email" required>
            <input type="password" class="box" placeholder="Enter your Password" required>
            <input type="tel" class="box" placeholder="Enter your Number Phone" required>
            <input type="submit" value="Register Now" class="btn">
            <p>Have an account? <a href="#" id="login-btn">Login</a></p>
        </form>
    </div>

    <section class="hitam pb-5 pt-10">

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 col-xl-4">

                    <div id="sliderCardCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <!-- Item 1 -->
                          <div class="carousel-item active">
                            <div class="row">
                              <div class="col-md-12 position-relative reveals-1">
                                <div class="card" id="JawaBarat">
                                  <img src="Jawa Barat/<?php echo $row['gambar']?>" class="card-img-top" height="407" alt="...">
                                  <div class="position-absolute bottom-0 p-5 detail-coro">
                                        <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Aula</span></i></h6>
                                        <h4 class="desc-corousel">Dinosaurs T-Rex</h4>
                                  </div>
                                </div>
                              </div>
                              <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
                            </div>
                          </div>
                          
                          <!-- Item 2 -->
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-md-12 position-relative">
                                <div class="card">
                                  <img src="Jawa Barat/<?php echo $row['gambar']?>" class="card-img-top" height="407" alt="...">
                                  <div class="position-absolute bottom-0 p-5 detail-coro">
                                    <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Historical Stone Room</span></i></h6>
                                        <h4 class="desc-corousel">Historical Stone</h4>
                                  </div>
                                </div>
                              </div>
                              <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
                            </div>
                          </div>

                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-md-12 position-relative">
                                <div class="card">
                                  <img src="Jawa Barat/<?php echo $row['gambar']?>" class="card-img-top" height="407" alt="...">
                                  <div class="position-absolute bottom-0 p-5 detail-coro">
                                    <h6 class="title-corousel marks-tour"><i class="fas fa-map-marker-alt icon-location"><span class="text-white mark-tour ms-2">Aula</span></i></h6>
                                        <h4 class="desc-corousel">Dinosaurs</h4>
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
                   
                </div>

            <div class="col-12 col-md-12 col-lg-8 col-xl-8">

                <div class="card card-body">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt bintang"></i> <?php echo $row['judul']?> </h3>
                        <p>Jam buka : <?php echo $row['jambuka']?> - <?php echo $row['jamtutup']?></p>
                        <p><?php echo $row['deskripsi']?></p>
                        <p>Harga Tiket : Rp<?php echo $row['tiket']?></p>
                        <div class="stars">
                            <i class="fas fa-star bintang"></i>
                            <i class="fas fa-star bintang"></i>
                            <i class="fas fa-star bintang"></i>
                            <i class="fas fa-star bintang"></i>
                            <i class="fas fa-star bintang"></i>
                    </div>
                    
                    </div>
                </div>

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
<?php }
?>