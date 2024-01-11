<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawa Barat</title>
    <link rel="shortcut icon" href="CV_Temp1__UpSz.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
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
            <a href="index.php">Home</a>
            <a href="index.php">Tours</a>
            <a href="index.php">Contact</a>
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

    <section class="destination pt-10 hitam" id="destination">

    <div class="box-container">
    <?php

    $result = mysqli_query($conn, "SELECT * FROM blog_table");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>

        <div class="card card-body box reveal-1">
            <img src="Jawa Barat/<?php echo $row['gambar']?>" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> <?php echo $row['judul']?> </h3>
                <p class="text-white"> <?php echo $row['deskripsi']?> </p>
                    <div class="mt-auto">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        
                        <a href="detail.php?id_blog=<?php echo $row['id_blog']; ?>" class="btn">Detail</a>
                    </div>
            </div>
        </div>
<?php } ?>

        <!-- <div class="card card-body box reveal-2">
            <img src="observatoriumbosscha.jpg" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> Observatorium Bosscha </h3>
                <p class="text-white">Bosscha Observatory, Bandung, West Java, Indonesia, is a famous and historic astronomical observatory. Founded in 1923 by Karel Albert Rudolf Bosscha, it is one of the oldest observatories in Asia and is still active today. Bosscha Observatory is known for its large telescopes and modern observing equipment.</p>
                <div class="mt-auto">
                    <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">Detail</a>
                </div>
            </div>
        </div>

        <div class="card card-body box reveal-3">
            <img src="Jawa Barat/prasasticiaruteun.png" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> Prasasti Ciaruteun </h3>
                <p class="text-white">Ciaruteun Inscription is a stone inscription found in Ciaruteun Village, Gunungguruh Sub-district, Sukabumi District, West Java, Indonesia. The inscription is thought to date back to the 8th century AD and is important historical evidence of the development of culture and community life in the past. </p>
                <div class="mt-auto">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="btn">Detail</a>
                </div>
            </div>
        </div>

        <div class="card card-body box reveal-4">
            <img src="Jawa Barat/prasastikebonkopi.jpg" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> Prasasti Kebon Kopi I </h3>
                <p class="text-white">Kebon Kopi I inscription is an inscription from the Tarumanagara Kingdom found in Muara Village, Ciaruteun Ilir Village, Cibungbulang, Bogor, West Java. This inscription was found in the 19th century, when the forest was cut down for coffee plantations. </p>
                <div class="mt-auto">
                    <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">Detail</a>
                </div>
            </div>
        </div>

        <div class="card card-body box reveal-5">
            <img src="Jawa Barat/prasastijambu.jpg" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> Prasasti Jambu </h3>
                <p class="text-white">Jambu inscription is a relic of the Tarumanagara Kingdom found in Pasir Gintung Village, Parakan Muncang Village, Nanggung Sub-district, Bogor Regency, West Java. The inscription was discovered in 1854 by Jonathan Rigg, a landowner of a guava plantation near Buitenzorg (present-day Bogor).</p>
                <div class="mt-auto">
                    <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">Detail</a>
                </div>
            </div>
        </div>

        <div class="card card-body box reveal-6">
            <img src="Jawa Barat/prasastimuara.jpg" class="img-fluid" alt="">
            <div class="content content-view">
                <h3><i class="fas fa-map-marker-alt"></i> Prasasti Muara Cianten </h3>
                <p class="text-white">Muara Cianten Inscription, also known as Cianten Inscription or New Cianten Inscription, is a stone inscription found in Muara Cianten, Ciampea, Bogor, West Java, Indonesia. The inscription is thought to date back to the 5th century AD and is one of the important inscriptions that provide insight into the history and culture of the time.</p>
                <div class="mt-auto">
                    <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">Detail</a>
                </div>
            </div>
        </div> -->



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