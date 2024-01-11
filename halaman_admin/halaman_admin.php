<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_admin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>

  <body>
    <div class="d-flex">
      <header class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; height: 100vh">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img src="assets/logo.png" alt="New Logo" class="logo" />
          <span class="cultrulvista">
            <p class="cultrulvista1">culturavista</p>
          </span>
        </a>
        <hr />
        <div class="c_admin-profile">
          <img src="assets/logoadmin.png" alt="Admin Profile" class="c_admin-profile-image" />
          <div class="c_admin-text">
            <p class="c_admin-text1">Admin</p>
          </div>
        </div>

        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#Dashboard"></use></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#Destinasi"></use></svg>
              Destinasi
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Ulasan
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Favorit
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              Pengguna
            </a>
          </li>
        </ul>

        <!-- Navbar Section -->
        <nav class="navbar" style="background-color: #fff">
          <a class="navbar-brand text center" href="#">
            Logout
            <img src="assets/Logout.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" />
          </a>
        </nav>
      </header>
      <div class="d-flex flex-column align-items-center">
        <div>
          <link href="./c_ondes-banner-fx1.css" rel="stylesheet" />
          <img src="assets/selamatdatang.png" alt="rectangle" width="1444" height="304" class="c_ondes-banner-fx1-rectangle" />
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="padding text-center">
            <a href="#" class="text-black">
              <link href="./c_user-add-alt-fill.css" rel="stylesheet" />
              <img src="assets/pengguna.png" alt="component" width="190" height="190" class="c_user-add-alt-fill-component" />
              <hr />
              PENGGUNA
            </a>
          </div>
          <div class="padding text-center">
            <a href="#" class="text-black">
              <link href="./c_pin-alt-fill.css" rel="stylesheet" />
              <img src="assets/destinasi.png" alt="component" width="190" height="190" class="c_pin-alt-fill-component" />
              <hr />
              DESTINASI
            </a>
          </div>
          <div class="padding text-center">
            <a href="#" class="text-black">
              <link href="./c_star-fill.css" rel="stylesheet" />
              <img src="assets/ulasan.png" alt="component" width="192" height="192" class="c_star-fill-component" />
              <hr />
              ULASAN
            </a>
          </div>
          <div class="padding text-center">
            <a href="#" class="text-black">
              <link href="./c_star-fill.css" rel="stylesheet" />
              <img src="assets/favorit.png" alt="component" width="192" height="192" class="c_star-fill-component" />
              <hr />
              FAVORIT
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
